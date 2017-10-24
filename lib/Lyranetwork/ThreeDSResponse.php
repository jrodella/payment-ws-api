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

class ThreeDSResponse
{
    /**
     * @var \Lyranetwork\AuthenticationRequestData $authenticationRequestData
     */
    private $authenticationRequestData = null;

    /**
     * @var \Lyranetwork\AuthenticationResultData $authenticationResultData
     */
    private $authenticationResultData = null;

    /**
     * @return \Lyranetwork\AuthenticationRequestData
     */
    public function getAuthenticationRequestData()
    {
        return $this->authenticationRequestData;
    }

    /**
     * @param \Lyranetwork\AuthenticationRequestData $authenticationRequestData
     * @return \Lyranetwork\ThreeDSResponse
     */
    public function setAuthenticationRequestData($authenticationRequestData)
    {
        $this->authenticationRequestData = $authenticationRequestData;
        return $this;
    }

    /**
     * @return \Lyranetwork\AuthenticationResultData
     */
    public function getAuthenticationResultData()
    {
        return $this->authenticationResultData;
    }

    /**
     * @param \Lyranetwork\AuthenticationResultData $authenticationResultData
     * @return \Lyranetwork\ThreeDSResponse
     */
    public function setAuthenticationResultData($authenticationResultData)
    {
        $this->authenticationResultData = $authenticationResultData;
        return $this;
    }
}
