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

class CheckThreeDSAuthenticationResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult
     */
    private $checkThreeDSAuthenticationResult = null;

    /**
     * @return \Lyranetwork\Model\CheckThreeDSAuthenticationResult
     */
    public function getCheckThreeDSAuthenticationResult()
    {
        return $this->checkThreeDSAuthenticationResult;
    }

    /**
     * @param \Lyranetwork\Model\CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult
     * @return \Lyranetwork\Model\CheckThreeDSAuthenticationResponse
     */
    public function setCheckThreeDSAuthenticationResult($checkThreeDSAuthenticationResult)
    {
        $this->checkThreeDSAuthenticationResult = $checkThreeDSAuthenticationResult;
        return $this;
    }
}
