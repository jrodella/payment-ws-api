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

class UpdatePaymentDetailsResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\UpdatePaymentDetailsResult $updatePaymentDetailsResult
     */
    private $updatePaymentDetailsResult = null;

    /**
     * @return \Lyranetwork\UpdatePaymentDetailsResult
     */
    public function getUpdatePaymentDetailsResult()
    {
        return $this->updatePaymentDetailsResult;
    }

    /**
     * @param \Lyranetwork\UpdatePaymentDetailsResult $updatePaymentDetailsResult
     * @return \Lyranetwork\UpdatePaymentDetailsResponse
     */
    public function setUpdatePaymentDetailsResult($updatePaymentDetailsResult)
    {
        $this->updatePaymentDetailsResult = $updatePaymentDetailsResult;
        return $this;
    }
}
