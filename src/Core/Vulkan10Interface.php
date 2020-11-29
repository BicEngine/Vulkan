<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

interface Vulkan10Interface extends Vulkan10ExtensionsInterface
{
    /**
     * The API version number for Vulkan 1.0.
     *
     * <p>The patch version number in this macro will always be zero. The supported patch version for a physical
     * device <b>can</b> be queried with {@link Vulkan::vkGetPhysicalDeviceProperties}.</p>
     */
    public const VK_API_VERSION_1_0 = 4194304; // VK_MAKE_VERSION(1, 0, 0);

    /**
     * The reserved handle {@see Vulkan::VK_NULL_HANDLE} <b>can</b> be passed in place of valid object handles when
     * explicitly called out in the specification. Any command that creates an object successfully <b>must</b> not
     * return {@see Vulkan::VK_NULL_HANDLE}. It is valid to pass {@see Vulkan::VK_NULL_HANDLE} to any
     * <code>vkDestroy*</code> or <code>vkFree*</code> command, which will silently ignore these values.
     *
     * @var int
     */
    public const VK_NULL_HANDLE = 0x0000;

    /**
     * API Constants
     *
     * @var int
     */
    public const
        VK_MAX_PHYSICAL_DEVICE_NAME_SIZE = 256,
        VK_UUID_SIZE                     = 16,
        VK_MAX_EXTENSION_NAME_SIZE       = 256,
        VK_MAX_DESCRIPTION_SIZE          = 256,
        VK_MAX_MEMORY_TYPES              = 32,
        VK_MAX_MEMORY_HEAPS              = 16,
        VK_REMAINING_MIP_LEVELS          = ~0,
        VK_REMAINING_ARRAY_LAYERS        = ~0,
        VK_ATTACHMENT_UNUSED             = ~0,
        VK_TRUE                          = 1,
        VK_FALSE                         = 0,
        VK_QUEUE_FAMILY_IGNORED          = ~0,
        VK_SUBPASS_EXTERNAL              = ~0
    ;

    /**
     * API Constants
     *
     * @var int
     */
    public const VK_LOD_CLAMP_NONE = 1000.0;

    /**
     * API Constants
     *
     * @var int
     */
    public const VK_WHOLE_SIZE = ~0;
}
