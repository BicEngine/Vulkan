<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Tests;

use FFI\CData;
use Bic\Vulkan\Enum\VkResult;
use Bic\Vulkan\Enum\VkStructureType;
use Bic\Vulkan\Vulkan;

/**
 * Class InstanceTestCase
 */
class InstanceTestCase extends TestCase
{
    /**
     * @return CData
     */
    public function testCreateInstance(): CData
    {
        $info = $this->vk->struct('VkInstanceCreateInfo', [
            'sType'            => VkStructureType::VK_STRUCTURE_TYPE_INSTANCE_CREATE_INFO,
            'pApplicationInfo' => ptr($this->vk->struct('VkApplicationInfo', [
                'sType'      => VkStructureType::VK_STRUCTURE_TYPE_APPLICATION_INFO,
                'apiVersion' => Vulkan::VK_API_VERSION_1_0,
            ])),
        ]);


        $instance = $this->struct('VkInstance');

        $status = $this->vk->vkCreateInstance(\FFI::addr($info), null, \FFI::addr($instance));

        $this->assertSame(VkResult::VK_SUCCESS, $status);

        return $instance;
    }
}
