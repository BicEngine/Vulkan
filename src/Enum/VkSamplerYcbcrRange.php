<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

/**
 * @since 1.1
 */
final class VkSamplerYcbcrRange
{
    public const VK_SAMPLER_YCBCR_RANGE_ITU_FULL = 0;
    public const VK_SAMPLER_YCBCR_RANGE_ITU_NARROW = 1;
    public const VK_SAMPLER_YCBCR_RANGE_ITU_FULL_KHR = self::VK_SAMPLER_YCBCR_RANGE_ITU_FULL;
    public const VK_SAMPLER_YCBCR_RANGE_ITU_NARROW_KHR = self::VK_SAMPLER_YCBCR_RANGE_ITU_NARROW;
    public const VK_SAMPLER_YCBCR_RANGE_BEGIN_RANGE = self::VK_SAMPLER_YCBCR_RANGE_ITU_FULL;
    public const VK_SAMPLER_YCBCR_RANGE_END_RANGE = self::VK_SAMPLER_YCBCR_RANGE_ITU_NARROW;
    public const VK_SAMPLER_YCBCR_RANGE_RANGE_SIZE = self::VK_SAMPLER_YCBCR_RANGE_ITU_NARROW - self::VK_SAMPLER_YCBCR_RANGE_ITU_FULL + 1;
    public const VK_SAMPLER_YCBCR_RANGE_MAX_ENUM = 0x7FFFFFFF;
}
