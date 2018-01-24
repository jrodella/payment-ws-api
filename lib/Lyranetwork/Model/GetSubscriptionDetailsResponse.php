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

class GetSubscriptionDetailsResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\GetSubscriptionDetailsResult $getSubscriptionDetailsResult
     */
    private $getSubscriptionDetailsResult = null;

    /**
     * @return \Lyranetwork\GetSubscriptionDetailsResult
     */
    public function getGetSubscriptionDetailsResult()
    {
        return $this->getSubscriptionDetailsResult;
    }

    /**
     * @param \Lyranetwork\GetSubscriptionDetailsResult $getSubscriptionDetailsResult
     * @return \Lyranetwork\GetSubscriptionDetailsResponse
     */
    public function setGetSubscriptionDetailsResult($getSubscriptionDetailsResult)
    {
        $this->getSubscriptionDetailsResult = $getSubscriptionDetailsResult;
        return $this;
    }
}
