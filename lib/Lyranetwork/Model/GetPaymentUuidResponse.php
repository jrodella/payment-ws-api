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

class GetPaymentUuidResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\LegacyTransactionKeyResult $legacyTransactionKeyResult
     */
    private $legacyTransactionKeyResult = null;

    /**
     * @return \Lyranetwork\LegacyTransactionKeyResult
     */
    public function getLegacyTransactionKeyResult()
    {
        return $this->legacyTransactionKeyResult;
    }

    /**
     * @param \Lyranetwork\LegacyTransactionKeyResult $legacyTransactionKeyResult
     * @return \Lyranetwork\GetPaymentUuidResponse
     */
    public function setLegacyTransactionKeyResult($legacyTransactionKeyResult)
    {
        $this->legacyTransactionKeyResult = $legacyTransactionKeyResult;
        return $this;
    }
}
