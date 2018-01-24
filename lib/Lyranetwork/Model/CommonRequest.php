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
namespace Lyranetwork\Model;

class CommonRequest
{
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
     * @var string $comment
     */
    private $comment = null;

    /**
     * @return string
     */
    public function getPaymentSource()
    {
        return $this->paymentSource;
    }

    /**
     * @param string $paymentSource
     * @return \Lyranetwork\CommonRequest
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
     * @return \Lyranetwork\CommonRequest
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
     * @return \Lyranetwork\CommonRequest
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return \Lyranetwork\CommonRequest
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }
}
