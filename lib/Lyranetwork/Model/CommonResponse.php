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

class CommonResponse
{
    /**
     * @var int $responseCode
     */
    private $responseCode = null;

    /**
     * @var string $responseCodeDetail
     */
    private $responseCodeDetail = null;

    /**
     * @var string $transactionStatusLabel
     */
    private $transactionStatusLabel = null;

    /**
     * @var string $shopId
     */
    private $shopId = null;

    /**
     * @var string $paymentSource
     */
    private $paymentSource = null;

    /**
     * @var \DateTime $submissionDate
     */
    private $submissionDate = null;

    /**
     * @var string $contractNumber
     */
    private $contractNumber = null;

    /**
     * @var string $paymentToken
     */
    private $paymentToken = null;

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @param int $responseCode
     * @return \Lyranetwork\CommonResponse
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseCodeDetail()
    {
        return $this->responseCodeDetail;
    }

    /**
     * @param string $responseCodeDetail
     * @return \Lyranetwork\CommonResponse
     */
    public function setResponseCodeDetail($responseCodeDetail)
    {
        $this->responseCodeDetail = $responseCodeDetail;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionStatusLabel()
    {
        return $this->transactionStatusLabel;
    }

    /**
     * @param string $transactionStatusLabel
     * @return \Lyranetwork\CommonResponse
     */
    public function setTransactionStatusLabel($transactionStatusLabel)
    {
        $this->transactionStatusLabel = $transactionStatusLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param string $shopId
     * @return \Lyranetwork\CommonResponse
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentSource()
    {
        return $this->paymentSource;
    }

    /**
     * @param string $paymentSource
     * @return \Lyranetwork\CommonResponse
     */
    public function setPaymentSource($paymentSource)
    {
        $this->paymentSource = $paymentSource;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSubmissionDate()
    {
        if ($this->submissionDate == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->submissionDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $submissionDate
     * @return \Lyranetwork\CommonResponse
     */
    public function setSubmissionDate(\DateTime $submissionDate = null)
    {
        if ($submissionDate == null) {
            $this->submissionDate = null;
        } else {
            $this->submissionDate = $submissionDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * @param string $contractNumber
     * @return \Lyranetwork\CommonResponse
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;
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
     * @return \Lyranetwork\CommonResponse
     */
    public function setPaymentToken($paymentToken)
    {
        $this->paymentToken = $paymentToken;
        return $this;
    }
}
