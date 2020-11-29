<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkDeviceEventTypeEXT
{
    public const VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT = 0;
    public const VK_DEVICE_EVENT_TYPE_BEGIN_RANGE_EXT = self::VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT;
    public const VK_DEVICE_EVENT_TYPE_END_RANGE_EXT = self::VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT;
    public const VK_DEVICE_EVENT_TYPE_RANGE_SIZE_EXT = self::VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT - self::VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT + 1;
    public const VK_DEVICE_EVENT_TYPE_MAX_ENUM_EXT = 0x7FFFFFFF;
}
