<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkGeometryTypeKHR
{
    public const VK_GEOMETRY_TYPE_TRIANGLES_KHR = 0;
    public const VK_GEOMETRY_TYPE_AABBS_KHR = 1;
    public const VK_GEOMETRY_TYPE_INSTANCES_KHR = 1000150000;
    public const VK_GEOMETRY_TYPE_TRIANGLES_NV = self::VK_GEOMETRY_TYPE_TRIANGLES_KHR;
    public const VK_GEOMETRY_TYPE_AABBS_NV = self::VK_GEOMETRY_TYPE_AABBS_KHR;
    public const VK_GEOMETRY_TYPE_BEGIN_RANGE_KHR = self::VK_GEOMETRY_TYPE_TRIANGLES_KHR;
    public const VK_GEOMETRY_TYPE_END_RANGE_KHR = self::VK_GEOMETRY_TYPE_AABBS_KHR;
    public const VK_GEOMETRY_TYPE_RANGE_SIZE_KHR = self::VK_GEOMETRY_TYPE_AABBS_KHR - self::VK_GEOMETRY_TYPE_TRIANGLES_KHR + 1;
    public const VK_GEOMETRY_TYPE_MAX_ENUM_KHR = 0x7FFFFFFF;
}
