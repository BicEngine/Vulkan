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
final class VkSampleCountFlagBits
{
    public const VK_SAMPLE_COUNT_1_BIT = 0x00000001;
    public const VK_SAMPLE_COUNT_2_BIT = 0x00000002;
    public const VK_SAMPLE_COUNT_4_BIT = 0x00000004;
    public const VK_SAMPLE_COUNT_8_BIT = 0x00000008;
    public const VK_SAMPLE_COUNT_16_BIT = 0x00000010;
    public const VK_SAMPLE_COUNT_32_BIT = 0x00000020;
    public const VK_SAMPLE_COUNT_64_BIT = 0x00000040;
    public const VK_SAMPLE_COUNT_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
