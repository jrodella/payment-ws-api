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

class SubscriptionRequest
{
    /**
     * @var string $subscriptionId
     */
    private $subscriptionId = null;

    /**
     * @var \DateTime $effectDate
     */
    private $effectDate = null;

    /**
     * @var int $amount
     */
    private $amount = null;

    /**
     * @var int $currency
     */
    private $currency = null;

    /**
     * @var int $initialAmount
     */
    private $initialAmount = null;

    /**
     * @var int $initialAmountNumber
     */
    private $initialAmountNumber = null;

    /**
     * @var string $rrule
     */
    private $rrule = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @param string $subscriptionId
     * @return \Lyranetwork\SubscriptionRequest
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectDate()
    {
        if ($this->effectDate == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->effectDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $effectDate
     * @return \Lyranetwork\SubscriptionRequest
     */
    public function setEffectDate(\DateTime $effectDate = null)
    {
        if ($effectDate == null) {
            $this->effectDate = null;
        } else {
            $this->effectDate = $effectDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return \Lyranetwork\SubscriptionRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param int $currency
     * @return \Lyranetwork\SubscriptionRequest
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return int
     */
    public function getInitialAmount()
    {
        return $this->initialAmount;
    }

    /**
     * @param int $initialAmount
     * @return \Lyranetwork\SubscriptionRequest
     */
    public function setInitialAmount($initialAmount)
    {
        $this->initialAmount = $initialAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getInitialAmountNumber()
    {
        return $this->initialAmountNumber;
    }

    /**
     * @param int $initialAmountNumber
     * @return \Lyranetwork\SubscriptionRequest
     */
    public function setInitialAmountNumber($initialAmountNumber)
    {
        $this->initialAmountNumber = $initialAmountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRrule()
    {
        return $this->rrule;
    }

    /**
     * @param string $rrule
     * @return \Lyranetwork\SubscriptionRequest
     */
    public function setRrule($rrule)
    {
        $this->rrule = $rrule;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \Lyranetwork\SubscriptionRequest
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
