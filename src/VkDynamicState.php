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
final class VkDynamicState
{
    public const VK_DYNAMIC_STATE_VIEWPORT = 0;
    public const VK_DYNAMIC_STATE_SCISSOR = 1;
    public const VK_DYNAMIC_STATE_LINE_WIDTH = 2;
    public const VK_DYNAMIC_STATE_DEPTH_BIAS = 3;
    public const VK_DYNAMIC_STATE_BLEND_CONSTANTS = 4;
    public const VK_DYNAMIC_STATE_DEPTH_BOUNDS = 5;
    public const VK_DYNAMIC_STATE_STENCIL_COMPARE_MASK = 6;
    public const VK_DYNAMIC_STATE_STENCIL_WRITE_MASK = 7;
    public const VK_DYNAMIC_STATE_STENCIL_REFERENCE = 8;
    public const VK_DYNAMIC_STATE_VIEWPORT_W_SCALING_NV = 1000087000;
    public const VK_DYNAMIC_STATE_DISCARD_RECTANGLE_EXT = 1000099000;
    public const VK_DYNAMIC_STATE_SAMPLE_LOCATIONS_EXT = 1000143000;
    public const VK_DYNAMIC_STATE_VIEWPORT_SHADING_RATE_PALETTE_NV = 1000164004;
    public const VK_DYNAMIC_STATE_VIEWPORT_COARSE_SAMPLE_ORDER_NV = 1000164006;
    public const VK_DYNAMIC_STATE_EXCLUSIVE_SCISSOR_NV = 1000205001;
    public const VK_DYNAMIC_STATE_LINE_STIPPLE_EXT = 1000259000;
    public const VK_DYNAMIC_STATE_BEGIN_RANGE = self::VK_DYNAMIC_STATE_VIEWPORT;
    public const VK_DYNAMIC_STATE_END_RANGE = self::VK_DYNAMIC_STATE_STENCIL_REFERENCE;
    public const VK_DYNAMIC_STATE_RANGE_SIZE = self::VK_DYNAMIC_STATE_STENCIL_REFERENCE - self::VK_DYNAMIC_STATE_VIEWPORT + 1;
    public const VK_DYNAMIC_STATE_MAX_ENUM = 0x7FFFFFFF;
}
