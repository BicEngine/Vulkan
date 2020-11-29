<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkShaderInfoTypeAMD
{
    public const VK_SHADER_INFO_TYPE_STATISTICS_AMD = 0;
    public const VK_SHADER_INFO_TYPE_BINARY_AMD = 1;
    public const VK_SHADER_INFO_TYPE_DISASSEMBLY_AMD = 2;
    public const VK_SHADER_INFO_TYPE_BEGIN_RANGE_AMD = self::VK_SHADER_INFO_TYPE_STATISTICS_AMD;
    public const VK_SHADER_INFO_TYPE_END_RANGE_AMD = self::VK_SHADER_INFO_TYPE_DISASSEMBLY_AMD;
    public const VK_SHADER_INFO_TYPE_RANGE_SIZE_AMD = self::VK_SHADER_INFO_TYPE_DISASSEMBLY_AMD - self::VK_SHADER_INFO_TYPE_STATISTICS_AMD + 1;
    public const VK_SHADER_INFO_TYPE_MAX_ENUM_AMD = 0x7FFFFFFF;
}
