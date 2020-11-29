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
 * @since 1.1
 */
final class VkPointClippingBehavior
{
    public const VK_POINT_CLIPPING_BEHAVIOR_ALL_CLIP_PLANES = 0;
    public const VK_POINT_CLIPPING_BEHAVIOR_USER_CLIP_PLANES_ONLY = 1;
    public const VK_POINT_CLIPPING_BEHAVIOR_ALL_CLIP_PLANES_KHR = self::VK_POINT_CLIPPING_BEHAVIOR_ALL_CLIP_PLANES;
    public const VK_POINT_CLIPPING_BEHAVIOR_USER_CLIP_PLANES_ONLY_KHR = self::VK_POINT_CLIPPING_BEHAVIOR_USER_CLIP_PLANES_ONLY;
    public const VK_POINT_CLIPPING_BEHAVIOR_BEGIN_RANGE = self::VK_POINT_CLIPPING_BEHAVIOR_ALL_CLIP_PLANES;
    public const VK_POINT_CLIPPING_BEHAVIOR_END_RANGE = self::VK_POINT_CLIPPING_BEHAVIOR_USER_CLIP_PLANES_ONLY;
    public const VK_POINT_CLIPPING_BEHAVIOR_RANGE_SIZE = self::VK_POINT_CLIPPING_BEHAVIOR_USER_CLIP_PLANES_ONLY - self::VK_POINT_CLIPPING_BEHAVIOR_ALL_CLIP_PLANES + 1;
    public const VK_POINT_CLIPPING_BEHAVIOR_MAX_ENUM = 0x7FFFFFFF;
}
