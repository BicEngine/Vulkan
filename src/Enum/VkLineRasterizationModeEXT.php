<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkLineRasterizationModeEXT
{
    public const VK_LINE_RASTERIZATION_MODE_DEFAULT_EXT = 0;
    public const VK_LINE_RASTERIZATION_MODE_RECTANGULAR_EXT = 1;
    public const VK_LINE_RASTERIZATION_MODE_BRESENHAM_EXT = 2;
    public const VK_LINE_RASTERIZATION_MODE_RECTANGULAR_SMOOTH_EXT = 3;
    public const VK_LINE_RASTERIZATION_MODE_BEGIN_RANGE_EXT = self::VK_LINE_RASTERIZATION_MODE_DEFAULT_EXT;
    public const VK_LINE_RASTERIZATION_MODE_END_RANGE_EXT = self::VK_LINE_RASTERIZATION_MODE_RECTANGULAR_SMOOTH_EXT;
    public const VK_LINE_RASTERIZATION_MODE_RANGE_SIZE_EXT = self::VK_LINE_RASTERIZATION_MODE_RECTANGULAR_SMOOTH_EXT - self::VK_LINE_RASTERIZATION_MODE_DEFAULT_EXT + 1;
    public const VK_LINE_RASTERIZATION_MODE_MAX_ENUM_EXT = 0x7FFFFFFF;
}
