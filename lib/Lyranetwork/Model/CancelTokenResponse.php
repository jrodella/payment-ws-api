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
     * @var \Lyranetwork\CancelTokenResult $cancelTokenResult
     */
    private $cancelTokenResult = null;

    /**
     * @return \Lyranetwork\CancelTokenResult
     */
    public function getCancelTokenResult()
    {
        return $this->cancelTokenResult;
    }

    /**
     * @param \Lyranetwork\CancelTokenResult $cancelTokenResult
     * @return \Lyranetwork\CancelTokenResponse
     */
    public function setCancelTokenResult($cancelTokenResult)
    {
        $this->cancelTokenResult = $cancelTokenResult;
        return $this;
    }
}
