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

class CreateSubscriptionResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\CreateSubscriptionResult $createSubscriptionResult
     */
    private $createSubscriptionResult = null;

    /**
     * @return \Lyranetwork\Model\CreateSubscriptionResult
     */
    public function getCreateSubscriptionResult()
    {
        return $this->createSubscriptionResult;
    }

    /**
     * @param \Lyranetwork\Model\CreateSubscriptionResult $createSubscriptionResult
     * @return \Lyranetwork\Model\CreateSubscriptionResponse
     */
    public function setCreateSubscriptionResult($createSubscriptionResult)
    {
        $this->createSubscriptionResult = $createSubscriptionResult;
        return $this;
    }
}
