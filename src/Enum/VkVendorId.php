<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

/**
 * @since 1.0
 */
final class VkVendorId
{
    public const VK_VENDOR_ID_VIV = 0x10001;
    public const VK_VENDOR_ID_VSI = 0x10002;
    public const VK_VENDOR_ID_KAZAN = 0x10003;
    public const VK_VENDOR_ID_CODEPLAY = 0x10004;
    public const VK_VENDOR_ID_BEGIN_RANGE = self::VK_VENDOR_ID_VIV;
    public const VK_VENDOR_ID_END_RANGE = self::VK_VENDOR_ID_CODEPLAY;
    public const VK_VENDOR_ID_RANGE_SIZE = self::VK_VENDOR_ID_CODEPLAY - self::VK_VENDOR_ID_VIV + 1;
    public const VK_VENDOR_ID_MAX_ENUM = 0x7FFFFFFF;
}
