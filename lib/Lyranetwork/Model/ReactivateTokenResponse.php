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

class ReactivateTokenResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\ReactivateTokenResult $reactivateTokenResult
     */
    private $reactivateTokenResult = null;

    /**
     * @return \Lyranetwork\ReactivateTokenResult
     */
    public function getReactivateTokenResult()
    {
        return $this->reactivateTokenResult;
    }

    /**
     * @param \Lyranetwork\ReactivateTokenResult $reactivateTokenResult
     * @return \Lyranetwork\ReactivateTokenResponse
     */
    public function setReactivateTokenResult($reactivateTokenResult)
    {
        $this->reactivateTokenResult = $reactivateTokenResult;
        return $this;
    }
}
