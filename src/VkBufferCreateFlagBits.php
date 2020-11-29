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
final class VkBufferCreateFlagBits
{
    public const VK_BUFFER_CREATE_SPARSE_BINDING_BIT = 0x00000001;
    public const VK_BUFFER_CREATE_SPARSE_RESIDENCY_BIT = 0x00000002;
    public const VK_BUFFER_CREATE_SPARSE_ALIASED_BIT = 0x00000004;
    public const VK_BUFFER_CREATE_PROTECTED_BIT = 0x00000008;
    public const VK_BUFFER_CREATE_DEVICE_ADDRESS_CAPTURE_REPLAY_BIT = 0x00000010;
    public const VK_BUFFER_CREATE_DEVICE_ADDRESS_CAPTURE_REPLAY_BIT_EXT = self::VK_BUFFER_CREATE_DEVICE_ADDRESS_CAPTURE_REPLAY_BIT;
    public const VK_BUFFER_CREATE_DEVICE_ADDRESS_CAPTURE_REPLAY_BIT_KHR = self::VK_BUFFER_CREATE_DEVICE_ADDRESS_CAPTURE_REPLAY_BIT;
    public const VK_BUFFER_CREATE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
