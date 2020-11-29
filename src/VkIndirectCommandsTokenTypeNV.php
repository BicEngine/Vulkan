<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkIndirectCommandsTokenTypeNV
{
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_SHADER_GROUP_NV = 0;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_STATE_FLAGS_NV = 1;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_INDEX_BUFFER_NV = 2;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_VERTEX_BUFFER_NV = 3;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_PUSH_CONSTANT_NV = 4;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_INDEXED_NV = 5;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_NV = 6;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_TASKS_NV = 7;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_BEGIN_RANGE_NV = self::VK_INDIRECT_COMMANDS_TOKEN_TYPE_SHADER_GROUP_NV;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_END_RANGE_NV = self::VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_TASKS_NV;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_RANGE_SIZE_NV = self::VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_TASKS_NV - self::VK_INDIRECT_COMMANDS_TOKEN_TYPE_SHADER_GROUP_NV + 1;
    public const VK_INDIRECT_COMMANDS_TOKEN_TYPE_MAX_ENUM_NV = 0x7FFFFFFF;
}
