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

class VerifyThreeDSEnrollmentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\VerifyThreeDSEnrollmentResult $verifyThreeDSEnrollmentResult
     */
    private $verifyThreeDSEnrollmentResult = null;

    /**
     * @return \Lyranetwork\VerifyThreeDSEnrollmentResult
     */
    public function getVerifyThreeDSEnrollmentResult()
    {
        return $this->verifyThreeDSEnrollmentResult;
    }

    /**
     * @param \Lyranetwork\VerifyThreeDSEnrollmentResult $verifyThreeDSEnrollmentResult
     * @return \Lyranetwork\VerifyThreeDSEnrollmentResponse
     */
    public function setVerifyThreeDSEnrollmentResult($verifyThreeDSEnrollmentResult)
    {
        $this->verifyThreeDSEnrollmentResult = $verifyThreeDSEnrollmentResult;
        return $this;
    }
}
