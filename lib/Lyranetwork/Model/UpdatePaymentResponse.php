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

class UpdatePaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\UpdatePaymentResult $updatePaymentResult
     */
    private $updatePaymentResult = null;

    /**
     * @return \Lyranetwork\UpdatePaymentResult
     */
    public function getUpdatePaymentResult()
    {
        return $this->updatePaymentResult;
    }

    /**
     * @param \Lyranetwork\UpdatePaymentResult $updatePaymentResult
     * @return \Lyranetwork\UpdatePaymentResponse
     */
    public function setUpdatePaymentResult($updatePaymentResult)
    {
        $this->updatePaymentResult = $updatePaymentResult;
        return $this;
    }
}
