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

class PaymentResponse
{
    /**
     * @var string $transactionId
     */
    private $transactionId = null;

    /**
     * @var int $amount
     */
    private $amount = null;

    /**
     * @var int $currency
     */
    private $currency = null;

    /**
     * @var int $effectiveAmount
     */
    private $effectiveAmount = null;

    /**
     * @var int $effectiveCurrency
     */
    private $effectiveCurrency = null;

    /**
     * @var \DateTime $expectedCaptureDate
     */
    private $expectedCaptureDate = null;

    /**
     * @var int $manualValidation
     */
    private $manualValidation = null;

    /**
     * @var int $operationType
     */
    private $operationType = null;

    /**
     * @var \DateTime $creationDate
     */
    private $creationDate = null;

    /**
     * @var string $externalTransactionId
     */
    private $externalTransactionId = null;

    /**
     * @var string $liabilityShift
     */
    private $liabilityShift = null;

    /**
     * @var string $transactionUuid
     */
    private $transactionUuid = null;

    /**
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * @var \Lyranetwork\PaymentType $paymentType
     */
    private $paymentType = null;

    /**
     * @var string $nsu
     */
    private $nsu = null;

    /**
     * @var int $paymentError
     */
    private $paymentError = null;

    /**
     * @var string $wallet
     */
    private $wallet = null;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return \Lyranetwork\PaymentResponse
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return \Lyranetwork\PaymentResponse
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param int $currency
     * @return \Lyranetwork\PaymentResponse
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return int
     */
    public function getEffectiveAmount()
    {
        return $this->effectiveAmount;
    }

    /**
     * @param int $effectiveAmount
     * @return \Lyranetwork\PaymentResponse
     */
    public function setEffectiveAmount($effectiveAmount)
    {
        $this->effectiveAmount = $effectiveAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getEffectiveCurrency()
    {
        return $this->effectiveCurrency;
    }

    /**
     * @param int $effectiveCurrency
     * @return \Lyranetwork\PaymentResponse
     */
    public function setEffectiveCurrency($effectiveCurrency)
    {
        $this->effectiveCurrency = $effectiveCurrency;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedCaptureDate()
    {
        if ($this->expectedCaptureDate == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->expectedCaptureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $expectedCaptureDate
     * @return \Lyranetwork\PaymentResponse
     */
    public function setExpectedCaptureDate(\DateTime $expectedCaptureDate = null)
    {
        if ($expectedCaptureDate == null) {
            $this->expectedCaptureDate = null;
        } else {
            $this->expectedCaptureDate = $expectedCaptureDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getManualValidation()
    {
        return $this->manualValidation;
    }

    /**
     * @param int $manualValidation
     * @return \Lyranetwork\PaymentResponse
     */
    public function setManualValidation($manualValidation)
    {
        $this->manualValidation = $manualValidation;
        return $this;
    }

    /**
     * @return int
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @param int $operationType
     * @return \Lyranetwork\PaymentResponse
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        if ($this->creationDate == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->creationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $creationDate
     * @return \Lyranetwork\PaymentResponse
     */
    public function setCreationDate(\DateTime $creationDate = null)
    {
        if ($creationDate == null) {
            $this->creationDate = null;
        } else {
            $this->creationDate = $creationDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalTransactionId()
    {
        return $this->externalTransactionId;
    }

    /**
     * @param string $externalTransactionId
     * @return \Lyranetwork\PaymentResponse
     */
    public function setExternalTransactionId($externalTransactionId)
    {
        $this->externalTransactionId = $externalTransactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLiabilityShift()
    {
        return $this->liabilityShift;
    }

    /**
     * @param string $liabilityShift
     * @return \Lyranetwork\PaymentResponse
     */
    public function setLiabilityShift($liabilityShift)
    {
        $this->liabilityShift = $liabilityShift;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionUuid()
    {
        return $this->transactionUuid;
    }

    /**
     * @param string $transactionUuid
     * @return \Lyranetwork\PaymentResponse
     */
    public function setTransactionUuid($transactionUuid)
    {
        $this->transactionUuid = $transactionUuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @param int $sequenceNumber
     * @return \Lyranetwork\PaymentResponse
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * @return \Lyranetwork\PaymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param \Lyranetwork\PaymentType $paymentType
     * @return \Lyranetwork\PaymentResponse
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getNsu()
    {
        return $this->nsu;
    }

    /**
     * @param string $nsu
     * @return \Lyranetwork\PaymentResponse
     */
    public function setNsu($nsu)
    {
        $this->nsu = $nsu;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentError()
    {
        return $this->paymentError;
    }

    /**
     * @param int $paymentError
     * @return \Lyranetwork\PaymentResponse
     */
    public function setPaymentError($paymentError)
    {
        $this->paymentError = $paymentError;
        return $this;
    }

    /**
     * @return string
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * @param string $wallet
     * @return \Lyranetwork\PaymentResponse
     */
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;
        return $this;
    }
}
