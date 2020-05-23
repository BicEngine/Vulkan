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
final class VkPhysicalDeviceType
{
    public const VK_PHYSICAL_DEVICE_TYPE_OTHER = 0;
    public const VK_PHYSICAL_DEVICE_TYPE_INTEGRATED_GPU = 1;
    public const VK_PHYSICAL_DEVICE_TYPE_DISCRETE_GPU = 2;
    public const VK_PHYSICAL_DEVICE_TYPE_VIRTUAL_GPU = 3;
    public const VK_PHYSICAL_DEVICE_TYPE_CPU = 4;
    public const VK_PHYSICAL_DEVICE_TYPE_BEGIN_RANGE = self::VK_PHYSICAL_DEVICE_TYPE_OTHER;
    public const VK_PHYSICAL_DEVICE_TYPE_END_RANGE = self::VK_PHYSICAL_DEVICE_TYPE_CPU;
    public const VK_PHYSICAL_DEVICE_TYPE_RANGE_SIZE = self::VK_PHYSICAL_DEVICE_TYPE_CPU - self::VK_PHYSICAL_DEVICE_TYPE_OTHER + 1;
    public const VK_PHYSICAL_DEVICE_TYPE_MAX_ENUM = 0x7FFFFFFF;

    /**
     * @param int $type
     * @return string
     */
    public static function getDescription(int $type): string
    {
        switch ($type) {
            case self::VK_PHYSICAL_DEVICE_TYPE_OTHER:
                return 'Other';

            case self::VK_PHYSICAL_DEVICE_TYPE_INTEGRATED_GPU:
                return 'Integrated GPU';

            case self::VK_PHYSICAL_DEVICE_TYPE_DISCRETE_GPU:
                return 'Discrete GPU';

            case self::VK_PHYSICAL_DEVICE_TYPE_VIRTUAL_GPU:
                return 'Virtual GPU';

            case self::VK_PHYSICAL_DEVICE_TYPE_CPU:
                return 'Type CPU';

            default:
                return 'Unknown';
        }
    }
}
