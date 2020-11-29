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
final class VkSubpassContents
{
    public const VK_SUBPASS_CONTENTS_INLINE = 0;
    public const VK_SUBPASS_CONTENTS_SECONDARY_COMMAND_BUFFERS = 1;
    public const VK_SUBPASS_CONTENTS_BEGIN_RANGE = self::VK_SUBPASS_CONTENTS_INLINE;
    public const VK_SUBPASS_CONTENTS_END_RANGE = self::VK_SUBPASS_CONTENTS_SECONDARY_COMMAND_BUFFERS;
    public const VK_SUBPASS_CONTENTS_RANGE_SIZE = self::VK_SUBPASS_CONTENTS_SECONDARY_COMMAND_BUFFERS - self::VK_SUBPASS_CONTENTS_INLINE + 1;
    public const VK_SUBPASS_CONTENTS_MAX_ENUM = 0x7FFFFFFF;
}
