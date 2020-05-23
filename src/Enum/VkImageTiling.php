<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

/**
 * @since 1.0
 */
final class VkImageTiling
{
    public const VK_IMAGE_TILING_OPTIMAL = 0;
    public const VK_IMAGE_TILING_LINEAR = 1;
    public const VK_IMAGE_TILING_DRM_FORMAT_MODIFIER_EXT = 1000158000;
    public const VK_IMAGE_TILING_BEGIN_RANGE = self::VK_IMAGE_TILING_OPTIMAL;
    public const VK_IMAGE_TILING_END_RANGE = self::VK_IMAGE_TILING_LINEAR;
    public const VK_IMAGE_TILING_RANGE_SIZE = self::VK_IMAGE_TILING_LINEAR - self::VK_IMAGE_TILING_OPTIMAL + 1;
    public const VK_IMAGE_TILING_MAX_ENUM = 0x7FFFFFFF;
}
