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

class CancelSubscriptionResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\CancelSubscriptionResult $cancelSubscriptionResult
     */
    private $cancelSubscriptionResult = null;

    /**
     * @return \Lyranetwork\Model\CancelSubscriptionResult
     */
    public function getCancelSubscriptionResult()
    {
        return $this->cancelSubscriptionResult;
    }

    /**
     * @param \Lyranetwork\Model\CancelSubscriptionResult $cancelSubscriptionResult
     * @return \Lyranetwork\Model\CancelSubscriptionResponse
     */
    public function setCancelSubscriptionResult($cancelSubscriptionResult)
    {
        $this->cancelSubscriptionResult = $cancelSubscriptionResult;
        return $this;
    }
}
