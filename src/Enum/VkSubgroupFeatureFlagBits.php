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
 * @since 1.1
 */
final class VkSubgroupFeatureFlagBits
{
    public const VK_SUBGROUP_FEATURE_BASIC_BIT = 0x00000001;
    public const VK_SUBGROUP_FEATURE_VOTE_BIT = 0x00000002;
    public const VK_SUBGROUP_FEATURE_ARITHMETIC_BIT = 0x00000004;
    public const VK_SUBGROUP_FEATURE_BALLOT_BIT = 0x00000008;
    public const VK_SUBGROUP_FEATURE_SHUFFLE_BIT = 0x00000010;
    public const VK_SUBGROUP_FEATURE_SHUFFLE_RELATIVE_BIT = 0x00000020;
    public const VK_SUBGROUP_FEATURE_CLUSTERED_BIT = 0x00000040;
    public const VK_SUBGROUP_FEATURE_QUAD_BIT = 0x00000080;
    public const VK_SUBGROUP_FEATURE_PARTITIONED_BIT_NV = 0x00000100;
    public const VK_SUBGROUP_FEATURE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
