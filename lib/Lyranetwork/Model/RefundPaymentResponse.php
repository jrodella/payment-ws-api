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

class RefundPaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\RefundPaymentResult $refundPaymentResult
     */
    private $refundPaymentResult = null;

    /**
     * @return \Lyranetwork\RefundPaymentResult
     */
    public function getRefundPaymentResult()
    {
        return $this->refundPaymentResult;
    }

    /**
     * @param \Lyranetwork\RefundPaymentResult $refundPaymentResult
     * @return \Lyranetwork\RefundPaymentResponse
     */
    public function setRefundPaymentResult($refundPaymentResult)
    {
        $this->refundPaymentResult = $refundPaymentResult;
        return $this;
    }
}
