<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkDiscardRectangleModeEXT
{
    public const VK_DISCARD_RECTANGLE_MODE_INCLUSIVE_EXT = 0;
    public const VK_DISCARD_RECTANGLE_MODE_EXCLUSIVE_EXT = 1;
    public const VK_DISCARD_RECTANGLE_MODE_BEGIN_RANGE_EXT = self::VK_DISCARD_RECTANGLE_MODE_INCLUSIVE_EXT;
    public const VK_DISCARD_RECTANGLE_MODE_END_RANGE_EXT = self::VK_DISCARD_RECTANGLE_MODE_EXCLUSIVE_EXT;
    public const VK_DISCARD_RECTANGLE_MODE_RANGE_SIZE_EXT = self::VK_DISCARD_RECTANGLE_MODE_EXCLUSIVE_EXT - self::VK_DISCARD_RECTANGLE_MODE_INCLUSIVE_EXT + 1;
    public const VK_DISCARD_RECTANGLE_MODE_MAX_ENUM_EXT = 0x7FFFFFFF;
}
