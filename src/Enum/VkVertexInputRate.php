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
 * @since 1.0
 */
final class VkVertexInputRate
{
    public const VK_VERTEX_INPUT_RATE_VERTEX = 0;
    public const VK_VERTEX_INPUT_RATE_INSTANCE = 1;
    public const VK_VERTEX_INPUT_RATE_BEGIN_RANGE = self::VK_VERTEX_INPUT_RATE_VERTEX;
    public const VK_VERTEX_INPUT_RATE_END_RANGE = self::VK_VERTEX_INPUT_RATE_INSTANCE;
    public const VK_VERTEX_INPUT_RATE_RANGE_SIZE = self::VK_VERTEX_INPUT_RATE_INSTANCE - self::VK_VERTEX_INPUT_RATE_VERTEX + 1;
    public const VK_VERTEX_INPUT_RATE_MAX_ENUM = 0x7FFFFFFF;
}
