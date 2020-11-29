<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkDisplayEventTypeEXT
{
    public const VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT = 0;
    public const VK_DISPLAY_EVENT_TYPE_BEGIN_RANGE_EXT = self::VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT;
    public const VK_DISPLAY_EVENT_TYPE_END_RANGE_EXT = self::VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT;
    public const VK_DISPLAY_EVENT_TYPE_RANGE_SIZE_EXT = self::VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT - self::VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT + 1;
    public const VK_DISPLAY_EVENT_TYPE_MAX_ENUM_EXT = 0x7FFFFFFF;
}
