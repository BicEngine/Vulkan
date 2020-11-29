<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkDeviceGroupPresentModeFlagBitsKHR
{
    public const VK_DEVICE_GROUP_PRESENT_MODE_LOCAL_BIT_KHR = 0x00000001;
    public const VK_DEVICE_GROUP_PRESENT_MODE_REMOTE_BIT_KHR = 0x00000002;
    public const VK_DEVICE_GROUP_PRESENT_MODE_SUM_BIT_KHR = 0x00000004;
    public const VK_DEVICE_GROUP_PRESENT_MODE_LOCAL_MULTI_DEVICE_BIT_KHR = 0x00000008;
    public const VK_DEVICE_GROUP_PRESENT_MODE_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF;
}
