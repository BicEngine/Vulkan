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
final class VkObjectType
{
    public const VK_OBJECT_TYPE_UNKNOWN = 0;
    public const VK_OBJECT_TYPE_INSTANCE = 1;
    public const VK_OBJECT_TYPE_PHYSICAL_DEVICE = 2;
    public const VK_OBJECT_TYPE_DEVICE = 3;
    public const VK_OBJECT_TYPE_QUEUE = 4;
    public const VK_OBJECT_TYPE_SEMAPHORE = 5;
    public const VK_OBJECT_TYPE_COMMAND_BUFFER = 6;
    public const VK_OBJECT_TYPE_FENCE = 7;
    public const VK_OBJECT_TYPE_DEVICE_MEMORY = 8;
    public const VK_OBJECT_TYPE_BUFFER = 9;
    public const VK_OBJECT_TYPE_IMAGE = 10;
    public const VK_OBJECT_TYPE_EVENT = 11;
    public const VK_OBJECT_TYPE_QUERY_POOL = 12;
    public const VK_OBJECT_TYPE_BUFFER_VIEW = 13;
    public const VK_OBJECT_TYPE_IMAGE_VIEW = 14;
    public const VK_OBJECT_TYPE_SHADER_MODULE = 15;
    public const VK_OBJECT_TYPE_PIPELINE_CACHE = 16;
    public const VK_OBJECT_TYPE_PIPELINE_LAYOUT = 17;
    public const VK_OBJECT_TYPE_RENDER_PASS = 18;
    public const VK_OBJECT_TYPE_PIPELINE = 19;
    public const VK_OBJECT_TYPE_DESCRIPTOR_SET_LAYOUT = 20;
    public const VK_OBJECT_TYPE_SAMPLER = 21;
    public const VK_OBJECT_TYPE_DESCRIPTOR_POOL = 22;
    public const VK_OBJECT_TYPE_DESCRIPTOR_SET = 23;
    public const VK_OBJECT_TYPE_FRAMEBUFFER = 24;
    public const VK_OBJECT_TYPE_COMMAND_POOL = 25;
    public const VK_OBJECT_TYPE_SAMPLER_YCBCR_CONVERSION = 1000156000;
    public const VK_OBJECT_TYPE_DESCRIPTOR_UPDATE_TEMPLATE = 1000085000;
    public const VK_OBJECT_TYPE_SURFACE_KHR = 1000000000;
    public const VK_OBJECT_TYPE_SWAPCHAIN_KHR = 1000001000;
    public const VK_OBJECT_TYPE_DISPLAY_KHR = 1000002000;
    public const VK_OBJECT_TYPE_DISPLAY_MODE_KHR = 1000002001;
    public const VK_OBJECT_TYPE_DEBUG_REPORT_CALLBACK_EXT = 1000011000;
    public const VK_OBJECT_TYPE_DEBUG_UTILS_MESSENGER_EXT = 1000128000;
    public const VK_OBJECT_TYPE_ACCELERATION_STRUCTURE_KHR = 1000165000;
    public const VK_OBJECT_TYPE_VALIDATION_CACHE_EXT = 1000160000;
    public const VK_OBJECT_TYPE_PERFORMANCE_CONFIGURATION_INTEL = 1000210000;
    public const VK_OBJECT_TYPE_DEFERRED_OPERATION_KHR = 1000268000;
    public const VK_OBJECT_TYPE_INDIRECT_COMMANDS_LAYOUT_NV = 1000277000;
    public const VK_OBJECT_TYPE_DESCRIPTOR_UPDATE_TEMPLATE_KHR = self::VK_OBJECT_TYPE_DESCRIPTOR_UPDATE_TEMPLATE;
    public const VK_OBJECT_TYPE_SAMPLER_YCBCR_CONVERSION_KHR = self::VK_OBJECT_TYPE_SAMPLER_YCBCR_CONVERSION;
    public const VK_OBJECT_TYPE_ACCELERATION_STRUCTURE_NV = self::VK_OBJECT_TYPE_ACCELERATION_STRUCTURE_KHR;
    public const VK_OBJECT_TYPE_BEGIN_RANGE = self::VK_OBJECT_TYPE_UNKNOWN;
    public const VK_OBJECT_TYPE_END_RANGE = self::VK_OBJECT_TYPE_COMMAND_POOL;
    public const VK_OBJECT_TYPE_RANGE_SIZE = self::VK_OBJECT_TYPE_COMMAND_POOL - self::VK_OBJECT_TYPE_UNKNOWN + 1;
    public const VK_OBJECT_TYPE_MAX_ENUM = 0x7FFFFFFF;
}
