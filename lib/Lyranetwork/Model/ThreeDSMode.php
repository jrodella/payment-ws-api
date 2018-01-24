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

class ThreeDSMode
{
    const _DISABLED = 'DISABLED';
    const _ENABLED_CREATE = 'ENABLED_CREATE';
    const _ENABLED_FINALIZE = 'ENABLED_FINALIZE';
    const _MERCHANT_3DS = 'MERCHANT_3DS';
}
