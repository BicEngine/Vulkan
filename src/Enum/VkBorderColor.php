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
final class VkBorderColor
{
    public const VK_BORDER_COLOR_FLOAT_TRANSPARENT_BLACK = 0;
    public const VK_BORDER_COLOR_INT_TRANSPARENT_BLACK = 1;
    public const VK_BORDER_COLOR_FLOAT_OPAQUE_BLACK = 2;
    public const VK_BORDER_COLOR_INT_OPAQUE_BLACK = 3;
    public const VK_BORDER_COLOR_FLOAT_OPAQUE_WHITE = 4;
    public const VK_BORDER_COLOR_INT_OPAQUE_WHITE = 5;
    public const VK_BORDER_COLOR_BEGIN_RANGE = self::VK_BORDER_COLOR_FLOAT_TRANSPARENT_BLACK;
    public const VK_BORDER_COLOR_END_RANGE = self::VK_BORDER_COLOR_INT_OPAQUE_WHITE;
    public const VK_BORDER_COLOR_RANGE_SIZE = self::VK_BORDER_COLOR_INT_OPAQUE_WHITE - self::VK_BORDER_COLOR_FLOAT_TRANSPARENT_BLACK + 1;
    public const VK_BORDER_COLOR_MAX_ENUM = 0x7FFFFFFF;
}
