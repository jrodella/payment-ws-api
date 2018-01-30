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

class ShoppingCartRequest
{
    /**
     * @var int $insuranceAmount
     */
    private $insuranceAmount = null;

    /**
     * @var int $shippingAmount
     */
    private $shippingAmount = null;

    /**
     * @var int $taxAmount
     */
    private $taxAmount = null;

    /**
     * @var \Lyranetwork\Model\CartItemInfo[] $cartItemInfo
     */
    private $cartItemInfo = null;

    /**
     * @return int
     */
    public function getInsuranceAmount()
    {
        return $this->insuranceAmount;
    }

    /**
     * @param int $insuranceAmount
     * @return \Lyranetwork\Model\ShoppingCartRequest
     */
    public function setInsuranceAmount($insuranceAmount)
    {
        $this->insuranceAmount = $insuranceAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * @param int $shippingAmount
     * @return \Lyranetwork\Model\ShoppingCartRequest
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @param int $taxAmount
     * @return \Lyranetwork\Model\ShoppingCartRequest
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\CartItemInfo[]
     */
    public function getCartItemInfo()
    {
        return $this->cartItemInfo;
    }

    /**
     * @param \Lyranetwork\Model\CartItemInfo[] $cartItemInfo
     * @return \Lyranetwork\Model\ShoppingCartRequest
     */
    public function setCartItemInfo(array $cartItemInfo)
    {
        $this->cartItemInfo = $cartItemInfo;
        return $this;
    }
}
