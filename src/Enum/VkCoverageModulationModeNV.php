<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkCoverageModulationModeNV
{
    public const VK_COVERAGE_MODULATION_MODE_NONE_NV = 0;
    public const VK_COVERAGE_MODULATION_MODE_RGB_NV = 1;
    public const VK_COVERAGE_MODULATION_MODE_ALPHA_NV = 2;
    public const VK_COVERAGE_MODULATION_MODE_RGBA_NV = 3;
    public const VK_COVERAGE_MODULATION_MODE_BEGIN_RANGE_NV = self::VK_COVERAGE_MODULATION_MODE_NONE_NV;
    public const VK_COVERAGE_MODULATION_MODE_END_RANGE_NV = self::VK_COVERAGE_MODULATION_MODE_RGBA_NV;
    public const VK_COVERAGE_MODULATION_MODE_RANGE_SIZE_NV = self::VK_COVERAGE_MODULATION_MODE_RGBA_NV - self::VK_COVERAGE_MODULATION_MODE_NONE_NV + 1;
    public const VK_COVERAGE_MODULATION_MODE_MAX_ENUM_NV = 0x7FFFFFFF;
}
