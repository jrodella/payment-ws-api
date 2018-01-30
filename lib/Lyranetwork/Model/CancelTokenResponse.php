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

class CancelTokenResponse extends WsResponse
{
    /**
     * @var \Lyranetwork\Model\CancelTokenResult $cancelTokenResult
     */
    private $cancelTokenResult = null;

    /**
     * @return \Lyranetwork\Model\CancelTokenResult
     */
    public function getCancelTokenResult()
    {
        return $this->cancelTokenResult;
    }

    /**
     * @param \Lyranetwork\Model\CancelTokenResult $cancelTokenResult
     * @return \Lyranetwork\Model\CancelTokenResponse
     */
    public function setCancelTokenResult($cancelTokenResult)
    {
        $this->cancelTokenResult = $cancelTokenResult;
        return $this;
    }
}
