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
final class VkCommandPoolCreateFlagBits
{
    public const VK_COMMAND_POOL_CREATE_TRANSIENT_BIT = 0x00000001;
    public const VK_COMMAND_POOL_CREATE_RESET_COMMAND_BUFFER_BIT = 0x00000002;
    public const VK_COMMAND_POOL_CREATE_PROTECTED_BIT = 0x00000004;
    public const VK_COMMAND_POOL_CREATE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
