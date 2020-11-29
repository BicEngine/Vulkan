<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkQueueGlobalPriorityEXT
{
    public const VK_QUEUE_GLOBAL_PRIORITY_LOW_EXT = 128;
    public const VK_QUEUE_GLOBAL_PRIORITY_MEDIUM_EXT = 256;
    public const VK_QUEUE_GLOBAL_PRIORITY_HIGH_EXT = 512;
    public const VK_QUEUE_GLOBAL_PRIORITY_REALTIME_EXT = 1024;
    public const VK_QUEUE_GLOBAL_PRIORITY_BEGIN_RANGE_EXT = self::VK_QUEUE_GLOBAL_PRIORITY_LOW_EXT;
    public const VK_QUEUE_GLOBAL_PRIORITY_END_RANGE_EXT = self::VK_QUEUE_GLOBAL_PRIORITY_REALTIME_EXT;
    public const VK_QUEUE_GLOBAL_PRIORITY_RANGE_SIZE_EXT = self::VK_QUEUE_GLOBAL_PRIORITY_REALTIME_EXT - self::VK_QUEUE_GLOBAL_PRIORITY_LOW_EXT + 1;
    public const VK_QUEUE_GLOBAL_PRIORITY_MAX_ENUM_EXT = 0x7FFFFFFF;
}
