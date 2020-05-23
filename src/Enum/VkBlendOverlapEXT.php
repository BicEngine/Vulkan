<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkBlendOverlapEXT
{
    public const VK_BLEND_OVERLAP_UNCORRELATED_EXT = 0;
    public const VK_BLEND_OVERLAP_DISJOINT_EXT = 1;
    public const VK_BLEND_OVERLAP_CONJOINT_EXT = 2;
    public const VK_BLEND_OVERLAP_BEGIN_RANGE_EXT = self::VK_BLEND_OVERLAP_UNCORRELATED_EXT;
    public const VK_BLEND_OVERLAP_END_RANGE_EXT = self::VK_BLEND_OVERLAP_CONJOINT_EXT;
    public const VK_BLEND_OVERLAP_RANGE_SIZE_EXT = self::VK_BLEND_OVERLAP_CONJOINT_EXT - self::VK_BLEND_OVERLAP_UNCORRELATED_EXT + 1;
    public const VK_BLEND_OVERLAP_MAX_ENUM_EXT = 0x7FFFFFFF;
}
