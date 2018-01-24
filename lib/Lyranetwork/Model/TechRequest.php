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

class TechRequest
{
    /**
     * @var string $browserUserAgent
     */
    private $browserUserAgent = null;

    /**
     * @var string $browserAccept
     */
    private $browserAccept = null;

    /**
     * @var string $integrationType
     */
    private $integrationType = null;

    /**
     * @return string
     */
    public function getBrowserUserAgent()
    {
        return $this->browserUserAgent;
    }

    /**
     * @param string $browserUserAgent
     * @return \Lyranetwork\TechRequest
     */
    public function setBrowserUserAgent($browserUserAgent)
    {
        $this->browserUserAgent = $browserUserAgent;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrowserAccept()
    {
        return $this->browserAccept;
    }

    /**
     * @param string $browserAccept
     * @return \Lyranetwork\TechRequest
     */
    public function setBrowserAccept($browserAccept)
    {
        $this->browserAccept = $browserAccept;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntegrationType()
    {
        return $this->integrationType;
    }

    /**
     * @param string $integrationType
     * @return \Lyranetwork\TechRequest
     */
    public function setIntegrationType($integrationType)
    {
        $this->integrationType = $integrationType;
        return $this;
    }
}
