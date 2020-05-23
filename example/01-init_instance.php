<?php

/**
 * Create and Destroy Vulkan Instance
 *
 * @see https://vulkan.lunarg.com/doc/sdk/1.2.135.0/windows/loader_and_layer_interface.html
 * @see https://github.com/LunarG/VulkanSamples/blob/master/API-Samples/01-init_instance/01-init_instance.cpp
 *
 * <code>
 *  char *instance_validation_layers[] = {
 *       "VK_LAYER_KHRONOS_validation"
 *  };
 *
 *  const VkApplicationInfo app = {
 *      .sType = VK_STRUCTURE_TYPE_APPLICATION_INFO,
 *      .pNext = NULL,
 *      .pApplicationName = "TEST_APP",
 *      .applicationVersion = 0,
 *      .pEngineName = "TEST_ENGINE",
 *      .engineVersion = 0,
 *      .apiVersion = VK_API_VERSION_1_0,
 *  };
 *
 *  VkInstanceCreateInfo inst_info = {
 *      .sType = VK_STRUCTURE_TYPE_INSTANCE_CREATE_INFO,
 *      .pNext = NULL,
 *      .pApplicationInfo = &app,
 *      .enabledLayerCount = 1,
 *      .ppEnabledLayerNames = (const char *const *)instance_validation_layers,
 *      .enabledExtensionCount = 0,
 *      .ppEnabledExtensionNames = NULL,
 *  };
 *
 *  err = vkCreateInstance(&inst_info, NULL, &demo->inst);
 * </code>
 */

use Bic\Vulkan\Enum\VkResult;
use Bic\Vulkan\Enum\VkStructureType;
use Bic\Vulkan\Vulkan;

require __DIR__ . '/bootstrap.php';


$vk = new Vulkan(Vulkan::VK_API_VERSION_1_0);

// char *instance_validation_layers[] = {
//      "VK_LAYER_KHRONOS_validation"
// };
$instanceValidationLayers = string([
    'VK_LAYER_KHRONOS_validation',
]);

// const VkApplicationInfo app = {
//      .sType = VK_STRUCTURE_TYPE_APPLICATION_INFO,
//      .pNext = NULL,
//      .pApplicationName = "TEST_APP",
//      .applicationVersion = 0,
//      .pEngineName = "TEST_ENGINE",
//      .engineVersion = 0,
//      .apiVersion = VK_API_VERSION_1_0,
// };
/** @var \Bic\Vulkan\VkApplicationInfo $app */
$app = $vk->new('VkApplicationInfo');
$app->sType = VkStructureType::VK_STRUCTURE_TYPE_APPLICATION_INFO;
$app->pNext = null;
$app->pApplicationName = string('Example Application');
$app->applicationVersion = 0;
$app->pEngineName = string('Example Engine');
$app->engineVersion = 0;
$app->apiVersion = Vulkan::VK_API_VERSION_1_0;


// VkInstanceCreateInfo inst_info = {
//      .sType = VK_STRUCTURE_TYPE_INSTANCE_CREATE_INFO,
//      .pNext = NULL,
//      .pApplicationInfo = &app,
//      .enabledLayerCount = 1,
//      .ppEnabledLayerNames = (const char *const *)instance_validation_layers,
//      .enabledExtensionCount = 0,
//      .ppEnabledExtensionNames = NULL,
// };
/** @var \Bic\Vulkan\VkInstanceCreateInfo $info */
$info = $vk->new('VkInstanceCreateInfo');
$info->sType                   = VkStructureType::VK_STRUCTURE_TYPE_INSTANCE_CREATE_INFO;
$info->pNext                   = null;
$info->pApplicationInfo        = ptr($app);
$info->enabledLayerCount       = 1;
$info->ppEnabledLayerNames     = $vk->cast('const char *const *', $instanceValidationLayers);
$info->enabledExtensionCount   = 0;
$info->ppEnabledExtensionNames = null;



//
// Allocate memory
//
/** @var \Bic\Vulkan\VkInstance $instance */
$instance = $vk->new('VkInstance');

//
// Create instance
//
$status = $vk->vkCreateInstance(ptr($info), null, ptr($instance));
assert($status === VkResult::VK_SUCCESS, VkResult::getDescription($status));

//
// Dump instance
//
echo "VkInstance initialized\n";

return $instance;


