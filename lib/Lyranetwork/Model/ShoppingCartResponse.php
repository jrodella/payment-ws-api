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

class ShoppingCartResponse
{
    /**
     * @var \Lyranetwork\CartItemInfo[] $cartItemInfo
     */
    private $cartItemInfo = null;

    /**
     * @return \Lyranetwork\CartItemInfo[]
     */
    public function getCartItemInfo()
    {
        return $this->cartItemInfo;
    }

    /**
     * @param \Lyranetwork\CartItemInfo[] $cartItemInfo
     * @return \Lyranetwork\ShoppingCartResponse
     */
    public function setCartItemInfo(array $cartItemInfo = null)
    {
        $this->cartItemInfo = $cartItemInfo;
        return $this;
    }
}
