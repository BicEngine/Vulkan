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
final class VkLogicOp
{
    public const VK_LOGIC_OP_CLEAR = 0;
    public const VK_LOGIC_OP_AND = 1;
    public const VK_LOGIC_OP_AND_REVERSE = 2;
    public const VK_LOGIC_OP_COPY = 3;
    public const VK_LOGIC_OP_AND_INVERTED = 4;
    public const VK_LOGIC_OP_NO_OP = 5;
    public const VK_LOGIC_OP_XOR = 6;
    public const VK_LOGIC_OP_OR = 7;
    public const VK_LOGIC_OP_NOR = 8;
    public const VK_LOGIC_OP_EQUIVALENT = 9;
    public const VK_LOGIC_OP_INVERT = 10;
    public const VK_LOGIC_OP_OR_REVERSE = 11;
    public const VK_LOGIC_OP_COPY_INVERTED = 12;
    public const VK_LOGIC_OP_OR_INVERTED = 13;
    public const VK_LOGIC_OP_NAND = 14;
    public const VK_LOGIC_OP_SET = 15;
    public const VK_LOGIC_OP_BEGIN_RANGE = self::VK_LOGIC_OP_CLEAR;
    public const VK_LOGIC_OP_END_RANGE = self::VK_LOGIC_OP_SET;
    public const VK_LOGIC_OP_RANGE_SIZE = self::VK_LOGIC_OP_SET - self::VK_LOGIC_OP_CLEAR + 1;
    public const VK_LOGIC_OP_MAX_ENUM = 0x7FFFFFFF;
}
