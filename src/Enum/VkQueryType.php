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
final class VkQueryType
{
    public const VK_QUERY_TYPE_OCCLUSION = 0;
    public const VK_QUERY_TYPE_PIPELINE_STATISTICS = 1;
    public const VK_QUERY_TYPE_TIMESTAMP = 2;
    public const VK_QUERY_TYPE_TRANSFORM_FEEDBACK_STREAM_EXT = 1000028004;
    public const VK_QUERY_TYPE_PERFORMANCE_QUERY_KHR = 1000116000;
    public const VK_QUERY_TYPE_ACCELERATION_STRUCTURE_COMPACTED_SIZE_KHR = 1000165000;
    public const VK_QUERY_TYPE_ACCELERATION_STRUCTURE_SERIALIZATION_SIZE_KHR = 1000150000;
    public const VK_QUERY_TYPE_PERFORMANCE_QUERY_INTEL = 1000210000;
    public const VK_QUERY_TYPE_ACCELERATION_STRUCTURE_COMPACTED_SIZE_NV = self::VK_QUERY_TYPE_ACCELERATION_STRUCTURE_COMPACTED_SIZE_KHR;
    public const VK_QUERY_TYPE_BEGIN_RANGE = self::VK_QUERY_TYPE_OCCLUSION;
    public const VK_QUERY_TYPE_END_RANGE = self::VK_QUERY_TYPE_TIMESTAMP;
    public const VK_QUERY_TYPE_RANGE_SIZE = self::VK_QUERY_TYPE_TIMESTAMP - self::VK_QUERY_TYPE_OCCLUSION + 1;
    public const VK_QUERY_TYPE_MAX_ENUM = 0x7FFFFFFF;
}
