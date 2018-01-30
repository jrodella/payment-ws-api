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

class CartItemInfo
{
    /**
     * @var string $productLabel
     */
    private $productLabel = null;

    /**
     * @var \Lyranetwork\Model\ProductType $productType
     */
    private $productType = null;

    /**
     * @var string $productRef
     */
    private $productRef = null;

    /**
     * @var int $productQty
     */
    private $productQty = null;

    /**
     * @var string $productAmount
     */
    private $productAmount = null;

    /**
     * @var string $productVat
     */
    private $productVat = null;

    /**
     * @var string $productExtId
     */
    private $productExtId = null;

    /**
     * @return string
     */
    public function getProductLabel()
    {
        return $this->productLabel;
    }

    /**
     * @param string $productLabel
     * @return \Lyranetwork\Model\CartItemInfo
     */
    public function setProductLabel($productLabel)
    {
        $this->productLabel = $productLabel;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\ProductType
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param \Lyranetwork\Model\ProductType $productType
     * @return \Lyranetwork\Model\CartItemInfo
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductRef()
    {
        return $this->productRef;
    }

    /**
     * @param string $productRef
     * @return \Lyranetwork\Model\CartItemInfo
     */
    public function setProductRef($productRef)
    {
        $this->productRef = $productRef;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductQty()
    {
        return $this->productQty;
    }

    /**
     * @param int $productQty
     * @return \Lyranetwork\Model\CartItemInfo
     */
    public function setProductQty($productQty)
    {
        $this->productQty = $productQty;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductAmount()
    {
        return $this->productAmount;
    }

    /**
     * @param string $productAmount
     * @return \Lyranetwork\Model\CartItemInfo
     */
    public function setProductAmount($productAmount)
    {
        $this->productAmount = $productAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductVat()
    {
        return $this->productVat;
    }

    /**
     * @param string $productVat
     * @return \Lyranetwork\Model\CartItemInfo
     */
    public function setProductVat($productVat)
    {
        $this->productVat = $productVat;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductExtId()
    {
        return $this->productExtId;
    }

    /**
     * @param string $productExtId
     * @return \Lyranetwork\Model\CartItemInfo
     */
    public function setProductExtId($productExtId)
    {
        $this->productExtId = $productExtId;
        return $this;
    }
}
