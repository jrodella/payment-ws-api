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

class ShippingDetailsResponse
{
    /**
     * @var \Lyranetwork\CustStatus $type
     */
    private $type = null;

    /**
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * @var string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * @var string $streetNumber
     */
    private $streetNumber = null;

    /**
     * @var string $address
     */
    private $address = null;

    /**
     * @var string $address2
     */
    private $address2 = null;

    /**
     * @var string $district
     */
    private $district = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $state
     */
    private $state = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var string $deliveryCompanyName
     */
    private $deliveryCompanyName = null;

    /**
     * @var \Lyranetwork\DeliverySpeed $shippingSpeed
     */
    private $shippingSpeed = null;

    /**
     * @var \Lyranetwork\DeliveryType $shippingMethod
     */
    private $shippingMethod = null;

    /**
     * @var string $legalName
     */
    private $legalName = null;

    /**
     * @var string $identityCode
     */
    private $identityCode = null;

    /**
     * @return \Lyranetwork\CustStatus
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \Lyranetwork\CustStatus $type
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param string $district
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCompanyName()
    {
        return $this->deliveryCompanyName;
    }

    /**
     * @param string $deliveryCompanyName
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setDeliveryCompanyName($deliveryCompanyName)
    {
        $this->deliveryCompanyName = $deliveryCompanyName;
        return $this;
    }

    /**
     * @return \Lyranetwork\DeliverySpeed
     */
    public function getShippingSpeed()
    {
        return $this->shippingSpeed;
    }

    /**
     * @param \Lyranetwork\DeliverySpeed $shippingSpeed
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setShippingSpeed($shippingSpeed)
    {
        $this->shippingSpeed = $shippingSpeed;
        return $this;
    }

    /**
     * @return \Lyranetwork\DeliveryType
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * @param \Lyranetwork\DeliveryType $shippingMethod
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * @param string $legalName
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentityCode()
    {
        return $this->identityCode;
    }

    /**
     * @param string $identityCode
     * @return \Lyranetwork\ShippingDetailsResponse
     */
    public function setIdentityCode($identityCode)
    {
        $this->identityCode = $identityCode;
        return $this;
    }
}
