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

class CustomerRequest
{
    /**
     * @var \Lyranetwork\BillingDetailsRequest $billingDetails
     */
    private $billingDetails = null;

    /**
     * @var \Lyranetwork\ShippingDetailsRequest $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * @var \Lyranetwork\ExtraDetailsRequest $extraDetails
     */
    private $extraDetails = null;

    /**
     * @return \Lyranetwork\BillingDetailsRequest
     */
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }

    /**
     * @param \Lyranetwork\BillingDetailsRequest $billingDetails
     * @return \Lyranetwork\CustomerRequest
     */
    public function setBillingDetails($billingDetails)
    {
        $this->billingDetails = $billingDetails;
        return $this;
    }

    /**
     * @return \Lyranetwork\ShippingDetailsRequest
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * @param \Lyranetwork\ShippingDetailsRequest $shippingDetails
     * @return \Lyranetwork\CustomerRequest
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    /**
     * @return \Lyranetwork\ExtraDetailsRequest
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * @param \Lyranetwork\ExtraDetailsRequest $extraDetails
     * @return \Lyranetwork\CustomerRequest
     */
    public function setExtraDetails($extraDetails)
    {
        $this->extraDetails = $extraDetails;
        return $this;
    }
}
