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

class CancelCapturedPaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\CancelCapturedPaymentResult $cancelCapturedPaymentResult
     */
    private $cancelCapturedPaymentResult = null;

    /**
     * @return \Lyranetwork\CancelCapturedPaymentResult
     */
    public function getCancelCapturedPaymentResult()
    {
        return $this->cancelCapturedPaymentResult;
    }

    /**
     * @param \Lyranetwork\CancelCapturedPaymentResult $cancelCapturedPaymentResult
     * @return \Lyranetwork\CancelCapturedPaymentResponse
     */
    public function setCancelCapturedPaymentResult($cancelCapturedPaymentResult)
    {
        $this->cancelCapturedPaymentResult = $cancelCapturedPaymentResult;
        return $this;
    }
}
