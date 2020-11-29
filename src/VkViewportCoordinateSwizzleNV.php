<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkViewportCoordinateSwizzleNV
{
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_X_NV = 0;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_X_NV = 1;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_Y_NV = 2;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_Y_NV = 3;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_Z_NV = 4;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_Z_NV = 5;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_W_NV = 6;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_W_NV = 7;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_BEGIN_RANGE_NV = self::VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_X_NV;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_END_RANGE_NV = self::VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_W_NV;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_RANGE_SIZE_NV = self::VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_W_NV - self::VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_X_NV + 1;
    public const VK_VIEWPORT_COORDINATE_SWIZZLE_MAX_ENUM_NV = 0x7FFFFFFF;
}
