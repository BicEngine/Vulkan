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
final class VkSamplerMipmapMode
{
    public const VK_SAMPLER_MIPMAP_MODE_NEAREST = 0;
    public const VK_SAMPLER_MIPMAP_MODE_LINEAR = 1;
    public const VK_SAMPLER_MIPMAP_MODE_BEGIN_RANGE = self::VK_SAMPLER_MIPMAP_MODE_NEAREST;
    public const VK_SAMPLER_MIPMAP_MODE_END_RANGE = self::VK_SAMPLER_MIPMAP_MODE_LINEAR;
    public const VK_SAMPLER_MIPMAP_MODE_RANGE_SIZE = self::VK_SAMPLER_MIPMAP_MODE_LINEAR - self::VK_SAMPLER_MIPMAP_MODE_NEAREST + 1;
    public const VK_SAMPLER_MIPMAP_MODE_MAX_ENUM = 0x7FFFFFFF;
}
