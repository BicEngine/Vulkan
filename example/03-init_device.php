<?php

/**
 * Create and Destroy a Vulkan Physical Device
 *
 * @see https://github.com/LunarG/VulkanSamples/tree/master/API-Samples/03-init_device
 */

use Bic\Vulkan\Enum\VkQueueFlagBits;
use Bic\Vulkan\Enum\VkResult;
use Bic\Vulkan\Enum\VkStructureType;

[$instance, $gpus] = require __DIR__ . '/02-enumerate_devices.php';

//
// VkDeviceQueueCreateInfo queue_info = {};
//
// vkGetPhysicalDeviceQueueFamilyProperties(info.gpus[0], &info.queue_family_count, NULL);
// assert(info.queue_family_count >= 1);
//
/** @var \Bic\Vulkan\VkDeviceCreateInfo $queue_info */
$queue_info = $vk->new('VkDeviceQueueCreateInfo');
$queue_family_count = uint32(0);

$vk->vkGetPhysicalDeviceQueueFamilyProperties($gpus[0], ptr($queue_family_count), null);
assert(val($queue_family_count) >= 1);


//
// info.queue_props.resize(info.queue_family_count);
// vkGetPhysicalDeviceQueueFamilyProperties(info.gpus[0], &info.queue_family_count, info.queue_props.data());
// assert(info.queue_family_count >= 1);
//
/** @var \Bic\Vulkan\VkQueueFamilyProperties[]|\FFI\CData $queue_props */
$queue_props = $vk->new('VkQueueFamilyProperties[' . val($queue_family_count) . ']');
$vk->vkGetPhysicalDeviceQueueFamilyProperties($gpus[0], ptr($queue_family_count), $queue_props);
assert(val($queue_family_count) >= 1);


//
// bool U_ASSERT_ONLY found = false;
// for (unsigned int i = 0; i < info.queue_family_count; i++) {
//     if (info.queue_props[i].queueFlags & VK_QUEUE_GRAPHICS_BIT) {
//         queue_info.queueFamilyIndex = i;
//         found = true;
//         break;
//     }
// }
// assert(found);
// assert(info.queue_family_count >= 1);
//
$found = false;

for ($i = 0, $len = val($queue_family_count); $i < $len; ++$i) {
    if ($queue_props[$i]->queueFlags & VkQueueFlagBits::VK_QUEUE_GRAPHICS_BIT) {
        $queue_info->queueFamilyIndex = $i;
        $found = true;
        break;
    }
}

assert($found);
assert(val($queue_family_count) >= 1);


//
// float queue_priorities[1] = {0.0};
// queue_info.sType = VK_STRUCTURE_TYPE_DEVICE_QUEUE_CREATE_INFO;
// queue_info.pNext = NULL;
// queue_info.queueCount = 1;
// queue_info.pQueuePriorities = queue_priorities;
//
$queue_priorities = array_of('float', [0.0]);
$queue_info->sType = VkStructureType::VK_STRUCTURE_TYPE_DEVICE_QUEUE_CREATE_INFO;
$queue_info->pNext = null;
$queue_info->queueCount = 1;
$queue_info->pQueuePriorities = $queue_priorities;


//
// VkDeviceCreateInfo device_info = {};
// device_info.sType = VK_STRUCTURE_TYPE_DEVICE_CREATE_INFO;
// device_info.pNext = NULL;
// device_info.queueCreateInfoCount = 1;
// device_info.pQueueCreateInfos = &queue_info;
// device_info.enabledExtensionCount = 0;
// device_info.ppEnabledExtensionNames = NULL;
// device_info.enabledLayerCount = 0;
// device_info.ppEnabledLayerNames = NULL;
// device_info.pEnabledFeatures = NULL;
//
/** @var \Bic\Vulkan\VkDeviceCreateInfo $device_info */
$device_info = $vk->new('VkDeviceCreateInfo');

$device_info->sType                   = VkStructureType::VK_STRUCTURE_TYPE_DEVICE_CREATE_INFO;
$device_info->pNext                   = null;
$device_info->queueCreateInfoCount    = 1;
$device_info->pQueueCreateInfos       = ptr($queue_info);
$device_info->enabledExtensionCount   = 0;
$device_info->ppEnabledExtensionNames = null;
$device_info->enabledLayerCount       = 0;
$device_info->ppEnabledLayerNames     = null;
$device_info->pEnabledFeatures        = null;


//
// VkDevice device;
// VkResult U_ASSERT_ONLY res = vkCreateDevice(info.gpus[0], &device_info, NULL, &device);
// assert(res == VK_SUCCESS);
//
// vkDestroyDevice(device, NULL);
//
/** @var \Bic\Vulkan\VkDevice $device */
$device = $vk->new('VkDevice');
$status = $vk->vkCreateDevice($gpus[0], ptr($device_info), null, ptr($device));
assert($status === VkResult::VK_SUCCESS, VkResult::getDescription($status));

echo \sprintf("1 logical device created\n");

$vk->vkDestroyDevice($device, null);
