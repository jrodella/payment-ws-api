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

class RiskAssessments
{
    /**
     * @var string $results
     */
    private $results = null;

    /**
     * @return string
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param string $results
     * @return \Lyranetwork\Model\RiskAssessments
     */
    public function setResults($results)
    {
        $this->results = $results;
        return $this;
    }
}
