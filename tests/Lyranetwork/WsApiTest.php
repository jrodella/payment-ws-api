<?php
/**
 * Copyright (C) 2017-2018 Lyra Network.
 * This file is part of Lyra payment form API.
 * See COPYING.txt for license details.
 *
 * @author Lyra Network <contact@lyra-network.com>
 * @copyright 2017-2018 Lyra Network
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License (GPL v3)
 */
namespace Lyranetwork\Model;




class WsApiTest extends \PHPUnit\Framework\TestCase
{

	private static $wsapi;

	private static $apiurl;
	private static $apishopid;
	private static $apimode;
	private static $apictxmode;
	private static $apikeytest;
	private static $apikeyprod;

	private static $transsubmissiondate;
	private static $transid;
	private static $transuuid;
	private static $transamount;
	private static $transcurrencynumber;
	private static $transorderid;

	private static $cardnumber;
	private static $cardsecuritycode;
	private static $cardscheme;
	private static $cardexpirymonth;
	private static $cardexpiryyear;

	public static function setUpBeforeClass()
	{
		self::$apiurl = '';
		self::$apishopid = '';
		self::$apictxmode ='TEST';
		self::$apikeytest = '';
		self::$apikeyprod = '';


		self::$transamount = '10000';
		self::$transcurrencynumber = '978';

		self::$cardnumber = '4970100000000048';
		self::$cardsecuritycode = '123';
		self::$cardscheme = 'CB';
		$timestamp = time();
		self::$cardexpirymonth = date("m", $timestamp);
		self::$cardexpiryyear = (int)date("Y", $timestamp) + 1;

		$context = stream_context_create(
				array(
						'ssl' => array(
								'verify_peer' => false,
								'verify_peer_name' => false,
								'allow_self_signed' => true
						)
				)
				);

		$options = array(
				'stream_context' => $context
		);
		self::$wsapi = new \Lyranetwork\WsApi($options,self::$apiurl);
		self::$wsapi->init(self::$apishopid, self::$apictxmode, self::$apikeytest, self::$apikeyprod);

		$wsapiclass = new WsApiTest();
		self::$transuuid = $wsapiclass->initData()->getCreatePaymentResult()->getPaymentResponse()->getTransactionUuid();
	}

	public function testGetPaymentUuid()
	{
		$legacyTransactionKeyRequest = new LegacyTransactionKeyRequest();
		$legacyTransactionKeyRequest->setTransactionId(self::$transid);
		$legacyTransactionKeyRequest->setSequenceNumber('1');

		$transsubmissiondate = self::$transsubmissiondate;
		$legacyTransactionKeyRequest->setCreationDate(new \DateTime("@$transsubmissiondate"));

		$getPaymentUuid = new GetPaymentUuid();

		$getPaymentUuid->setLegacyTransactionKeyRequest($legacyTransactionKeyRequest);
		$requestId = self::$wsapi->setHeaders();

		$getPaymentUuidResponse = self::$wsapi->getPaymentUuid($getPaymentUuid);

		$uuid = $getPaymentUuidResponse->getLegacyTransactionKeyResult()->getPaymentResponse()->getTransactionUuid();

		$this->assertEquals(self::$transuuid, $uuid);
	}

	public function testGetPaymentDetails()
	{
		$queryRequest = new QueryRequest();
		$queryRequest->setUuid(self::$transuuid);

		$getPaymentDetails = new GetPaymentDetails($queryRequest);
		$getPaymentDetails->setQueryRequest($queryRequest);

		$requestId = self::$wsapi->setHeaders();

		$getPaymentDetailsResponse = self::$wsapi->getPaymentDetails($getPaymentDetails);

		$this->assertEquals(self::$transsubmissiondate, $getPaymentDetailsResponse->getGetPaymentDetailsResult()->getCommonResponse()->getSubmissionDate()->getTimestamp());
		$this->assertEquals(self::$transid, $getPaymentDetailsResponse->getGetPaymentDetailsResult()->getPaymentResponse()->getTransactionId());
		$this->assertEquals(self::$transuuid, $getPaymentDetailsResponse->getGetPaymentDetailsResult()->getPaymentResponse()->getTransactionUuid());
		$this->assertEquals(self::$transamount, $getPaymentDetailsResponse->getGetPaymentDetailsResult()->getPaymentResponse()->getAmount());
		$this->assertEquals(self::$transcurrencynumber, $getPaymentDetailsResponse->getGetPaymentDetailsResult()->getPaymentResponse()->getCurrency());
		$this->assertEquals(self::$transorderid, $getPaymentDetailsResponse->getGetPaymentDetailsResult()->getOrderResponse()->getOrderId());
		$this->assertEquals($this->generateMaskedCardNumber(self::$cardnumber), $getPaymentDetailsResponse->getGetPaymentDetailsResult()->getCardResponse()->getNumber());
		$this->assertEquals(self::$cardexpirymonth, $getPaymentDetailsResponse->getGetPaymentDetailsResult()->getCardResponse()->getExpiryMonth());
		$this->assertEquals(self::$cardexpiryyear, $getPaymentDetailsResponse->getGetPaymentDetailsResult()->getCardResponse()->getExpiryYear());
	}

