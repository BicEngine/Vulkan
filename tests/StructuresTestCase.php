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
use FFI\CStruct;
use Bic\Vulkan\Enum\VkStructureType;
use Bic\Vulkan\Vulkan;

/**
 * Class StructuresTestCase
 */
class StructuresTestCase extends TestCase
{
    /**
     * @return CData
     */
    public function testVkInstanceCreateInfo(): CData
    {
        $struct = $this->struct('VkInstanceCreateInfo', [
            'sType'                   => VkStructureType::VK_STRUCTURE_TYPE_INSTANCE_CREATE_INFO,
            'pNext'                   => null,
            'pApplicationInfo'        => ptr($this->testVkApplicationInfo()),
            'enabledLayerCount'       => 1,
            'ppEnabledLayerNames'     => $this->vk->cast('const char *const *', $this->vk->array('char*', [
                $this->vk->string('VK_LAYER_KHRONOS_validation'),
            ])),
            'enabledExtensionCount'   => 0,
            'ppEnabledExtensionNames' => null,
        ]);

        $this->assertSame(VkStructureType::VK_STRUCTURE_TYPE_INSTANCE_CREATE_INFO, $struct->sType);
        $this->assertNull($struct->pNext);
        $this->assertSame('VkApplicationInfo*', cdata_name($struct->pApplicationInfo));
        $this->assertSame(1, $struct->enabledLayerCount);
        $this->assertSame('VK_LAYER_KHRONOS_validation', $struct->ppEnabledLayerNames[0]);
        $this->assertSame(0, $struct->enabledExtensionCount);
        $this->assertNull($struct->ppEnabledExtensionNames);

        return $struct;
    }

    /**
     * @return CData|CStruct
     */
    public function testVkApplicationInfo(): CData
    {
        $struct = $this->struct('VkApplicationInfo', [
            'sType'              => VkStructureType::VK_STRUCTURE_TYPE_APPLICATION_INFO,
            'pNext'              => null,
            'pApplicationName'   => $name = $this->faker->name,
            'applicationVersion' => $ver = $this->faker->randomDigit,
            'pEngineName'        => $engineName = $this->faker->name,
            'engineVersion'      => $engineVer = $this->faker->randomDigit,
            'apiVersion'         => Vulkan::VK_API_VERSION_1_0,
        ]);

        $this->assertSame(VkStructureType::VK_STRUCTURE_TYPE_APPLICATION_INFO, $struct->sType);
        $this->assertNull($struct->pNext);
        $this->assertSame($name, $struct->pApplicationName);
        $this->assertSame($ver, $struct->applicationVersion);
        $this->assertSame($engineName, $struct->pEngineName);
        $this->assertSame($engineVer, $struct->engineVersion);
        $this->assertSame(Vulkan::VK_API_VERSION_1_0, $struct->apiVersion);

        return $struct;
    }
}
