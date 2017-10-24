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

class CreatePaymentResult
{
    /**
     * @var \Lyranetwork\CommonResponse $commonResponse
     */
    private $commonResponse = null;

    /**
     * @var \Lyranetwork\PaymentResponse $paymentResponse
     */
    private $paymentResponse = null;

    /**
     * @var \Lyranetwork\OrderResponse $orderResponse
     */
    private $orderResponse = null;

    /**
     * @var \Lyranetwork\CardResponse $cardResponse
     */
    private $cardResponse = null;

    /**
     * @var \Lyranetwork\AuthorizationResponse $authorizationResponse
     */
    private $authorizationResponse = null;

    /**
     * @var \Lyranetwork\CaptureResponse $captureResponse
     */
    private $captureResponse = null;

    /**
     * @var \Lyranetwork\CustomerResponse $customerResponse
     */
    private $customerResponse = null;

    /**
     * @var \Lyranetwork\MarkResponse $markResponse
     */
    private $markResponse = null;

    /**
     * @var \Lyranetwork\ThreeDSResponse $threeDSResponse
     */
    private $threeDSResponse = null;

    /**
     * @var \Lyranetwork\ExtraResponse $extraResponse
     */
    private $extraResponse = null;

    /**
     * @var \Lyranetwork\SubscriptionResponse $subscriptionResponse
     */
    private $subscriptionResponse = null;

    /**
     * @var \Lyranetwork\FraudManagementResponse $fraudManagementResponse
     */
    private $fraudManagementResponse = null;

    /**
     * @var \Lyranetwork\ShoppingCartResponse $shoppingCartResponse
     */
    private $shoppingCartResponse = null;

    /**
     * @return \Lyranetwork\CommonResponse
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param \Lyranetwork\CommonResponse $commonResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setCommonResponse($commonResponse)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\PaymentResponse
     */
    public function getPaymentResponse()
    {
        return $this->paymentResponse;
    }

    /**
     * @param \Lyranetwork\PaymentResponse $paymentResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setPaymentResponse($paymentResponse)
    {
        $this->paymentResponse = $paymentResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\OrderResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }

    /**
     * @param \Lyranetwork\OrderResponse $orderResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setOrderResponse($orderResponse)
    {
        $this->orderResponse = $orderResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\CardResponse
     */
    public function getCardResponse()
    {
        return $this->cardResponse;
    }

    /**
     * @param \Lyranetwork\CardResponse $cardResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setCardResponse($cardResponse)
    {
        $this->cardResponse = $cardResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\AuthorizationResponse
     */
    public function getAuthorizationResponse()
    {
        return $this->authorizationResponse;
    }

    /**
     * @param \Lyranetwork\AuthorizationResponse $authorizationResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setAuthorizationResponse($authorizationResponse)
    {
        $this->authorizationResponse = $authorizationResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\CaptureResponse
     */
    public function getCaptureResponse()
    {
        return $this->captureResponse;
    }

    /**
     * @param \Lyranetwork\CaptureResponse $captureResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setCaptureResponse($captureResponse)
    {
        $this->captureResponse = $captureResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\CustomerResponse
     */
    public function getCustomerResponse()
    {
        return $this->customerResponse;
    }

    /**
     * @param \Lyranetwork\CustomerResponse $customerResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setCustomerResponse($customerResponse)
    {
        $this->customerResponse = $customerResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\MarkResponse
     */
    public function getMarkResponse()
    {
        return $this->markResponse;
    }

    /**
     * @param \Lyranetwork\MarkResponse $markResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setMarkResponse($markResponse)
    {
        $this->markResponse = $markResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\ThreeDSResponse
     */
    public function getThreeDSResponse()
    {
        return $this->threeDSResponse;
    }

    /**
     * @param \Lyranetwork\ThreeDSResponse $threeDSResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setThreeDSResponse($threeDSResponse)
    {
        $this->threeDSResponse = $threeDSResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\ExtraResponse
     */
    public function getExtraResponse()
    {
        return $this->extraResponse;
    }

    /**
     * @param \Lyranetwork\ExtraResponse $extraResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setExtraResponse($extraResponse)
    {
        $this->extraResponse = $extraResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\SubscriptionResponse
     */
    public function getSubscriptionResponse()
    {
        return $this->subscriptionResponse;
    }

    /**
     * @param \Lyranetwork\SubscriptionResponse $subscriptionResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setSubscriptionResponse($subscriptionResponse)
    {
        $this->subscriptionResponse = $subscriptionResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\FraudManagementResponse
     */
    public function getFraudManagementResponse()
    {
        return $this->fraudManagementResponse;
    }

    /**
     * @param \Lyranetwork\FraudManagementResponse $fraudManagementResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setFraudManagementResponse($fraudManagementResponse)
    {
        $this->fraudManagementResponse = $fraudManagementResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\ShoppingCartResponse
     */
    public function getShoppingCartResponse()
    {
        return $this->shoppingCartResponse;
    }

    /**
     * @param \Lyranetwork\ShoppingCartResponse $shoppingCartResponse
     * @return \Lyranetwork\CreatePaymentResult
     */
    public function setShoppingCartResponse($shoppingCartResponse)
    {
        $this->shoppingCartResponse = $shoppingCartResponse;
        return $this;
    }
}
