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

class PaymentType
{
    const _SINGLE = 'SINGLE';
    const _INSTALLMENT = 'INSTALLMENT';
    const _SPLIT = 'SPLIT';
    const _SUBSCRIPTION = 'SUBSCRIPTION';
    const _RETRY = 'RETRY';
}
