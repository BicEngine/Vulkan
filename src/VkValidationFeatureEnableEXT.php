<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkValidationFeatureEnableEXT
{
    public const VK_VALIDATION_FEATURE_ENABLE_GPU_ASSISTED_EXT = 0;
    public const VK_VALIDATION_FEATURE_ENABLE_GPU_ASSISTED_RESERVE_BINDING_SLOT_EXT = 1;
    public const VK_VALIDATION_FEATURE_ENABLE_BEST_PRACTICES_EXT = 2;
    public const VK_VALIDATION_FEATURE_ENABLE_DEBUG_PRINTF_EXT = 3;
    public const VK_VALIDATION_FEATURE_ENABLE_BEGIN_RANGE_EXT = self::VK_VALIDATION_FEATURE_ENABLE_GPU_ASSISTED_EXT;
    public const VK_VALIDATION_FEATURE_ENABLE_END_RANGE_EXT = self::VK_VALIDATION_FEATURE_ENABLE_DEBUG_PRINTF_EXT;
    public const VK_VALIDATION_FEATURE_ENABLE_RANGE_SIZE_EXT = self::VK_VALIDATION_FEATURE_ENABLE_DEBUG_PRINTF_EXT - self::VK_VALIDATION_FEATURE_ENABLE_GPU_ASSISTED_EXT + 1;
    public const VK_VALIDATION_FEATURE_ENABLE_MAX_ENUM_EXT = 0x7FFFFFFF;
}
