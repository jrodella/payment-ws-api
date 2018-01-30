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

class GetPaymentDetailsResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\GetPaymentDetailsResult $getPaymentDetailsResult
     */
    private $getPaymentDetailsResult = null;

    /**
     * @return \Lyranetwork\Model\GetPaymentDetailsResult
     */
    public function getGetPaymentDetailsResult()
    {
        return $this->getPaymentDetailsResult;
    }

    /**
     * @param \Lyranetwork\Model\GetPaymentDetailsResult $getPaymentDetailsResult
     * @return \Lyranetwork\Model\GetPaymentDetailsResponse
     */
    public function setGetPaymentDetailsResult($getPaymentDetailsResult)
    {
        $this->getPaymentDetailsResult = $getPaymentDetailsResult;
        return $this;
    }
}
