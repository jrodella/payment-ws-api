<?php
/**
 * Copyright (C) 2017-2018 Lyra Network.
 * This file is part of Lyra payment WS API.
 *
 * See COPYING.txt for license details.
 *
 * @author    Lyra Network <contact@lyra-network.com>
 * @copyright 2017-2018 Lyra Network
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License (GPL v3)
 */
namespace Lyranetwork\Model;

class UpdateTokenResult
{
    /**
     * @var \Lyranetwork\Model\CommonResponse $commonResponse
     */
    private $commonResponse = null;

    /**
     * @var \Lyranetwork\Model\PaymentResponse $paymentResponse
     */
    private $paymentResponse = null;

    /**
     * @var \Lyranetwork\Model\OrderResponse $orderResponse
     */
    private $orderResponse = null;

    /**
     * @var \Lyranetwork\Model\CardResponse $cardResponse
     */
    private $cardResponse = null;

    /**
     * @var \Lyranetwork\Model\AuthorizationResponse $authorizationResponse
     */
    private $authorizationResponse = null;

    /**
     * @var \Lyranetwork\Model\CaptureResponse $captureResponse
     */
    private $captureResponse = null;

    /**
     * @var \Lyranetwork\Model\CustomerResponse $customerResponse
     */
    private $customerResponse = null;

    /**
     * @var \Lyranetwork\Model\MarkResponse $markResponse
     */
    private $markResponse = null;

    /**
     * @var \Lyranetwork\Model\ThreeDSResponse $threeDSResponse
     */
    private $threeDSResponse = null;

    /**
     * @var \Lyranetwork\Model\ExtraResponse $extraResponse
     */
    private $extraResponse = null;

    /**
     * @var \Lyranetwork\Model\SubscriptionResponse $subscriptionResponse
     */
    private $subscriptionResponse = null;

    /**
     * @var \Lyranetwork\Model\FraudManagementResponse $fraudManagementResponse
     */
    private $fraudManagementResponse = null;

    /**
     * @return \Lyranetwork\Model\CommonResponse
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param \Lyranetwork\Model\CommonResponse $commonResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setCommonResponse($commonResponse)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\PaymentResponse
     */
    public function getPaymentResponse()
    {
        return $this->paymentResponse;
    }

    /**
     * @param \Lyranetwork\Model\PaymentResponse $paymentResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setPaymentResponse($paymentResponse)
    {
        $this->paymentResponse = $paymentResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\OrderResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }

    /**
     * @param \Lyranetwork\Model\OrderResponse $orderResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setOrderResponse($orderResponse)
    {
        $this->orderResponse = $orderResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\CardResponse
     */
    public function getCardResponse()
    {
        return $this->cardResponse;
    }

    /**
     * @param \Lyranetwork\Model\CardResponse $cardResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setCardResponse($cardResponse)
    {
        $this->cardResponse = $cardResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\AuthorizationResponse
     */
    public function getAuthorizationResponse()
    {
        return $this->authorizationResponse;
    }

    /**
     * @param \Lyranetwork\Model\AuthorizationResponse $authorizationResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setAuthorizationResponse($authorizationResponse)
    {
        $this->authorizationResponse = $authorizationResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\CaptureResponse
     */
    public function getCaptureResponse()
    {
        return $this->captureResponse;
    }

    /**
     * @param \Lyranetwork\Model\CaptureResponse $captureResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setCaptureResponse($captureResponse)
    {
        $this->captureResponse = $captureResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\CustomerResponse
     */
    public function getCustomerResponse()
    {
        return $this->customerResponse;
    }

    /**
     * @param \Lyranetwork\Model\CustomerResponse $customerResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setCustomerResponse($customerResponse)
    {
        $this->customerResponse = $customerResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\MarkResponse
     */
    public function getMarkResponse()
    {
        return $this->markResponse;
    }

    /**
     * @param \Lyranetwork\Model\MarkResponse $markResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setMarkResponse($markResponse)
    {
        $this->markResponse = $markResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\ThreeDSResponse
     */
    public function getThreeDSResponse()
    {
        return $this->threeDSResponse;
    }

    /**
     * @param \Lyranetwork\Model\ThreeDSResponse $threeDSResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setThreeDSResponse($threeDSResponse)
    {
        $this->threeDSResponse = $threeDSResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\ExtraResponse
     */
    public function getExtraResponse()
    {
        return $this->extraResponse;
    }

    /**
     * @param \Lyranetwork\Model\ExtraResponse $extraResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setExtraResponse($extraResponse)
    {
        $this->extraResponse = $extraResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\SubscriptionResponse
     */
    public function getSubscriptionResponse()
    {
        return $this->subscriptionResponse;
    }

    /**
     * @param \Lyranetwork\Model\SubscriptionResponse $subscriptionResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setSubscriptionResponse($subscriptionResponse)
    {
        $this->subscriptionResponse = $subscriptionResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\FraudManagementResponse
     */
    public function getFraudManagementResponse()
    {
        return $this->fraudManagementResponse;
    }

    /**
     * @param \Lyranetwork\Model\FraudManagementResponse $fraudManagementResponse
     * @return \Lyranetwork\Model\UpdateTokenResult
     */
    public function setFraudManagementResponse($fraudManagementResponse)
    {
        $this->fraudManagementResponse = $fraudManagementResponse;
        return $this;
    }
}
