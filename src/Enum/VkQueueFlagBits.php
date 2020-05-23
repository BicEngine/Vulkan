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
final class VkQueueFlagBits
{
    public const VK_QUEUE_GRAPHICS_BIT = 0x00000001;
    public const VK_QUEUE_COMPUTE_BIT = 0x00000002;
    public const VK_QUEUE_TRANSFER_BIT = 0x00000004;
    public const VK_QUEUE_SPARSE_BINDING_BIT = 0x00000008;
    public const VK_QUEUE_PROTECTED_BIT = 0x00000010;
    public const VK_QUEUE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
