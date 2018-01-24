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

class CreateTokenByIban
{
    /**
     * @var \Lyranetwork\CommonRequest $commonRequest
     */
    private $commonRequest = null;

    /**
     * @var \Lyranetwork\IbanRequest $ibanRequest
     */
    private $ibanRequest = null;

    /**
     * @var \Lyranetwork\CustomerRequest $customerRequest
     */
    private $customerRequest = null;

    /**
     * @return \Lyranetwork\CommonRequest
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param \Lyranetwork\CommonRequest $commonRequest
     * @return \Lyranetwork\CreateTokenByIban
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\IbanRequest
     */
    public function getIbanRequest()
    {
        return $this->ibanRequest;
    }

    /**
     * @param \Lyranetwork\IbanRequest $ibanRequest
     * @return \Lyranetwork\CreateTokenByIban
     */
    public function setIbanRequest($ibanRequest)
    {
        $this->ibanRequest = $ibanRequest;
        return $this;
    }

    /**
     * @return \Lyranetwork\CustomerRequest
     */
    public function getCustomerRequest()
    {
        return $this->customerRequest;
    }

    /**
     * @param \Lyranetwork\CustomerRequest $customerRequest
     * @return \Lyranetwork\CreateTokenByIban
     */
    public function setCustomerRequest($customerRequest)
    {
        $this->customerRequest = $customerRequest;
        return $this;
    }
}
