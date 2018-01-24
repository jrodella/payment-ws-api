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

class CardRequest
{
    /**
     * @var string $number
     */
    private $number = null;

    /**
     * @var string $scheme
     */
    private $scheme = null;

    /**
     * @var int $expiryMonth
     */
    private $expiryMonth = null;

    /**
     * @var int $expiryYear
     */
    private $expiryYear = null;

    /**
     * @var string $cardSecurityCode
     */
    private $cardSecurityCode = null;

    /**
     * @var \DateTime $cardHolderBirthDay
     */
    private $cardHolderBirthDay = null;

    /**
     * @var string $paymentToken
     */
    private $paymentToken = null;

    /**
     * @var string $cardHolderName
     */
    private $cardHolderName = null;

    /**
     * @var string $proofOfIdType
     */
    private $proofOfIdType = null;

    /**
     * @var string $proofOfIdNumber
     */
    private $proofOfIdNumber = null;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return \Lyranetwork\CardRequest
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     * @return \Lyranetwork\CardRequest
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * @param int $expiryMonth
     * @return \Lyranetwork\CardRequest
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * @param int $expiryYear
     * @return \Lyranetwork\CardRequest
     */
    public function setExpiryYear($expiryYear)
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardSecurityCode()
    {
        return $this->cardSecurityCode;
    }

    /**
     * @param string $cardSecurityCode
     * @return \Lyranetwork\CardRequest
     */
    public function setCardSecurityCode($cardSecurityCode)
    {
        $this->cardSecurityCode = $cardSecurityCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCardHolderBirthDay()
    {
        if ($this->cardHolderBirthDay == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->cardHolderBirthDay);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $cardHolderBirthDay
     * @return \Lyranetwork\CardRequest
     */
    public function setCardHolderBirthDay(\DateTime $cardHolderBirthDay = null)
    {
        if ($cardHolderBirthDay == null) {
            $this->cardHolderBirthDay = null;
        } else {
            $this->cardHolderBirthDay = $cardHolderBirthDay->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }

    /**
     * @param string $paymentToken
     * @return \Lyranetwork\CardRequest
     */
    public function setPaymentToken($paymentToken)
    {
        $this->paymentToken = $paymentToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * @param string $cardHolderName
     * @return \Lyranetwork\CardRequest
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
        return $this;
    }

    /**
     * @return string
     */
    public function getProofOfIdType()
    {
        return $this->proofOfIdType;
    }

    /**
     * @param string $proofOfIdType
     * @return \Lyranetwork\CardRequest
     */
    public function setProofOfIdType($proofOfIdType)
    {
        $this->proofOfIdType = $proofOfIdType;
        return $this;
    }

    /**
     * @return string
     */
    public function getProofOfIdNumber()
    {
        return $this->proofOfIdNumber;
    }

    /**
     * @param string $proofOfIdNumber
     * @return \Lyranetwork\CardRequest
     */
    public function setProofOfIdNumber($proofOfIdNumber)
    {
        $this->proofOfIdNumber = $proofOfIdNumber;
        return $this;
    }
}
