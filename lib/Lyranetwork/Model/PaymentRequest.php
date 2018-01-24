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

class PaymentRequest
{
    /**
     * @var string $transactionId
     */
    private $transactionId = null;

    /**
     * @var string $retryUuid
     */
    private $retryUuid = null;

    /**
     * @var int $amount
     */
    private $amount = null;

    /**
     * @var int $currency
     */
    private $currency = null;

    /**
     * @var \DateTime $expectedCaptureDate
     */
    private $expectedCaptureDate = null;

    /**
     * @var int $manualValidation
     */
    private $manualValidation = null;

    /**
     * @var string $paymentOptionCode
     */
    private $paymentOptionCode = null;

    /**
     * @var string $acquirerTransientData
     */
    private $acquirerTransientData = null;

    /**
     * @var int $firstInstallmentDelay
     */
    private $firstInstallmentDelay = null;

    /**
     * @var string $overridePaymentCinematic
     */
    private $overridePaymentCinematic = null;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return \Lyranetwork\PaymentRequest
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetryUuid()
    {
        return $this->retryUuid;
    }

    /**
     * @param string $retryUuid
     * @return \Lyranetwork\PaymentRequest
     */
    public function setRetryUuid($retryUuid)
    {
        $this->retryUuid = $retryUuid;
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
     * @return \Lyranetwork\PaymentRequest
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
     * @return \Lyranetwork\PaymentRequest
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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
     * @return \Lyranetwork\PaymentRequest
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
     * @return \Lyranetwork\PaymentRequest
     */
    public function setManualValidation($manualValidation)
    {
        $this->manualValidation = $manualValidation;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentOptionCode()
    {
        return $this->paymentOptionCode;
    }

    /**
     * @param string $paymentOptionCode
     * @return \Lyranetwork\PaymentRequest
     */
    public function setPaymentOptionCode($paymentOptionCode)
    {
        $this->paymentOptionCode = $paymentOptionCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAcquirerTransientData()
    {
        return $this->acquirerTransientData;
    }

    /**
     * @param string $acquirerTransientData
     * @return \Lyranetwork\PaymentRequest
     */
    public function setAcquirerTransientData($acquirerTransientData)
    {
        $this->acquirerTransientData = $acquirerTransientData;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstInstallmentDelay()
    {
        return $this->firstInstallmentDelay;
    }

    /**
     * @param int $firstInstallmentDelay
     * @return \Lyranetwork\PaymentRequest
     */
    public function setFirstInstallmentDelay($firstInstallmentDelay)
    {
        $this->firstInstallmentDelay = $firstInstallmentDelay;
        return $this;
    }

    /**
     * @return string
     */
    public function getOverridePaymentCinematic()
    {
        return $this->overridePaymentCinematic;
    }

    /**
     * @param string $overridePaymentCinematic
     * @return \Lyranetwork\PaymentRequest
     */
    public function setOverridePaymentCinematic($overridePaymentCinematic)
    {
        $this->overridePaymentCinematic = $overridePaymentCinematic;
        return $this;
    }
}
