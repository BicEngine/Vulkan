<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

/**
 * @since 1.0
 */
final class VkFilter
{
    public const VK_FILTER_NEAREST = 0;
    public const VK_FILTER_LINEAR = 1;
    public const VK_FILTER_CUBIC_IMG = 1000015000;
    public const VK_FILTER_CUBIC_EXT = self::VK_FILTER_CUBIC_IMG;
    public const VK_FILTER_BEGIN_RANGE = self::VK_FILTER_NEAREST;
    public const VK_FILTER_END_RANGE = self::VK_FILTER_LINEAR;
    public const VK_FILTER_RANGE_SIZE = self::VK_FILTER_LINEAR - self::VK_FILTER_NEAREST + 1;
    public const VK_FILTER_MAX_ENUM = 0x7FFFFFFF;
}
