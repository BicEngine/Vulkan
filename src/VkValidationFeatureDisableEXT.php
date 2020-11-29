<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkValidationFeatureDisableEXT
{
    public const VK_VALIDATION_FEATURE_DISABLE_ALL_EXT = 0;
    public const VK_VALIDATION_FEATURE_DISABLE_SHADERS_EXT = 1;
    public const VK_VALIDATION_FEATURE_DISABLE_THREAD_SAFETY_EXT = 2;
    public const VK_VALIDATION_FEATURE_DISABLE_API_PARAMETERS_EXT = 3;
    public const VK_VALIDATION_FEATURE_DISABLE_OBJECT_LIFETIMES_EXT = 4;
    public const VK_VALIDATION_FEATURE_DISABLE_CORE_CHECKS_EXT = 5;
    public const VK_VALIDATION_FEATURE_DISABLE_UNIQUE_HANDLES_EXT = 6;
    public const VK_VALIDATION_FEATURE_DISABLE_BEGIN_RANGE_EXT = self::VK_VALIDATION_FEATURE_DISABLE_ALL_EXT;
    public const VK_VALIDATION_FEATURE_DISABLE_END_RANGE_EXT = self::VK_VALIDATION_FEATURE_DISABLE_UNIQUE_HANDLES_EXT;
    public const VK_VALIDATION_FEATURE_DISABLE_RANGE_SIZE_EXT = self::VK_VALIDATION_FEATURE_DISABLE_UNIQUE_HANDLES_EXT - self::VK_VALIDATION_FEATURE_DISABLE_ALL_EXT + 1;
    public const VK_VALIDATION_FEATURE_DISABLE_MAX_ENUM_EXT = 0x7FFFFFFF;
}
