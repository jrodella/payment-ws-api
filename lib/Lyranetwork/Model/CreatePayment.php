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
namespace Lyranetwork\Model;

class CreatePayment
{
    /**
     * @var \Lyranetwork\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\ThreeDSRequest $threeDSRequest
     */
    private $threeDSRequest = null;

    /**
     * @var \Lyranetwork\PaymentRequest $paymentRequest
     */
    private $paymentRequest = null;

    /**
     * @var \Lyranetwork\OrderRequest $orderRequest
     */
    private $orderRequest = null;

    /**
     * @var \Lyranetwork\CardRequest $cardRequest
     */
    private $cardRequest = null;

    /**
     * @var \Lyranetwork\CustomerRequest $customerRequest
     */
    private $customerRequest = null;

    /**
     * @var \Lyranetwork\TechRequest $techRequest
     */
    private $techRequest = null;

    /**
     * @var \Lyranetwork\ShoppingCartRequest $shoppingCartRequest
     */
    private $shoppingCartRequest = null;

    /**
     * @return \Lyranetwork\CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param \Lyranetwork\CommonRequest $commonRequest
     * @return \Lyranetwork\CreatePayment
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\ThreeDSRequest
     */
    public function getThreeDSRequest()
    {
        return $this->threeDSRequest;
    }

    /**
     * @param \Lyranetwork\ThreeDSRequest $threeDSRequest
     * @return \Lyranetwork\CreatePayment
     */
    public function setThreeDSRequest($threeDSRequest)
    {
        $this->threeDSRequest = $threeDSRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\PaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * @param \Lyranetwork\PaymentRequest $paymentRequest
     * @return \Lyranetwork\CreatePayment
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\OrderRequest
     */
    public function getOrderRequest()
    {
        return $this->orderRequest;
    }

    /**
     * @param \Lyranetwork\OrderRequest $orderRequest
     * @return \Lyranetwork\CreatePayment
     */
    public function setOrderRequest($orderRequest)
    {
        $this->orderRequest = $orderRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\CardRequest
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }

    /**
     * @param \Lyranetwork\CardRequest $cardRequest
     * @return \Lyranetwork\CreatePayment
     */
    public function setCardRequest($cardRequest)
    {
        $this->cardRequest = $cardRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\CustomerRequest
     */
    public function getCustomerRequest()
    {
        return $this->customerRequest;
    }

    /**
     * @param \Lyranetwork\CustomerRequest $customerRequest
     * @return \Lyranetwork\CreatePayment
     */
    public function setCustomerRequest($customerRequest)
    {
        $this->customerRequest = $customerRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\TechRequest
     */
    public function getTechRequest()
    {
        return $this->techRequest;
    }

    /**
     * @param \Lyranetwork\TechRequest $techRequest
     * @return \Lyranetwork\CreatePayment
     */
    public function setTechRequest($techRequest)
    {
        $this->techRequest = $techRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\ShoppingCartRequest
     */
    public function getShoppingCartRequest()
    {
        return $this->shoppingCartRequest;
    }

    /**
     * @param \Lyranetwork\ShoppingCartRequest $shoppingCartRequest
     * @return \Lyranetwork\CreatePayment
     */
    public function setShoppingCartRequest($shoppingCartRequest)
    {
        $this->shoppingCartRequest = $shoppingCartRequest;
        return $this;
    }
}
