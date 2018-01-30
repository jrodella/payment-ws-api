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

class DuplicatePayment
{
    /**
     * @var \Lyranetwork\Model\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\Model\PaymentRequest $paymentRequest
     */
    private $paymentRequest = null;

    /**
     * @var \Lyranetwork\Model\OrderRequest $orderRequest
     */
    private $orderRequest = null;

    /**
     * @var \Lyranetwork\Model\QueryRequest $queryRequest
     */
    private $queryRequest = null;

    /**
     * @return \Lyranetwork\Model\CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param \Lyranetwork\Model\CommonRequest $commonRequest
     * @return \Lyranetwork\Model\DuplicatePayment
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\PaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * @param \Lyranetwork\Model\PaymentRequest $paymentRequest
     * @return \Lyranetwork\Model\DuplicatePayment
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\OrderRequest
     */
    public function getOrderRequest()
    {
        return $this->orderRequest;
    }

    /**
     * @param \Lyranetwork\Model\OrderRequest $orderRequest
     * @return \Lyranetwork\Model\DuplicatePayment
     */
    public function setOrderRequest($orderRequest)
    {
        $this->orderRequest = $orderRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\QueryRequest
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param \Lyranetwork\Model\QueryRequest $queryRequest
     * @return \Lyranetwork\Model\DuplicatePayment
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }
}
