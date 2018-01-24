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

class ExtendedResponseRequest
{
    /**
     * @var boolean $isNsuRequested
     */
    private $isNsuRequested = null;

    /**
     * @var boolean $isWalletRequested
     */
    private $isWalletRequested = null;

    /**
     * @return boolean
     */
    public function getIsNsuRequested()
    {
        return $this->isNsuRequested;
    }

    /**
     * @param boolean $isNsuRequested
     * @return \Lyranetwork\ExtendedResponseRequest
     */
    public function setIsNsuRequested($isNsuRequested)
    {
        $this->isNsuRequested = $isNsuRequested;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWalletRequested()
    {
        return $this->isWalletRequested;
    }

    /**
     * @param boolean $isWalletRequested
     * @return \Lyranetwork\ExtendedResponseRequest
     */
    public function setIsWalletRequested($isWalletRequested)
    {
        $this->isWalletRequested = $isWalletRequested;
        return $this;
    }
}
