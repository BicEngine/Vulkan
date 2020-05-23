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
final class VkBlendOp
{
    public const VK_BLEND_OP_ADD = 0;
    public const VK_BLEND_OP_SUBTRACT = 1;
    public const VK_BLEND_OP_REVERSE_SUBTRACT = 2;
    public const VK_BLEND_OP_MIN = 3;
    public const VK_BLEND_OP_MAX = 4;
    public const VK_BLEND_OP_ZERO_EXT = 1000148000;
    public const VK_BLEND_OP_SRC_EXT = 1000148001;
    public const VK_BLEND_OP_DST_EXT = 1000148002;
    public const VK_BLEND_OP_SRC_OVER_EXT = 1000148003;
    public const VK_BLEND_OP_DST_OVER_EXT = 1000148004;
    public const VK_BLEND_OP_SRC_IN_EXT = 1000148005;
    public const VK_BLEND_OP_DST_IN_EXT = 1000148006;
    public const VK_BLEND_OP_SRC_OUT_EXT = 1000148007;
    public const VK_BLEND_OP_DST_OUT_EXT = 1000148008;
    public const VK_BLEND_OP_SRC_ATOP_EXT = 1000148009;
    public const VK_BLEND_OP_DST_ATOP_EXT = 1000148010;
    public const VK_BLEND_OP_XOR_EXT = 1000148011;
    public const VK_BLEND_OP_MULTIPLY_EXT = 1000148012;
    public const VK_BLEND_OP_SCREEN_EXT = 1000148013;
    public const VK_BLEND_OP_OVERLAY_EXT = 1000148014;
    public const VK_BLEND_OP_DARKEN_EXT = 1000148015;
    public const VK_BLEND_OP_LIGHTEN_EXT = 1000148016;
    public const VK_BLEND_OP_COLORDODGE_EXT = 1000148017;
    public const VK_BLEND_OP_COLORBURN_EXT = 1000148018;
    public const VK_BLEND_OP_HARDLIGHT_EXT = 1000148019;
    public const VK_BLEND_OP_SOFTLIGHT_EXT = 1000148020;
    public const VK_BLEND_OP_DIFFERENCE_EXT = 1000148021;
    public const VK_BLEND_OP_EXCLUSION_EXT = 1000148022;
    public const VK_BLEND_OP_INVERT_EXT = 1000148023;
    public const VK_BLEND_OP_INVERT_RGB_EXT = 1000148024;
    public const VK_BLEND_OP_LINEARDODGE_EXT = 1000148025;
    public const VK_BLEND_OP_LINEARBURN_EXT = 1000148026;
    public const VK_BLEND_OP_VIVIDLIGHT_EXT = 1000148027;
    public const VK_BLEND_OP_LINEARLIGHT_EXT = 1000148028;
    public const VK_BLEND_OP_PINLIGHT_EXT = 1000148029;
    public const VK_BLEND_OP_HARDMIX_EXT = 1000148030;
    public const VK_BLEND_OP_HSL_HUE_EXT = 1000148031;
    public const VK_BLEND_OP_HSL_SATURATION_EXT = 1000148032;
    public const VK_BLEND_OP_HSL_COLOR_EXT = 1000148033;
    public const VK_BLEND_OP_HSL_LUMINOSITY_EXT = 1000148034;
    public const VK_BLEND_OP_PLUS_EXT = 1000148035;
    public const VK_BLEND_OP_PLUS_CLAMPED_EXT = 1000148036;
    public const VK_BLEND_OP_PLUS_CLAMPED_ALPHA_EXT = 1000148037;
    public const VK_BLEND_OP_PLUS_DARKER_EXT = 1000148038;
    public const VK_BLEND_OP_MINUS_EXT = 1000148039;
    public const VK_BLEND_OP_MINUS_CLAMPED_EXT = 1000148040;
    public const VK_BLEND_OP_CONTRAST_EXT = 1000148041;
    public const VK_BLEND_OP_INVERT_OVG_EXT = 1000148042;
    public const VK_BLEND_OP_RED_EXT = 1000148043;
    public const VK_BLEND_OP_GREEN_EXT = 1000148044;
    public const VK_BLEND_OP_BLUE_EXT = 1000148045;
    public const VK_BLEND_OP_BEGIN_RANGE = self::VK_BLEND_OP_ADD;
    public const VK_BLEND_OP_END_RANGE = self::VK_BLEND_OP_MAX;
    public const VK_BLEND_OP_RANGE_SIZE = self::VK_BLEND_OP_MAX - self::VK_BLEND_OP_ADD + 1;
    public const VK_BLEND_OP_MAX_ENUM = 0x7FFFFFFF;
}
