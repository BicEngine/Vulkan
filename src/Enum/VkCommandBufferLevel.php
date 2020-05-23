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
final class VkCommandBufferLevel
{
    public const VK_COMMAND_BUFFER_LEVEL_PRIMARY = 0;
    public const VK_COMMAND_BUFFER_LEVEL_SECONDARY = 1;
    public const VK_COMMAND_BUFFER_LEVEL_BEGIN_RANGE = self::VK_COMMAND_BUFFER_LEVEL_PRIMARY;
    public const VK_COMMAND_BUFFER_LEVEL_END_RANGE = self::VK_COMMAND_BUFFER_LEVEL_SECONDARY;
    public const VK_COMMAND_BUFFER_LEVEL_RANGE_SIZE = self::VK_COMMAND_BUFFER_LEVEL_SECONDARY - self::VK_COMMAND_BUFFER_LEVEL_PRIMARY + 1;
    public const VK_COMMAND_BUFFER_LEVEL_MAX_ENUM = 0x7FFFFFFF;
}
