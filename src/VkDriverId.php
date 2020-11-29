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
 * @since 1.2
 */
final class VkDriverId
{
    public const VK_DRIVER_ID_AMD_PROPRIETARY = 1;
    public const VK_DRIVER_ID_AMD_OPEN_SOURCE = 2;
    public const VK_DRIVER_ID_MESA_RADV = 3;
    public const VK_DRIVER_ID_NVIDIA_PROPRIETARY = 4;
    public const VK_DRIVER_ID_INTEL_PROPRIETARY_WINDOWS = 5;
    public const VK_DRIVER_ID_INTEL_OPEN_SOURCE_MESA = 6;
    public const VK_DRIVER_ID_IMAGINATION_PROPRIETARY = 7;
    public const VK_DRIVER_ID_QUALCOMM_PROPRIETARY = 8;
    public const VK_DRIVER_ID_ARM_PROPRIETARY = 9;
    public const VK_DRIVER_ID_GOOGLE_SWIFTSHADER = 10;
    public const VK_DRIVER_ID_GGP_PROPRIETARY = 11;
    public const VK_DRIVER_ID_BROADCOM_PROPRIETARY = 12;
    public const VK_DRIVER_ID_AMD_PROPRIETARY_KHR = self::VK_DRIVER_ID_AMD_PROPRIETARY;
    public const VK_DRIVER_ID_AMD_OPEN_SOURCE_KHR = self::VK_DRIVER_ID_AMD_OPEN_SOURCE;
    public const VK_DRIVER_ID_MESA_RADV_KHR = self::VK_DRIVER_ID_MESA_RADV;
    public const VK_DRIVER_ID_NVIDIA_PROPRIETARY_KHR = self::VK_DRIVER_ID_NVIDIA_PROPRIETARY;
    public const VK_DRIVER_ID_INTEL_PROPRIETARY_WINDOWS_KHR = self::VK_DRIVER_ID_INTEL_PROPRIETARY_WINDOWS;
    public const VK_DRIVER_ID_INTEL_OPEN_SOURCE_MESA_KHR = self::VK_DRIVER_ID_INTEL_OPEN_SOURCE_MESA;
    public const VK_DRIVER_ID_IMAGINATION_PROPRIETARY_KHR = self::VK_DRIVER_ID_IMAGINATION_PROPRIETARY;
    public const VK_DRIVER_ID_QUALCOMM_PROPRIETARY_KHR = self::VK_DRIVER_ID_QUALCOMM_PROPRIETARY;
    public const VK_DRIVER_ID_ARM_PROPRIETARY_KHR = self::VK_DRIVER_ID_ARM_PROPRIETARY;
    public const VK_DRIVER_ID_GOOGLE_SWIFTSHADER_KHR = self::VK_DRIVER_ID_GOOGLE_SWIFTSHADER;
    public const VK_DRIVER_ID_GGP_PROPRIETARY_KHR = self::VK_DRIVER_ID_GGP_PROPRIETARY;
    public const VK_DRIVER_ID_BROADCOM_PROPRIETARY_KHR = self::VK_DRIVER_ID_BROADCOM_PROPRIETARY;
    public const VK_DRIVER_ID_BEGIN_RANGE = self::VK_DRIVER_ID_AMD_PROPRIETARY;
    public const VK_DRIVER_ID_END_RANGE = self::VK_DRIVER_ID_BROADCOM_PROPRIETARY;
    public const VK_DRIVER_ID_RANGE_SIZE = self::VK_DRIVER_ID_BROADCOM_PROPRIETARY - self::VK_DRIVER_ID_AMD_PROPRIETARY + 1;
    public const VK_DRIVER_ID_MAX_ENUM = 0x7FFFFFFF;
}
