<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

final class VkValidationCheckEXT
{
    public const VK_VALIDATION_CHECK_ALL_EXT = 0;
    public const VK_VALIDATION_CHECK_SHADERS_EXT = 1;
    public const VK_VALIDATION_CHECK_BEGIN_RANGE_EXT = self::VK_VALIDATION_CHECK_ALL_EXT;
    public const VK_VALIDATION_CHECK_END_RANGE_EXT = self::VK_VALIDATION_CHECK_SHADERS_EXT;
    public const VK_VALIDATION_CHECK_RANGE_SIZE_EXT = self::VK_VALIDATION_CHECK_SHADERS_EXT - self::VK_VALIDATION_CHECK_ALL_EXT + 1;
    public const VK_VALIDATION_CHECK_MAX_ENUM_EXT = 0x7FFFFFFF;
}
