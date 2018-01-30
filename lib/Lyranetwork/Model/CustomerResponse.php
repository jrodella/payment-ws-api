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

class CustomerResponse
{
    /**
     * @var \Lyranetwork\Model\BillingDetailsResponse $billingDetails
     */
    private $billingDetails = null;

    /**
     * @var \Lyranetwork\Model\ShippingDetailsResponse $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * @var \Lyranetwork\Model\ExtraDetailsResponse $extraDetails
     */
    private $extraDetails = null;

    /**
     * @return \Lyranetwork\Model\BillingDetailsResponse
     */
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }

    /**
     * @param \Lyranetwork\Model\BillingDetailsResponse $billingDetails
     * @return \Lyranetwork\Model\CustomerResponse
     */
    public function setBillingDetails($billingDetails)
    {
        $this->billingDetails = $billingDetails;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\ShippingDetailsResponse
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * @param \Lyranetwork\Model\ShippingDetailsResponse $shippingDetails
     * @return \Lyranetwork\Model\CustomerResponse
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\ExtraDetailsResponse
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * @param \Lyranetwork\Model\ExtraDetailsResponse $extraDetails
     * @return \Lyranetwork\Model\CustomerResponse
     */
    public function setExtraDetails($extraDetails)
    {
        $this->extraDetails = $extraDetails;
        return $this;
    }
}
