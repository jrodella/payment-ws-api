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

class CustomerResponse
{
    /**
     * @var \Lyranetwork\BillingDetailsResponse $billingDetails
     */
    private $billingDetails = null;

    /**
     * @var \Lyranetwork\ShippingDetailsResponse $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * @var \Lyranetwork\ExtraDetailsResponse $extraDetails
     */
    private $extraDetails = null;

    /**
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }

    /**
     * @param \Lyranetwork\BillingDetailsResponse $billingDetails
     * @return \Lyranetwork\CustomerResponse
     */
    public function setBillingDetails($billingDetails)
    {
        $this->billingDetails = $billingDetails;
        return $this;
    }

    /**
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * @param \Lyranetwork\ShippingDetailsResponse $shippingDetails
     * @return \Lyranetwork\CustomerResponse
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    /**
     * @return \Lyranetwork\ExtraDetailsResponse
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * @param \Lyranetwork\ExtraDetailsResponse $extraDetails
     * @return \Lyranetwork\CustomerResponse
     */
    public function setExtraDetails($extraDetails)
    {
        $this->extraDetails = $extraDetails;
        return $this;
    }
}
