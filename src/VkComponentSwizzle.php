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
final class VkComponentSwizzle
{
    public const VK_COMPONENT_SWIZZLE_IDENTITY = 0;
    public const VK_COMPONENT_SWIZZLE_ZERO = 1;
    public const VK_COMPONENT_SWIZZLE_ONE = 2;
    public const VK_COMPONENT_SWIZZLE_R = 3;
    public const VK_COMPONENT_SWIZZLE_G = 4;
    public const VK_COMPONENT_SWIZZLE_B = 5;
    public const VK_COMPONENT_SWIZZLE_A = 6;
    public const VK_COMPONENT_SWIZZLE_BEGIN_RANGE = self::VK_COMPONENT_SWIZZLE_IDENTITY;
    public const VK_COMPONENT_SWIZZLE_END_RANGE = self::VK_COMPONENT_SWIZZLE_A;
    public const VK_COMPONENT_SWIZZLE_RANGE_SIZE = self::VK_COMPONENT_SWIZZLE_A - self::VK_COMPONENT_SWIZZLE_IDENTITY + 1;
    public const VK_COMPONENT_SWIZZLE_MAX_ENUM = 0x7FFFFFFF;
}
