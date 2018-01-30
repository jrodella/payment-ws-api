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
     * @var \Lyranetwork\Model\CommonResponse $commonResponse
     */
    private $commonResponse = null;

    /**
     * @var \Lyranetwork\Model\OrderResponse $orderResponse
     */
    private $orderResponse = null;

    /**
     * @var \Lyranetwork\Model\TransactionItem $transactionItem
     */
    private $transactionItem = null;

    /**
     * @return \Lyranetwork\Model\CommonResponse
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param \Lyranetwork\Model\CommonResponse $commonResponse
     * @return \Lyranetwork\Model\FindPaymentsResult
     */
    public function setCommonResponse($commonResponse)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\OrderResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }

    /**
     * @param \Lyranetwork\Model\OrderResponse $orderResponse
     * @return \Lyranetwork\Model\FindPaymentsResult
     */
    public function setOrderResponse($orderResponse)
    {
        $this->orderResponse = $orderResponse;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\TransactionItem
     */
    public function getTransactionItem()
    {
        return $this->transactionItem;
    }

    /**
     * @param \Lyranetwork\Model\TransactionItem $transactionItem
     * @return \Lyranetwork\Model\FindPaymentsResult
     */
    public function setTransactionItem($transactionItem)
    {
        $this->transactionItem = $transactionItem;
        return $this;
    }
}
