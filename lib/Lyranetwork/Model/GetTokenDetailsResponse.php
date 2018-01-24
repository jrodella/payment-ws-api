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

class GetTokenDetailsResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\GetTokenDetailsResult $getTokenDetailsResult
     */
    private $getTokenDetailsResult = null;

    /**
     * @return \Lyranetwork\GetTokenDetailsResult
     */
    public function getGetTokenDetailsResult()
    {
        return $this->getTokenDetailsResult;
    }

    /**
     * @param \Lyranetwork\GetTokenDetailsResult $getTokenDetailsResult
     * @return \Lyranetwork\GetTokenDetailsResponse
     */
    public function setGetTokenDetailsResult($getTokenDetailsResult)
    {
        $this->getTokenDetailsResult = $getTokenDetailsResult;
        return $this;
    }
}
