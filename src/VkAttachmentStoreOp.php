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
final class VkAttachmentStoreOp
{
    public const VK_ATTACHMENT_STORE_OP_STORE = 0;
    public const VK_ATTACHMENT_STORE_OP_DONT_CARE = 1;
    public const VK_ATTACHMENT_STORE_OP_BEGIN_RANGE = self::VK_ATTACHMENT_STORE_OP_STORE;
    public const VK_ATTACHMENT_STORE_OP_END_RANGE = self::VK_ATTACHMENT_STORE_OP_DONT_CARE;
    public const VK_ATTACHMENT_STORE_OP_RANGE_SIZE = self::VK_ATTACHMENT_STORE_OP_DONT_CARE - self::VK_ATTACHMENT_STORE_OP_STORE + 1;
    public const VK_ATTACHMENT_STORE_OP_MAX_ENUM = 0x7FFFFFFF;
}
