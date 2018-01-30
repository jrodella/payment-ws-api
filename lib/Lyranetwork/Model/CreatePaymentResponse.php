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

class CreatePaymentResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\CreatePaymentResult $createPaymentResult
     */
    private $createPaymentResult = null;

    /**
     * @return \Lyranetwork\Model\CreatePaymentResult
     */
    public function getCreatePaymentResult()
    {
        return $this->createPaymentResult;
    }

    /**
     * @param \Lyranetwork\Model\CreatePaymentResult $createPaymentResult
     * @return \Lyranetwork\Model\CreatePaymentResponse
     */
    public function setCreatePaymentResult($createPaymentResult)
    {
        $this->createPaymentResult = $createPaymentResult;
        return $this;
    }
}
