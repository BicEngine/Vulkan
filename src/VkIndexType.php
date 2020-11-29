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
final class VkIndexType
{
    public const VK_INDEX_TYPE_UINT16 = 0;
    public const VK_INDEX_TYPE_UINT32 = 1;
    public const VK_INDEX_TYPE_NONE_KHR = 1000165000;
    public const VK_INDEX_TYPE_UINT8_EXT = 1000265000;
    public const VK_INDEX_TYPE_NONE_NV = self::VK_INDEX_TYPE_NONE_KHR;
    public const VK_INDEX_TYPE_BEGIN_RANGE = self::VK_INDEX_TYPE_UINT16;
    public const VK_INDEX_TYPE_END_RANGE = self::VK_INDEX_TYPE_UINT32;
    public const VK_INDEX_TYPE_RANGE_SIZE = self::VK_INDEX_TYPE_UINT32 - self::VK_INDEX_TYPE_UINT16 + 1;
    public const VK_INDEX_TYPE_MAX_ENUM = 0x7FFFFFFF;
}
