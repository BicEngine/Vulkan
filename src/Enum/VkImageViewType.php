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
final class VkImageViewType
{
    public const VK_IMAGE_VIEW_TYPE_1D = 0;
    public const VK_IMAGE_VIEW_TYPE_2D = 1;
    public const VK_IMAGE_VIEW_TYPE_3D = 2;
    public const VK_IMAGE_VIEW_TYPE_CUBE = 3;
    public const VK_IMAGE_VIEW_TYPE_1D_ARRAY = 4;
    public const VK_IMAGE_VIEW_TYPE_2D_ARRAY = 5;
    public const VK_IMAGE_VIEW_TYPE_CUBE_ARRAY = 6;
    public const VK_IMAGE_VIEW_TYPE_BEGIN_RANGE = self::VK_IMAGE_VIEW_TYPE_1D;
    public const VK_IMAGE_VIEW_TYPE_END_RANGE = self::VK_IMAGE_VIEW_TYPE_CUBE_ARRAY;
    public const VK_IMAGE_VIEW_TYPE_RANGE_SIZE = self::VK_IMAGE_VIEW_TYPE_CUBE_ARRAY - self::VK_IMAGE_VIEW_TYPE_1D + 1;
    public const VK_IMAGE_VIEW_TYPE_MAX_ENUM = 0x7FFFFFFF;
}
