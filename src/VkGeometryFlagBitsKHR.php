<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkGeometryFlagBitsKHR
{
    public const VK_GEOMETRY_OPAQUE_BIT_KHR = 0x00000001;
    public const VK_GEOMETRY_NO_DUPLICATE_ANY_HIT_INVOCATION_BIT_KHR = 0x00000002;
    public const VK_GEOMETRY_OPAQUE_BIT_NV = self::VK_GEOMETRY_OPAQUE_BIT_KHR;
    public const VK_GEOMETRY_NO_DUPLICATE_ANY_HIT_INVOCATION_BIT_NV = self::VK_GEOMETRY_NO_DUPLICATE_ANY_HIT_INVOCATION_BIT_KHR;
    public const VK_GEOMETRY_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF;
}
