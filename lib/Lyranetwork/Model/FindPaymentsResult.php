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

class FindPaymentsResult
{
    /**
     * @var \Lyranetwork\CommonResponse $commonResponse
     */
    private $commonResponse = null;

    /**
     * @var \Lyranetwork\OrderResponse $orderResponse
     */
    private $orderResponse = null;

    /**
     * @var \Lyranetwork\TransactionItem $transactionItem
     */
    private $transactionItem = null;

    /**
     * @return \Lyranetwork\CommonResponse
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param \Lyranetwork\CommonResponse $commonResponse
     * @return \Lyranetwork\FindPaymentsResult
     */
    public function setCommonResponse($commonResponse)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\OrderResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }

    /**
     * @param \Lyranetwork\OrderResponse $orderResponse
     * @return \Lyranetwork\FindPaymentsResult
     */
    public function setOrderResponse($orderResponse)
    {
        $this->orderResponse = $orderResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\TransactionItem
     */
    public function getTransactionItem()
    {
        return $this->transactionItem;
    }

    /**
     * @param \Lyranetwork\TransactionItem $transactionItem
     * @return \Lyranetwork\FindPaymentsResult
     */
    public function setTransactionItem($transactionItem)
    {
        $this->transactionItem = $transactionItem;
        return $this;
    }
}
