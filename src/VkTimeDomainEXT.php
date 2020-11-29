<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkTimeDomainEXT
{
    public const VK_TIME_DOMAIN_DEVICE_EXT = 0;
    public const VK_TIME_DOMAIN_CLOCK_MONOTONIC_EXT = 1;
    public const VK_TIME_DOMAIN_CLOCK_MONOTONIC_RAW_EXT = 2;
    public const VK_TIME_DOMAIN_QUERY_PERFORMANCE_COUNTER_EXT = 3;
    public const VK_TIME_DOMAIN_BEGIN_RANGE_EXT = self::VK_TIME_DOMAIN_DEVICE_EXT;
    public const VK_TIME_DOMAIN_END_RANGE_EXT = self::VK_TIME_DOMAIN_QUERY_PERFORMANCE_COUNTER_EXT;
    public const VK_TIME_DOMAIN_RANGE_SIZE_EXT = self::VK_TIME_DOMAIN_QUERY_PERFORMANCE_COUNTER_EXT - self::VK_TIME_DOMAIN_DEVICE_EXT + 1;
    public const VK_TIME_DOMAIN_MAX_ENUM_EXT = 0x7FFFFFFF;
}
