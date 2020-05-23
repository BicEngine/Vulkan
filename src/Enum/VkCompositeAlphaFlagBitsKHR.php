<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkCompositeAlphaFlagBitsKHR
{
    public const VK_COMPOSITE_ALPHA_OPAQUE_BIT_KHR = 0x00000001;
    public const VK_COMPOSITE_ALPHA_PRE_MULTIPLIED_BIT_KHR = 0x00000002;
    public const VK_COMPOSITE_ALPHA_POST_MULTIPLIED_BIT_KHR = 0x00000004;
    public const VK_COMPOSITE_ALPHA_INHERIT_BIT_KHR = 0x00000008;
    public const VK_COMPOSITE_ALPHA_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF;
}
