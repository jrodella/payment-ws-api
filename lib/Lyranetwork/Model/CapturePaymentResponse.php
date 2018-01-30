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

class CapturePaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\CapturePaymentResult $capturePaymentResult
     */
    private $capturePaymentResult = null;

    /**
     * @return \Lyranetwork\Model\CapturePaymentResult
     */
    public function getCapturePaymentResult()
    {
        return $this->capturePaymentResult;
    }

    /**
     * @param \Lyranetwork\Model\CapturePaymentResult $capturePaymentResult
     * @return \Lyranetwork\Model\CapturePaymentResponse
     */
    public function setCapturePaymentResult($capturePaymentResult)
    {
        $this->capturePaymentResult = $capturePaymentResult;
        return $this;
    }
}
