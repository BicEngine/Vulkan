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
final class VkPolygonMode
{
    public const VK_POLYGON_MODE_FILL = 0;
    public const VK_POLYGON_MODE_LINE = 1;
    public const VK_POLYGON_MODE_POINT = 2;
    public const VK_POLYGON_MODE_FILL_RECTANGLE_NV = 1000153000;
    public const VK_POLYGON_MODE_BEGIN_RANGE = self::VK_POLYGON_MODE_FILL;
    public const VK_POLYGON_MODE_END_RANGE = self::VK_POLYGON_MODE_POINT;
    public const VK_POLYGON_MODE_RANGE_SIZE = self::VK_POLYGON_MODE_POINT - self::VK_POLYGON_MODE_FILL + 1;
    public const VK_POLYGON_MODE_MAX_ENUM = 0x7FFFFFFF;
}
