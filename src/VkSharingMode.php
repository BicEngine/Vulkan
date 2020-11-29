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
 * @since 1.0
 */
final class VkSharingMode
{
    public const VK_SHARING_MODE_EXCLUSIVE   = 0;
    public const VK_SHARING_MODE_CONCURRENT  = 1;
    public const VK_SHARING_MODE_BEGIN_RANGE = self::VK_SHARING_MODE_EXCLUSIVE;
    public const VK_SHARING_MODE_END_RANGE   = self::VK_SHARING_MODE_CONCURRENT;
    public const VK_SHARING_MODE_RANGE_SIZE  = self::VK_SHARING_MODE_CONCURRENT - self::VK_SHARING_MODE_EXCLUSIVE + 1;
    public const VK_SHARING_MODE_MAX_ENUM    = 0x7FFFFFFF;
}
