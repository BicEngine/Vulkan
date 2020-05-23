<?php

use Bic\Vulkan\Enum\VkPhysicalDeviceType;
use Bic\Vulkan\Enum\VkResult;

/**
 * Create and Destroy Vulkan Instance
 *
 * @see https://github.com/LunarG/VulkanSamples/blob/master/API-Samples/02-enumerate_devices/02-enumerate_devices.cpp
 *
 * <code>
 *  uint32_t gpu_count = 1;
 *  VkResult U_ASSERT_ONLY res = vkEnumeratePhysicalDevices(info.inst, &gpu_count, NULL);
 *  assert(gpu_count);
 *
 *  info.gpus.resize(gpu_count);
 *  res = vkEnumeratePhysicalDevices(info.inst, &gpu_count, info.gpus.data());
 *  assert(!res && gpu_count >= 1);
 * </code>
 */

$instance = require __DIR__ . '/01-init_instance.php';

//
// uint32_t gpu_count = 1;
// VkResult U_ASSERT_ONLY res = vkEnumeratePhysicalDevices(info.inst, &gpu_count, NULL);
// assert(gpu_count);
//
$gpu_count = uint32(1);

$status = $vk->vkEnumeratePhysicalDevices($instance, ptr($gpu_count), null);
assert(val($gpu_count), 'More than 0 devices required');
assert($status === VkResult::VK_SUCCESS, VkResult::getDescription($status));

//
// info.gpus.resize(gpu_count);
// res = vkEnumeratePhysicalDevices(info.inst, &gpu_count, info.gpus.data());
// assert(!res && gpu_count >= 1);
//
// Note: "info.gpus" is an "std::vector<...>" which looks like "VkPhysicalDevice[gpu_count]"
//
$gpus = $vk->new('VkPhysicalDevice[' . val($gpu_count) . ']', false);

$status = $vk->vkEnumeratePhysicalDevices($instance, ptr($gpu_count), $gpus);
assert($status === VkResult::VK_SUCCESS, VkResult::getDescription($status));

echo sprintf("%d GPU devices was found\n", val($gpu_count));

// Info
/** @var \Bic\Vulkan\VkPhysicalDeviceProperties $properties */
$properties = $vk->new('VkPhysicalDeviceProperties');

for ($i = 0; $i < $gpu_count->cdata; ++$i) {
    $vk->vkGetPhysicalDeviceProperties($gpus[$i], ptr($properties));

    echo sprintf(" - Name: %s\n", php_string($properties->deviceName));
    echo sprintf(" - Type: %s\n", VkPhysicalDeviceType::getDescription($properties->deviceType));
}

free(ptr($properties), ptr($gpu_count));

return [$instance, $gpus];
