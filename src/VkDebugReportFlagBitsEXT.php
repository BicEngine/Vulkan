<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkDebugReportFlagBitsEXT
{
    public const VK_DEBUG_REPORT_INFORMATION_BIT_EXT = 0x00000001;
    public const VK_DEBUG_REPORT_WARNING_BIT_EXT = 0x00000002;
    public const VK_DEBUG_REPORT_PERFORMANCE_WARNING_BIT_EXT = 0x00000004;
    public const VK_DEBUG_REPORT_ERROR_BIT_EXT = 0x00000008;
    public const VK_DEBUG_REPORT_DEBUG_BIT_EXT = 0x00000010;
    public const VK_DEBUG_REPORT_FLAG_BITS_MAX_ENUM_EXT = 0x7FFFFFFF;
}
