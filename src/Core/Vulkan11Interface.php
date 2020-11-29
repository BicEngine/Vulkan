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
 * Interface Vulkan11Interface
 */
interface Vulkan11Interface extends Vulkan11ExtensionsInterface
{
    /**
     * The API version number for Vulkan 1.1
     *
     * @var int
     */
    public const VK_API_VERSION_1_1 = 4198400; // VK_MAKE_VERSION(1, 1, 0);

    /**
     * API Constants
     *
     * @var int
     */
    public const
        VK_LUID_SIZE             = 8,
        VK_QUEUE_FAMILY_EXTERNAL = ~0 - 1,
        VK_MAX_DEVICE_GROUP_SIZE = 32
    ;
}
