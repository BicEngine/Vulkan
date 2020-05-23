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
final class VkChromaLocation
{
    public const VK_CHROMA_LOCATION_COSITED_EVEN = 0;
    public const VK_CHROMA_LOCATION_MIDPOINT = 1;
    public const VK_CHROMA_LOCATION_COSITED_EVEN_KHR = self::VK_CHROMA_LOCATION_COSITED_EVEN;
    public const VK_CHROMA_LOCATION_MIDPOINT_KHR = self::VK_CHROMA_LOCATION_MIDPOINT;
    public const VK_CHROMA_LOCATION_BEGIN_RANGE = self::VK_CHROMA_LOCATION_COSITED_EVEN;
    public const VK_CHROMA_LOCATION_END_RANGE = self::VK_CHROMA_LOCATION_MIDPOINT;
    public const VK_CHROMA_LOCATION_RANGE_SIZE = self::VK_CHROMA_LOCATION_MIDPOINT - self::VK_CHROMA_LOCATION_COSITED_EVEN + 1;
    public const VK_CHROMA_LOCATION_MAX_ENUM = 0x7FFFFFFF;
}
