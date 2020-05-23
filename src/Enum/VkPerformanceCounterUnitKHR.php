<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkPerformanceCounterUnitKHR
{
    public const VK_PERFORMANCE_COUNTER_UNIT_GENERIC_KHR = 0;
    public const VK_PERFORMANCE_COUNTER_UNIT_PERCENTAGE_KHR = 1;
    public const VK_PERFORMANCE_COUNTER_UNIT_NANOSECONDS_KHR = 2;
    public const VK_PERFORMANCE_COUNTER_UNIT_BYTES_KHR = 3;
    public const VK_PERFORMANCE_COUNTER_UNIT_BYTES_PER_SECOND_KHR = 4;
    public const VK_PERFORMANCE_COUNTER_UNIT_KELVIN_KHR = 5;
    public const VK_PERFORMANCE_COUNTER_UNIT_WATTS_KHR = 6;
    public const VK_PERFORMANCE_COUNTER_UNIT_VOLTS_KHR = 7;
    public const VK_PERFORMANCE_COUNTER_UNIT_AMPS_KHR = 8;
    public const VK_PERFORMANCE_COUNTER_UNIT_HERTZ_KHR = 9;
    public const VK_PERFORMANCE_COUNTER_UNIT_CYCLES_KHR = 10;
    public const VK_PERFORMANCE_COUNTER_UNIT_BEGIN_RANGE_KHR = self::VK_PERFORMANCE_COUNTER_UNIT_GENERIC_KHR;
    public const VK_PERFORMANCE_COUNTER_UNIT_END_RANGE_KHR = self::VK_PERFORMANCE_COUNTER_UNIT_CYCLES_KHR;
    public const VK_PERFORMANCE_COUNTER_UNIT_RANGE_SIZE_KHR = self::VK_PERFORMANCE_COUNTER_UNIT_CYCLES_KHR - self::VK_PERFORMANCE_COUNTER_UNIT_GENERIC_KHR + 1;
    public const VK_PERFORMANCE_COUNTER_UNIT_MAX_ENUM_KHR = 0x7FFFFFFF;
}
