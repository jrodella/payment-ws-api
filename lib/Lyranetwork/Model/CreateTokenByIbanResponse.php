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

class CreateTokenByIbanResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\CreateTokenByIbanResult $createTokenByIbanResult
     */
    private $createTokenByIbanResult = null;

    /**
     * @return \Lyranetwork\Model\CreateTokenByIbanResult
     */
    public function getCreateTokenByIbanResult()
    {
        return $this->createTokenByIbanResult;
    }

    /**
     * @param \Lyranetwork\Model\CreateTokenByIbanResult $createTokenByIbanResult
     * @return \Lyranetwork\Model\CreateTokenByIbanResponse
     */
    public function setCreateTokenByIbanResult($createTokenByIbanResult)
    {
        $this->createTokenByIbanResult = $createTokenByIbanResult;
        return $this;
    }
}
