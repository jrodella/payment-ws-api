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

class UpdateToken
{
    /**
     * @var \Lyranetwork\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\QueryRequest $queryRequest
     */
    private $queryRequest = null;

    /**
     * @var \Lyranetwork\CardRequest $cardRequest
     */
    private $cardRequest = null;

    /**
     * @var \Lyranetwork\CustomerRequest $customerRequest
     */
    private $customerRequest = null;

    /**
     * @return \Lyranetwork\CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param \Lyranetwork\CommonRequest $commonRequest
     * @return \Lyranetwork\UpdateToken
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\QueryRequest
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param \Lyranetwork\QueryRequest $queryRequest
     * @return \Lyranetwork\UpdateToken
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\CardRequest
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }

    /**
     * @param \Lyranetwork\CardRequest $cardRequest
     * @return \Lyranetwork\UpdateToken
     */
    public function setCardRequest($cardRequest)
    {
        $this->cardRequest = $cardRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\CustomerRequest
     */
    public function getCustomerRequest()
    {
        return $this->customerRequest;
    }

    /**
     * @param \Lyranetwork\CustomerRequest $customerRequest
     * @return \Lyranetwork\UpdateToken
     */
    public function setCustomerRequest($customerRequest)
    {
        $this->customerRequest = $customerRequest;
        return $this;
    }
}
