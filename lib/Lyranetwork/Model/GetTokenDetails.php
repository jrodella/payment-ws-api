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

class GetTokenDetails
{
    /**
     * @var \Lyranetwork\QueryRequest $queryRequest
     */
    private $queryRequest = null;

    /**
     * @return \Lyranetwork\QueryRequest
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param \Lyranetwork\QueryRequest $queryRequest
     * @return \Lyranetwork\GetTokenDetails
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }
}
