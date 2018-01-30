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

class CancelPaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\CancelPaymentResult $cancelPaymentResult
     */
    private $cancelPaymentResult = null;

    /**
     * @return \Lyranetwork\Model\CancelPaymentResult
     */
    public function getCancelPaymentResult()
    {
        return $this->cancelPaymentResult;
    }

    /**
     * @param \Lyranetwork\Model\CancelPaymentResult $cancelPaymentResult
     * @return \Lyranetwork\Model\CancelPaymentResponse
     */
    public function setCancelPaymentResult($cancelPaymentResult)
    {
        $this->cancelPaymentResult = $cancelPaymentResult;
        return $this;
    }
}
