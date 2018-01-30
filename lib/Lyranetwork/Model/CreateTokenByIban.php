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

class CreateTokenByIban
{
    /**
     * @var \Lyranetwork\Model\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\Model\IbanRequest $ibanRequest
     */
    private $ibanRequest = null;

    /**
     * @var \Lyranetwork\Model\CustomerRequest $customerRequest
     */
    private $customerRequest = null;

    /**
     * @return \Lyranetwork\Model\CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param \Lyranetwork\Model\CommonRequest $commonRequest
     * @return \Lyranetwork\Model\CreateTokenByIban
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\IbanRequest
     */
    public function getIbanRequest()
    {
        return $this->ibanRequest;
    }

    /**
     * @param \Lyranetwork\Model\IbanRequest $ibanRequest
     * @return \Lyranetwork\Model\CreateTokenByIban
     */
    public function setIbanRequest($ibanRequest)
    {
        $this->ibanRequest = $ibanRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\Model\CustomerRequest
     */
    public function getCustomerRequest()
    {
        return $this->customerRequest;
    }

    /**
     * @param \Lyranetwork\Model\CustomerRequest $customerRequest
     * @return \Lyranetwork\Model\CreateTokenByIban
     */
    public function setCustomerRequest($customerRequest)
    {
        $this->customerRequest = $customerRequest;
        return $this;
    }
}
