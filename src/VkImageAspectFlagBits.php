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
final class VkImageAspectFlagBits
{
    public const VK_IMAGE_ASPECT_COLOR_BIT = 0x00000001;
    public const VK_IMAGE_ASPECT_DEPTH_BIT = 0x00000002;
    public const VK_IMAGE_ASPECT_STENCIL_BIT = 0x00000004;
    public const VK_IMAGE_ASPECT_METADATA_BIT = 0x00000008;
    public const VK_IMAGE_ASPECT_PLANE_0_BIT = 0x00000010;
    public const VK_IMAGE_ASPECT_PLANE_1_BIT = 0x00000020;
    public const VK_IMAGE_ASPECT_PLANE_2_BIT = 0x00000040;
    public const VK_IMAGE_ASPECT_MEMORY_PLANE_0_BIT_EXT = 0x00000080;
    public const VK_IMAGE_ASPECT_MEMORY_PLANE_1_BIT_EXT = 0x00000100;
    public const VK_IMAGE_ASPECT_MEMORY_PLANE_2_BIT_EXT = 0x00000200;
    public const VK_IMAGE_ASPECT_MEMORY_PLANE_3_BIT_EXT = 0x00000400;
    public const VK_IMAGE_ASPECT_PLANE_0_BIT_KHR = self::VK_IMAGE_ASPECT_PLANE_0_BIT;
    public const VK_IMAGE_ASPECT_PLANE_1_BIT_KHR = self::VK_IMAGE_ASPECT_PLANE_1_BIT;
    public const VK_IMAGE_ASPECT_PLANE_2_BIT_KHR = self::VK_IMAGE_ASPECT_PLANE_2_BIT;
    public const VK_IMAGE_ASPECT_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
