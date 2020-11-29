<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkPresentModeKHR
{
    public const VK_PRESENT_MODE_IMMEDIATE_KHR = 0;
    public const VK_PRESENT_MODE_MAILBOX_KHR = 1;
    public const VK_PRESENT_MODE_FIFO_KHR = 2;
    public const VK_PRESENT_MODE_FIFO_RELAXED_KHR = 3;
    public const VK_PRESENT_MODE_SHARED_DEMAND_REFRESH_KHR = 1000111000;
    public const VK_PRESENT_MODE_SHARED_CONTINUOUS_REFRESH_KHR = 1000111001;
    public const VK_PRESENT_MODE_BEGIN_RANGE_KHR = self::VK_PRESENT_MODE_IMMEDIATE_KHR;
    public const VK_PRESENT_MODE_END_RANGE_KHR = self::VK_PRESENT_MODE_FIFO_RELAXED_KHR;
    public const VK_PRESENT_MODE_RANGE_SIZE_KHR = self::VK_PRESENT_MODE_FIFO_RELAXED_KHR - self::VK_PRESENT_MODE_IMMEDIATE_KHR + 1;
    public const VK_PRESENT_MODE_MAX_ENUM_KHR = 0x7FFFFFFF;
}
