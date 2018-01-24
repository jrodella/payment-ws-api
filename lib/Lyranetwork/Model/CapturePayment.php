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

class CapturePayment
{
    /**
     * @var \Lyranetwork\SettlementRequest $settlementRequest
     */
    private $settlementRequest = null;

    /**
     * @return \Lyranetwork\SettlementRequest
     */
    public function getSettlementRequest()
    {
        return $this->settlementRequest;
    }

    /**
     * @param \Lyranetwork\SettlementRequest $settlementRequest
     * @return \Lyranetwork\CapturePayment
     */
    public function setSettlementRequest($settlementRequest)
    {
        $this->settlementRequest = $settlementRequest;
        return $this;
    }
}
