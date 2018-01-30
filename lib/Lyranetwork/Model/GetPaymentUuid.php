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

class GetPaymentUuid
{
    /**
     * @var \Lyranetwork\Model\LegacyTransactionKeyRequest $legacyTransactionKeyRequest
     */
    private $legacyTransactionKeyRequest = null;

    /**
     * @return \Lyranetwork\Model\LegacyTransactionKeyRequest
     */
    public function getLegacyTransactionKeyRequest()
    {
        return $this->legacyTransactionKeyRequest;
    }

    /**
     * @param \Lyranetwork\Model\LegacyTransactionKeyRequest $legacyTransactionKeyRequest
     * @return \Lyranetwork\Model\GetPaymentUuid
     */
    public function setLegacyTransactionKeyRequest($legacyTransactionKeyRequest)
    {
        $this->legacyTransactionKeyRequest = $legacyTransactionKeyRequest;
        return $this;
    }
}
