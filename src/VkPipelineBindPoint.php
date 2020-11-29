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
final class VkPipelineBindPoint
{
    public const VK_PIPELINE_BIND_POINT_GRAPHICS = 0;
    public const VK_PIPELINE_BIND_POINT_COMPUTE = 1;
    public const VK_PIPELINE_BIND_POINT_RAY_TRACING_KHR = 1000165000;
    public const VK_PIPELINE_BIND_POINT_RAY_TRACING_NV = self::VK_PIPELINE_BIND_POINT_RAY_TRACING_KHR;
    public const VK_PIPELINE_BIND_POINT_BEGIN_RANGE = self::VK_PIPELINE_BIND_POINT_GRAPHICS;
    public const VK_PIPELINE_BIND_POINT_END_RANGE = self::VK_PIPELINE_BIND_POINT_COMPUTE;
    public const VK_PIPELINE_BIND_POINT_RANGE_SIZE = self::VK_PIPELINE_BIND_POINT_COMPUTE - self::VK_PIPELINE_BIND_POINT_GRAPHICS + 1;
    public const VK_PIPELINE_BIND_POINT_MAX_ENUM = 0x7FFFFFFF;
}
