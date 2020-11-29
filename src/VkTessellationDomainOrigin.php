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
final class VkTessellationDomainOrigin
{
    public const VK_TESSELLATION_DOMAIN_ORIGIN_UPPER_LEFT = 0;
    public const VK_TESSELLATION_DOMAIN_ORIGIN_LOWER_LEFT = 1;
    public const VK_TESSELLATION_DOMAIN_ORIGIN_UPPER_LEFT_KHR = self::VK_TESSELLATION_DOMAIN_ORIGIN_UPPER_LEFT;
    public const VK_TESSELLATION_DOMAIN_ORIGIN_LOWER_LEFT_KHR = self::VK_TESSELLATION_DOMAIN_ORIGIN_LOWER_LEFT;
    public const VK_TESSELLATION_DOMAIN_ORIGIN_BEGIN_RANGE = self::VK_TESSELLATION_DOMAIN_ORIGIN_UPPER_LEFT;
    public const VK_TESSELLATION_DOMAIN_ORIGIN_END_RANGE = self::VK_TESSELLATION_DOMAIN_ORIGIN_LOWER_LEFT;
    public const VK_TESSELLATION_DOMAIN_ORIGIN_RANGE_SIZE = self::VK_TESSELLATION_DOMAIN_ORIGIN_LOWER_LEFT - self::VK_TESSELLATION_DOMAIN_ORIGIN_UPPER_LEFT + 1;
    public const VK_TESSELLATION_DOMAIN_ORIGIN_MAX_ENUM = 0x7FFFFFFF;
}
