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

class UpdateSubscriptionResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\UpdateSubscriptionResult $updateSubscriptionResult
     */
    private $updateSubscriptionResult = null;

    /**
     * @return \Lyranetwork\Model\UpdateSubscriptionResult
     */
    public function getUpdateSubscriptionResult()
    {
        return $this->updateSubscriptionResult;
    }

    /**
     * @param \Lyranetwork\Model\UpdateSubscriptionResult $updateSubscriptionResult
     * @return \Lyranetwork\Model\UpdateSubscriptionResponse
     */
    public function setUpdateSubscriptionResult($updateSubscriptionResult)
    {
        $this->updateSubscriptionResult = $updateSubscriptionResult;
        return $this;
    }
}
