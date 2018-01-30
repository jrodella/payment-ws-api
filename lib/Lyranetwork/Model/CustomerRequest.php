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

class CustomerRequest
{
    /**
     * @var \Lyranetwork\Model\BillingDetailsRequest $billingDetails
     */
    private $billingDetails = null;

    /**
     * @var \Lyranetwork\Model\ShippingDetailsRequest $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * @var \Lyranetwork\Model\ExtraDetailsRequest $extraDetails
     */
    private $extraDetails = null;

    /**
     * @return \Lyranetwork\Model\BillingDetailsRequest
     */
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }

    /**
     * @param \Lyranetwork\Model\BillingDetailsRequest $billingDetails
     * @return \Lyranetwork\Model\CustomerRequest
     */
    public function setBillingDetails($billingDetails)
    {
        $this->billingDetails = $billingDetails;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\ShippingDetailsRequest
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * @param \Lyranetwork\Model\ShippingDetailsRequest $shippingDetails
     * @return \Lyranetwork\Model\CustomerRequest
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\ExtraDetailsRequest
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * @param \Lyranetwork\Model\ExtraDetailsRequest $extraDetails
     * @return \Lyranetwork\Model\CustomerRequest
     */
    public function setExtraDetails($extraDetails)
    {
        $this->extraDetails = $extraDetails;
        return $this;
    }
}
