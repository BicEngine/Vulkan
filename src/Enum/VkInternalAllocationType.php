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
 * @since 1.0
 */
final class VkInternalAllocationType
{
    public const VK_INTERNAL_ALLOCATION_TYPE_EXECUTABLE = 0;
    public const VK_INTERNAL_ALLOCATION_TYPE_BEGIN_RANGE = self::VK_INTERNAL_ALLOCATION_TYPE_EXECUTABLE;
    public const VK_INTERNAL_ALLOCATION_TYPE_END_RANGE = self::VK_INTERNAL_ALLOCATION_TYPE_EXECUTABLE;
    public const VK_INTERNAL_ALLOCATION_TYPE_RANGE_SIZE = self::VK_INTERNAL_ALLOCATION_TYPE_EXECUTABLE - self::VK_INTERNAL_ALLOCATION_TYPE_EXECUTABLE + 1;
    public const VK_INTERNAL_ALLOCATION_TYPE_MAX_ENUM = 0x7FFFFFFF;
}
