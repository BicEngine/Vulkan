<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkCoarseSampleOrderTypeNV
{
    public const VK_COARSE_SAMPLE_ORDER_TYPE_DEFAULT_NV = 0;
    public const VK_COARSE_SAMPLE_ORDER_TYPE_CUSTOM_NV = 1;
    public const VK_COARSE_SAMPLE_ORDER_TYPE_PIXEL_MAJOR_NV = 2;
    public const VK_COARSE_SAMPLE_ORDER_TYPE_SAMPLE_MAJOR_NV = 3;
    public const VK_COARSE_SAMPLE_ORDER_TYPE_BEGIN_RANGE_NV = self::VK_COARSE_SAMPLE_ORDER_TYPE_DEFAULT_NV;
    public const VK_COARSE_SAMPLE_ORDER_TYPE_END_RANGE_NV = self::VK_COARSE_SAMPLE_ORDER_TYPE_SAMPLE_MAJOR_NV;
    public const VK_COARSE_SAMPLE_ORDER_TYPE_RANGE_SIZE_NV = self::VK_COARSE_SAMPLE_ORDER_TYPE_SAMPLE_MAJOR_NV - self::VK_COARSE_SAMPLE_ORDER_TYPE_DEFAULT_NV + 1;
    public const VK_COARSE_SAMPLE_ORDER_TYPE_MAX_ENUM_NV = 0x7FFFFFFF;
}
