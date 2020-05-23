<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

/**
 * Interface Vulkan11ExtensionsInterface
 */
interface Vulkan11ExtensionsInterface
{
    /**
     * @var string
     */
    public const VK_EXT_SUBGROUP_SIZE_CONTROL_EXTENSION_NAME = 'VK_EXT_subgroup_size_control';

    /**
     * @var string
     */
    public const VK_KHR_SHADER_SUBGROUP_EXTENDED_TYPES_EXTENSION_NAME = 'VK_KHR_shader_subgroup_extended_types';

    /**
     * @var string
     */
    public const VK_KHR_SPIRV_1_4_EXTENSION_NAME = 'VK_KHR_spirv_1_4';

    /**
     * @var string
     */
    public const VK_KHR_GET_SURFACE_CAPABILITIES_2_EXTENSION_NAME = 'VK_KHR_get_surface_capabilities2';

    /**
     * @var string
     */
    public const VK_NV_SHADER_SM_BUILTINS_EXTENSION_NAME = 'VK_NV_shader_sm_builtins';

    /**
     * @var string
     */
    public const VK_NV_SHADER_SUBGROUP_PARTITIONED_EXTENSION_NAME = 'VK_NV_shader_subgroup_partitioned';
}