	public function testCancelPayment()
	{
		self::$transuuid = $this->initData()->getCreatePaymentResult()->getPaymentResponse()->getTransactionUuid();
		$queryRequest = new QueryRequest();
		$queryRequest->setUuid(self::$transuuid);

		$cancelPayment = new CancelPayment();
		$cancelPayment->setCommonRequest(new CommonRequest());
		$cancelPayment->setQueryRequest($queryRequest);

		$requestId = self::$wsapi->setHeaders();

		$cancelPaymentResponse = self::$wsapi->cancelPayment($cancelPayment);

		$this->assertEquals('CANCELLED', $cancelPaymentResponse->getCancelPaymentResult()->getCommonResponse()->getTransactionStatusLabel());
	}

	public function testValidatePayment()
	{
		self::$transuuid = $this->initData()->getCreatePaymentResult()->getPaymentResponse()->getTransactionUuid();
		$queryRequest = new QueryRequest();
		$queryRequest->setUuid(self::$transuuid);

		$validatePayment = new ValidatePayment();
		$validatePayment->setCommonRequest(new CommonRequest());
		$validatePayment->setQueryRequest($queryRequest);

		$requestId = self::$wsapi->setHeaders();

		$validatePaymentResponse = self::$wsapi->validatePayment($validatePayment);

		$this->assertContains($validatePaymentResponse->getValidatePaymentResult()->getCommonResponse()->getTransactionStatusLabel(), array('WAITING_AUTHORISATION', 'AUTHORISED'));
	}

	public function testCreatePayment()
	{
		$createPaymentResponse = $this->initData();
		self::$transuuid = $createPaymentResponse->getCreatePaymentResult()->getPaymentResponse()->getTransactionUuid();

		$this->assertEquals(self::$transsubmissiondate, $createPaymentResponse->getCreatePaymentResult()->getCommonResponse()->getSubmissionDate()->getTimestamp());
		$this->assertEquals(self::$transid, $createPaymentResponse->getCreatePaymentResult()->getPaymentResponse()->getTransactionId());
		$this->assertEquals(self::$transuuid, $createPaymentResponse->getCreatePaymentResult()->getPaymentResponse()->getTransactionUuid());
		$this->assertEquals(self::$transamount, $createPaymentResponse->getCreatePaymentResult()->getPaymentResponse()->getAmount());
		$this->assertEquals(self::$transcurrencynumber, $createPaymentResponse->getCreatePaymentResult()->getPaymentResponse()->getCurrency());
		$this->assertEquals(self::$transorderid, $createPaymentResponse->getCreatePaymentResult()->getOrderResponse()->getOrderId());
		$this->assertEquals($this->generateMaskedCardNumber(self::$cardnumber), $createPaymentResponse->getCreatePaymentResult()->getCardResponse()->getNumber());
		$this->assertEquals(self::$cardexpirymonth, $createPaymentResponse->getCreatePaymentResult()->getCardResponse()->getExpiryMonth());
		$this->assertEquals(self::$cardexpiryyear, $createPaymentResponse->getCreatePaymentResult()->getCardResponse()->getExpiryYear());

	}

	private function initData()
	{
		// Init common variables
		self::$transsubmissiondate = time();
		self::$transid = $this->generateTransId(self::$transsubmissiondate);
		self::$transorderid = self::$transid  % 1000;

		// Common request generation
		$commonRequest = new CommonRequest();
		$commonRequest->setPaymentSource('MOTO');
		$transsubmissiondate = self::$transsubmissiondate ;
		$commonRequest->setSubmissionDate(new \DateTime("@$transsubmissiondate"));

		// Payment request generation
		$paymentRequest = new PaymentRequest();
		$paymentRequest->setTransactionId(self::$transid);
		$paymentRequest->setAmount(self::$transamount);
		$paymentRequest->setCurrency(self::$transcurrencynumber);

		$captureDelay = 0;
		$paymentRequest->setExpectedCaptureDate(new \DateTime('@' . strtotime("+$captureDelay days", $transsubmissiondate)));
		$paymentRequest->setManualValidation('');

		// Order request generation
		$orderRequest = new OrderRequest();
		$orderRequest->setOrderId(self::$transorderid);

		// Card request generation
		$cardRequest = new CardRequest();
		$cardRequest->setNumber(self::$cardnumber);
		$cardRequest->setScheme(self::$cardscheme);
		$cardRequest->setCardSecurityCode(self::$cardsecuritycode);
		$cardRequest->setExpiryMonth(self::$cardexpirymonth);
		$cardRequest->setExpiryYear(self::$cardexpiryyear);

		// Create payment object generation
		$createPayment = new CreatePayment();
		$createPayment->setCommonRequest($commonRequest);
		$createPayment->setPaymentRequest($paymentRequest);
		$createPayment->setOrderRequest($orderRequest);
		$createPayment->setCardRequest($cardRequest);

		// Do createPayment WS call
		$requestId = self::$wsapi->setHeaders();
		$createPaymentResponse = self::$wsapi->createPayment($createPayment);

		return $createPaymentResponse;
	}

	/**
	 * Generate a trans_id.
	 * To be independent from shared/persistent counters, we use the number of 1/10 seconds since midnight
	 * which has the appropriatee format (000000-899999) and has great chances to be unique.
	 *
	 * @param int $timestamp
	 * @return string the generated trans_id
	 */
	private static function generateTransId($timestamp = null)
	{
		if (! $timestamp) {
			$timestamp = time();
		}
		$parts = explode(' ', microtime());
		$id = ($timestamp + $parts[0] - strtotime('today 00:00')) * 10;
		$id = sprintf('%06d', $id);
		return $id;
	}

	private static function generateMaskedCardNumber($cardnumber)
	{
		return preg_replace('/([0-9]{6})[0-9]{6}([0-9]+)/', '\1XXXXXX\2', $cardnumber);
	}
}
