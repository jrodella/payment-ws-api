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
     * @var \Lyranetwork\Model\CancelCapturedPaymentResult $cancelCapturedPaymentResult
     */
    private $cancelCapturedPaymentResult = null;

    /**
     * @return \Lyranetwork\Model\CancelCapturedPaymentResult
     */
    public function getCancelCapturedPaymentResult()
    {
        return $this->cancelCapturedPaymentResult;
    }

    /**
     * @param \Lyranetwork\Model\CancelCapturedPaymentResult $cancelCapturedPaymentResult
     * @return \Lyranetwork\Model\CancelCapturedPaymentResponse
     */
    public function setCancelCapturedPaymentResult($cancelCapturedPaymentResult)
    {
        $this->cancelCapturedPaymentResult = $cancelCapturedPaymentResult;
        return $this;
    }
}
