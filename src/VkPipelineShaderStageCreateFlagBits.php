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
final class VkPipelineShaderStageCreateFlagBits
{
    public const VK_PIPELINE_SHADER_STAGE_CREATE_ALLOW_VARYING_SUBGROUP_SIZE_BIT_EXT = 0x00000001;
    public const VK_PIPELINE_SHADER_STAGE_CREATE_REQUIRE_FULL_SUBGROUPS_BIT_EXT = 0x00000002;
    public const VK_PIPELINE_SHADER_STAGE_CREATE_FLAG_BITS_MAX_ENUM = 0x7FFFFFF;
}
