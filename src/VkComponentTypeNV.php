<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkComponentTypeNV
{
    public const VK_COMPONENT_TYPE_FLOAT16_NV = 0;
    public const VK_COMPONENT_TYPE_FLOAT32_NV = 1;
    public const VK_COMPONENT_TYPE_FLOAT64_NV = 2;
    public const VK_COMPONENT_TYPE_SINT8_NV = 3;
    public const VK_COMPONENT_TYPE_SINT16_NV = 4;
    public const VK_COMPONENT_TYPE_SINT32_NV = 5;
    public const VK_COMPONENT_TYPE_SINT64_NV = 6;
    public const VK_COMPONENT_TYPE_UINT8_NV = 7;
    public const VK_COMPONENT_TYPE_UINT16_NV = 8;
    public const VK_COMPONENT_TYPE_UINT32_NV = 9;
    public const VK_COMPONENT_TYPE_UINT64_NV = 10;
    public const VK_COMPONENT_TYPE_BEGIN_RANGE_NV = self::VK_COMPONENT_TYPE_FLOAT16_NV;
    public const VK_COMPONENT_TYPE_END_RANGE_NV = self::VK_COMPONENT_TYPE_UINT64_NV;
    public const VK_COMPONENT_TYPE_RANGE_SIZE_NV = self::VK_COMPONENT_TYPE_UINT64_NV - self::VK_COMPONENT_TYPE_FLOAT16_NV + 1;
    public const VK_COMPONENT_TYPE_MAX_ENUM_NV = 0x7FFFFFFF;
}
