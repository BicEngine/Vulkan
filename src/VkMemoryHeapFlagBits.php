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
final class VkMemoryHeapFlagBits
{
    public const VK_MEMORY_HEAP_DEVICE_LOCAL_BIT = 0x00000001;
    public const VK_MEMORY_HEAP_MULTI_INSTANCE_BIT = 0x00000002;
    public const VK_MEMORY_HEAP_MULTI_INSTANCE_BIT_KHR = self::VK_MEMORY_HEAP_MULTI_INSTANCE_BIT;
    public const VK_MEMORY_HEAP_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
