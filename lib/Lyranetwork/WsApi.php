<?php
/**
 * Copyright (C) 2017 Lyra Network.
 * This file is part of Lyra payment WS API.
 *
 * See COPYING.txt for license details.
 *
 * @author    Lyra Network <contact@lyra-network.com>
 * @copyright 2017 Lyra Network
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License (GPL v3)
 */
namespace Lyranetwork;

class WsApi extends \SoapClient
{
    const HEADER_NAMESPACE = 'http://v5.ws.vads.lyra.com/Header/';
    const DATE_FORMAT = 'Y-m-d\TH:i:s\Z';
    const TIMEOUT = 30; // in seconds

    private $shopId;
    private $mode;
    private $certificate;

    /**
     * Class constructor.
     *
     * @param array $options An array of config values
     * @param string $wsdl The WSDL file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://secure.payzen.eu/vads-ws/v5?wsdl')
    {
        foreach (WsApiClassLoader::getClassMap() as $key => $value) {
            if (! isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $ssl = array();
        if (isset($options['sni.enabled']) && $options['sni.enabled']) {
            $url = parse_url($wsdl);
            $ssl = array('SNI_enabled' => true, 'SNI_server_name' => $url['host']);

            unset($options['sni.enabled']);
        }

        $options = array_merge(array(
            'trace' => true,
            'exceptions' => true,
            'soapaction' => '',
            'cache_wsdl' => WSDL_CACHE_NONE,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'connection_timeout' => self::TIMEOUT,
            'encoding' => 'UTF-8',
            'soap_version' => SOAP_1_2,
            'stream_context' => stream_context_create(
                array('ssl' => $ssl, 'http' => array('user_agent' => 'PHPSoapClient'))
            )
        ), $options);

        parent::__construct($wsdl, $options);
    }

    /**
     * Init API with merchant credentials.
     *
     * @param string $shopId
     * @param string $ctxMode
     * @param string $keyTest
     * @param string $keyProd
     * @return \Lyranetwork\WsApi
     */
    public function init($shopId, $ctxMode, $keyTest, $keyProd)
    {
        $this->mode = $ctxMode;
        $this->shopId = $shopId;
        $this->certificate = ($ctxMode === 'PRODUCTION') ? $keyProd : $keyTest;

        return $this;
    }

    /**
     * Compute WS signature based on two data in entry.
     *
     * @param string $data1
     * @param string $data2
     * @return string
     */
    public function getAuthToken($data1, $data2)
    {
        $authToken = base64_encode(hash_hmac('sha256', $data1 . $data2, $this->certificate, true));
        return $authToken;
    }

    /**
     * Set WS request headers. Return generated request ID.
     *
     * @return string
     */
    public function setHeaders()
    {
        $this->__setSoapHeaders(null);

        $requestId = self::genUuid();
        $timestamp = gmdate(self::DATE_FORMAT);
        $authToken = $this->getAuthToken($requestId, $timestamp);

        // create headers for shopId, requestId, timestamp, mode and authToken
        $headers = array();

        $headers[] = new \SOAPHeader(self::HEADER_NAMESPACE, 'shopId', $this->shopId);
        $headers[] = new \SOAPHeader(self::HEADER_NAMESPACE, 'requestId', $requestId);
        $headers[] = new \SOAPHeader(self::HEADER_NAMESPACE, 'timestamp', $timestamp);
        $headers[] = new \SOAPHeader(self::HEADER_NAMESPACE, 'mode', $this->mode);
        $headers[] = new \SOAPHeader(self::HEADER_NAMESPACE, 'authToken', $authToken);

        // set headers to soap client
        $this->__setSoapHeaders($headers);

        return $requestId;
    }

    /**
     * Get last successful request session ID.
     *
     * @throws \SoapFault if session ID cannot be extracted from headers
     * @return string
     */
    public function getJsessionId()
    {
        // retrieve header of the last response
        $header = $this->__getLastResponseHeaders();

        $matches = array();
        if (! preg_match('#JSESSIONID=([A-Za-z0-9\._]+)#', $header, $matches)) {
            // no session created by platform
            throw new \SoapFault('SID', 'No session ID returned by platform.' . $header);
        }

        return $matches[1];
    }

    /**
     * Force session ID to enchain WS calls.
     *
     * @param string $sid
     * @return \Lyranetwork\WsApi
     */
    public function setJsessionId($sid)
    {
        $this->__setCookie('JSESSIONID', $sid);

        return $this;
    }

