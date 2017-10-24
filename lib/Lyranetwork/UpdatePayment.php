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

class UpdatePayment
{
    /**
     * @var \Lyranetwork\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\QueryRequest $queryRequest
     */
    private $queryRequest = null;

    /**
     * @var \Lyranetwork\PaymentRequest $paymentRequest
     */
    private $paymentRequest = null;

    /**
     * @return \Lyranetwork\CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param \Lyranetwork\CommonRequest $commonRequest
     * @return \Lyranetwork\UpdatePayment
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\QueryRequest
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param \Lyranetwork\QueryRequest $queryRequest
     * @return \Lyranetwork\UpdatePayment
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
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
     * @return \Lyranetwork\UpdatePayment
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;
        return $this;
    }
}
