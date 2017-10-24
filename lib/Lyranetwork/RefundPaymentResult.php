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

class RefundPaymentResult
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
     * @var \Lyranetwork\FraudManagementResponse $fraudManagementResponse
     */
    private $fraudManagementResponse = null;

    /**
     * @return \Lyranetwork\CommonResponse
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param \Lyranetwork\CommonResponse $commonResponse
     * @return \Lyranetwork\RefundPaymentResult
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
     * @return \Lyranetwork\RefundPaymentResult
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
     * @return \Lyranetwork\RefundPaymentResult
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
     * @return \Lyranetwork\RefundPaymentResult
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
     * @return \Lyranetwork\RefundPaymentResult
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
     * @return \Lyranetwork\RefundPaymentResult
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
     * @return \Lyranetwork\RefundPaymentResult
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
     * @return \Lyranetwork\RefundPaymentResult
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
     * @return \Lyranetwork\RefundPaymentResult
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
     * @return \Lyranetwork\RefundPaymentResult
     */
    public function setExtraResponse($extraResponse)
    {
        $this->extraResponse = $extraResponse;
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
     * @return \Lyranetwork\RefundPaymentResult
     */
    public function setFraudManagementResponse($fraudManagementResponse)
    {
        $this->fraudManagementResponse = $fraudManagementResponse;
        return $this;
    }
}
