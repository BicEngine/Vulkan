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
final class VkQueryResultFlagBits
{
    public const VK_QUERY_RESULT_64_BIT = 0x00000001;
    public const VK_QUERY_RESULT_WAIT_BIT = 0x00000002;
    public const VK_QUERY_RESULT_WITH_AVAILABILITY_BIT = 0x00000004;
    public const VK_QUERY_RESULT_PARTIAL_BIT = 0x00000008;
    public const VK_QUERY_RESULT_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
