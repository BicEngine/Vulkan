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
final class VkStencilOp
{
    public const VK_STENCIL_OP_KEEP = 0;
    public const VK_STENCIL_OP_ZERO = 1;
    public const VK_STENCIL_OP_REPLACE = 2;
    public const VK_STENCIL_OP_INCREMENT_AND_CLAMP = 3;
    public const VK_STENCIL_OP_DECREMENT_AND_CLAMP = 4;
    public const VK_STENCIL_OP_INVERT = 5;
    public const VK_STENCIL_OP_INCREMENT_AND_WRAP = 6;
    public const VK_STENCIL_OP_DECREMENT_AND_WRAP = 7;
    public const VK_STENCIL_OP_BEGIN_RANGE = self::VK_STENCIL_OP_KEEP;
    public const VK_STENCIL_OP_END_RANGE = self::VK_STENCIL_OP_DECREMENT_AND_WRAP;
    public const VK_STENCIL_OP_RANGE_SIZE = self::VK_STENCIL_OP_DECREMENT_AND_WRAP - self::VK_STENCIL_OP_KEEP + 1;
    public const VK_STENCIL_OP_MAX_ENUM = 0x7FFFFFFF;
}
