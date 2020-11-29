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
final class VkSamplerAddressMode
{
    public const VK_SAMPLER_ADDRESS_MODE_REPEAT = 0;
    public const VK_SAMPLER_ADDRESS_MODE_MIRRORED_REPEAT = 1;
    public const VK_SAMPLER_ADDRESS_MODE_CLAMP_TO_EDGE = 2;
    public const VK_SAMPLER_ADDRESS_MODE_CLAMP_TO_BORDER = 3;
    public const VK_SAMPLER_ADDRESS_MODE_MIRROR_CLAMP_TO_EDGE = 4;
    public const VK_SAMPLER_ADDRESS_MODE_MIRROR_CLAMP_TO_EDGE_KHR = self::VK_SAMPLER_ADDRESS_MODE_MIRROR_CLAMP_TO_EDGE;
    public const VK_SAMPLER_ADDRESS_MODE_BEGIN_RANGE = self::VK_SAMPLER_ADDRESS_MODE_REPEAT;
    public const VK_SAMPLER_ADDRESS_MODE_END_RANGE = self::VK_SAMPLER_ADDRESS_MODE_CLAMP_TO_BORDER;
    public const VK_SAMPLER_ADDRESS_MODE_RANGE_SIZE = self::VK_SAMPLER_ADDRESS_MODE_CLAMP_TO_BORDER - self::VK_SAMPLER_ADDRESS_MODE_REPEAT + 1;
    public const VK_SAMPLER_ADDRESS_MODE_MAX_ENUM = 0x7FFFFFFF;
}
