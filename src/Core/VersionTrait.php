<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

/**
 * Trait VersionTrait
 */
trait VersionTrait
{
    /**
     * @param int $major
     * @param int $minor
     * @param int $patch
     * @return int
     */
    public static function makeVersion(int $major, int $minor = 0, int $patch = 0): int
    {
        return $major << 22 | $minor << 12 | $patch;
    }

    /**
     * @param int $version
     * @return int
     */
    public static function versionMajor(int $version): int
    {
        return $version >> 22;
    }

    /**
     * @param int $version
     * @return int
     */
    public static function versionMinor(int $version): int
    {
        return $version >> 12 & 0x3ff;
    }

    /**
     * @param int $version
     * @return int
     */
    public static function versionPatch(int $version): int
    {
        return $version & 0xfff;
    }
}
