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

class GetPaymentDetails
{
    /**
     * @var \Lyranetwork\Model\QueryRequest $queryRequest
     */
    private $queryRequest = null;

    /**
     * @var \Lyranetwork\Model\ExtendedResponseRequest $extendedResponseRequest
     */
    private $extendedResponseRequest = null;

    /**
     * @return \Lyranetwork\Model\QueryRequest
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param \Lyranetwork\Model\QueryRequest $queryRequest
     * @return \Lyranetwork\Model\GetPaymentDetails
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\ExtendedResponseRequest
     */
    public function getExtendedResponseRequest()
    {
        return $this->extendedResponseRequest;
    }

    /**
     * @param \Lyranetwork\Model\ExtendedResponseRequest $extendedResponseRequest
     * @return \Lyranetwork\Model\GetPaymentDetails
     */
    public function setExtendedResponseRequest($extendedResponseRequest)
    {
        $this->extendedResponseRequest = $extendedResponseRequest;
        return $this;
    }
}
