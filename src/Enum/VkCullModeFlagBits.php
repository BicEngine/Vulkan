<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

/**
 * @since 1.0
 */
final class VkCullModeFlagBits
{
    public const VK_CULL_MODE_NONE = 0;
    public const VK_CULL_MODE_FRONT_BIT = 0x00000001;
    public const VK_CULL_MODE_BACK_BIT = 0x00000002;
    public const VK_CULL_MODE_FRONT_AND_BACK = 0x00000003;
    public const VK_CULL_MODE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
