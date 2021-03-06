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

class MpiExtensionRequest
{
    /**
     * @var \Lyranetwork\Model\ExtInfo[] $extensionData
     */
    private $extensionData = null;

    /**
     * @return \Lyranetwork\Model\ExtInfo[]
     */
    public function getExtensionData()
    {
        return $this->extensionData;
    }

    /**
     * @param \Lyranetwork\Model\ExtInfo[] $extensionData
     * @return \Lyranetwork\Model\MpiExtensionRequest
     */
    public function setExtensionData(array $extensionData = null)
    {
        $this->extensionData = $extensionData;
        return $this;
    }
}
