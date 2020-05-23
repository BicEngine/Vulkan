<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkDisplayPowerStateEXT
{
    public const VK_DISPLAY_POWER_STATE_OFF_EXT = 0;
    public const VK_DISPLAY_POWER_STATE_SUSPEND_EXT = 1;
    public const VK_DISPLAY_POWER_STATE_ON_EXT = 2;
    public const VK_DISPLAY_POWER_STATE_BEGIN_RANGE_EXT = self::VK_DISPLAY_POWER_STATE_OFF_EXT;
    public const VK_DISPLAY_POWER_STATE_END_RANGE_EXT = self::VK_DISPLAY_POWER_STATE_ON_EXT;
    public const VK_DISPLAY_POWER_STATE_RANGE_SIZE_EXT = self::VK_DISPLAY_POWER_STATE_ON_EXT - self::VK_DISPLAY_POWER_STATE_OFF_EXT + 1;
    public const VK_DISPLAY_POWER_STATE_MAX_ENUM_EXT = 0x7FFFFFFF;
}
