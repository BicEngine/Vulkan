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
final class VkCompareOp
{
    public const VK_COMPARE_OP_NEVER = 0;
    public const VK_COMPARE_OP_LESS = 1;
    public const VK_COMPARE_OP_EQUAL = 2;
    public const VK_COMPARE_OP_LESS_OR_EQUAL = 3;
    public const VK_COMPARE_OP_GREATER = 4;
    public const VK_COMPARE_OP_NOT_EQUAL = 5;
    public const VK_COMPARE_OP_GREATER_OR_EQUAL = 6;
    public const VK_COMPARE_OP_ALWAYS = 7;
    public const VK_COMPARE_OP_BEGIN_RANGE = self::VK_COMPARE_OP_NEVER;
    public const VK_COMPARE_OP_END_RANGE = self::VK_COMPARE_OP_ALWAYS;
    public const VK_COMPARE_OP_RANGE_SIZE = self::VK_COMPARE_OP_ALWAYS - self::VK_COMPARE_OP_NEVER + 1;
    public const VK_COMPARE_OP_MAX_ENUM = 0x7FFFFFFF;
}
