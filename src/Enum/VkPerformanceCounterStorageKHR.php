<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkPerformanceCounterStorageKHR
{
    public const VK_PERFORMANCE_COUNTER_STORAGE_INT32_KHR = 0;
    public const VK_PERFORMANCE_COUNTER_STORAGE_INT64_KHR = 1;
    public const VK_PERFORMANCE_COUNTER_STORAGE_UINT32_KHR = 2;
    public const VK_PERFORMANCE_COUNTER_STORAGE_UINT64_KHR = 3;
    public const VK_PERFORMANCE_COUNTER_STORAGE_FLOAT32_KHR = 4;
    public const VK_PERFORMANCE_COUNTER_STORAGE_FLOAT64_KHR = 5;
    public const VK_PERFORMANCE_COUNTER_STORAGE_BEGIN_RANGE_KHR = self::VK_PERFORMANCE_COUNTER_STORAGE_INT32_KHR;
    public const VK_PERFORMANCE_COUNTER_STORAGE_END_RANGE_KHR = self::VK_PERFORMANCE_COUNTER_STORAGE_FLOAT64_KHR;
    public const VK_PERFORMANCE_COUNTER_STORAGE_RANGE_SIZE_KHR = self::VK_PERFORMANCE_COUNTER_STORAGE_FLOAT64_KHR - self::VK_PERFORMANCE_COUNTER_STORAGE_INT32_KHR + 1;
    public const VK_PERFORMANCE_COUNTER_STORAGE_MAX_ENUM_KHR = 0x7FFFFFFF;
}
