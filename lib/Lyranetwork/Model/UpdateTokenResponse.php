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

class UpdateTokenResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\UpdateTokenResult $updateTokenResult
     */
    private $updateTokenResult = null;

    /**
     * @return \Lyranetwork\UpdateTokenResult
     */
    public function getUpdateTokenResult()
    {
        return $this->updateTokenResult;
    }

    /**
     * @param \Lyranetwork\UpdateTokenResult $updateTokenResult
     * @return \Lyranetwork\UpdateTokenResponse
     */
    public function setUpdateTokenResult($updateTokenResult)
    {
        $this->updateTokenResult = $updateTokenResult;
        return $this;
    }
}
