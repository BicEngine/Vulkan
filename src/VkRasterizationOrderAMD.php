<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkRasterizationOrderAMD
{
    public const VK_RASTERIZATION_ORDER_STRICT_AMD = 0;
    public const VK_RASTERIZATION_ORDER_RELAXED_AMD = 1;
    public const VK_RASTERIZATION_ORDER_BEGIN_RANGE_AMD = self::VK_RASTERIZATION_ORDER_STRICT_AMD;
    public const VK_RASTERIZATION_ORDER_END_RANGE_AMD = self::VK_RASTERIZATION_ORDER_RELAXED_AMD;
    public const VK_RASTERIZATION_ORDER_RANGE_SIZE_AMD = self::VK_RASTERIZATION_ORDER_RELAXED_AMD - self::VK_RASTERIZATION_ORDER_STRICT_AMD + 1;
    public const VK_RASTERIZATION_ORDER_MAX_ENUM_AMD = 0x7FFFFFFF;
}
