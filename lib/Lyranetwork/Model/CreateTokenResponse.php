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

class CreateTokenResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\CreateTokenResult $createTokenResult
     */
    private $createTokenResult = null;

    /**
     * @return \Lyranetwork\CreateTokenResult
     */
    public function getCreateTokenResult()
    {
        return $this->createTokenResult;
    }

    /**
     * @param \Lyranetwork\CreateTokenResult $createTokenResult
     * @return \Lyranetwork\CreateTokenResponse
     */
    public function setCreateTokenResult($createTokenResult)
    {
        $this->createTokenResult = $createTokenResult;
        return $this;
    }
}
