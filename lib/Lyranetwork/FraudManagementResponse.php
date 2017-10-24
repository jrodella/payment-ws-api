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

class FraudManagementResponse
{
    /**
     * @var \Lyranetwork\RiskControl[] $riskControl
     */
    private $riskControl = null;

    /**
     * @var \Lyranetwork\RiskAnalysis[] $riskAnalysis
     */
    private $riskAnalysis = null;

    /**
     * @var \Lyranetwork\RiskAssessments $riskAssessments
     */
    private $riskAssessments = null;

    /**
     * @return \Lyranetwork\RiskControl[]
     */
    public function getRiskControl()
    {
        return $this->riskControl;
    }

    /**
     * @param \Lyranetwork\RiskControl[] $riskControl
     * @return \Lyranetwork\FraudManagementResponse
     */
    public function setRiskControl(array $riskControl = null)
    {
        $this->riskControl = $riskControl;
        return $this;
    }

    /**
     * @return \Lyranetwork\RiskAnalysis[]
     */
    public function getRiskAnalysis()
    {
        return $this->riskAnalysis;
    }

    /**
     * @param \Lyranetwork\RiskAnalysis[] $riskAnalysis
     * @return \Lyranetwork\FraudManagementResponse
     */
    public function setRiskAnalysis(array $riskAnalysis = null)
    {
        $this->riskAnalysis = $riskAnalysis;
        return $this;
    }

    /**
     * @return \Lyranetwork\RiskAssessments
     */
    public function getRiskAssessments()
    {
        return $this->riskAssessments;
    }

    /**
     * @param \Lyranetwork\RiskAssessments $riskAssessments
     * @return \Lyranetwork\FraudManagementResponse
     */
    public function setRiskAssessments($riskAssessments)
    {
        $this->riskAssessments = $riskAssessments;
        return $this;
    }
}
