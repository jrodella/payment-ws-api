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

class VerifyThreeDSEnrollment
{
    /**
     * @var \Lyranetwork\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\PaymentRequest $paymentRequest
     */
    private $paymentRequest = null;

    /**
     * @var \Lyranetwork\CardRequest $cardRequest
     */
    private $cardRequest = null;

    /**
     * @var \Lyranetwork\TechRequest $techRequest
     */
    private $techRequest = null;

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
     * @return \Lyranetwork\VerifyThreeDSEnrollment
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\PaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * @param \Lyranetwork\PaymentRequest $paymentRequest
     * @return \Lyranetwork\VerifyThreeDSEnrollment
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\CardRequest
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }

    /**
     * @param \Lyranetwork\CardRequest $cardRequest
     * @return \Lyranetwork\VerifyThreeDSEnrollment
     */
    public function setCardRequest($cardRequest)
    {
        $this->cardRequest = $cardRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\TechRequest
     */
    public function getTechRequest()
    {
        return $this->techRequest;
    }

    /**
     * @param \Lyranetwork\TechRequest $techRequest
     * @return \Lyranetwork\VerifyThreeDSEnrollment
     */
    public function setTechRequest($techRequest)
    {
        $this->techRequest = $techRequest;
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
     * @return \Lyranetwork\VerifyThreeDSEnrollment
     */
    public function setThreeDSRequest($threeDSRequest)
    {
        $this->threeDSRequest = $threeDSRequest;
        return $this;
    }
}
