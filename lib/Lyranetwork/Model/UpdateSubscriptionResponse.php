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

class UpdateSubscriptionResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\UpdateSubscriptionResult $updateSubscriptionResult
     */
    private $updateSubscriptionResult = null;

    /**
     * @return \Lyranetwork\UpdateSubscriptionResult
     */
    public function getUpdateSubscriptionResult()
    {
        return $this->updateSubscriptionResult;
    }

    /**
     * @param \Lyranetwork\UpdateSubscriptionResult $updateSubscriptionResult
     * @return \Lyranetwork\UpdateSubscriptionResponse
     */
    public function setUpdateSubscriptionResult($updateSubscriptionResult)
    {
        $this->updateSubscriptionResult = $updateSubscriptionResult;
        return $this;
    }
}
