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

class CreateSubscription
{
    /**
     * @var \Lyranetwork\Model\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\Model\OrderRequest $orderRequest
     */
    private $orderRequest = null;

    /**
     * @var \Lyranetwork\Model\SubscriptionRequest $subscriptionRequest
     */
    private $subscriptionRequest = null;

    /**
     * @var \Lyranetwork\Model\CardRequest $cardRequest
     */
    private $cardRequest = null;

    /**
     * @return \Lyranetwork\Model\CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param \Lyranetwork\Model\CommonRequest $commonRequest
     * @return \Lyranetwork\Model\CreateSubscription
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\OrderRequest
     */
    public function getOrderRequest()
    {
        return $this->orderRequest;
    }

    /**
     * @param \Lyranetwork\Model\OrderRequest $orderRequest
     * @return \Lyranetwork\Model\CreateSubscription
     */
    public function setOrderRequest($orderRequest)
    {
        $this->orderRequest = $orderRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\SubscriptionRequest
     */
    public function getSubscriptionRequest()
    {
        return $this->subscriptionRequest;
    }

    /**
     * @param \Lyranetwork\Model\SubscriptionRequest $subscriptionRequest
     * @return \Lyranetwork\Model\CreateSubscription
     */
    public function setSubscriptionRequest($subscriptionRequest)
    {
        $this->subscriptionRequest = $subscriptionRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\CardRequest
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }

    /**
     * @param \Lyranetwork\Model\CardRequest $cardRequest
     * @return \Lyranetwork\Model\CreateSubscription
     */
    public function setCardRequest($cardRequest)
    {
        $this->cardRequest = $cardRequest;
        return $this;
    }
}
