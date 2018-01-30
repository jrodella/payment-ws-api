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

class VerifyThreeDSEnrollmentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\VerifyThreeDSEnrollmentResult $verifyThreeDSEnrollmentResult
     */
    private $verifyThreeDSEnrollmentResult = null;

    /**
     * @return \Lyranetwork\Model\VerifyThreeDSEnrollmentResult
     */
    public function getVerifyThreeDSEnrollmentResult()
    {
        return $this->verifyThreeDSEnrollmentResult;
    }

    /**
     * @param \Lyranetwork\Model\VerifyThreeDSEnrollmentResult $verifyThreeDSEnrollmentResult
     * @return \Lyranetwork\Model\VerifyThreeDSEnrollmentResponse
     */
    public function setVerifyThreeDSEnrollmentResult($verifyThreeDSEnrollmentResult)
    {
        $this->verifyThreeDSEnrollmentResult = $verifyThreeDSEnrollmentResult;
        return $this;
    }
}
