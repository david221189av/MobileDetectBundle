<?php

declare(strict_types=1);

/*
 * This file is part of the MobileDetectBundle.
 *
 * (c) Nikolay Ivlev <nikolay.kotovsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MobileDetectBundle\DeviceDetector;

use Detection\MobileDetect;

/**
 * @author suncat2000 <nikolay.kotovsky@gmail.com>
 * @method bool isBot()
 * @method bool isMobileBot()
 * @method bool isDesktopMode()
 * @method bool isTV()
 */
class MobileDetector extends MobileDetect implements MobileDetectorInterface
{
    public static function getScriptVersion()
    {
        // TODO: Implement getScriptVersion() method.
    }

    public static function getUserAgents()
    {
        // TODO: Implement getUserAgents() method.
    }

    public static function getUtilities()
    {
        // TODO: Implement getUtilities() method.
    }

    public function getCfHeaders()
    {
        // TODO: Implement getCfHeaders() method.
    }

    public function setCfHeaders(array $cfHeaders = null)
    {
        // TODO: Implement setCfHeaders() method.
    }

    public function __call(string $name, array $arguments)
    {
        // TODO: Implement @method bool isBot()
        // TODO: Implement @method bool isMobileBot()
        // TODO: Implement @method bool isDesktopMode()
        // TODO: Implement @method bool isTV()
    }
}
