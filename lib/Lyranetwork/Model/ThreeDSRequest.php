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

class ThreeDSRequest
{
    /**
     * @var \Lyranetwork\Model\ThreeDSMode $mode
     */
    private $mode = null;

    /**
     * @var string $requestId
     */
    private $requestId = null;

    /**
     * @var string $pares
     */
    private $pares = null;

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
     * @var string $algorithm
     */
    private $algorithm = null;

    /**
     * @var \Lyranetwork\Model\MpiExtensionRequest $mpiExtension
     */
    private $mpiExtension = null;

    /**
     * @return \Lyranetwork\Model\ThreeDSMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param \Lyranetwork\Model\ThreeDSMode $mode
     * @return \Lyranetwork\Model\ThreeDSRequest
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return \Lyranetwork\Model\ThreeDSRequest
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPares()
    {
        return $this->pares;
    }

    /**
     * @param string $pares
     * @return \Lyranetwork\Model\ThreeDSRequest
     */
    public function setPares($pares)
    {
        $this->pares = $pares;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return \Lyranetwork\Model\ThreeDSRequest
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
     * @return \Lyranetwork\Model\ThreeDSRequest
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
     * @return \Lyranetwork\Model\ThreeDSRequest
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
     * @return \Lyranetwork\Model\ThreeDSRequest
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
     * @return \Lyranetwork\Model\ThreeDSRequest
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
     * @return \Lyranetwork\Model\ThreeDSRequest
     */
    public function setCavv($cavv)
    {
        $this->cavv = $cavv;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * @param string $algorithm
     * @return \Lyranetwork\Model\ThreeDSRequest
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\MpiExtensionRequest
     */
    public function getMpiExtension()
    {
        return $this->mpiExtension;
    }

    /**
     * @param \Lyranetwork\Model\MpiExtensionRequest $mpiExtension
     * @return \Lyranetwork\Model\ThreeDSRequest
     */
    public function setMpiExtension($mpiExtension)
    {
        $this->mpiExtension = $mpiExtension;
        return $this;
    }
}
