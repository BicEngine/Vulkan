<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkScopeNV
{
    public const VK_SCOPE_DEVICE_NV = 1;
    public const VK_SCOPE_WORKGROUP_NV = 2;
    public const VK_SCOPE_SUBGROUP_NV = 3;
    public const VK_SCOPE_QUEUE_FAMILY_NV = 5;
    public const VK_SCOPE_BEGIN_RANGE_NV = self::VK_SCOPE_DEVICE_NV;
    public const VK_SCOPE_END_RANGE_NV = self::VK_SCOPE_QUEUE_FAMILY_NV;
    public const VK_SCOPE_RANGE_SIZE_NV = self::VK_SCOPE_QUEUE_FAMILY_NV - self::VK_SCOPE_DEVICE_NV + 1;
    public const VK_SCOPE_MAX_ENUM_NV = 0x7FFFFFFF;
}
