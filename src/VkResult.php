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
final class VkResult
{
    public const VK_SUCCESS                                            = 0;
    public const VK_NOT_READY                                          = 1;
    public const VK_TIMEOUT                                            = 2;
    public const VK_EVENT_SET                                          = 3;
    public const VK_EVENT_RESET                                        = 4;
    public const VK_INCOMPLETE                                         = 5;
    public const VK_ERROR_OUT_OF_HOST_MEMORY                           = -1;
    public const VK_ERROR_OUT_OF_DEVICE_MEMORY                         = -2;
    public const VK_ERROR_INITIALIZATION_FAILED                        = -3;
    public const VK_ERROR_DEVICE_LOST                                  = -4;
    public const VK_ERROR_MEMORY_MAP_FAILED                            = -5;
    public const VK_ERROR_LAYER_NOT_PRESENT                            = -6;
    public const VK_ERROR_EXTENSION_NOT_PRESENT                        = -7;
    public const VK_ERROR_FEATURE_NOT_PRESENT                          = -8;
    public const VK_ERROR_INCOMPATIBLE_DRIVER                          = -9;
    public const VK_ERROR_TOO_MANY_OBJECTS                             = -10;
    public const VK_ERROR_FORMAT_NOT_SUPPORTED                         = -11;
    public const VK_ERROR_FRAGMENTED_POOL                              = -12;
    public const VK_ERROR_UNKNOWN                                      = -13;
    public const VK_ERROR_OUT_OF_POOL_MEMORY                           = -10_0006_9000;
    public const VK_ERROR_INVALID_EXTERNAL_HANDLE                      = -10_0007_2003;
    public const VK_ERROR_FRAGMENTATION                                = -10_0016_1000;
    public const VK_ERROR_INVALID_OPAQUE_CAPTURE_ADDRESS               = -10_0025_7000;
    public const VK_ERROR_SURFACE_LOST_KHR                             = -10_0000_0000;
    public const VK_ERROR_NATIVE_WINDOW_IN_USE_KHR                     = -10_0000_0001;
    public const VK_SUBOPTIMAL_KHR                                     = 10_0000_1003;
    public const VK_ERROR_OUT_OF_DATE_KHR                              = -10_0000_1004;
    public const VK_ERROR_INCOMPATIBLE_DISPLAY_KHR                     = -10_0000_3001;
    public const VK_ERROR_VALIDATION_FAILED_EXT                        = -10_0001_1001;
    public const VK_ERROR_INVALID_SHADER_NV                            = -10_0001_2000;
    public const VK_ERROR_INCOMPATIBLE_VERSION_KHR                     = -10_0015_0000;
    public const VK_ERROR_INVALID_DRM_FORMAT_MODIFIER_PLANE_LAYOUT_EXT = -10_0015_8000;
    public const VK_ERROR_NOT_PERMITTED_EXT                            = -10_0017_4001;
    public const VK_ERROR_FULL_SCREEN_EXCLUSIVE_MODE_LOST_EXT          = -10_0025_5000;
    public const VK_THREAD_IDLE_KHR                                    = 10_0026_8000;
    public const VK_THREAD_DONE_KHR                                    = 10_0026_8001;
    public const VK_OPERATION_DEFERRED_KHR                             = 10_0026_8002;
    public const VK_OPERATION_NOT_DEFERRED_KHR                         = 10_0026_8003;
    public const VK_ERROR_PIPELINE_COMPILE_REQUIRED_EXT                = 10_0029_7000;
    public const VK_ERROR_OUT_OF_POOL_MEMORY_KHR                       = self::VK_ERROR_OUT_OF_POOL_MEMORY;
    public const VK_ERROR_INVALID_EXTERNAL_HANDLE_KHR                  = self::VK_ERROR_INVALID_EXTERNAL_HANDLE;
    public const VK_ERROR_FRAGMENTATION_EXT                            = self::VK_ERROR_FRAGMENTATION;
    public const VK_ERROR_INVALID_DEVICE_ADDRESS_EXT                   = self::VK_ERROR_INVALID_OPAQUE_CAPTURE_ADDRESS;
    public const VK_ERROR_INVALID_OPAQUE_CAPTURE_ADDRESS_KHR           = self::VK_ERROR_INVALID_OPAQUE_CAPTURE_ADDRESS;
    public const VK_RESULT_BEGIN_RANGE                                 = self::VK_ERROR_UNKNOWN;
    public const VK_RESULT_END_RANGE                                   = self::VK_INCOMPLETE;
    public const VK_RESULT_RANGE_SIZE                                  = self::VK_INCOMPLETE - self::VK_ERROR_UNKNOWN + 1;
    public const VK_RESULT_MAX_ENUM                                    = 0x7FFF_FFFF;

