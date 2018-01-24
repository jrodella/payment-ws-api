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

class ValidatePaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\ValidatePaymentResult $validatePaymentResult
     */
    private $validatePaymentResult = null;

    /**
     * @return \Lyranetwork\ValidatePaymentResult
     */
    public function getValidatePaymentResult()
    {
        return $this->validatePaymentResult;
    }

    /**
     * @param \Lyranetwork\ValidatePaymentResult $validatePaymentResult
     * @return \Lyranetwork\ValidatePaymentResponse
     */
    public function setValidatePaymentResult($validatePaymentResult)
    {
        $this->validatePaymentResult = $validatePaymentResult;
        return $this;
    }
}
