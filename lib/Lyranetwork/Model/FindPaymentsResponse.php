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

class FindPaymentsResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\FindPaymentsResult $findPaymentsResult
     */
    private $findPaymentsResult = null;

    /**
     * @return \Lyranetwork\FindPaymentsResult
     */
    public function getFindPaymentsResult()
    {
        return $this->findPaymentsResult;
    }

    /**
     * @param \Lyranetwork\FindPaymentsResult $findPaymentsResult
     * @return \Lyranetwork\FindPaymentsResponse
     */
    public function setFindPaymentsResult($findPaymentsResult)
    {
        $this->findPaymentsResult = $findPaymentsResult;
        return $this;
    }
}
