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
final class VkBlendFactor
{
    public const VK_BLEND_FACTOR_ZERO = 0;
    public const VK_BLEND_FACTOR_ONE = 1;
    public const VK_BLEND_FACTOR_SRC_COLOR = 2;
    public const VK_BLEND_FACTOR_ONE_MINUS_SRC_COLOR = 3;
    public const VK_BLEND_FACTOR_DST_COLOR = 4;
    public const VK_BLEND_FACTOR_ONE_MINUS_DST_COLOR = 5;
    public const VK_BLEND_FACTOR_SRC_ALPHA = 6;
    public const VK_BLEND_FACTOR_ONE_MINUS_SRC_ALPHA = 7;
    public const VK_BLEND_FACTOR_DST_ALPHA = 8;
    public const VK_BLEND_FACTOR_ONE_MINUS_DST_ALPHA = 9;
    public const VK_BLEND_FACTOR_CONSTANT_COLOR = 10;
    public const VK_BLEND_FACTOR_ONE_MINUS_CONSTANT_COLOR = 11;
    public const VK_BLEND_FACTOR_CONSTANT_ALPHA = 12;
    public const VK_BLEND_FACTOR_ONE_MINUS_CONSTANT_ALPHA = 13;
    public const VK_BLEND_FACTOR_SRC_ALPHA_SATURATE = 14;
    public const VK_BLEND_FACTOR_SRC1_COLOR = 15;
    public const VK_BLEND_FACTOR_ONE_MINUS_SRC1_COLOR = 16;
    public const VK_BLEND_FACTOR_SRC1_ALPHA = 17;
    public const VK_BLEND_FACTOR_ONE_MINUS_SRC1_ALPHA = 18;
    public const VK_BLEND_FACTOR_BEGIN_RANGE = self::VK_BLEND_FACTOR_ZERO;
    public const VK_BLEND_FACTOR_END_RANGE = self::VK_BLEND_FACTOR_ONE_MINUS_SRC1_ALPHA;
    public const VK_BLEND_FACTOR_RANGE_SIZE = self::VK_BLEND_FACTOR_ONE_MINUS_SRC1_ALPHA - self::VK_BLEND_FACTOR_ZERO + 1;
    public const VK_BLEND_FACTOR_MAX_ENUM = 0x7FFFFFFF;
}
