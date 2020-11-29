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
final class VkPipelineCacheHeaderVersion
{
    public const VK_PIPELINE_CACHE_HEADER_VERSION_ONE         = 1;
    public const VK_PIPELINE_CACHE_HEADER_VERSION_BEGIN_RANGE = self::VK_PIPELINE_CACHE_HEADER_VERSION_ONE;
    public const VK_PIPELINE_CACHE_HEADER_VERSION_END_RANGE   = self::VK_PIPELINE_CACHE_HEADER_VERSION_ONE;
    public const VK_PIPELINE_CACHE_HEADER_VERSION_RANGE_SIZE  = self::VK_PIPELINE_CACHE_HEADER_VERSION_ONE - self::VK_PIPELINE_CACHE_HEADER_VERSION_ONE + 1;
    public const VK_PIPELINE_CACHE_HEADER_VERSION_MAX_ENUM    = 0x7FFF_FFFF;
}
