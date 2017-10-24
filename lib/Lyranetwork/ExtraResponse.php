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
namespace Lyranetwork;

class ExtraResponse
{
    /**
     * @var string $paymentOptionCode
     */
    private $paymentOptionCode = null;

    /**
     * @var int $paymentOptionOccNumber
     */
    private $paymentOptionOccNumber = null;

    /**
     * @var string $boletoPdfUrl
     */
    private $boletoPdfUrl = null;

    /**
     * @return string
     */
    public function getPaymentOptionCode()
    {
        return $this->paymentOptionCode;
    }

    /**
     * @param string $paymentOptionCode
     * @return \Lyranetwork\ExtraResponse
     */
    public function setPaymentOptionCode($paymentOptionCode)
    {
        $this->paymentOptionCode = $paymentOptionCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentOptionOccNumber()
    {
        return $this->paymentOptionOccNumber;
    }

    /**
     * @param int $paymentOptionOccNumber
     * @return \Lyranetwork\ExtraResponse
     */
    public function setPaymentOptionOccNumber($paymentOptionOccNumber)
    {
        $this->paymentOptionOccNumber = $paymentOptionOccNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoletoPdfUrl()
    {
        return $this->boletoPdfUrl;
    }

    /**
     * @param string $boletoPdfUrl
     * @return \Lyranetwork\ExtraResponse
     */
    public function setBoletoPdfUrl($boletoPdfUrl)
    {
        $this->boletoPdfUrl = $boletoPdfUrl;
        return $this;
    }
}
