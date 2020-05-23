<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

/**
 * @since 1.2
 */
final class VkSamplerReductionMode
{
    public const VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE = 0;
    public const VK_SAMPLER_REDUCTION_MODE_MIN = 1;
    public const VK_SAMPLER_REDUCTION_MODE_MAX = 2;
    public const VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE_EXT = self::VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE;
    public const VK_SAMPLER_REDUCTION_MODE_MIN_EXT = self::VK_SAMPLER_REDUCTION_MODE_MIN;
    public const VK_SAMPLER_REDUCTION_MODE_MAX_EXT = self::VK_SAMPLER_REDUCTION_MODE_MAX;
    public const VK_SAMPLER_REDUCTION_MODE_BEGIN_RANGE = self::VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE;
    public const VK_SAMPLER_REDUCTION_MODE_END_RANGE = self::VK_SAMPLER_REDUCTION_MODE_MAX;
    public const VK_SAMPLER_REDUCTION_MODE_RANGE_SIZE = self::VK_SAMPLER_REDUCTION_MODE_MAX - self::VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE + 1;
    public const VK_SAMPLER_REDUCTION_MODE_MAX_ENUM = 0x7FFFFFFF;
}
