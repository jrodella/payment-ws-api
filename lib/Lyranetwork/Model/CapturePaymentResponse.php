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

class CapturePaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\CapturePaymentResult $capturePaymentResult
     */
    private $capturePaymentResult = null;

    /**
     * @return \Lyranetwork\CapturePaymentResult
     */
    public function getCapturePaymentResult()
    {
        return $this->capturePaymentResult;
    }

    /**
     * @param \Lyranetwork\CapturePaymentResult $capturePaymentResult
     * @return \Lyranetwork\CapturePaymentResponse
     */
    public function setCapturePaymentResult($capturePaymentResult)
    {
        $this->capturePaymentResult = $capturePaymentResult;
        return $this;
    }
}
