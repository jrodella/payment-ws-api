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

class GetPaymentDetails
{
    /**
     * @var \Lyranetwork\QueryRequest $queryRequest
     */
    private $queryRequest = null;

    /**
     * @var \Lyranetwork\ExtendedResponseRequest $extendedResponseRequest
     */
    private $extendedResponseRequest = null;

    /**
     * @return \Lyranetwork\QueryRequest
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param \Lyranetwork\QueryRequest $queryRequest
     * @return \Lyranetwork\GetPaymentDetails
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\ExtendedResponseRequest
     */
    public function getExtendedResponseRequest()
    {
        return $this->extendedResponseRequest;
    }

    /**
     * @param \Lyranetwork\ExtendedResponseRequest $extendedResponseRequest
     * @return \Lyranetwork\GetPaymentDetails
     */
    public function setExtendedResponseRequest($extendedResponseRequest)
    {
        $this->extendedResponseRequest = $extendedResponseRequest;
        return $this;
    }
}
