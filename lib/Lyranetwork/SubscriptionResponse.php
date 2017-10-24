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

class SubscriptionResponse
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
     * @var \DateTime $cancelDate
     */
    private $cancelDate = null;

    /**
     * @var int $initialAmount
     */
    private $initialAmount = null;

    /**
     * @var string $rrule
     */
    private $rrule = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var int $initialAmountNumber
     */
    private $initialAmountNumber = null;

    /**
     * @var int $pastPaymentNumber
     */
    private $pastPaymentNumber = null;

    /**
     * @var int $totalPaymentNumber
     */
    private $totalPaymentNumber = null;

    /**
     * @var int $amount
     */
    private $amount = null;

    /**
     * @var int $currency
     */
    private $currency = null;

    /**
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @param string $subscriptionId
     * @return \Lyranetwork\SubscriptionResponse
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
     * @return \Lyranetwork\SubscriptionResponse
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
     * @return \DateTime
     */
    public function getCancelDate()
    {
        if ($this->cancelDate == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->cancelDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $cancelDate
     * @return \Lyranetwork\SubscriptionResponse
     */
    public function setCancelDate(\DateTime $cancelDate = null)
    {
        if ($cancelDate == null) {
            $this->cancelDate = null;
        } else {
            $this->cancelDate = $cancelDate->format(\DateTime::ATOM);
        }
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
     * @return \Lyranetwork\SubscriptionResponse
     */
    public function setInitialAmount($initialAmount)
    {
        $this->initialAmount = $initialAmount;
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
     * @return \Lyranetwork\SubscriptionResponse
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
     * @return \Lyranetwork\SubscriptionResponse
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return \Lyranetwork\SubscriptionResponse
     */
    public function setInitialAmountNumber($initialAmountNumber)
    {
        $this->initialAmountNumber = $initialAmountNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getPastPaymentNumber()
    {
        return $this->pastPaymentNumber;
    }

    /**
     * @param int $pastPaymentNumber
     * @return \Lyranetwork\SubscriptionResponse
     */
    public function setPastPaymentNumber($pastPaymentNumber)
    {
        $this->pastPaymentNumber = $pastPaymentNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPaymentNumber()
    {
        return $this->totalPaymentNumber;
    }

    /**
     * @param int $totalPaymentNumber
     * @return \Lyranetwork\SubscriptionResponse
     */
    public function setTotalPaymentNumber($totalPaymentNumber)
    {
        $this->totalPaymentNumber = $totalPaymentNumber;
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
     * @return \Lyranetwork\SubscriptionResponse
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
     * @return \Lyranetwork\SubscriptionResponse
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
}
