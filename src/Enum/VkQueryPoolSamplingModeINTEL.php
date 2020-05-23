<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkQueryPoolSamplingModeINTEL
{
    public const VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL = 0;
    public const VK_QUERY_POOL_SAMPLING_MODE_BEGIN_RANGE_INTEL = self::VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL;
    public const VK_QUERY_POOL_SAMPLING_MODE_END_RANGE_INTEL = self::VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL;
    public const VK_QUERY_POOL_SAMPLING_MODE_RANGE_SIZE_INTEL = self::VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL - self::VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL + 1;
    public const VK_QUERY_POOL_SAMPLING_MODE_MAX_ENUM_INTEL = 0x7FFFFFFF;
}
