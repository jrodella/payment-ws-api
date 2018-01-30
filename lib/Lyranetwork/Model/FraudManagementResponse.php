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

class FraudManagementResponse
{
    /**
     * @var \Lyranetwork\Model\RiskControl[] $riskControl
     */
    private $riskControl = null;

    /**
     * @var \Lyranetwork\Model\RiskAnalysis[] $riskAnalysis
     */
    private $riskAnalysis = null;

    /**
     * @var \Lyranetwork\Model\RiskAssessments $riskAssessments
     */
    private $riskAssessments = null;

    /**
     * @return \Lyranetwork\Model\RiskControl[]
     */
    public function getRiskControl()
    {
        return $this->riskControl;
    }

    /**
     * @param \Lyranetwork\Model\RiskControl[] $riskControl
     * @return \Lyranetwork\Model\FraudManagementResponse
     */
    public function setRiskControl(array $riskControl = null)
    {
        $this->riskControl = $riskControl;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\RiskAnalysis[]
     */
    public function getRiskAnalysis()
    {
        return $this->riskAnalysis;
    }

    /**
     * @param \Lyranetwork\Model\RiskAnalysis[] $riskAnalysis
     * @return \Lyranetwork\Model\FraudManagementResponse
     */
    public function setRiskAnalysis(array $riskAnalysis = null)
    {
        $this->riskAnalysis = $riskAnalysis;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\RiskAssessments
     */
    public function getRiskAssessments()
    {
        return $this->riskAssessments;
    }

    /**
     * @param \Lyranetwork\Model\RiskAssessments $riskAssessments
     * @return \Lyranetwork\Model\FraudManagementResponse
     */
    public function setRiskAssessments($riskAssessments)
    {
        $this->riskAssessments = $riskAssessments;
        return $this;
    }
}
