<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkPerformanceValueTypeINTEL
{
    public const VK_PERFORMANCE_VALUE_TYPE_UINT32_INTEL = 0;
    public const VK_PERFORMANCE_VALUE_TYPE_UINT64_INTEL = 1;
    public const VK_PERFORMANCE_VALUE_TYPE_FLOAT_INTEL = 2;
    public const VK_PERFORMANCE_VALUE_TYPE_BOOL_INTEL = 3;
    public const VK_PERFORMANCE_VALUE_TYPE_STRING_INTEL = 4;
    public const VK_PERFORMANCE_VALUE_TYPE_BEGIN_RANGE_INTEL = self::VK_PERFORMANCE_VALUE_TYPE_UINT32_INTEL;
    public const VK_PERFORMANCE_VALUE_TYPE_END_RANGE_INTEL = self::VK_PERFORMANCE_VALUE_TYPE_STRING_INTEL;
    public const VK_PERFORMANCE_VALUE_TYPE_RANGE_SIZE_INTEL = self::VK_PERFORMANCE_VALUE_TYPE_STRING_INTEL - self::VK_PERFORMANCE_VALUE_TYPE_UINT32_INTEL + 1;
    public const VK_PERFORMANCE_VALUE_TYPE_MAX_ENUM_INTEL = 0x7FFFFFFF;
}
