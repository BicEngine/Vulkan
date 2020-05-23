<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

/**
 * @since 1.2
 */
final class VkResolveModeFlagBits
{
    public const VK_RESOLVE_MODE_NONE = 0;
    public const VK_RESOLVE_MODE_SAMPLE_ZERO_BIT = 0x00000001;
    public const VK_RESOLVE_MODE_AVERAGE_BIT = 0x00000002;
    public const VK_RESOLVE_MODE_MIN_BIT = 0x00000004;
    public const VK_RESOLVE_MODE_MAX_BIT = 0x00000008;
    public const VK_RESOLVE_MODE_NONE_KHR = self::VK_RESOLVE_MODE_NONE;
    public const VK_RESOLVE_MODE_SAMPLE_ZERO_BIT_KHR = self::VK_RESOLVE_MODE_SAMPLE_ZERO_BIT;
    public const VK_RESOLVE_MODE_AVERAGE_BIT_KHR = self::VK_RESOLVE_MODE_AVERAGE_BIT;
    public const VK_RESOLVE_MODE_MIN_BIT_KHR = self::VK_RESOLVE_MODE_MIN_BIT;
    public const VK_RESOLVE_MODE_MAX_BIT_KHR = self::VK_RESOLVE_MODE_MAX_BIT;
    public const VK_RESOLVE_MODE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
