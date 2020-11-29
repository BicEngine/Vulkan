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
final class VkDescriptorType
{
    public const VK_DESCRIPTOR_TYPE_SAMPLER = 0;
    public const VK_DESCRIPTOR_TYPE_COMBINED_IMAGE_SAMPLER = 1;
    public const VK_DESCRIPTOR_TYPE_SAMPLED_IMAGE = 2;
    public const VK_DESCRIPTOR_TYPE_STORAGE_IMAGE = 3;
    public const VK_DESCRIPTOR_TYPE_UNIFORM_TEXEL_BUFFER = 4;
    public const VK_DESCRIPTOR_TYPE_STORAGE_TEXEL_BUFFER = 5;
    public const VK_DESCRIPTOR_TYPE_UNIFORM_BUFFER = 6;
    public const VK_DESCRIPTOR_TYPE_STORAGE_BUFFER = 7;
    public const VK_DESCRIPTOR_TYPE_UNIFORM_BUFFER_DYNAMIC = 8;
    public const VK_DESCRIPTOR_TYPE_STORAGE_BUFFER_DYNAMIC = 9;
    public const VK_DESCRIPTOR_TYPE_INPUT_ATTACHMENT = 10;
    public const VK_DESCRIPTOR_TYPE_INLINE_UNIFORM_BLOCK_EXT = 1000138000;
    public const VK_DESCRIPTOR_TYPE_ACCELERATION_STRUCTURE_KHR = 1000165000;
    public const VK_DESCRIPTOR_TYPE_ACCELERATION_STRUCTURE_NV = self::VK_DESCRIPTOR_TYPE_ACCELERATION_STRUCTURE_KHR;
    public const VK_DESCRIPTOR_TYPE_BEGIN_RANGE = self::VK_DESCRIPTOR_TYPE_SAMPLER;
    public const VK_DESCRIPTOR_TYPE_END_RANGE = self::VK_DESCRIPTOR_TYPE_INPUT_ATTACHMENT;
    public const VK_DESCRIPTOR_TYPE_RANGE_SIZE = self::VK_DESCRIPTOR_TYPE_INPUT_ATTACHMENT - self::VK_DESCRIPTOR_TYPE_SAMPLER + 1;
    public const VK_DESCRIPTOR_TYPE_MAX_ENUM = 0x7FFFFFFF;
}
