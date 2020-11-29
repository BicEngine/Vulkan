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
final class VkSystemAllocationScope
{
    public const VK_SYSTEM_ALLOCATION_SCOPE_COMMAND     = 0;
    public const VK_SYSTEM_ALLOCATION_SCOPE_OBJECT      = 1;
    public const VK_SYSTEM_ALLOCATION_SCOPE_CACHE       = 2;
    public const VK_SYSTEM_ALLOCATION_SCOPE_DEVICE      = 3;
    public const VK_SYSTEM_ALLOCATION_SCOPE_INSTANCE    = 4;
    public const VK_SYSTEM_ALLOCATION_SCOPE_BEGIN_RANGE = self::VK_SYSTEM_ALLOCATION_SCOPE_COMMAND;
    public const VK_SYSTEM_ALLOCATION_SCOPE_END_RANGE   = self::VK_SYSTEM_ALLOCATION_SCOPE_INSTANCE;
    public const VK_SYSTEM_ALLOCATION_SCOPE_RANGE_SIZE  = self::VK_SYSTEM_ALLOCATION_SCOPE_INSTANCE - self::VK_SYSTEM_ALLOCATION_SCOPE_COMMAND + 1;
    public const VK_SYSTEM_ALLOCATION_SCOPE_MAX_ENUM    = 0x7FFFFFFF;
}
