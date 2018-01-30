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

class VerifyThreeDSEnrollmentResult
{
    /**
     * @var \Lyranetwork\Model\CommonResponse $commonResponse
     */
    private $commonResponse = null;

    /**
     * @var \Lyranetwork\Model\ThreeDSResponse $threeDSResponse
     */
    private $threeDSResponse = null;

    /**
     * @return \Lyranetwork\Model\CommonResponse
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param \Lyranetwork\Model\CommonResponse $commonResponse
     * @return \Lyranetwork\Model\VerifyThreeDSEnrollmentResult
     */
    public function setCommonResponse($commonResponse)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\ThreeDSResponse
     */
    public function getThreeDSResponse()
    {
        return $this->threeDSResponse;
    }

    /**
     * @param \Lyranetwork\Model\ThreeDSResponse $threeDSResponse
     * @return \Lyranetwork\Model\VerifyThreeDSEnrollmentResult
     */
    public function setThreeDSResponse($threeDSResponse)
    {
        $this->threeDSResponse = $threeDSResponse;
        return $this;
    }
}
