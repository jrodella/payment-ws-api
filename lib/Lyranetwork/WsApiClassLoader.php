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

class WsApiClassLoader
{
    private function __construct()
    {
        // do not instantiate this class
    }

    /**
     * Registers self::loadClass method as an autoloader.
     *
     * @param bool $prepend Whether to prepend the autoloader or not
     */
    public static function register($prepend = false)
    {
        spl_autoload_register(__NAMESPACE__ . '\WsApiClassLoader::loadClass', true, $prepend);
    }

    /**
     * Unregisters self::loadClass method as an autoloader.
     */
    public static function unregister()
    {
        spl_autoload_unregister(__NAMESPACE__ . '\WsApiClassLoader::loadClass');
    }

    public static function loadClass($class)
    {
        if (strpos($class, __NAMESPACE__) === false) {
            return;
        }

        $pos = strrpos($class, '\\');
        if ($pos === false) {
            $pos = -1;
        }

        $file = __DIR__ . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR . substr($class, $pos + 1) . '.php';
        if (is_file($file) && ($file !== __FILE__)) {
            include_once($file);
        }
    }

    public static function getClassMap() {
        return array (
            'cancelCapturedPayment' => 'Lyranetwork\\Model\\CancelCapturedPayment',
            'commonRequest' => 'Lyranetwork\\Model\\CommonRequest',
            'queryRequest' => 'Lyranetwork\\Model\\QueryRequest',
            'cancelCapturedPaymentResponse' => 'Lyranetwork\\Model\\CancelCapturedPaymentResponse',
            'cancelCapturedPaymentResult' => 'Lyranetwork\\Model\\CancelCapturedPaymentResult',
            'commonResponse' => 'Lyranetwork\\Model\\CommonResponse',
            'wsResponse' => 'Lyranetwork\\Model\\WsResponse',
            'capturePayment' => 'Lyranetwork\\Model\\CapturePayment',
            'settlementRequest' => 'Lyranetwork\\Model\\SettlementRequest',
            'capturePaymentResponse' => 'Lyranetwork\\Model\\CapturePaymentResponse',
            'capturePaymentResult' => 'Lyranetwork\\Model\\CapturePaymentResult',
            'createTokenByIban' => 'Lyranetwork\\Model\\CreateTokenByIban',
            'ibanRequest' => 'Lyranetwork\\Model\\IbanRequest',
            'customerRequest' => 'Lyranetwork\\Model\\CustomerRequest',
            'billingDetailsRequest' => 'Lyranetwork\\Model\\BillingDetailsRequest',
            'shippingDetailsRequest' => 'Lyranetwork\\Model\\ShippingDetailsRequest',
            'extraDetailsRequest' => 'Lyranetwork\\Model\\ExtraDetailsRequest',
            'createTokenByIbanResponse' => 'Lyranetwork\\Model\\CreateTokenByIbanResponse',
            'createTokenByIbanResult' => 'Lyranetwork\\Model\\CreateTokenByIbanResult',
            'paymentResponse' => 'Lyranetwork\\Model\\PaymentResponse',
            'orderResponse' => 'Lyranetwork\\Model\\OrderResponse',
            'extInfo' => 'Lyranetwork\\Model\\ExtInfo',
            'cardResponse' => 'Lyranetwork\\Model\\CardResponse',
            'authorizationResponse' => 'Lyranetwork\\Model\\AuthorizationResponse',
            'captureResponse' => 'Lyranetwork\\Model\\CaptureResponse',
            'customerResponse' => 'Lyranetwork\\Model\\CustomerResponse',
            'billingDetailsResponse' => 'Lyranetwork\\Model\\BillingDetailsResponse',
            'shippingDetailsResponse' => 'Lyranetwork\\Model\\ShippingDetailsResponse',
            'extraDetailsResponse' => 'Lyranetwork\\Model\\ExtraDetailsResponse',
            'markResponse' => 'Lyranetwork\\Model\\MarkResponse',
            'threeDSResponse' => 'Lyranetwork\\Model\\ThreeDSResponse',
            'authenticationRequestData' => 'Lyranetwork\\Model\\AuthenticationRequestData',
            'authenticationResultData' => 'Lyranetwork\\Model\\AuthenticationResultData',
            'extraResponse' => 'Lyranetwork\\Model\\ExtraResponse',
            'subscriptionResponse' => 'Lyranetwork\\Model\\SubscriptionResponse',
            'fraudManagementResponse' => 'Lyranetwork\\Model\\FraudManagementResponse',
            'riskControl' => 'Lyranetwork\\Model\\RiskControl',
            'riskAnalysis' => 'Lyranetwork\\Model\\RiskAnalysis',
            'riskAssessments' => 'Lyranetwork\\Model\\RiskAssessments',
            'shoppingCartResponse' => 'Lyranetwork\\Model\\ShoppingCartResponse',
            'cartItemInfo' => 'Lyranetwork\\Model\\CartItemInfo',
            'reactivateToken' => 'Lyranetwork\\Model\\ReactivateToken',
            'reactivateTokenResponse' => 'Lyranetwork\\Model\\ReactivateTokenResponse',
            'reactivateTokenResult' => 'Lyranetwork\\Model\\ReactivateTokenResult',
            'duplicatePayment' => 'Lyranetwork\\Model\\DuplicatePayment',
            'paymentRequest' => 'Lyranetwork\\Model\\PaymentRequest',
            'orderRequest' => 'Lyranetwork\\Model\\OrderRequest',
            'duplicatePaymentResponse' => 'Lyranetwork\\Model\\DuplicatePaymentResponse',
            'duplicatePaymentResult' => 'Lyranetwork\\Model\\DuplicatePaymentResult',
            'cancelPayment' => 'Lyranetwork\\Model\\CancelPayment',
            'cancelPaymentResponse' => 'Lyranetwork\\Model\\CancelPaymentResponse',
            'cancelPaymentResult' => 'Lyranetwork\\Model\\CancelPaymentResult',
            'checkThreeDSAuthentication' => 'Lyranetwork\\Model\\CheckThreeDSAuthentication',
            'threeDSRequest' => 'Lyranetwork\\Model\\ThreeDSRequest',
            'mpiExtensionRequest' => 'Lyranetwork\\Model\\MpiExtensionRequest',
            'checkThreeDSAuthenticationResponse' => 'Lyranetwork\\Model\\CheckThreeDSAuthenticationResponse',
            'checkThreeDSAuthenticationResult' => 'Lyranetwork\\Model\\CheckThreeDSAuthenticationResult',
            'updatePayment' => 'Lyranetwork\\Model\\UpdatePayment',
            'updatePaymentResponse' => 'Lyranetwork\\Model\\UpdatePaymentResponse',
            'updatePaymentResult' => 'Lyranetwork\\Model\\UpdatePaymentResult',
            'updatePaymentDetails' => 'Lyranetwork\\Model\\UpdatePaymentDetails',
            'shoppingCartRequest' => 'Lyranetwork\\Model\\ShoppingCartRequest',
            'updatePaymentDetailsResponse' => 'Lyranetwork\\Model\\UpdatePaymentDetailsResponse',
            'updatePaymentDetailsResult' => 'Lyranetwork\\Model\\UpdatePaymentDetailsResult',
            'getPaymentDetails' => 'Lyranetwork\\Model\\GetPaymentDetails',
            'extendedResponseRequest' => 'Lyranetwork\\Model\\ExtendedResponseRequest',
            'getPaymentDetailsResponse' => 'Lyranetwork\\Model\\GetPaymentDetailsResponse',
            'getPaymentDetailsResult' => 'Lyranetwork\\Model\\GetPaymentDetailsResult',
            'tokenResponse' => 'Lyranetwork\\Model\\TokenResponse',
            'updateToken' => 'Lyranetwork\\Model\\UpdateToken',
            'cardRequest' => 'Lyranetwork\\Model\\CardRequest',
            'updateTokenResponse' => 'Lyranetwork\\Model\\UpdateTokenResponse',
            'updateTokenResult' => 'Lyranetwork\\Model\\UpdateTokenResult',
            'cancelSubscription' => 'Lyranetwork\\Model\\CancelSubscription',
            'cancelSubscriptionResponse' => 'Lyranetwork\\Model\\CancelSubscriptionResponse',
            'cancelSubscriptionResult' => 'Lyranetwork\\Model\\CancelSubscriptionResult',
            'refundPayment' => 'Lyranetwork\\Model\\RefundPayment',
            'refundPaymentResponse' => 'Lyranetwork\\Model\\RefundPaymentResponse',
            'refundPaymentResult' => 'Lyranetwork\\Model\\RefundPaymentResult',
            'createTokenFromTransaction' => 'Lyranetwork\\Model\\CreateTokenFromTransaction',
            'createTokenFromTransactionResponse' => 'Lyranetwork\\Model\\CreateTokenFromTransactionResponse',
            'createTokenFromTransactionResult' => 'Lyranetwork\\Model\\CreateTokenFromTransactionResult',
            'verifyThreeDSEnrollment' => 'Lyranetwork\\Model\\VerifyThreeDSEnrollment',
            'techRequest' => 'Lyranetwork\\Model\\TechRequest',
            'verifyThreeDSEnrollmentResponse' => 'Lyranetwork\\Model\\VerifyThreeDSEnrollmentResponse',
            'verifyThreeDSEnrollmentResult' => 'Lyranetwork\\Model\\VerifyThreeDSEnrollmentResult',
            'validatePayment' => 'Lyranetwork\\Model\\ValidatePayment',
            'validatePaymentResponse' => 'Lyranetwork\\Model\\ValidatePaymentResponse',
            'validatePaymentResult' => 'Lyranetwork\\Model\\ValidatePaymentResult',
            'getPaymentUuid' => 'Lyranetwork\\Model\\GetPaymentUuid',
            'legacyTransactionKeyRequest' => 'Lyranetwork\\Model\\LegacyTransactionKeyRequest',
            'getPaymentUuidResponse' => 'Lyranetwork\\Model\\GetPaymentUuidResponse',
            'legacyTransactionKeyResult' => 'Lyranetwork\\Model\\LegacyTransactionKeyResult',
            'createPayment' => 'Lyranetwork\\Model\\CreatePayment',
            'createPaymentResponse' => 'Lyranetwork\\Model\\CreatePaymentResponse',
            'createPaymentResult' => 'Lyranetwork\\Model\\CreatePaymentResult',
            'createSubscription' => 'Lyranetwork\\Model\\CreateSubscription',
            'subscriptionRequest' => 'Lyranetwork\\Model\\SubscriptionRequest',
            'createSubscriptionResponse' => 'Lyranetwork\\Model\\CreateSubscriptionResponse',
            'createSubscriptionResult' => 'Lyranetwork\\Model\\CreateSubscriptionResult',
            'getSubscriptionDetails' => 'Lyranetwork\\Model\\GetSubscriptionDetails',
            'getSubscriptionDetailsResponse' => 'Lyranetwork\\Model\\GetSubscriptionDetailsResponse',
            'getSubscriptionDetailsResult' => 'Lyranetwork\\Model\\GetSubscriptionDetailsResult',
            'updateSubscription' => 'Lyranetwork\\Model\\UpdateSubscription',
            'updateSubscriptionResponse' => 'Lyranetwork\\Model\\UpdateSubscriptionResponse',
            'updateSubscriptionResult' => 'Lyranetwork\\Model\\UpdateSubscriptionResult',
            'cancelToken' => 'Lyranetwork\\Model\\CancelToken',
            'cancelTokenResponse' => 'Lyranetwork\\Model\\CancelTokenResponse',
            'cancelTokenResult' => 'Lyranetwork\\Model\\CancelTokenResult',
            'createToken' => 'Lyranetwork\\Model\\CreateToken',
            'createTokenResponse' => 'Lyranetwork\\Model\\CreateTokenResponse',
            'createTokenResult' => 'Lyranetwork\\Model\\CreateTokenResult',
            'findPayments' => 'Lyranetwork\\Model\\FindPayments',
            'findPaymentsResponse' => 'Lyranetwork\\Model\\FindPaymentsResponse',
            'findPaymentsResult' => 'Lyranetwork\\Model\\FindPaymentsResult',
            'transactionItem' => 'Lyranetwork\\Model\\TransactionItem',
            'getTokenDetails' => 'Lyranetwork\\Model\\GetTokenDetails',
            'getTokenDetailsResponse' => 'Lyranetwork\\Model\\GetTokenDetailsResponse',
            'getTokenDetailsResult' => 'Lyranetwork\\Model\\GetTokenDetailsResult',
        );
    }
}
