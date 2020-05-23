<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkPerformanceOverrideTypeINTEL
{
    public const VK_PERFORMANCE_OVERRIDE_TYPE_NULL_HARDWARE_INTEL = 0;
    public const VK_PERFORMANCE_OVERRIDE_TYPE_FLUSH_GPU_CACHES_INTEL = 1;
    public const VK_PERFORMANCE_OVERRIDE_TYPE_BEGIN_RANGE_INTEL = self::VK_PERFORMANCE_OVERRIDE_TYPE_NULL_HARDWARE_INTEL;
    public const VK_PERFORMANCE_OVERRIDE_TYPE_END_RANGE_INTEL = self::VK_PERFORMANCE_OVERRIDE_TYPE_FLUSH_GPU_CACHES_INTEL;
    public const VK_PERFORMANCE_OVERRIDE_TYPE_RANGE_SIZE_INTEL = self::VK_PERFORMANCE_OVERRIDE_TYPE_FLUSH_GPU_CACHES_INTEL - self::VK_PERFORMANCE_OVERRIDE_TYPE_NULL_HARDWARE_INTEL + 1;
    public const VK_PERFORMANCE_OVERRIDE_TYPE_MAX_ENUM_INTEL = 0x7FFFFFFF;
}
