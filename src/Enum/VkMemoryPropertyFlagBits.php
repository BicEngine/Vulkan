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
final class VkMemoryPropertyFlagBits
{
    public const VK_MEMORY_PROPERTY_DEVICE_LOCAL_BIT = 0x00000001;
    public const VK_MEMORY_PROPERTY_HOST_VISIBLE_BIT = 0x00000002;
    public const VK_MEMORY_PROPERTY_HOST_COHERENT_BIT = 0x00000004;
    public const VK_MEMORY_PROPERTY_HOST_CACHED_BIT = 0x00000008;
    public const VK_MEMORY_PROPERTY_LAZILY_ALLOCATED_BIT = 0x00000010;
    public const VK_MEMORY_PROPERTY_PROTECTED_BIT = 0x00000020;
    public const VK_MEMORY_PROPERTY_DEVICE_COHERENT_BIT_AMD = 0x00000040;
    public const VK_MEMORY_PROPERTY_DEVICE_UNCACHED_BIT_AMD = 0x00000080;
    public const VK_MEMORY_PROPERTY_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
