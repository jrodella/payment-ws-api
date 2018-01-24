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

class BillingDetailsResponse
{
    /**
     * @var string $reference
     */
    private $reference = null;

    /**
     * @var string $title
     */
    private $title = null;

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
     * @var string $email
     */
    private $email = null;

    /**
     * @var string $streetNumber
     */
    private $streetNumber = null;

    /**
     * @var string $address
     */
    private $address = null;

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
     * @var string $language
     */
    private $language = null;

    /**
     * @var string $cellPhoneNumber
     */
    private $cellPhoneNumber = null;

    /**
     * @var string $legalName
     */
    private $legalName = null;

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return \Lyranetwork\CustStatus
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \Lyranetwork\CustStatus $type
     * @return \Lyranetwork\BillingDetailsResponse
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
     * @return \Lyranetwork\BillingDetailsResponse
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
     * @return \Lyranetwork\BillingDetailsResponse
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
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * @return \Lyranetwork\BillingDetailsResponse
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
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * @return \Lyranetwork\BillingDetailsResponse
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
     * @return \Lyranetwork\BillingDetailsResponse
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
     * @return \Lyranetwork\BillingDetailsResponse
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
     * @return \Lyranetwork\BillingDetailsResponse
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
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getCellPhoneNumber()
    {
        return $this->cellPhoneNumber;
    }

    /**
     * @param string $cellPhoneNumber
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function setCellPhoneNumber($cellPhoneNumber)
    {
        $this->cellPhoneNumber = $cellPhoneNumber;
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
     * @return \Lyranetwork\BillingDetailsResponse
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
        return $this;
    }
}
