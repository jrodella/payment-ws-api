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

class UpdatePaymentDetails
{
    /**
     * @var \Lyranetwork\QueryRequest $queryRequest
     */
    private $queryRequest = null;

    /**
     * @var \Lyranetwork\ShoppingCartRequest $shoppingCartRequest
     */
    private $shoppingCartRequest = null;

    /**
     * @return \Lyranetwork\QueryRequest
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param \Lyranetwork\QueryRequest $queryRequest
     * @return \Lyranetwork\UpdatePaymentDetails
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\ShoppingCartRequest
     */
    public function getShoppingCartRequest()
    {
        return $this->shoppingCartRequest;
    }

    /**
     * @param \Lyranetwork\ShoppingCartRequest $shoppingCartRequest
     * @return \Lyranetwork\UpdatePaymentDetails
     */
    public function setShoppingCartRequest($shoppingCartRequest)
    {
        $this->shoppingCartRequest = $shoppingCartRequest;
        return $this;
    }
}
