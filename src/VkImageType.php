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
final class VkImageType
{
    public const VK_IMAGE_TYPE_1D = 0;
    public const VK_IMAGE_TYPE_2D = 1;
    public const VK_IMAGE_TYPE_3D = 2;
    public const VK_IMAGE_TYPE_BEGIN_RANGE = self::VK_IMAGE_TYPE_1D;
    public const VK_IMAGE_TYPE_END_RANGE = self::VK_IMAGE_TYPE_3D;
    public const VK_IMAGE_TYPE_RANGE_SIZE = self::VK_IMAGE_TYPE_3D - self::VK_IMAGE_TYPE_1D + 1;
    public const VK_IMAGE_TYPE_MAX_ENUM = 0x7FFFFFFF;
}
