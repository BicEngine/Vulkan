<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkMemoryOverallocationBehaviorAMD
{
    public const VK_MEMORY_OVERALLOCATION_BEHAVIOR_DEFAULT_AMD = 0;
    public const VK_MEMORY_OVERALLOCATION_BEHAVIOR_ALLOWED_AMD = 1;
    public const VK_MEMORY_OVERALLOCATION_BEHAVIOR_DISALLOWED_AMD = 2;
    public const VK_MEMORY_OVERALLOCATION_BEHAVIOR_BEGIN_RANGE_AMD = self::VK_MEMORY_OVERALLOCATION_BEHAVIOR_DEFAULT_AMD;
    public const VK_MEMORY_OVERALLOCATION_BEHAVIOR_END_RANGE_AMD = self::VK_MEMORY_OVERALLOCATION_BEHAVIOR_DISALLOWED_AMD;
    public const VK_MEMORY_OVERALLOCATION_BEHAVIOR_RANGE_SIZE_AMD = self::VK_MEMORY_OVERALLOCATION_BEHAVIOR_DISALLOWED_AMD - self::VK_MEMORY_OVERALLOCATION_BEHAVIOR_DEFAULT_AMD + 1;
    public const VK_MEMORY_OVERALLOCATION_BEHAVIOR_MAX_ENUM_AMD = 0x7FFFFFFF;
}
