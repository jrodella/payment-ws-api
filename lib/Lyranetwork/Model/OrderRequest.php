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

class OrderRequest
{
    /**
     * @var string $orderId
     */
    private $orderId = null;

    /**
     * @var \Lyranetwork\ExtInfo[] $extInfo
     */
    private $extInfo = null;

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return \Lyranetwork\OrderRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Lyranetwork\ExtInfo[]
     */
    public function getExtInfo()
    {
        return $this->extInfo;
    }

    /**
     * @param \Lyranetwork\ExtInfo[] $extInfo
     * @return \Lyranetwork\OrderRequest
     */
    public function setExtInfo(array $extInfo = null)
    {
        $this->extInfo = $extInfo;
        return $this;
    }
}
