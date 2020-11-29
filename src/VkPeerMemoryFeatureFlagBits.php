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
 * @since 1.1
 */
final class VkPeerMemoryFeatureFlagBits
{
    public const VK_PEER_MEMORY_FEATURE_COPY_SRC_BIT = 0x00000001;
    public const VK_PEER_MEMORY_FEATURE_COPY_DST_BIT = 0x00000002;
    public const VK_PEER_MEMORY_FEATURE_GENERIC_SRC_BIT = 0x00000004;
    public const VK_PEER_MEMORY_FEATURE_GENERIC_DST_BIT = 0x00000008;
    public const VK_PEER_MEMORY_FEATURE_COPY_SRC_BIT_KHR = self::VK_PEER_MEMORY_FEATURE_COPY_SRC_BIT;
    public const VK_PEER_MEMORY_FEATURE_COPY_DST_BIT_KHR = self::VK_PEER_MEMORY_FEATURE_COPY_DST_BIT;
    public const VK_PEER_MEMORY_FEATURE_GENERIC_SRC_BIT_KHR = self::VK_PEER_MEMORY_FEATURE_GENERIC_SRC_BIT;
    public const VK_PEER_MEMORY_FEATURE_GENERIC_DST_BIT_KHR = self::VK_PEER_MEMORY_FEATURE_GENERIC_DST_BIT;
    public const VK_PEER_MEMORY_FEATURE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
