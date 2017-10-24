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

class SettlementRequest
{
    /**
     * @var string[] $transactionUuids
     */
    private $transactionUuids = null;

    /**
     * @var float $commission
     */
    private $commission = null;

    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * @return string[]
     */
    public function getTransactionUuids()
    {
        return $this->transactionUuids;
    }

    /**
     * @param string[] $transactionUuids
     * @return \Lyranetwork\SettlementRequest
     */
    public function setTransactionUuids(array $transactionUuids = null)
    {
        $this->transactionUuids = $transactionUuids;
        return $this;
    }

    /**
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param float $commission
     * @return \Lyranetwork\SettlementRequest
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
        return $this;
    }

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
     * @return \Lyranetwork\SettlementRequest
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
}
