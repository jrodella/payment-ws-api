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

class CheckThreeDSAuthenticationResult
{
    /**
     * @var \Lyranetwork\CommonResponse $commonResponse
     */
    private $commonResponse = null;

    /**
     * @var \Lyranetwork\ThreeDSResponse $threeDSResponse
     */
    private $threeDSResponse = null;

    /**
     * @return \Lyranetwork\CommonResponse
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param \Lyranetwork\CommonResponse $commonResponse
     * @return \Lyranetwork\CheckThreeDSAuthenticationResult
     */
    public function setCommonResponse($commonResponse)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\ThreeDSResponse
     */
    public function getThreeDSResponse()
    {
        return $this->threeDSResponse;
    }

    /**
     * @param \Lyranetwork\ThreeDSResponse $threeDSResponse
     * @return \Lyranetwork\CheckThreeDSAuthenticationResult
     */
    public function setThreeDSResponse($threeDSResponse)
    {
        $this->threeDSResponse = $threeDSResponse;
        return $this;
    }
}
