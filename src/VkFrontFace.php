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
final class VkFrontFace
{
    public const VK_FRONT_FACE_COUNTER_CLOCKWISE = 0;
    public const VK_FRONT_FACE_CLOCKWISE = 1;
    public const VK_FRONT_FACE_BEGIN_RANGE = self::VK_FRONT_FACE_COUNTER_CLOCKWISE;
    public const VK_FRONT_FACE_END_RANGE = self::VK_FRONT_FACE_CLOCKWISE;
    public const VK_FRONT_FACE_RANGE_SIZE = self::VK_FRONT_FACE_CLOCKWISE - self::VK_FRONT_FACE_COUNTER_CLOCKWISE + 1;
    public const VK_FRONT_FACE_MAX_ENUM = 0x7FFFFFFF;
}
