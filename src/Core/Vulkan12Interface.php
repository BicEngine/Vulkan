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
 * Interface Vulkan12Interface
 */
interface Vulkan12Interface extends Vulkan12ExtensionsInterface
{
    /**
     * The API version number for Vulkan 1.2
     *
     * @var int
     */
    public const VK_API_VERSION_1_2 = 4202496; // VK_MAKE_VERSION(1, 2, 0);

    /**
     * API Constants
     *
     * @var int
     */
    public const
        VK_MAX_DRIVER_NAME_SIZE = 256,
        VK_MAX_DRIVER_INFO_SIZE = 256;
}
