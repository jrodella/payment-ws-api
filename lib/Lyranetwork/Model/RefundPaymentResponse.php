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

class RefundPaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\RefundPaymentResult $refundPaymentResult
     */
    private $refundPaymentResult = null;

    /**
     * @return \Lyranetwork\Model\RefundPaymentResult
     */
    public function getRefundPaymentResult()
    {
        return $this->refundPaymentResult;
    }

    /**
     * @param \Lyranetwork\Model\RefundPaymentResult $refundPaymentResult
     * @return \Lyranetwork\Model\RefundPaymentResponse
     */
    public function setRefundPaymentResult($refundPaymentResult)
    {
        $this->refundPaymentResult = $refundPaymentResult;
        return $this;
    }
}
