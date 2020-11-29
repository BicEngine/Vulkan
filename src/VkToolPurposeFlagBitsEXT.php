<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkToolPurposeFlagBitsEXT
{
    public const VK_TOOL_PURPOSE_VALIDATION_BIT_EXT = 0x00000001;
    public const VK_TOOL_PURPOSE_PROFILING_BIT_EXT = 0x00000002;
    public const VK_TOOL_PURPOSE_TRACING_BIT_EXT = 0x00000004;
    public const VK_TOOL_PURPOSE_ADDITIONAL_FEATURES_BIT_EXT = 0x00000008;
    public const VK_TOOL_PURPOSE_MODIFYING_FEATURES_BIT_EXT = 0x00000010;
    public const VK_TOOL_PURPOSE_DEBUG_REPORTING_BIT_EXT = 0x00000020;
    public const VK_TOOL_PURPOSE_DEBUG_MARKERS_BIT_EXT = 0x00000040;
    public const VK_TOOL_PURPOSE_FLAG_BITS_MAX_ENUM_EXT = 0x7FFFFFFF;
}
