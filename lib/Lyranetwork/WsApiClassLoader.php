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

class WsApiClassLoader
{
    private function __construct()
    {
        // do not instantiate this class
    }

    /**
     * Registers self::loadClass method as an autoloader.
     *
     * @param bool $prepend Whether to prepend the autoloader or not
     */
    public static function register($prepend = false)
    {
        spl_autoload_register(__NAMESPACE__ . '\WsApiClassLoader::loadClass', true, $prepend);
    }

    /**
     * Unregisters self::loadClass method as an autoloader.
     */
    public static function unregister()
    {
        spl_autoload_unregister(__NAMESPACE__ . '\WsApiClassLoader::loadClass');
    }

    public static function loadClass($class)
    {
        if (strpos($class, __NAMESPACE__) === false) {
            return;
        }

        $pos = strrpos($class, '\\');
        if ($pos === false) {
            $pos = -1;
        }

        $file = __DIR__ . DIRECTORY_SEPARATOR . substr($class, $pos + 1) . '.php';
        if (is_file($file) && ($file !== __FILE__)) {
            include_once($file);
        }
    }
}
