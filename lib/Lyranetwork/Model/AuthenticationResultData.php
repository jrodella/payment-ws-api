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

class AuthenticationResultData
{
    /**
     * @var string $brand
     */
    private $brand = null;

    /**
     * @var string $enrolled
     */
    private $enrolled = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $eci
     */
    private $eci = null;

    /**
     * @var string $xid
     */
    private $xid = null;

    /**
     * @var string $cavv
     */
    private $cavv = null;

    /**
     * @var string $cavvAlgorithm
     */
    private $cavvAlgorithm = null;

    /**
     * @var string $signValid
     */
    private $signValid = null;

    /**
     * @var string $transactionCondition
     */
    private $transactionCondition = null;

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnrolled()
    {
        return $this->enrolled;
    }

    /**
     * @param string $enrolled
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function setEnrolled($enrolled)
    {
        $this->enrolled = $enrolled;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * @param string $eci
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function setEci($eci)
    {
        $this->eci = $eci;
        return $this;
    }

    /**
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * @param string $xid
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function setXid($xid)
    {
        $this->xid = $xid;
        return $this;
    }

    /**
     * @return string
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * @param string $cavv
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function setCavv($cavv)
    {
        $this->cavv = $cavv;
        return $this;
    }

    /**
     * @return string
     */
    public function getCavvAlgorithm()
    {
        return $this->cavvAlgorithm;
    }

    /**
     * @param string $cavvAlgorithm
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function setCavvAlgorithm($cavvAlgorithm)
    {
        $this->cavvAlgorithm = $cavvAlgorithm;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignValid()
    {
        return $this->signValid;
    }

    /**
     * @param string $signValid
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function setSignValid($signValid)
    {
        $this->signValid = $signValid;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionCondition()
    {
        return $this->transactionCondition;
    }

    /**
     * @param string $transactionCondition
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function setTransactionCondition($transactionCondition)
    {
        $this->transactionCondition = $transactionCondition;
        return $this;
    }
}
