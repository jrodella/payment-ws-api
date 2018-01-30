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

class GetPaymentUuidResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\LegacyTransactionKeyResult $legacyTransactionKeyResult
     */
    private $legacyTransactionKeyResult = null;

    /**
     * @return \Lyranetwork\Model\LegacyTransactionKeyResult
     */
    public function getLegacyTransactionKeyResult()
    {
        return $this->legacyTransactionKeyResult;
    }

    /**
     * @param \Lyranetwork\Model\LegacyTransactionKeyResult $legacyTransactionKeyResult
     * @return \Lyranetwork\Model\GetPaymentUuidResponse
     */
    public function setLegacyTransactionKeyResult($legacyTransactionKeyResult)
    {
        $this->legacyTransactionKeyResult = $legacyTransactionKeyResult;
        return $this;
    }
}
