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

class CheckThreeDSAuthenticationResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult
     */
    private $checkThreeDSAuthenticationResult = null;

    /**
     * @return \Lyranetwork\CheckThreeDSAuthenticationResult
     */
    public function getCheckThreeDSAuthenticationResult()
    {
        return $this->checkThreeDSAuthenticationResult;
    }

    /**
     * @param \Lyranetwork\CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult
     * @return \Lyranetwork\CheckThreeDSAuthenticationResponse
     */
    public function setCheckThreeDSAuthenticationResult($checkThreeDSAuthenticationResult)
    {
        $this->checkThreeDSAuthenticationResult = $checkThreeDSAuthenticationResult;
        return $this;
    }
}