    /**
     * Check response authenticity.
     *
     * @throws \UnexpectedValueException if data inconsistency is encountered.
     */
    public function checkAuthenticity()
    {
        // retrieve SOAP header to check response authenticity
        $dom = new \DOMDocument();
        $dom->loadXML($this->__getLastResponse(), LIBXML_NOWARNING);

        $path = new \DOMXPath($dom);
        $xmlHeaders = $path->query('//*[local-name()="Header"]/*');

        $headers = array();
        foreach ($xmlHeaders as $xmlHeader) {
            $headers[$xmlHeader->nodeName] = $xmlHeader->nodeValue;
        }

        if ($this->shopId !== $headers['shopId']) {
            throw new \UnexpectedValueException("Inconsistent returned shopId {$headers['shopId']}.", -1);
        }

        if ($this->mode !== $headers['mode']) {
            throw new \UnexpectedValueException("Inconsistent returned mode {$headers['mode']}.", -1);
        }

        $authToken = $this->getAuthToken($headers['timestamp'], $headers['requestId']);
        if ($authToken !== $headers['authToken']) {
            throw new \UnexpectedValueException('Authentication failed.', -1);
        }
    }

    /**
     * Check response results (result code and expected transcation statuses if any).
     *
     * @param \Lyranetwork\Model\CommonResponse $commonResponse
     * @param array $expectedStatuses
     * @throws \UnexpectedValueException
     */
    public function checkResult(\Lyranetwork\Model\CommonResponse $commonResponse, array $expectedStatuses = array())
    {
        if ($commonResponse->getResponseCode() !== 0) {
            throw new \UnexpectedValueException(
                $commonResponse->getResponseCodeDetail(),
                $commonResponse->getResponseCode()
            );
        }

        if (! empty($expectedStatuses) && ! in_array($commonResponse->getTransactionStatusLabel(), $expectedStatuses)) {
            throw new \UnexpectedValueException(
                "Unexpected transaction status returned ({$commonResponse->getTransactionStatusLabel()})."
            );
        }
    }

