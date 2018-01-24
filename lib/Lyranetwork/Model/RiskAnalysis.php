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

class RiskAnalysis
{
    /**
     * @var string $score
     */
    private $score = null;

    /**
     * @var string $resultCode
     */
    private $resultCode = null;

    /**
     * @var \Lyranetwork\RiskAnalysisProcessingStatus $status
     */
    private $status = null;

    /**
     * @var string $requestId
     */
    private $requestId = null;

    /**
     * @var \Lyranetwork\ExtInfo[] $extraInfo
     */
    private $extraInfo = null;

    /**
     * @var string $fingerPrintId
     */
    private $fingerPrintId = null;

    /**
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param string $score
     * @return \Lyranetwork\RiskAnalysis
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return string
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * @param string $resultCode
     * @return \Lyranetwork\RiskAnalysis
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;
        return $this;
    }

    /**
     * @return \Lyranetwork\RiskAnalysisProcessingStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \Lyranetwork\RiskAnalysisProcessingStatus $status
     * @return \Lyranetwork\RiskAnalysis
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * @return \Lyranetwork\RiskAnalysis
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return \Lyranetwork\ExtInfo[]
     */
    public function getExtraInfo()
    {
        return $this->extraInfo;
    }

    /**
     * @param \Lyranetwork\ExtInfo[] $extraInfo
     * @return \Lyranetwork\RiskAnalysis
     */
    public function setExtraInfo(array $extraInfo = null)
    {
        $this->extraInfo = $extraInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFingerPrintId()
    {
        return $this->fingerPrintId;
    }

    /**
     * @param string $fingerPrintId
     * @return \Lyranetwork\RiskAnalysis
     */
    public function setFingerPrintId($fingerPrintId)
    {
        $this->fingerPrintId = $fingerPrintId;
        return $this;
    }
}
