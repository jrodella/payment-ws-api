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

class RiskAnalysisProcessingStatus
{
    const _P_TO_SEND = 'P_TO_SEND';
    const _P_SEND_KO = 'P_SEND_KO';
    const _P_PENDING_AT_ANALYZER = 'P_PENDING_AT_ANALYZER';
    const _P_SEND_OK = 'P_SEND_OK';
    const _P_MANUAL = 'P_MANUAL';
    const _P_SKIPPED = 'P_SKIPPED';
    const _P_SEND_EXPIRED = 'P_SEND_EXPIRED';
}
