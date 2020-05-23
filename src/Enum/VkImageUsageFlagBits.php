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
final class VkImageUsageFlagBits
{
    public const VK_IMAGE_USAGE_TRANSFER_SRC_BIT = 0x00000001;
    public const VK_IMAGE_USAGE_TRANSFER_DST_BIT = 0x00000002;
    public const VK_IMAGE_USAGE_SAMPLED_BIT = 0x00000004;
    public const VK_IMAGE_USAGE_STORAGE_BIT = 0x00000008;
    public const VK_IMAGE_USAGE_COLOR_ATTACHMENT_BIT = 0x00000010;
    public const VK_IMAGE_USAGE_DEPTH_STENCIL_ATTACHMENT_BIT = 0x00000020;
    public const VK_IMAGE_USAGE_TRANSIENT_ATTACHMENT_BIT = 0x00000040;
    public const VK_IMAGE_USAGE_INPUT_ATTACHMENT_BIT = 0x00000080;
    public const VK_IMAGE_USAGE_SHADING_RATE_IMAGE_BIT_NV = 0x00000100;
    public const VK_IMAGE_USAGE_FRAGMENT_DENSITY_MAP_BIT_EXT = 0x00000200;
    public const VK_IMAGE_USAGE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
