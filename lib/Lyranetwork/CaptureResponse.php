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

class CaptureResponse
{
    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * @var int $number
     */
    private $number = null;

    /**
     * @var int $reconciliationStatus
     */
    private $reconciliationStatus = null;

    /**
     * @var int $refundAmount
     */
    private $refundAmount = null;

    /**
     * @var int $refundCurrency
     */
    private $refundCurrency = null;

    /**
     * @var boolean $chargeback
     */
    private $chargeback = null;

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->date == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $date
     * @return \Lyranetwork\CaptureResponse
     */
    public function setDate(\DateTime $date = null)
    {
        if ($date == null) {
            $this->date = null;
        } else {
            $this->date = $date->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return \Lyranetwork\CaptureResponse
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getReconciliationStatus()
    {
        return $this->reconciliationStatus;
    }

    /**
     * @param int $reconciliationStatus
     * @return \Lyranetwork\CaptureResponse
     */
    public function setReconciliationStatus($reconciliationStatus)
    {
        $this->reconciliationStatus = $reconciliationStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * @param int $refundAmount
     * @return \Lyranetwork\CaptureResponse
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRefundCurrency()
    {
        return $this->refundCurrency;
    }

    /**
     * @param int $refundCurrency
     * @return \Lyranetwork\CaptureResponse
     */
    public function setRefundCurrency($refundCurrency)
    {
        $this->refundCurrency = $refundCurrency;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getChargeback()
    {
        return $this->chargeback;
    }

    /**
     * @param boolean $chargeback
     * @return \Lyranetwork\CaptureResponse
     */
    public function setChargeback($chargeback)
    {
        $this->chargeback = $chargeback;
        return $this;
    }
}
