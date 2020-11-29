<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

/**
 * @since 1.0
 */
final class VkPrimitiveTopology
{
    public const VK_PRIMITIVE_TOPOLOGY_POINT_LIST = 0;
    public const VK_PRIMITIVE_TOPOLOGY_LINE_LIST = 1;
    public const VK_PRIMITIVE_TOPOLOGY_LINE_STRIP = 2;
    public const VK_PRIMITIVE_TOPOLOGY_TRIANGLE_LIST = 3;
    public const VK_PRIMITIVE_TOPOLOGY_TRIANGLE_STRIP = 4;
    public const VK_PRIMITIVE_TOPOLOGY_TRIANGLE_FAN = 5;
    public const VK_PRIMITIVE_TOPOLOGY_LINE_LIST_WITH_ADJACENCY = 6;
    public const VK_PRIMITIVE_TOPOLOGY_LINE_STRIP_WITH_ADJACENCY = 7;
    public const VK_PRIMITIVE_TOPOLOGY_TRIANGLE_LIST_WITH_ADJACENCY = 8;
    public const VK_PRIMITIVE_TOPOLOGY_TRIANGLE_STRIP_WITH_ADJACENCY = 9;
    public const VK_PRIMITIVE_TOPOLOGY_PATCH_LIST = 10;
    public const VK_PRIMITIVE_TOPOLOGY_BEGIN_RANGE = self::VK_PRIMITIVE_TOPOLOGY_POINT_LIST;
    public const VK_PRIMITIVE_TOPOLOGY_END_RANGE = self::VK_PRIMITIVE_TOPOLOGY_PATCH_LIST;
    public const VK_PRIMITIVE_TOPOLOGY_RANGE_SIZE = self::VK_PRIMITIVE_TOPOLOGY_PATCH_LIST - self::VK_PRIMITIVE_TOPOLOGY_POINT_LIST + 1;
    public const VK_PRIMITIVE_TOPOLOGY_MAX_ENUM = 0x7FFFFFFF;
}
