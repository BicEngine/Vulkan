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
 * @since 1.1
 */
final class VkMemoryAllocateFlagBits
{
    public const VK_MEMORY_ALLOCATE_DEVICE_MASK_BIT = 0x00000001;
    public const VK_MEMORY_ALLOCATE_DEVICE_ADDRESS_BIT = 0x00000002;
    public const VK_MEMORY_ALLOCATE_DEVICE_ADDRESS_CAPTURE_REPLAY_BIT = 0x00000004;
    public const VK_MEMORY_ALLOCATE_DEVICE_MASK_BIT_KHR = self::VK_MEMORY_ALLOCATE_DEVICE_MASK_BIT;
    public const VK_MEMORY_ALLOCATE_DEVICE_ADDRESS_BIT_KHR = self::VK_MEMORY_ALLOCATE_DEVICE_ADDRESS_BIT;
    public const VK_MEMORY_ALLOCATE_DEVICE_ADDRESS_CAPTURE_REPLAY_BIT_KHR = self::VK_MEMORY_ALLOCATE_DEVICE_ADDRESS_CAPTURE_REPLAY_BIT;
    public const VK_MEMORY_ALLOCATE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
