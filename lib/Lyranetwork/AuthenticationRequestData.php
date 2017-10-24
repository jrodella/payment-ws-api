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

class AuthenticationRequestData
{
    /**
     * @var string $threeDSAcctId
     */
    private $threeDSAcctId = null;

    /**
     * @var string $threeDSAcsUrl
     */
    private $threeDSAcsUrl = null;

    /**
     * @var string $threeDSBrand
     */
    private $threeDSBrand = null;

    /**
     * @var string $threeDSEncodedPareq
     */
    private $threeDSEncodedPareq = null;

    /**
     * @var string $threeDSEnrolled
     */
    private $threeDSEnrolled = null;

    /**
     * @var string $threeDSRequestId
     */
    private $threeDSRequestId = null;

    /**
     * @return string
     */
    public function getThreeDSAcctId()
    {
        return $this->threeDSAcctId;
    }

    /**
     * @param string $threeDSAcctId
     * @return \Lyranetwork\AuthenticationRequestData
     */
    public function setThreeDSAcctId($threeDSAcctId)
    {
        $this->threeDSAcctId = $threeDSAcctId;
        return $this;
    }

    /**
     * @return string
     */
    public function getThreeDSAcsUrl()
    {
        return $this->threeDSAcsUrl;
    }

    /**
     * @param string $threeDSAcsUrl
     * @return \Lyranetwork\AuthenticationRequestData
     */
    public function setThreeDSAcsUrl($threeDSAcsUrl)
    {
        $this->threeDSAcsUrl = $threeDSAcsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getThreeDSBrand()
    {
        return $this->threeDSBrand;
    }

    /**
     * @param string $threeDSBrand
     * @return \Lyranetwork\AuthenticationRequestData
     */
    public function setThreeDSBrand($threeDSBrand)
    {
        $this->threeDSBrand = $threeDSBrand;
        return $this;
    }

    /**
     * @return string
     */
    public function getThreeDSEncodedPareq()
    {
        return $this->threeDSEncodedPareq;
    }

    /**
     * @param string $threeDSEncodedPareq
     * @return \Lyranetwork\AuthenticationRequestData
     */
    public function setThreeDSEncodedPareq($threeDSEncodedPareq)
    {
        $this->threeDSEncodedPareq = $threeDSEncodedPareq;
        return $this;
    }

    /**
     * @return string
     */
    public function getThreeDSEnrolled()
    {
        return $this->threeDSEnrolled;
    }

    /**
     * @param string $threeDSEnrolled
     * @return \Lyranetwork\AuthenticationRequestData
     */
    public function setThreeDSEnrolled($threeDSEnrolled)
    {
        $this->threeDSEnrolled = $threeDSEnrolled;
        return $this;
    }

    /**
     * @return string
     */
    public function getThreeDSRequestId()
    {
        return $this->threeDSRequestId;
    }

    /**
     * @param string $threeDSRequestId
     * @return \Lyranetwork\AuthenticationRequestData
     */
    public function setThreeDSRequestId($threeDSRequestId)
    {
        $this->threeDSRequestId = $threeDSRequestId;
        return $this;
    }
}
