<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkCoverageReductionModeNV
{
    public const VK_COVERAGE_REDUCTION_MODE_MERGE_NV = 0;
    public const VK_COVERAGE_REDUCTION_MODE_TRUNCATE_NV = 1;
    public const VK_COVERAGE_REDUCTION_MODE_BEGIN_RANGE_NV = self::VK_COVERAGE_REDUCTION_MODE_MERGE_NV;
    public const VK_COVERAGE_REDUCTION_MODE_END_RANGE_NV = self::VK_COVERAGE_REDUCTION_MODE_TRUNCATE_NV;
    public const VK_COVERAGE_REDUCTION_MODE_RANGE_SIZE_NV = self::VK_COVERAGE_REDUCTION_MODE_TRUNCATE_NV - self::VK_COVERAGE_REDUCTION_MODE_MERGE_NV + 1;
    public const VK_COVERAGE_REDUCTION_MODE_MAX_ENUM_NV = 0x7FFFFFFF;
}
