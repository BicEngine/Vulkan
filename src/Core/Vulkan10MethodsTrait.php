<?php

/**
 * This file is part of Bic Engine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

use FFI\CData;
use Bic\Vulkan\Enum\VkFilter;
use Bic\Vulkan\Enum\VkFormat;
use Bic\Vulkan\Enum\VkImageLayout;
use Bic\Vulkan\Enum\VkImageTiling;
use Bic\Vulkan\Enum\VkImageType;
use Bic\Vulkan\Enum\VkIndexType;
use Bic\Vulkan\Enum\VkPipelineBindPoint;
use Bic\Vulkan\Enum\VkPipelineStageFlagBits;
use Bic\Vulkan\Enum\VkSampleCountFlagBits;
use Bic\Vulkan\Enum\VkSubpassContents;
use Bic\Vulkan\VkAllocationCallbacksPtr;
use Bic\Vulkan\VkBindSparseInfoPtr;
use Bic\Vulkan\VkBuffer;
use Bic\Vulkan\VkBufferCopyPtr;
use Bic\Vulkan\VkBufferCreateInfoPtr;
use Bic\Vulkan\VkBufferImageCopyPtr;
use Bic\Vulkan\VkBufferMemoryBarrierPtr;
use Bic\Vulkan\VkBufferView;
use Bic\Vulkan\VkBufferViewCreateInfoPtr;
use Bic\Vulkan\VkClearAttachmentPtr;
use Bic\Vulkan\VkClearDepthStencilValuePtr;
use Bic\Vulkan\VkClearRectPtr;
use Bic\Vulkan\VkCommandBuffer;
use Bic\Vulkan\VkCommandBufferAllocateInfoPtr;
use Bic\Vulkan\VkCommandBufferBeginInfoPtr;
use Bic\Vulkan\VkCommandPool;
use Bic\Vulkan\VkCommandPoolCreateInfoPtr;
use Bic\Vulkan\VkComputePipelineCreateInfoPtr;
use Bic\Vulkan\VkCopyDescriptorSetPtr;
use Bic\Vulkan\VkDescriptorPool;
use Bic\Vulkan\VkDescriptorPoolCreateInfoPtr;
use Bic\Vulkan\VkDescriptorSetAllocateInfoPtr;
use Bic\Vulkan\VkDescriptorSetLayout;
use Bic\Vulkan\VkDescriptorSetLayoutCreateInfoPtr;
use Bic\Vulkan\VkDevice;
use Bic\Vulkan\VkDeviceCreateInfoPtr;
use Bic\Vulkan\VkDeviceMemory;
use Bic\Vulkan\VkEvent;
use Bic\Vulkan\VkEventCreateInfoPtr;
use Bic\Vulkan\VkExtensionPropertiesPtr;
use Bic\Vulkan\VkExtent2DPtr;
use Bic\Vulkan\VkFence;
use Bic\Vulkan\VkFenceCreateInfoPtr;
use Bic\Vulkan\VkFormatPropertiesPtr;
use Bic\Vulkan\VkFramebuffer;
use Bic\Vulkan\VkFramebufferCreateInfoPtr;
use Bic\Vulkan\VkGraphicsPipelineCreateInfoPtr;
use Bic\Vulkan\VkImage;
use Bic\Vulkan\VkImageBlitPtr;
use Bic\Vulkan\VkImageCopyPtr;
use Bic\Vulkan\VkImageCreateInfoPtr;
use Bic\Vulkan\VkImageFormatPropertiesPtr;
use Bic\Vulkan\VkImageMemoryBarrierPtr;
use Bic\Vulkan\VkImageResolvePtr;
use Bic\Vulkan\VkImageSubresourcePtr;
use Bic\Vulkan\VkImageSubresourceRangePtr;
use Bic\Vulkan\VkImageView;
use Bic\Vulkan\VkImageViewCreateInfoPtr;
use Bic\Vulkan\VkInstance;
use Bic\Vulkan\VkInstanceCreateInfoPtr;
use Bic\Vulkan\VkLayerPropertiesPtr;
use Bic\Vulkan\VkMappedMemoryRangePtr;
use Bic\Vulkan\VkMemoryAllocateInfoPtr;
use Bic\Vulkan\VkMemoryBarrierPtr;
use Bic\Vulkan\VkMemoryRequirementsPtr;
use Bic\Vulkan\VkPhysicalDevice;
use Bic\Vulkan\VkPhysicalDeviceFeaturesPtr;
use Bic\Vulkan\VkPhysicalDeviceMemoryPropertiesPtr;
use Bic\Vulkan\VkPhysicalDevicePropertiesPtr;
use Bic\Vulkan\VkPipeline;
use Bic\Vulkan\VkPipelineCache;
use Bic\Vulkan\VkPipelineCacheCreateInfoPtr;
use Bic\Vulkan\VkPipelineLayout;
use Bic\Vulkan\VkPipelineLayoutCreateInfoPtr;
use Bic\Vulkan\VkQueryPool;
use Bic\Vulkan\VkQueryPoolCreateInfoPtr;
use Bic\Vulkan\VkQueue;
use Bic\Vulkan\VkQueueFamilyPropertiesPtr;
use Bic\Vulkan\VkRect2DPtr;
use Bic\Vulkan\VkRenderPass;
use Bic\Vulkan\VkRenderPassBeginInfoPtr;
use Bic\Vulkan\VkRenderPassCreateInfoPtr;
use Bic\Vulkan\VkSampler;
use Bic\Vulkan\VkSamplerCreateInfoPtr;
use Bic\Vulkan\VkSemaphore;
use Bic\Vulkan\VkSemaphoreCreateInfoPtr;
use Bic\Vulkan\VkShaderModule;
use Bic\Vulkan\VkShaderModuleCreateInfoPtr;
use Bic\Vulkan\VkSparseImageFormatPropertiesPtr;
use Bic\Vulkan\VkSparseImageMemoryRequirementsPtr;
use Bic\Vulkan\VkSubmitInfoPtr;
use Bic\Vulkan\VkSubresourceLayoutPtr;
use Bic\Vulkan\VkViewportPtr;
use Bic\Vulkan\VkWriteDescriptorSetPtr;

/**
 * @mixin Vulkan10Interface
 * @version 1.0
 */
