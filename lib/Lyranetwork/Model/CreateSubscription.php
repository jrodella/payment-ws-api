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

class CreateSubscription
{
    /**
     * @var \Lyranetwork\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\OrderRequest $orderRequest
     */
    private $orderRequest = null;

    /**
     * @var \Lyranetwork\SubscriptionRequest $subscriptionRequest
     */
    private $subscriptionRequest = null;

    /**
     * @var \Lyranetwork\CardRequest $cardRequest
     */
    private $cardRequest = null;

    /**
     * @return \Lyranetwork\CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param \Lyranetwork\CommonRequest $commonRequest
     * @return \Lyranetwork\CreateSubscription
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\OrderRequest
     */
    public function getOrderRequest()
    {
        return $this->orderRequest;
    }

    /**
     * @param \Lyranetwork\OrderRequest $orderRequest
     * @return \Lyranetwork\CreateSubscription
     */
    public function setOrderRequest($orderRequest)
    {
        $this->orderRequest = $orderRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\SubscriptionRequest
     */
    public function getSubscriptionRequest()
    {
        return $this->subscriptionRequest;
    }

    /**
     * @param \Lyranetwork\SubscriptionRequest $subscriptionRequest
     * @return \Lyranetwork\CreateSubscription
     */
    public function setSubscriptionRequest($subscriptionRequest)
    {
        $this->subscriptionRequest = $subscriptionRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\CardRequest
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }

    /**
     * @param \Lyranetwork\CardRequest $cardRequest
     * @return \Lyranetwork\CreateSubscription
     */
    public function setCardRequest($cardRequest)
    {
        $this->cardRequest = $cardRequest;
        return $this;
    }
}
