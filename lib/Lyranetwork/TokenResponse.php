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

class TokenResponse
{
    /**
     * @var \DateTime $creationDate
     */
    private $creationDate = null;

    /**
     * @var \DateTime $cancellationDate
     */
    private $cancellationDate = null;

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        if ($this->creationDate == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->creationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $creationDate
     * @return \Lyranetwork\TokenResponse
     */
    public function setCreationDate(\DateTime $creationDate = null)
    {
        if ($creationDate == null) {
            $this->creationDate = null;
        } else {
            $this->creationDate = $creationDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancellationDate()
    {
        if ($this->cancellationDate == null) {
            return null;
        } else {
            try {
                return \DateTime::createFromFormat(\DateTime::ATOM, $this->cancellationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $cancellationDate
     * @return \Lyranetwork\TokenResponse
     */
    public function setCancellationDate(\DateTime $cancellationDate = null)
    {
        if ($cancellationDate == null) {
            $this->cancellationDate = null;
        } else {
            $this->cancellationDate = $cancellationDate->format(\DateTime::ATOM);
        }
        return $this;
    }
}