    /**
     * Generate v4 UUID to use it as WS request ID.
     *
     * @return string
     */
    public static function genUuid()
    {
        if ($data = self::genRandomBytes()) {
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 100
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6 & 7 to 10

            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        } else {
            return sprintf(
                '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0x0fff) | 0x4000,
                mt_rand(0, 0x3fff) | 0x8000,
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff)
            );
        }
    }

    private static function genRandomBytes()
    {
        if (function_exists('random_bytes')) {
            // PHP 7 code
            try {
                return random_bytes(16);
            } catch(\Exception $e) {
                // try something else below
            }
        }

        if (function_exists('openssl_random_pseudo_bytes')) {
            // PHP 5.3 code but needs OpenSSL library
            return openssl_random_pseudo_bytes(16);
        }

        return null;
    }

    /**
     * @param \Lyranetwork\Model\CancelCapturedPayment $parameters
     * @return \Lyranetwork\Model\CancelCapturedPaymentResponse
     */
    public function cancelCapturedPayment(\Lyranetwork\Model\CancelCapturedPayment $parameters)
    {
        return $this->__soapCall('cancelCapturedPayment', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CapturePayment $parameters
     * @return \Lyranetwork\Model\CapturePaymentResponse
     */
    public function capturePayment(\Lyranetwork\Model\CapturePayment $parameters)
    {
        return $this->__soapCall('capturePayment', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CreateTokenByIban $parameters
     * @return \Lyranetwork\Model\CreateTokenByIbanResponse
     */
    public function createTokenByIban(\Lyranetwork\Model\CreateTokenByIban $parameters)
    {
        return $this->__soapCall('createTokenByIban', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\ReactivateToken $parameters
     * @return \Lyranetwork\Model\ReactivateTokenResponse
     */
    public function reactivateToken(\Lyranetwork\Model\ReactivateToken $parameters)
    {
        return $this->__soapCall('reactivateToken', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\DuplicatePayment $parameters
     * @return \Lyranetwork\Model\DuplicatePaymentResponse
     */
    public function duplicatePayment(\Lyranetwork\Model\DuplicatePayment $parameters)
    {
        return $this->__soapCall('duplicatePayment', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CancelPayment $parameters
     * @return \Lyranetwork\Model\CancelPaymentResponse
     */
    public function cancelPayment(\Lyranetwork\Model\CancelPayment $parameters)
    {
        return $this->__soapCall('cancelPayment', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CheckThreeDSAuthentication $parameters
     * @return \Lyranetwork\Model\CheckThreeDSAuthenticationResponse
     */
    public function checkThreeDSAuthentication(\Lyranetwork\Model\CheckThreeDSAuthentication $parameters)
    {
        return $this->__soapCall('checkThreeDSAuthentication', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\UpdatePayment $parameters
     * @return \Lyranetwork\Model\UpdatePaymentResponse
     */
    public function updatePayment(\Lyranetwork\Model\UpdatePayment $parameters)
    {
        return $this->__soapCall('updatePayment', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\UpdatePaymentDetails $parameters
     * @return \Lyranetwork\Model\UpdatePaymentDetailsResponse
     */
    public function updatePaymentDetails(\Lyranetwork\Model\UpdatePaymentDetails $parameters)
    {
        return $this->__soapCall('updatePaymentDetails', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\GetPaymentDetails $parameters
     * @return \Lyranetwork\Model\GetPaymentDetailsResponse
     */
    public function getPaymentDetails(\Lyranetwork\Model\GetPaymentDetails $parameters)
    {
        return $this->__soapCall('getPaymentDetails', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\UpdateToken $parameters
     * @return \Lyranetwork\Model\UpdateTokenResponse
     */
    public function updateToken(\Lyranetwork\Model\UpdateToken $parameters)
    {
        return $this->__soapCall('updateToken', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CancelSubscription $parameters
     * @return \Lyranetwork\Model\CancelSubscriptionResponse
     */
    public function cancelSubscription(\Lyranetwork\Model\CancelSubscription $parameters)
    {
        return $this->__soapCall('cancelSubscription', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\RefundPayment $parameters
     * @return \Lyranetwork\Model\RefundPaymentResponse
     */
    public function refundPayment(\Lyranetwork\Model\RefundPayment $parameters)
    {
        return $this->__soapCall('refundPayment', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CreateTokenFromTransaction $parameters
     * @return \Lyranetwork\Model\CreateTokenFromTransactionResponse
     */
    public function createTokenFromTransaction(\Lyranetwork\Model\CreateTokenFromTransaction $parameters)
    {
        return $this->__soapCall('createTokenFromTransaction', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\VerifyThreeDSEnrollment $parameters
     * @return \Lyranetwork\Model\VerifyThreeDSEnrollmentResponse
     */
    public function verifyThreeDSEnrollment(\Lyranetwork\Model\VerifyThreeDSEnrollment $parameters)
    {
        return $this->__soapCall('verifyThreeDSEnrollment', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\ValidatePayment $parameters
     * @return \Lyranetwork\Model\ValidatePaymentResponse
     */
    public function validatePayment(\Lyranetwork\Model\ValidatePayment $parameters)
    {
        return $this->__soapCall('validatePayment', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\GetPaymentUuid $parameters
     * @return \Lyranetwork\Model\GetPaymentUuidResponse
     */
    public function getPaymentUuid(\Lyranetwork\Model\GetPaymentUuid $parameters)
    {
        return $this->__soapCall('getPaymentUuid', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CreatePayment $parameters
     * @return \Lyranetwork\Model\CreatePaymentResponse
     */
    public function createPayment(\Lyranetwork\Model\CreatePayment $parameters)
    {
        return $this->__soapCall('createPayment', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CreateSubscription $parameters
     * @return \Lyranetwork\Model\CreateSubscriptionResponse
     */
    public function createSubscription(\Lyranetwork\Model\CreateSubscription $parameters)
    {
        return $this->__soapCall('createSubscription', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\GetSubscriptionDetails $parameters
     * @return \Lyranetwork\Model\GetSubscriptionDetailsResponse
     */
    public function getSubscriptionDetails(\Lyranetwork\Model\GetSubscriptionDetails $parameters)
    {
        return $this->__soapCall('getSubscriptionDetails', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\UpdateSubscription $parameters
     * @return \Lyranetwork\Model\UpdateSubscriptionResponse
     */
    public function updateSubscription(\Lyranetwork\Model\UpdateSubscription $parameters)
    {
        return $this->__soapCall('updateSubscription', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CancelToken $parameters
     * @return \Lyranetwork\Model\CancelTokenResponse
     */
    public function cancelToken(\Lyranetwork\Model\CancelToken $parameters)
    {
        return $this->__soapCall('cancelToken', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\CreateToken $parameters
     * @return \Lyranetwork\Model\CreateTokenResponse
     */
    public function createToken(\Lyranetwork\Model\CreateToken $parameters)
    {
        return $this->__soapCall('createToken', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\FindPayments $parameters
     * @return \Lyranetwork\Model\FindPaymentsResponse
     */
    public function findPayments(\Lyranetwork\Model\FindPayments $parameters)
    {
        return $this->__soapCall('findPayments', array($parameters));
    }

    /**
     * @param \Lyranetwork\Model\GetTokenDetails $parameters
     * @return \Lyranetwork\Model\GetTokenDetailsResponse
     */
    public function getTokenDetails(\Lyranetwork\Model\GetTokenDetails $parameters)
    {
        return $this->__soapCall('getTokenDetails', array($parameters));
    }
}
