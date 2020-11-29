<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkValidationCacheHeaderVersionEXT
{
    public const VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT = 1;
    public const VK_VALIDATION_CACHE_HEADER_VERSION_BEGIN_RANGE_EXT = self::VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT;
    public const VK_VALIDATION_CACHE_HEADER_VERSION_END_RANGE_EXT = self::VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT;
    public const VK_VALIDATION_CACHE_HEADER_VERSION_RANGE_SIZE_EXT = self::VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT - self::VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT + 1;
    public const VK_VALIDATION_CACHE_HEADER_VERSION_MAX_ENUM_EXT = 0x7FFFFFFF;
}
