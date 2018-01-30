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

class DuplicatePaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\DuplicatePaymentResult $duplicatePaymentResult
     */
    private $duplicatePaymentResult = null;

    /**
     * @return \Lyranetwork\Model\DuplicatePaymentResult
     */
    public function getDuplicatePaymentResult()
    {
        return $this->duplicatePaymentResult;
    }

    /**
     * @param \Lyranetwork\Model\DuplicatePaymentResult $duplicatePaymentResult
     * @return \Lyranetwork\Model\DuplicatePaymentResponse
     */
    public function setDuplicatePaymentResult($duplicatePaymentResult)
    {
        $this->duplicatePaymentResult = $duplicatePaymentResult;
        return $this;
    }
}
