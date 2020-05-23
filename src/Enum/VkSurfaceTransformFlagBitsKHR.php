<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkSurfaceTransformFlagBitsKHR
{
    public const VK_SURFACE_TRANSFORM_IDENTITY_BIT_KHR = 0x00000001;
    public const VK_SURFACE_TRANSFORM_ROTATE_90_BIT_KHR = 0x00000002;
    public const VK_SURFACE_TRANSFORM_ROTATE_180_BIT_KHR = 0x00000004;
    public const VK_SURFACE_TRANSFORM_ROTATE_270_BIT_KHR = 0x00000008;
    public const VK_SURFACE_TRANSFORM_HORIZONTAL_MIRROR_BIT_KHR = 0x00000010;
    public const VK_SURFACE_TRANSFORM_HORIZONTAL_MIRROR_ROTATE_90_BIT_KHR = 0x00000020;
    public const VK_SURFACE_TRANSFORM_HORIZONTAL_MIRROR_ROTATE_180_BIT_KHR = 0x00000040;
    public const VK_SURFACE_TRANSFORM_HORIZONTAL_MIRROR_ROTATE_270_BIT_KHR = 0x00000080;
    public const VK_SURFACE_TRANSFORM_INHERIT_BIT_KHR = 0x00000100;
    public const VK_SURFACE_TRANSFORM_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF;
}