    /**
     * @param int $code
     * @return bool
     */
    public static function isError(int $code): bool
    {
        return $code < 0;
    }

    /**
     * @param int $code
     * @return string
     */
    public static function getDescription(int $code): string
    {
        switch ($code) {
            case self::VK_SUCCESS:
                return 'Success';

            case self::VK_NOT_READY:
                return 'Not ready';

            case self::VK_TIMEOUT:
                return 'Timeout';

            case self::VK_EVENT_SET:
                return 'Event set';

            case self::VK_EVENT_RESET:
                return 'Event reset';

            case self::VK_INCOMPLETE:
                return 'Incomplete';

            case self::VK_ERROR_OUT_OF_HOST_MEMORY:
                return 'Out of host memory';

            case self::VK_ERROR_OUT_OF_DEVICE_MEMORY:
                return 'Out of device memory';
                
            case self::VK_ERROR_INITIALIZATION_FAILED:
                return 'Initialization failed';

            case self::VK_ERROR_DEVICE_LOST:
                return 'Device lost';

            case self::VK_ERROR_MEMORY_MAP_FAILED:
                return 'Memory map failed';

            case self::VK_ERROR_LAYER_NOT_PRESENT:
                return 'Layer not present';

            case self::VK_ERROR_EXTENSION_NOT_PRESENT:
                return 'Extension not present';

            case self::VK_ERROR_FEATURE_NOT_PRESENT:
                return 'Feature not present';

            case self::VK_ERROR_INCOMPATIBLE_DRIVER:
                return 'Incompatible driver';

            case self::VK_ERROR_TOO_MANY_OBJECTS:
                return 'Too many objects';

            case self::VK_ERROR_FORMAT_NOT_SUPPORTED:
                return 'Format not supported';

            case self::VK_ERROR_FRAGMENTED_POOL:
                return 'Fragmented pool';

            case self::VK_ERROR_OUT_OF_POOL_MEMORY:
                return 'Out of pool memory';

            case self::VK_ERROR_INVALID_EXTERNAL_HANDLE:
                return 'Invalid external handle';

            case self::VK_ERROR_FRAGMENTATION:
                return 'Fragmentation';

            case self::VK_ERROR_INVALID_OPAQUE_CAPTURE_ADDRESS:
                return 'Invalid opaque capture address';

            case self::VK_ERROR_SURFACE_LOST_KHR:
                return 'Surface lost khr';

            case self::VK_ERROR_NATIVE_WINDOW_IN_USE_KHR:
                return 'Native window in use';

            case self::VK_SUBOPTIMAL_KHR:
                return 'Suboptimal';

            case self::VK_ERROR_OUT_OF_DATE_KHR:
                return 'Out of date';

            case self::VK_ERROR_INCOMPATIBLE_DISPLAY_KHR:
                return 'Incompatible display';

            case self::VK_ERROR_VALIDATION_FAILED_EXT:
                return 'Validation failed';

            case self::VK_ERROR_INVALID_SHADER_NV:
                return 'Invalid shader';

            case self::VK_ERROR_INCOMPATIBLE_VERSION_KHR:
                return 'Incompatible version';

            case self::VK_ERROR_INVALID_DRM_FORMAT_MODIFIER_PLANE_LAYOUT_EXT:
                return 'Invalid drm format modifier plane layout';

            case self::VK_ERROR_NOT_PERMITTED_EXT:
                return 'Not permitted';

            case self::VK_ERROR_FULL_SCREEN_EXCLUSIVE_MODE_LOST_EXT:
                return 'Full screen exclusive mode lost';

            case self::VK_THREAD_IDLE_KHR:
                return 'Thread idle';

            case self::VK_THREAD_DONE_KHR:
                return 'Thread done';

            case self::VK_OPERATION_DEFERRED_KHR:
                return 'Operation deferred';

            case self::VK_OPERATION_NOT_DEFERRED_KHR:
                return 'Operation not deferred';

            case self::VK_ERROR_PIPELINE_COMPILE_REQUIRED_EXT:
                return 'Pipeline compile required';

            case self::VK_ERROR_UNKNOWN:
            default:
                return 'Unknown';
        }
    }
}
