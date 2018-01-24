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

class CheckThreeDSAuthentication
{
    /**
     * @var \Lyranetwork\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\ThreeDSRequest $threeDSRequest
     */
    private $threeDSRequest = null;

    /**
     * @return \Lyranetwork\CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param \Lyranetwork\CommonRequest $commonRequest
     * @return \Lyranetwork\CheckThreeDSAuthentication
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\ThreeDSRequest
     */
    public function getThreeDSRequest()
    {
        return $this->threeDSRequest;
    }

    /**
     * @param \Lyranetwork\ThreeDSRequest $threeDSRequest
     * @return \Lyranetwork\CheckThreeDSAuthentication
     */
    public function setThreeDSRequest($threeDSRequest)
    {
        $this->threeDSRequest = $threeDSRequest;
        return $this;
    }
}
