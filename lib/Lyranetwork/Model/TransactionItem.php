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

class TransactionItem
{
    /**
     * @var string $transactionUuid
     */
    private $transactionUuid = null;

    /**
     * @var string $transactionStatusLabel
     */
    private $transactionStatusLabel = null;

    /**
     * @var int $amount
     */
    private $amount = null;

    /**
     * @var int $currency
     */
    private $currency = null;

    /**
     * @var \DateTime $expectedCaptureDate
     */
    private $expectedCaptureDate = null;

    /**
     * @return string
     */
    public function getTransactionUuid()
    {
        return $this->transactionUuid;
    }

    /**
     * @param string $transactionUuid
     * @return \Lyranetwork\Model\TransactionItem
     */
    public function setTransactionUuid($transactionUuid)
    {
        $this->transactionUuid = $transactionUuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionStatusLabel()
    {
        return $this->transactionStatusLabel;
    }

    /**
     * @param string $transactionStatusLabel
     * @return \Lyranetwork\Model\TransactionItem
     */
    public function setTransactionStatusLabel($transactionStatusLabel)
    {
        $this->transactionStatusLabel = $transactionStatusLabel;
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
     * @return \Lyranetwork\Model\TransactionItem
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
     * @return \Lyranetwork\Model\TransactionItem
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedCaptureDate()
    {
        if ($this->expectedCaptureDate == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->expectedCaptureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $expectedCaptureDate
     * @return \Lyranetwork\Model\TransactionItem
     */
    public function setExpectedCaptureDate(\DateTime $expectedCaptureDate = null)
    {
        if ($expectedCaptureDate == null) {
            $this->expectedCaptureDate = null;
        } else {
            $this->expectedCaptureDate = $expectedCaptureDate->format(\DateTime::ATOM);
        }
        return $this;
    }
}
