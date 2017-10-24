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

class GetPaymentDetailsResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\GetPaymentDetailsResult $getPaymentDetailsResult
     */
    private $getPaymentDetailsResult = null;

    /**
     * @return \Lyranetwork\GetPaymentDetailsResult
     */
    public function getGetPaymentDetailsResult()
    {
        return $this->getPaymentDetailsResult;
    }

    /**
     * @param \Lyranetwork\GetPaymentDetailsResult $getPaymentDetailsResult
     * @return \Lyranetwork\GetPaymentDetailsResponse
     */
    public function setGetPaymentDetailsResult($getPaymentDetailsResult)
    {
        $this->getPaymentDetailsResult = $getPaymentDetailsResult;
        return $this;
    }
}