trait Vulkan10MethodsTrait
{
    /**
     * @since 1.0
     * @param CData|null|VkInstanceCreateInfoPtr $pCreateInfo <<Native("const VkInstanceCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pInstance <<Native("VkInstance*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateInstance(?CData $pCreateInfo, ?CData $pAllocator, ?CData $pInstance): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkInstance required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateInstance($pCreateInfo, $pAllocator, $pInstance);
    }

    /**
     * @since 1.0
     * @param CData|VkInstance $instance <<Native("VkInstance")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyInstance(CData $instance, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyInstance($instance, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkInstance $instance <<Native("VkInstance")>>
     * @param CData|null|\FFI\CIntPtr $pPhysicalDeviceCount <<Native("uint32_t*")>>
     * @param CData|null $pPhysicalDevices <<Native("VkPhysicalDevice*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkEnumeratePhysicalDevices(CData $instance, ?CData $pPhysicalDeviceCount, ?CData $pPhysicalDevices): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkPhysicalDevice required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkEnumeratePhysicalDevices($instance, $pPhysicalDeviceCount, $pPhysicalDevices);
    }

    /**
     * @since 1.0
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceFeaturesPtr $pFeatures <<Native("VkPhysicalDeviceFeatures*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceFeatures(CData $physicalDevice, ?CData $pFeatures): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkPhysicalDeviceFeatures required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceFeatures($physicalDevice, $pFeatures);
    }

    /**
     * @since 1.0
     * @psalm-param VkFormat::* $format
     *
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param int $format <<Native("VkFormat")>>
     * @param CData|null|VkFormatPropertiesPtr $pFormatProperties <<Native("VkFormatProperties*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceFormatProperties(CData $physicalDevice, int $format, ?CData $pFormatProperties): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkFormatProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceFormatProperties($physicalDevice, $format, $pFormatProperties);
    }

    /**
     * @since 1.0
     * @psalm-param VkFormat::* $format
     * @psalm-param VkImageType::* $type
     * @psalm-param VkImageTiling::* $tiling
     *
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param int $format <<Native("VkFormat")>>
     * @param int $type <<Native("VkImageType")>>
     * @param int $tiling <<Native("VkImageTiling")>>
     * @param int $usage <<Native("VkImageUsageFlags")>>
     * @param int $flags <<Native("VkImageCreateFlags")>>
     * @param CData|null|VkImageFormatPropertiesPtr $pImageFormatProperties <<Native("VkImageFormatProperties*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkGetPhysicalDeviceImageFormatProperties(CData $physicalDevice, int $format, int $type, int $tiling, int $usage, int $flags, ?CData $pImageFormatProperties): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImageFormatProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetPhysicalDeviceImageFormatProperties($physicalDevice, $format, $type, $tiling, $usage, $flags, $pImageFormatProperties);
    }

    /**
     * @since 1.0
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDevicePropertiesPtr $pProperties <<Native("VkPhysicalDeviceProperties*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceProperties(CData $physicalDevice, ?CData $pProperties): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkPhysicalDeviceProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceProperties($physicalDevice, $pProperties);
    }

    /**
     * @since 1.0
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|\FFI\CIntPtr $pQueueFamilyPropertyCount <<Native("uint32_t*")>>
     * @param CData|null|VkQueueFamilyPropertiesPtr $pQueueFamilyProperties <<Native("VkQueueFamilyProperties*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceQueueFamilyProperties(CData $physicalDevice, ?CData $pQueueFamilyPropertyCount, ?CData $pQueueFamilyProperties): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkQueueFamilyProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceQueueFamilyProperties($physicalDevice, $pQueueFamilyPropertyCount, $pQueueFamilyProperties);
    }

    /**
     * @since 1.0
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceMemoryPropertiesPtr $pMemoryProperties <<Native("VkPhysicalDeviceMemoryProperties*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceMemoryProperties(CData $physicalDevice, ?CData $pMemoryProperties): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkPhysicalDeviceMemoryProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceMemoryProperties($physicalDevice, $pMemoryProperties);
    }

    /**
     * @since 1.0
     * @param CData|VkInstance $instance <<Native("VkInstance")>>
     * @param string|null $pName <<Native("const char*")>>
     * @return CData|callable|null <<Native("PFN_vkVoidFunction")>>
     */
    public function vkGetInstanceProcAddr(CData $instance, ?string $pName): ?CData
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkGetInstanceProcAddr required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetInstanceProcAddr($instance, $pName);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param string|null $pName <<Native("const char*")>>
     * @return CData|callable|null <<Native("PFN_vkVoidFunction")>>
     */
    public function vkGetDeviceProcAddr(CData $device, ?string $pName): ?CData
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkGetDeviceProcAddr required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetDeviceProcAddr($device, $pName);
    }

    /**
     * @since 1.0
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkDeviceCreateInfoPtr $pCreateInfo <<Native("const VkDeviceCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pDevice <<Native("VkDevice*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateDevice(CData $physicalDevice, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pDevice): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkDevice required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateDevice($physicalDevice, $pCreateInfo, $pAllocator, $pDevice);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyDevice(CData $device, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyDevice($device, $pAllocator);
    }

    /**
     * @since 1.0
     * @param string|null $pLayerName <<Native("const char*")>>
     * @param CData|null|\FFI\CIntPtr $pPropertyCount <<Native("uint32_t*")>>
     * @param CData|null|VkExtensionPropertiesPtr $pProperties <<Native("VkExtensionProperties*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkEnumerateInstanceExtensionProperties(?string $pLayerName, ?CData $pPropertyCount, ?CData $pProperties): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkExtensionProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkEnumerateInstanceExtensionProperties($pLayerName, $pPropertyCount, $pProperties);
    }

    /**
     * @since 1.0
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param string|null $pLayerName <<Native("const char*")>>
     * @param CData|null|\FFI\CIntPtr $pPropertyCount <<Native("uint32_t*")>>
     * @param CData|null|VkExtensionPropertiesPtr $pProperties <<Native("VkExtensionProperties*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkEnumerateDeviceExtensionProperties(CData $physicalDevice, ?string $pLayerName, ?CData $pPropertyCount, ?CData $pProperties): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkExtensionProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkEnumerateDeviceExtensionProperties($physicalDevice, $pLayerName, $pPropertyCount, $pProperties);
    }

    /**
     * @since 1.0
     * @param CData|null|\FFI\CIntPtr $pPropertyCount <<Native("uint32_t*")>>
     * @param CData|null|VkLayerPropertiesPtr $pProperties <<Native("VkLayerProperties*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkEnumerateInstanceLayerProperties(?CData $pPropertyCount, ?CData $pProperties): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkLayerProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkEnumerateInstanceLayerProperties($pPropertyCount, $pProperties);
    }

    /**
     * @since 1.0
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|\FFI\CIntPtr $pPropertyCount <<Native("uint32_t*")>>
     * @param CData|null|VkLayerPropertiesPtr $pProperties <<Native("VkLayerProperties*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkEnumerateDeviceLayerProperties(CData $physicalDevice, ?CData $pPropertyCount, ?CData $pProperties): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkLayerProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkEnumerateDeviceLayerProperties($physicalDevice, $pPropertyCount, $pProperties);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param int $queueFamilyIndex <<Native("uint32_t")>>
     * @param int $queueIndex <<Native("uint32_t")>>
     * @param CData|null $pQueue <<Native("VkQueue*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetDeviceQueue(CData $device, int $queueFamilyIndex, int $queueIndex, ?CData $pQueue): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkQueue required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetDeviceQueue($device, $queueFamilyIndex, $queueIndex, $pQueue);
    }

    /**
     * @since 1.0
     * @param CData|VkQueue $queue <<Native("VkQueue")>>
     * @param int $submitCount <<Native("uint32_t")>>
     * @param CData|null|VkSubmitInfoPtr $pSubmits <<Native("const VkSubmitInfo*")>>
     * @param CData|VkFence $fence <<Native("VkFence")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkQueueSubmit(CData $queue, int $submitCount, ?CData $pSubmits, CData $fence): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkSubmitInfo required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkQueueSubmit($queue, $submitCount, $pSubmits, $fence);
    }

    /**
     * @since 1.0
     * @param CData|VkQueue $queue <<Native("VkQueue")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkQueueWaitIdle(CData $queue): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkQueueWaitIdle required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkQueueWaitIdle($queue);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkDeviceWaitIdle(CData $device): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkDeviceWaitIdle required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkDeviceWaitIdle($device);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkMemoryAllocateInfoPtr $pAllocateInfo <<Native("const VkMemoryAllocateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pMemory <<Native("VkDeviceMemory*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkAllocateMemory(CData $device, ?CData $pAllocateInfo, ?CData $pAllocator, ?CData $pMemory): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkDeviceMemory required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkAllocateMemory($device, $pAllocateInfo, $pAllocator, $pMemory);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDeviceMemory $memory <<Native("VkDeviceMemory")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkFreeMemory(CData $device, CData $memory, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkFreeMemory($device, $memory, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDeviceMemory $memory <<Native("VkDeviceMemory")>>
     * @param int $offset <<Native("VkDeviceSize")>>
     * @param int $size <<Native("VkDeviceSize")>>
     * @param int $flags <<Native("VkMemoryMapFlags")>>
     * @param CData|null $ppData <<Native("void**")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkMapMemory(CData $device, CData $memory, int $offset, int $size, int $flags, ?CData $ppData): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'void required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkMapMemory($device, $memory, $offset, $size, $flags, $ppData);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDeviceMemory $memory <<Native("VkDeviceMemory")>>
     * @return void <<Native("void")>>
     */
    public function vkUnmapMemory(CData $device, CData $memory): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkUnmapMemory required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkUnmapMemory($device, $memory);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param int $memoryRangeCount <<Native("uint32_t")>>
     * @param CData|null|VkMappedMemoryRangePtr $pMemoryRanges <<Native("const VkMappedMemoryRange*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkFlushMappedMemoryRanges(CData $device, int $memoryRangeCount, ?CData $pMemoryRanges): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkMappedMemoryRange required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkFlushMappedMemoryRanges($device, $memoryRangeCount, $pMemoryRanges);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param int $memoryRangeCount <<Native("uint32_t")>>
     * @param CData|null|VkMappedMemoryRangePtr $pMemoryRanges <<Native("const VkMappedMemoryRange*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkInvalidateMappedMemoryRanges(CData $device, int $memoryRangeCount, ?CData $pMemoryRanges): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkMappedMemoryRange required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkInvalidateMappedMemoryRanges($device, $memoryRangeCount, $pMemoryRanges);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDeviceMemory $memory <<Native("VkDeviceMemory")>>
     * @param CData|null $pCommittedMemoryInBytes <<Native("VkDeviceSize*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetDeviceMemoryCommitment(CData $device, CData $memory, ?CData $pCommittedMemoryInBytes): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkDeviceSize required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetDeviceMemoryCommitment($device, $memory, $pCommittedMemoryInBytes);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkBuffer $buffer <<Native("VkBuffer")>>
     * @param CData|VkDeviceMemory $memory <<Native("VkDeviceMemory")>>
     * @param int $memoryOffset <<Native("VkDeviceSize")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkBindBufferMemory(CData $device, CData $buffer, CData $memory, int $memoryOffset): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkBindBufferMemory required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkBindBufferMemory($device, $buffer, $memory, $memoryOffset);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkImage $image <<Native("VkImage")>>
     * @param CData|VkDeviceMemory $memory <<Native("VkDeviceMemory")>>
     * @param int $memoryOffset <<Native("VkDeviceSize")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkBindImageMemory(CData $device, CData $image, CData $memory, int $memoryOffset): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkBindImageMemory required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkBindImageMemory($device, $image, $memory, $memoryOffset);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkBuffer $buffer <<Native("VkBuffer")>>
     * @param CData|null|VkMemoryRequirementsPtr $pMemoryRequirements <<Native("VkMemoryRequirements*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetBufferMemoryRequirements(CData $device, CData $buffer, ?CData $pMemoryRequirements): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkMemoryRequirements required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetBufferMemoryRequirements($device, $buffer, $pMemoryRequirements);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkImage $image <<Native("VkImage")>>
     * @param CData|null|VkMemoryRequirementsPtr $pMemoryRequirements <<Native("VkMemoryRequirements*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetImageMemoryRequirements(CData $device, CData $image, ?CData $pMemoryRequirements): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkMemoryRequirements required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetImageMemoryRequirements($device, $image, $pMemoryRequirements);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkImage $image <<Native("VkImage")>>
     * @param CData|null|\FFI\CIntPtr $pSparseMemoryRequirementCount <<Native("uint32_t*")>>
     * @param CData|null|VkSparseImageMemoryRequirementsPtr $pSparseMemoryRequirements <<Native("VkSparseImageMemoryRequirements*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetImageSparseMemoryRequirements(CData $device, CData $image, ?CData $pSparseMemoryRequirementCount, ?CData $pSparseMemoryRequirements): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkSparseImageMemoryRequirements required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetImageSparseMemoryRequirements($device, $image, $pSparseMemoryRequirementCount, $pSparseMemoryRequirements);
    }

    /**
     * @since 1.0
     * @psalm-param VkFormat::* $format
     * @psalm-param VkImageType::* $type
     * @psalm-param VkSampleCountFlagBits::* $samples
     * @psalm-param VkImageTiling::* $tiling
     *
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param int $format <<Native("VkFormat")>>
     * @param int $type <<Native("VkImageType")>>
     * @param int $samples <<Native("VkSampleCountFlagBits")>>
     * @param int $usage <<Native("VkImageUsageFlags")>>
     * @param int $tiling <<Native("VkImageTiling")>>
     * @param CData|null|\FFI\CIntPtr $pPropertyCount <<Native("uint32_t*")>>
     * @param CData|null|VkSparseImageFormatPropertiesPtr $pProperties <<Native("VkSparseImageFormatProperties*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceSparseImageFormatProperties(
        CData $physicalDevice,
        int $format,
        int $type,
        int $samples,
        int $usage,
        int $tiling,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): void {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkSparseImageFormatProperties required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceSparseImageFormatProperties($physicalDevice, $format, $type, $samples, $usage, $tiling, $pPropertyCount, $pProperties);
    }

    /**
     * @since 1.0
     * @param CData|VkQueue $queue <<Native("VkQueue")>>
     * @param int $bindInfoCount <<Native("uint32_t")>>
     * @param CData|null|VkBindSparseInfoPtr $pBindInfo <<Native("const VkBindSparseInfo*")>>
     * @param CData|VkFence $fence <<Native("VkFence")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkQueueBindSparse(CData $queue, int $bindInfoCount, ?CData $pBindInfo, CData $fence): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkBindSparseInfo required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkQueueBindSparse($queue, $bindInfoCount, $pBindInfo, $fence);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkFenceCreateInfoPtr $pCreateInfo <<Native("const VkFenceCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pFence <<Native("VkFence*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateFence(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pFence): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkFence required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateFence($device, $pCreateInfo, $pAllocator, $pFence);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkFence $fence <<Native("VkFence")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyFence(CData $device, CData $fence, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyFence($device, $fence, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param int $fenceCount <<Native("uint32_t")>>
     * @param CData|null $pFences <<Native("const VkFence*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkResetFences(CData $device, int $fenceCount, ?CData $pFences): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkFence required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkResetFences($device, $fenceCount, $pFences);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkFence $fence <<Native("VkFence")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkGetFenceStatus(CData $device, CData $fence): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkGetFenceStatus required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetFenceStatus($device, $fence);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param int $fenceCount <<Native("uint32_t")>>
     * @param CData|null $pFences <<Native("const VkFence*")>>
     * @param int $waitAll <<Native("VkBool32")>>
     * @param int $timeout <<Native("uint64_t")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkWaitForFences(CData $device, int $fenceCount, ?CData $pFences, int $waitAll, int $timeout): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkFence required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkWaitForFences($device, $fenceCount, $pFences, $waitAll, $timeout);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkSemaphoreCreateInfoPtr $pCreateInfo <<Native("const VkSemaphoreCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pSemaphore <<Native("VkSemaphore*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateSemaphore(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pSemaphore): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkSemaphore required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateSemaphore($device, $pCreateInfo, $pAllocator, $pSemaphore);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkSemaphore $semaphore <<Native("VkSemaphore")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroySemaphore(CData $device, CData $semaphore, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroySemaphore($device, $semaphore, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkEventCreateInfoPtr $pCreateInfo <<Native("const VkEventCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pEvent <<Native("VkEvent*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateEvent(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pEvent): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkEvent required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateEvent($device, $pCreateInfo, $pAllocator, $pEvent);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkEvent $event <<Native("VkEvent")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyEvent(CData $device, CData $event, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyEvent($device, $event, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkEvent $event <<Native("VkEvent")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkGetEventStatus(CData $device, CData $event): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkGetEventStatus required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetEventStatus($device, $event);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkEvent $event <<Native("VkEvent")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkSetEvent(CData $device, CData $event): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkSetEvent required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkSetEvent($device, $event);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkEvent $event <<Native("VkEvent")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkResetEvent(CData $device, CData $event): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkResetEvent required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkResetEvent($device, $event);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkQueryPoolCreateInfoPtr $pCreateInfo <<Native("const VkQueryPoolCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pQueryPool <<Native("VkQueryPool*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateQueryPool(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pQueryPool): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkQueryPool required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateQueryPool($device, $pCreateInfo, $pAllocator, $pQueryPool);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkQueryPool $queryPool <<Native("VkQueryPool")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyQueryPool(CData $device, CData $queryPool, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyQueryPool($device, $queryPool, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkQueryPool $queryPool <<Native("VkQueryPool")>>
     * @param int $firstQuery <<Native("uint32_t")>>
     * @param int $queryCount <<Native("uint32_t")>>
     * @param int $dataSize <<Native("size_t")>>
     * @param CData|null $pData <<Native("void*")>>
     * @param int $stride <<Native("VkDeviceSize")>>
     * @param int $flags <<Native("VkQueryResultFlags")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkGetQueryPoolResults(CData $device, CData $queryPool, int $firstQuery, int $queryCount, int $dataSize, ?CData $pData, int $stride, int $flags): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'void required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetQueryPoolResults($device, $queryPool, $firstQuery, $queryCount, $dataSize, $pData, $stride, $flags);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkBufferCreateInfoPtr $pCreateInfo <<Native("const VkBufferCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pBuffer <<Native("VkBuffer*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateBuffer(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pBuffer): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkBuffer required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateBuffer($device, $pCreateInfo, $pAllocator, $pBuffer);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkBuffer $buffer <<Native("VkBuffer")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyBuffer(CData $device, CData $buffer, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyBuffer($device, $buffer, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkBufferViewCreateInfoPtr $pCreateInfo <<Native("const VkBufferViewCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pView <<Native("VkBufferView*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateBufferView(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pView): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkBufferView required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateBufferView($device, $pCreateInfo, $pAllocator, $pView);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkBufferView $bufferView <<Native("VkBufferView")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyBufferView(CData $device, CData $bufferView, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyBufferView($device, $bufferView, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkImageCreateInfoPtr $pCreateInfo <<Native("const VkImageCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pImage <<Native("VkImage*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateImage(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pImage): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImage required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateImage($device, $pCreateInfo, $pAllocator, $pImage);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkImage $image <<Native("VkImage")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyImage(CData $device, CData $image, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyImage($device, $image, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkImage $image <<Native("VkImage")>>
     * @param CData|null|VkImageSubresourcePtr $pSubresource <<Native("const VkImageSubresource*")>>
     * @param CData|null|VkSubresourceLayoutPtr $pLayout <<Native("VkSubresourceLayout*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetImageSubresourceLayout(CData $device, CData $image, ?CData $pSubresource, ?CData $pLayout): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkSubresourceLayout required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetImageSubresourceLayout($device, $image, $pSubresource, $pLayout);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkImageViewCreateInfoPtr $pCreateInfo <<Native("const VkImageViewCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pView <<Native("VkImageView*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateImageView(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pView): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImageView required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateImageView($device, $pCreateInfo, $pAllocator, $pView);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkImageView $imageView <<Native("VkImageView")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyImageView(CData $device, CData $imageView, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyImageView($device, $imageView, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkShaderModuleCreateInfoPtr $pCreateInfo <<Native("const VkShaderModuleCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pShaderModule <<Native("VkShaderModule*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateShaderModule(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pShaderModule): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkShaderModule required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateShaderModule($device, $pCreateInfo, $pAllocator, $pShaderModule);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkShaderModule $shaderModule <<Native("VkShaderModule")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyShaderModule(CData $device, CData $shaderModule, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyShaderModule($device, $shaderModule, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkPipelineCacheCreateInfoPtr $pCreateInfo <<Native("const VkPipelineCacheCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pPipelineCache <<Native("VkPipelineCache*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreatePipelineCache(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pPipelineCache): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkPipelineCache required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreatePipelineCache($device, $pCreateInfo, $pAllocator, $pPipelineCache);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkPipelineCache $pipelineCache <<Native("VkPipelineCache")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyPipelineCache(CData $device, CData $pipelineCache, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyPipelineCache($device, $pipelineCache, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkPipelineCache $pipelineCache <<Native("VkPipelineCache")>>
     * @param CData|null|\FFI\CIntPtr $pDataSize <<Native("size_t*")>>
     * @param CData|null $pData <<Native("void*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkGetPipelineCacheData(CData $device, CData $pipelineCache, ?CData $pDataSize, ?CData $pData): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'void required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetPipelineCacheData($device, $pipelineCache, $pDataSize, $pData);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkPipelineCache $dstCache <<Native("VkPipelineCache")>>
     * @param int $srcCacheCount <<Native("uint32_t")>>
     * @param CData|null $pSrcCaches <<Native("const VkPipelineCache*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkMergePipelineCaches(CData $device, CData $dstCache, int $srcCacheCount, ?CData $pSrcCaches): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkPipelineCache required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkMergePipelineCaches($device, $dstCache, $srcCacheCount, $pSrcCaches);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkPipelineCache $pipelineCache <<Native("VkPipelineCache")>>
     * @param int $createInfoCount <<Native("uint32_t")>>
     * @param CData|null|VkGraphicsPipelineCreateInfoPtr $pCreateInfos <<Native("const VkGraphicsPipelineCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pPipelines <<Native("VkPipeline*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateGraphicsPipelines(CData $device, CData $pipelineCache, int $createInfoCount, ?CData $pCreateInfos, ?CData $pAllocator, ?CData $pPipelines): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkPipeline required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateGraphicsPipelines($device, $pipelineCache, $createInfoCount, $pCreateInfos, $pAllocator, $pPipelines);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkPipelineCache $pipelineCache <<Native("VkPipelineCache")>>
     * @param int $createInfoCount <<Native("uint32_t")>>
     * @param CData|null|VkComputePipelineCreateInfoPtr $pCreateInfos <<Native("const VkComputePipelineCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pPipelines <<Native("VkPipeline*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateComputePipelines(CData $device, CData $pipelineCache, int $createInfoCount, ?CData $pCreateInfos, ?CData $pAllocator, ?CData $pPipelines): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkPipeline required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateComputePipelines($device, $pipelineCache, $createInfoCount, $pCreateInfos, $pAllocator, $pPipelines);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkPipeline $pipeline <<Native("VkPipeline")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyPipeline(CData $device, CData $pipeline, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyPipeline($device, $pipeline, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkPipelineLayoutCreateInfoPtr $pCreateInfo <<Native("const VkPipelineLayoutCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pPipelineLayout <<Native("VkPipelineLayout*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreatePipelineLayout(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pPipelineLayout): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkPipelineLayout required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreatePipelineLayout($device, $pCreateInfo, $pAllocator, $pPipelineLayout);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkPipelineLayout $pipelineLayout <<Native("VkPipelineLayout")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyPipelineLayout(CData $device, CData $pipelineLayout, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyPipelineLayout($device, $pipelineLayout, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkSamplerCreateInfoPtr $pCreateInfo <<Native("const VkSamplerCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pSampler <<Native("VkSampler*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateSampler(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pSampler): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkSampler required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateSampler($device, $pCreateInfo, $pAllocator, $pSampler);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkSampler $sampler <<Native("VkSampler")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroySampler(CData $device, CData $sampler, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroySampler($device, $sampler, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkDescriptorSetLayoutCreateInfoPtr $pCreateInfo <<Native("const VkDescriptorSetLayoutCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pSetLayout <<Native("VkDescriptorSetLayout*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateDescriptorSetLayout(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pSetLayout): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkDescriptorSetLayout required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateDescriptorSetLayout($device, $pCreateInfo, $pAllocator, $pSetLayout);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDescriptorSetLayout $descriptorSetLayout <<Native("VkDescriptorSetLayout")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyDescriptorSetLayout(CData $device, CData $descriptorSetLayout, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyDescriptorSetLayout($device, $descriptorSetLayout, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkDescriptorPoolCreateInfoPtr $pCreateInfo <<Native("const VkDescriptorPoolCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pDescriptorPool <<Native("VkDescriptorPool*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateDescriptorPool(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pDescriptorPool): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkDescriptorPool required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateDescriptorPool($device, $pCreateInfo, $pAllocator, $pDescriptorPool);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDescriptorPool $descriptorPool <<Native("VkDescriptorPool")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyDescriptorPool(CData $device, CData $descriptorPool, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyDescriptorPool($device, $descriptorPool, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDescriptorPool $descriptorPool <<Native("VkDescriptorPool")>>
     * @param int $flags <<Native("VkDescriptorPoolResetFlags")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkResetDescriptorPool(CData $device, CData $descriptorPool, int $flags): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkResetDescriptorPool required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkResetDescriptorPool($device, $descriptorPool, $flags);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkDescriptorSetAllocateInfoPtr $pAllocateInfo <<Native("const VkDescriptorSetAllocateInfo*")>>
     * @param CData|null $pDescriptorSets <<Native("VkDescriptorSet*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkAllocateDescriptorSets(CData $device, ?CData $pAllocateInfo, ?CData $pDescriptorSets): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkDescriptorSet required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkAllocateDescriptorSets($device, $pAllocateInfo, $pDescriptorSets);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDescriptorPool $descriptorPool <<Native("VkDescriptorPool")>>
     * @param int $descriptorSetCount <<Native("uint32_t")>>
     * @param CData|null $pDescriptorSets <<Native("const VkDescriptorSet*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkFreeDescriptorSets(CData $device, CData $descriptorPool, int $descriptorSetCount, ?CData $pDescriptorSets): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkDescriptorSet required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkFreeDescriptorSets($device, $descriptorPool, $descriptorSetCount, $pDescriptorSets);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param int $descriptorWriteCount <<Native("uint32_t")>>
     * @param CData|null|VkWriteDescriptorSetPtr $pDescriptorWrites <<Native("const VkWriteDescriptorSet*")>>
     * @param int $descriptorCopyCount <<Native("uint32_t")>>
     * @param CData|null|VkCopyDescriptorSetPtr $pDescriptorCopies <<Native("const VkCopyDescriptorSet*")>>
     * @return void <<Native("void")>>
     */
    public function vkUpdateDescriptorSets(CData $device, int $descriptorWriteCount, ?CData $pDescriptorWrites, int $descriptorCopyCount, ?CData $pDescriptorCopies): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkCopyDescriptorSet required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkUpdateDescriptorSets($device, $descriptorWriteCount, $pDescriptorWrites, $descriptorCopyCount, $pDescriptorCopies);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkFramebufferCreateInfoPtr $pCreateInfo <<Native("const VkFramebufferCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pFramebuffer <<Native("VkFramebuffer*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateFramebuffer(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pFramebuffer): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkFramebuffer required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateFramebuffer($device, $pCreateInfo, $pAllocator, $pFramebuffer);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkFramebuffer $framebuffer <<Native("VkFramebuffer")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyFramebuffer(CData $device, CData $framebuffer, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyFramebuffer($device, $framebuffer, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkRenderPassCreateInfoPtr $pCreateInfo <<Native("const VkRenderPassCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pRenderPass <<Native("VkRenderPass*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateRenderPass(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pRenderPass): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkRenderPass required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateRenderPass($device, $pCreateInfo, $pAllocator, $pRenderPass);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkRenderPass $renderPass <<Native("VkRenderPass")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyRenderPass(CData $device, CData $renderPass, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyRenderPass($device, $renderPass, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkRenderPass $renderPass <<Native("VkRenderPass")>>
     * @param CData|null|VkExtent2DPtr $pGranularity <<Native("VkExtent2D*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetRenderAreaGranularity(CData $device, CData $renderPass, ?CData $pGranularity): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkExtent2D required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetRenderAreaGranularity($device, $renderPass, $pGranularity);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkCommandPoolCreateInfoPtr $pCreateInfo <<Native("const VkCommandPoolCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pCommandPool <<Native("VkCommandPool*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateCommandPool(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pCommandPool): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkCommandPool required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateCommandPool($device, $pCreateInfo, $pAllocator, $pCommandPool);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkCommandPool $commandPool <<Native("VkCommandPool")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyCommandPool(CData $device, CData $commandPool, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkAllocationCallbacks required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyCommandPool($device, $commandPool, $pAllocator);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkCommandPool $commandPool <<Native("VkCommandPool")>>
     * @param int $flags <<Native("VkCommandPoolResetFlags")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkResetCommandPool(CData $device, CData $commandPool, int $flags): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkResetCommandPool required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkResetCommandPool($device, $commandPool, $flags);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkCommandBufferAllocateInfoPtr $pAllocateInfo <<Native("const VkCommandBufferAllocateInfo*")>>
     * @param CData|null $pCommandBuffers <<Native("VkCommandBuffer*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkAllocateCommandBuffers(CData $device, ?CData $pAllocateInfo, ?CData $pCommandBuffers): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkCommandBuffer required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkAllocateCommandBuffers($device, $pAllocateInfo, $pCommandBuffers);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkCommandPool $commandPool <<Native("VkCommandPool")>>
     * @param int $commandBufferCount <<Native("uint32_t")>>
     * @param CData|null $pCommandBuffers <<Native("const VkCommandBuffer*")>>
     * @return void <<Native("void")>>
     */
    public function vkFreeCommandBuffers(CData $device, CData $commandPool, int $commandBufferCount, ?CData $pCommandBuffers): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkCommandBuffer required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkFreeCommandBuffers($device, $commandPool, $commandBufferCount, $pCommandBuffers);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|null|VkCommandBufferBeginInfoPtr $pBeginInfo <<Native("const VkCommandBufferBeginInfo*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkBeginCommandBuffer(CData $commandBuffer, ?CData $pBeginInfo): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkCommandBufferBeginInfo required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkBeginCommandBuffer($commandBuffer, $pBeginInfo);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkEndCommandBuffer(CData $commandBuffer): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkEndCommandBuffer required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkEndCommandBuffer($commandBuffer);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $flags <<Native("VkCommandBufferResetFlags")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkResetCommandBuffer(CData $commandBuffer, int $flags): int
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkResetCommandBuffer required Vulkan v1.0 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkResetCommandBuffer($commandBuffer, $flags);
    }

    /**
     * @since 1.0
     * @psalm-param VkPipelineBindPoint::* $pipelineBindPoint
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $pipelineBindPoint <<Native("VkPipelineBindPoint")>>
     * @param CData|VkPipeline $pipeline <<Native("VkPipeline")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdBindPipeline(CData $commandBuffer, int $pipelineBindPoint, CData $pipeline): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdBindPipeline required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdBindPipeline($commandBuffer, $pipelineBindPoint, $pipeline);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $firstViewport <<Native("uint32_t")>>
     * @param int $viewportCount <<Native("uint32_t")>>
     * @param CData|null|VkViewportPtr $pViewports <<Native("const VkViewport*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetViewport(CData $commandBuffer, int $firstViewport, int $viewportCount, ?CData $pViewports): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkViewport required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetViewport($commandBuffer, $firstViewport, $viewportCount, $pViewports);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $firstScissor <<Native("uint32_t")>>
     * @param int $scissorCount <<Native("uint32_t")>>
     * @param CData|null|VkRect2DPtr $pScissors <<Native("const VkRect2D*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetScissor(CData $commandBuffer, int $firstScissor, int $scissorCount, ?CData $pScissors): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkRect2D required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetScissor($commandBuffer, $firstScissor, $scissorCount, $pScissors);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param float $lineWidth <<Native("float")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetLineWidth(CData $commandBuffer, float $lineWidth): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdSetLineWidth required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetLineWidth($commandBuffer, $lineWidth);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param float $depthBiasConstantFactor <<Native("float")>>
     * @param float $depthBiasClamp <<Native("float")>>
     * @param float $depthBiasSlopeFactor <<Native("float")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetDepthBias(CData $commandBuffer, float $depthBiasConstantFactor, float $depthBiasClamp, float $depthBiasSlopeFactor): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdSetDepthBias required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetDepthBias($commandBuffer, $depthBiasConstantFactor, $depthBiasClamp, $depthBiasSlopeFactor);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData $blendConstants <<Native("const float[4]")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetBlendConstants(CData $commandBuffer, CData $blendConstants): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdSetBlendConstants required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetBlendConstants($commandBuffer, $blendConstants);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param float $minDepthBounds <<Native("float")>>
     * @param float $maxDepthBounds <<Native("float")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetDepthBounds(CData $commandBuffer, float $minDepthBounds, float $maxDepthBounds): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdSetDepthBounds required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetDepthBounds($commandBuffer, $minDepthBounds, $maxDepthBounds);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $faceMask <<Native("VkStencilFaceFlags")>>
     * @param int $compareMask <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetStencilCompareMask(CData $commandBuffer, int $faceMask, int $compareMask): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdSetStencilCompareMask required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetStencilCompareMask($commandBuffer, $faceMask, $compareMask);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $faceMask <<Native("VkStencilFaceFlags")>>
     * @param int $writeMask <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetStencilWriteMask(CData $commandBuffer, int $faceMask, int $writeMask): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdSetStencilWriteMask required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetStencilWriteMask($commandBuffer, $faceMask, $writeMask);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $faceMask <<Native("VkStencilFaceFlags")>>
     * @param int $reference <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetStencilReference(CData $commandBuffer, int $faceMask, int $reference): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdSetStencilReference required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetStencilReference($commandBuffer, $faceMask, $reference);
    }

    /**
     * @since 1.0
     * @psalm-param VkPipelineBindPoint::* $pipelineBindPoint
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $pipelineBindPoint <<Native("VkPipelineBindPoint")>>
     * @param CData|VkPipelineLayout $layout <<Native("VkPipelineLayout")>>
     * @param int $firstSet <<Native("uint32_t")>>
     * @param int $descriptorSetCount <<Native("uint32_t")>>
     * @param CData|null $pDescriptorSets <<Native("const VkDescriptorSet*")>>
     * @param int $dynamicOffsetCount <<Native("uint32_t")>>
     * @param CData|null $pDynamicOffsets <<Native("const uint32_t*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdBindDescriptorSets(
        CData $commandBuffer,
        int $pipelineBindPoint,
        CData $layout,
        int $firstSet,
        int $descriptorSetCount,
        ?CData $pDescriptorSets,
        int $dynamicOffsetCount,
        ?CData $pDynamicOffsets
    ): void {
        assert(version_compare($this->info->version, '1.0') >= 0, 'uint32_t required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdBindDescriptorSets($commandBuffer, $pipelineBindPoint, $layout, $firstSet, $descriptorSetCount, $pDescriptorSets, $dynamicOffsetCount, $pDynamicOffsets);
    }

    /**
     * @since 1.0
     * @psalm-param VkIndexType::* $indexType
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $buffer <<Native("VkBuffer")>>
     * @param int $offset <<Native("VkDeviceSize")>>
     * @param int $indexType <<Native("VkIndexType")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdBindIndexBuffer(CData $commandBuffer, CData $buffer, int $offset, int $indexType): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdBindIndexBuffer required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdBindIndexBuffer($commandBuffer, $buffer, $offset, $indexType);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $firstBinding <<Native("uint32_t")>>
     * @param int $bindingCount <<Native("uint32_t")>>
     * @param CData|null $pBuffers <<Native("const VkBuffer*")>>
     * @param CData|null $pOffsets <<Native("const VkDeviceSize*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdBindVertexBuffers(CData $commandBuffer, int $firstBinding, int $bindingCount, ?CData $pBuffers, ?CData $pOffsets): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkDeviceSize required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdBindVertexBuffers($commandBuffer, $firstBinding, $bindingCount, $pBuffers, $pOffsets);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $vertexCount <<Native("uint32_t")>>
     * @param int $instanceCount <<Native("uint32_t")>>
     * @param int $firstVertex <<Native("uint32_t")>>
     * @param int $firstInstance <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdDraw(CData $commandBuffer, int $vertexCount, int $instanceCount, int $firstVertex, int $firstInstance): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdDraw required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdDraw($commandBuffer, $vertexCount, $instanceCount, $firstVertex, $firstInstance);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $indexCount <<Native("uint32_t")>>
     * @param int $instanceCount <<Native("uint32_t")>>
     * @param int $firstIndex <<Native("uint32_t")>>
     * @param int $vertexOffset <<Native("int32_t")>>
     * @param int $firstInstance <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdDrawIndexed(CData $commandBuffer, int $indexCount, int $instanceCount, int $firstIndex, int $vertexOffset, int $firstInstance): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdDrawIndexed required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdDrawIndexed($commandBuffer, $indexCount, $instanceCount, $firstIndex, $vertexOffset, $firstInstance);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $buffer <<Native("VkBuffer")>>
     * @param int $offset <<Native("VkDeviceSize")>>
     * @param int $drawCount <<Native("uint32_t")>>
     * @param int $stride <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdDrawIndirect(CData $commandBuffer, CData $buffer, int $offset, int $drawCount, int $stride): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdDrawIndirect required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdDrawIndirect($commandBuffer, $buffer, $offset, $drawCount, $stride);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $buffer <<Native("VkBuffer")>>
     * @param int $offset <<Native("VkDeviceSize")>>
     * @param int $drawCount <<Native("uint32_t")>>
     * @param int $stride <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdDrawIndexedIndirect(CData $commandBuffer, CData $buffer, int $offset, int $drawCount, int $stride): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdDrawIndexedIndirect required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdDrawIndexedIndirect($commandBuffer, $buffer, $offset, $drawCount, $stride);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $groupCountX <<Native("uint32_t")>>
     * @param int $groupCountY <<Native("uint32_t")>>
     * @param int $groupCountZ <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdDispatch(CData $commandBuffer, int $groupCountX, int $groupCountY, int $groupCountZ): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdDispatch required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdDispatch($commandBuffer, $groupCountX, $groupCountY, $groupCountZ);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $buffer <<Native("VkBuffer")>>
     * @param int $offset <<Native("VkDeviceSize")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdDispatchIndirect(CData $commandBuffer, CData $buffer, int $offset): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdDispatchIndirect required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdDispatchIndirect($commandBuffer, $buffer, $offset);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $srcBuffer <<Native("VkBuffer")>>
     * @param CData|VkBuffer $dstBuffer <<Native("VkBuffer")>>
     * @param int $regionCount <<Native("uint32_t")>>
     * @param CData|null|VkBufferCopyPtr $pRegions <<Native("const VkBufferCopy*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdCopyBuffer(CData $commandBuffer, CData $srcBuffer, CData $dstBuffer, int $regionCount, ?CData $pRegions): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkBufferCopy required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdCopyBuffer($commandBuffer, $srcBuffer, $dstBuffer, $regionCount, $pRegions);
    }

    /**
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     * @psalm-param VkImageLayout::* $dstImageLayout
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkImage $srcImage <<Native("VkImage")>>
     * @param int $srcImageLayout <<Native("VkImageLayout")>>
     * @param CData|VkImage $dstImage <<Native("VkImage")>>
     * @param int $dstImageLayout <<Native("VkImageLayout")>>
     * @param int $regionCount <<Native("uint32_t")>>
     * @param CData|null|VkImageCopyPtr $pRegions <<Native("const VkImageCopy*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdCopyImage(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImageCopy required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdCopyImage($commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount, $pRegions);
    }

    /**
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     * @psalm-param VkImageLayout::* $dstImageLayout
     * @psalm-param VkFilter::* $filter
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkImage $srcImage <<Native("VkImage")>>
     * @param int $srcImageLayout <<Native("VkImageLayout")>>
     * @param CData|VkImage $dstImage <<Native("VkImage")>>
     * @param int $dstImageLayout <<Native("VkImageLayout")>>
     * @param int $regionCount <<Native("uint32_t")>>
     * @param CData|null|VkImageBlitPtr $pRegions <<Native("const VkImageBlit*")>>
     * @param int $filter <<Native("VkFilter")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdBlitImage(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions,
        int $filter
    ): void {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImageBlit required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdBlitImage($commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount, $pRegions, $filter);
    }

    /**
     * @since 1.0
     * @psalm-param VkImageLayout::* $dstImageLayout
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $srcBuffer <<Native("VkBuffer")>>
     * @param CData|VkImage $dstImage <<Native("VkImage")>>
     * @param int $dstImageLayout <<Native("VkImageLayout")>>
     * @param int $regionCount <<Native("uint32_t")>>
     * @param CData|null|VkBufferImageCopyPtr $pRegions <<Native("const VkBufferImageCopy*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdCopyBufferToImage(CData $commandBuffer, CData $srcBuffer, CData $dstImage, int $dstImageLayout, int $regionCount, ?CData $pRegions): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkBufferImageCopy required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdCopyBufferToImage($commandBuffer, $srcBuffer, $dstImage, $dstImageLayout, $regionCount, $pRegions);
    }

    /**
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkImage $srcImage <<Native("VkImage")>>
     * @param int $srcImageLayout <<Native("VkImageLayout")>>
     * @param CData|VkBuffer $dstBuffer <<Native("VkBuffer")>>
     * @param int $regionCount <<Native("uint32_t")>>
     * @param CData|null|VkBufferImageCopyPtr $pRegions <<Native("const VkBufferImageCopy*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdCopyImageToBuffer(CData $commandBuffer, CData $srcImage, int $srcImageLayout, CData $dstBuffer, int $regionCount, ?CData $pRegions): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkBufferImageCopy required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdCopyImageToBuffer($commandBuffer, $srcImage, $srcImageLayout, $dstBuffer, $regionCount, $pRegions);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $dstBuffer <<Native("VkBuffer")>>
     * @param int $dstOffset <<Native("VkDeviceSize")>>
     * @param int $dataSize <<Native("VkDeviceSize")>>
     * @param CData|null $pData <<Native("const void*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdUpdateBuffer(CData $commandBuffer, CData $dstBuffer, int $dstOffset, int $dataSize, ?CData $pData): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'void required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdUpdateBuffer($commandBuffer, $dstBuffer, $dstOffset, $dataSize, $pData);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $dstBuffer <<Native("VkBuffer")>>
     * @param int $dstOffset <<Native("VkDeviceSize")>>
     * @param int $size <<Native("VkDeviceSize")>>
     * @param int $data <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdFillBuffer(CData $commandBuffer, CData $dstBuffer, int $dstOffset, int $size, int $data): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdFillBuffer required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdFillBuffer($commandBuffer, $dstBuffer, $dstOffset, $size, $data);
    }

    /**
     * @since 1.0
     * @psalm-param VkImageLayout::* $imageLayout
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkImage $image <<Native("VkImage")>>
     * @param int $imageLayout <<Native("VkImageLayout")>>
     * @param CData|null $pColor <<Native("const VkClearColorValue*")>>
     * @param int $rangeCount <<Native("uint32_t")>>
     * @param CData|null|VkImageSubresourceRangePtr $pRanges <<Native("const VkImageSubresourceRange*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdClearColorImage(CData $commandBuffer, CData $image, int $imageLayout, ?CData $pColor, int $rangeCount, ?CData $pRanges): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImageSubresourceRange required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdClearColorImage($commandBuffer, $image, $imageLayout, $pColor, $rangeCount, $pRanges);
    }

    /**
     * @since 1.0
     * @psalm-param VkImageLayout::* $imageLayout
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkImage $image <<Native("VkImage")>>
     * @param int $imageLayout <<Native("VkImageLayout")>>
     * @param CData|null|VkClearDepthStencilValuePtr $pDepthStencil <<Native("const VkClearDepthStencilValue*")>>
     * @param int $rangeCount <<Native("uint32_t")>>
     * @param CData|null|VkImageSubresourceRangePtr $pRanges <<Native("const VkImageSubresourceRange*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdClearDepthStencilImage(CData $commandBuffer, CData $image, int $imageLayout, ?CData $pDepthStencil, int $rangeCount, ?CData $pRanges): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImageSubresourceRange required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdClearDepthStencilImage($commandBuffer, $image, $imageLayout, $pDepthStencil, $rangeCount, $pRanges);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $attachmentCount <<Native("uint32_t")>>
     * @param CData|null|VkClearAttachmentPtr $pAttachments <<Native("const VkClearAttachment*")>>
     * @param int $rectCount <<Native("uint32_t")>>
     * @param CData|null|VkClearRectPtr $pRects <<Native("const VkClearRect*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdClearAttachments(CData $commandBuffer, int $attachmentCount, ?CData $pAttachments, int $rectCount, ?CData $pRects): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkClearRect required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdClearAttachments($commandBuffer, $attachmentCount, $pAttachments, $rectCount, $pRects);
    }

    /**
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     * @psalm-param VkImageLayout::* $dstImageLayout
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkImage $srcImage <<Native("VkImage")>>
     * @param int $srcImageLayout <<Native("VkImageLayout")>>
     * @param CData|VkImage $dstImage <<Native("VkImage")>>
     * @param int $dstImageLayout <<Native("VkImageLayout")>>
     * @param int $regionCount <<Native("uint32_t")>>
     * @param CData|null|VkImageResolvePtr $pRegions <<Native("const VkImageResolve*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdResolveImage(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImageResolve required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdResolveImage($commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount, $pRegions);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkEvent $event <<Native("VkEvent")>>
     * @param int $stageMask <<Native("VkPipelineStageFlags")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetEvent(CData $commandBuffer, CData $event, int $stageMask): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdSetEvent required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetEvent($commandBuffer, $event, $stageMask);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkEvent $event <<Native("VkEvent")>>
     * @param int $stageMask <<Native("VkPipelineStageFlags")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdResetEvent(CData $commandBuffer, CData $event, int $stageMask): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdResetEvent required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdResetEvent($commandBuffer, $event, $stageMask);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $eventCount <<Native("uint32_t")>>
     * @param CData|null $pEvents <<Native("const VkEvent*")>>
     * @param int $srcStageMask <<Native("VkPipelineStageFlags")>>
     * @param int $dstStageMask <<Native("VkPipelineStageFlags")>>
     * @param int $memoryBarrierCount <<Native("uint32_t")>>
     * @param CData|null|VkMemoryBarrierPtr $pMemoryBarriers <<Native("const VkMemoryBarrier*")>>
     * @param int $bufferMemoryBarrierCount <<Native("uint32_t")>>
     * @param CData|null|VkBufferMemoryBarrierPtr $pBufferMemoryBarriers <<Native("const VkBufferMemoryBarrier*")>>
     * @param int $imageMemoryBarrierCount <<Native("uint32_t")>>
     * @param CData|null|VkImageMemoryBarrierPtr $pImageMemoryBarriers <<Native("const VkImageMemoryBarrier*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdWaitEvents(
        CData $commandBuffer,
        int $eventCount,
        ?CData $pEvents,
        int $srcStageMask,
        int $dstStageMask,
        int $memoryBarrierCount,
        ?CData $pMemoryBarriers,
        int $bufferMemoryBarrierCount,
        ?CData $pBufferMemoryBarriers,
        int $imageMemoryBarrierCount,
        ?CData $pImageMemoryBarriers
    ): void {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImageMemoryBarrier required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdWaitEvents($commandBuffer, $eventCount, $pEvents, $srcStageMask, $dstStageMask, $memoryBarrierCount, $pMemoryBarriers, $bufferMemoryBarrierCount, $pBufferMemoryBarriers, $imageMemoryBarrierCount, $pImageMemoryBarriers);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $srcStageMask <<Native("VkPipelineStageFlags")>>
     * @param int $dstStageMask <<Native("VkPipelineStageFlags")>>
     * @param int $dependencyFlags <<Native("VkDependencyFlags")>>
     * @param int $memoryBarrierCount <<Native("uint32_t")>>
     * @param CData|null|VkMemoryBarrierPtr $pMemoryBarriers <<Native("const VkMemoryBarrier*")>>
     * @param int $bufferMemoryBarrierCount <<Native("uint32_t")>>
     * @param CData|null|VkBufferMemoryBarrierPtr $pBufferMemoryBarriers <<Native("const VkBufferMemoryBarrier*")>>
     * @param int $imageMemoryBarrierCount <<Native("uint32_t")>>
     * @param CData|null|VkImageMemoryBarrierPtr $pImageMemoryBarriers <<Native("const VkImageMemoryBarrier*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdPipelineBarrier(
        CData $commandBuffer,
        int $srcStageMask,
        int $dstStageMask,
        int $dependencyFlags,
        int $memoryBarrierCount,
        ?CData $pMemoryBarriers,
        int $bufferMemoryBarrierCount,
        ?CData $pBufferMemoryBarriers,
        int $imageMemoryBarrierCount,
        ?CData $pImageMemoryBarriers
    ): void {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkImageMemoryBarrier required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdPipelineBarrier($commandBuffer, $srcStageMask, $dstStageMask, $dependencyFlags, $memoryBarrierCount, $pMemoryBarriers, $bufferMemoryBarrierCount, $pBufferMemoryBarriers, $imageMemoryBarrierCount, $pImageMemoryBarriers);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkQueryPool $queryPool <<Native("VkQueryPool")>>
     * @param int $query <<Native("uint32_t")>>
     * @param int $flags <<Native("VkQueryControlFlags")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdBeginQuery(CData $commandBuffer, CData $queryPool, int $query, int $flags): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdBeginQuery required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdBeginQuery($commandBuffer, $queryPool, $query, $flags);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkQueryPool $queryPool <<Native("VkQueryPool")>>
     * @param int $query <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdEndQuery(CData $commandBuffer, CData $queryPool, int $query): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdEndQuery required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdEndQuery($commandBuffer, $queryPool, $query);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkQueryPool $queryPool <<Native("VkQueryPool")>>
     * @param int $firstQuery <<Native("uint32_t")>>
     * @param int $queryCount <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdResetQueryPool(CData $commandBuffer, CData $queryPool, int $firstQuery, int $queryCount): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdResetQueryPool required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdResetQueryPool($commandBuffer, $queryPool, $firstQuery, $queryCount);
    }

    /**
     * @since 1.0
     * @psalm-param VkPipelineStageFlagBits::* $pipelineStage
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $pipelineStage <<Native("VkPipelineStageFlagBits")>>
     * @param CData|VkQueryPool $queryPool <<Native("VkQueryPool")>>
     * @param int $query <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdWriteTimestamp(CData $commandBuffer, int $pipelineStage, CData $queryPool, int $query): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdWriteTimestamp required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdWriteTimestamp($commandBuffer, $pipelineStage, $queryPool, $query);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkQueryPool $queryPool <<Native("VkQueryPool")>>
     * @param int $firstQuery <<Native("uint32_t")>>
     * @param int $queryCount <<Native("uint32_t")>>
     * @param CData|VkBuffer $dstBuffer <<Native("VkBuffer")>>
     * @param int $dstOffset <<Native("VkDeviceSize")>>
     * @param int $stride <<Native("VkDeviceSize")>>
     * @param int $flags <<Native("VkQueryResultFlags")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdCopyQueryPoolResults(
        CData $commandBuffer,
        CData $queryPool,
        int $firstQuery,
        int $queryCount,
        CData $dstBuffer,
        int $dstOffset,
        int $stride,
        int $flags
    ): void {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdCopyQueryPoolResults required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdCopyQueryPoolResults($commandBuffer, $queryPool, $firstQuery, $queryCount, $dstBuffer, $dstOffset, $stride, $flags);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkPipelineLayout $layout <<Native("VkPipelineLayout")>>
     * @param int $stageFlags <<Native("VkShaderStageFlags")>>
     * @param int $offset <<Native("uint32_t")>>
     * @param int $size <<Native("uint32_t")>>
     * @param CData|null $pValues <<Native("const void*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdPushConstants(CData $commandBuffer, CData $layout, int $stageFlags, int $offset, int $size, ?CData $pValues): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'void required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdPushConstants($commandBuffer, $layout, $stageFlags, $offset, $size, $pValues);
    }

    /**
     * @since 1.0
     * @psalm-param VkSubpassContents::* $contents
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|null|VkRenderPassBeginInfoPtr $pRenderPassBegin <<Native("const VkRenderPassBeginInfo*")>>
     * @param int $contents <<Native("VkSubpassContents")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdBeginRenderPass(CData $commandBuffer, ?CData $pRenderPassBegin, int $contents): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkRenderPassBeginInfo required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdBeginRenderPass($commandBuffer, $pRenderPassBegin, $contents);
    }

    /**
     * @since 1.0
     * @psalm-param VkSubpassContents::* $contents
     *
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $contents <<Native("VkSubpassContents")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdNextSubpass(CData $commandBuffer, int $contents): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdNextSubpass required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdNextSubpass($commandBuffer, $contents);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdEndRenderPass(CData $commandBuffer): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'vkCmdEndRenderPass required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdEndRenderPass($commandBuffer);
    }

    /**
     * @since 1.0
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $commandBufferCount <<Native("uint32_t")>>
     * @param CData|null $pCommandBuffers <<Native("const VkCommandBuffer*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdExecuteCommands(CData $commandBuffer, int $commandBufferCount, ?CData $pCommandBuffers): void
    {
        assert(version_compare($this->info->version, '1.0') >= 0, 'VkCommandBuffer required Vulkan v1.0 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdExecuteCommands($commandBuffer, $commandBufferCount, $pCommandBuffers);
    }
}
