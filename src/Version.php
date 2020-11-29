<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class Version
{
    private function __construct()
    {
        // Can not create instance of static class
    }

    /**
     * @param int $version
     * @return int
     */
    public static function major(int $version): int
    {
        return $version >> 22;
    }

    /**
     * @param int $version
     * @return int
     */
    public static function minor(int $version): int
    {
        return $version >> 12 & 0x3ff;
    }

    /**
     * @param int $version
     * @return int
     */
    public static function patch(int $version): int
    {
        return $version & 0xfff;
    }

    /**
     * @param int $major
     * @param int $minor
     * @param int $patch
     * @return int
     */
    public static function make(int $major, int $minor = 0, int $patch = 0): int
    {
        return $major << 22 | $minor << 12 | $patch;
    }
}