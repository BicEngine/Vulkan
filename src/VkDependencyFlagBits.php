<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

/**
 * @since 1.0
 */
final class VkDependencyFlagBits
{
    public const VK_DEPENDENCY_BY_REGION_BIT = 0x00000001;
    public const VK_DEPENDENCY_DEVICE_GROUP_BIT = 0x00000004;
    public const VK_DEPENDENCY_VIEW_LOCAL_BIT = 0x00000002;
    public const VK_DEPENDENCY_VIEW_LOCAL_BIT_KHR = self::VK_DEPENDENCY_VIEW_LOCAL_BIT;
    public const VK_DEPENDENCY_DEVICE_GROUP_BIT_KHR = self::VK_DEPENDENCY_DEVICE_GROUP_BIT;
    public const VK_DEPENDENCY_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
