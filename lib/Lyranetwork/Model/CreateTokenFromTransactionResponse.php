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

class CreateTokenFromTransactionResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\CreateTokenFromTransactionResult $createTokenFromTransactionResult
     */
    private $createTokenFromTransactionResult = null;

    /**
     * @return \Lyranetwork\CreateTokenFromTransactionResult
     */
    public function getCreateTokenFromTransactionResult()
    {
        return $this->createTokenFromTransactionResult;
    }

    /**
     * @param \Lyranetwork\CreateTokenFromTransactionResult $createTokenFromTransactionResult
     * @return \Lyranetwork\CreateTokenFromTransactionResponse
     */
    public function setCreateTokenFromTransactionResult($createTokenFromTransactionResult)
    {
        $this->createTokenFromTransactionResult = $createTokenFromTransactionResult;
        return $this;
    }
}
