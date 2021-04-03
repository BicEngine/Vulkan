<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

use Bic\Vulkan\VkFilter;
use Bic\Vulkan\VkFormat;
use Bic\Vulkan\VkImageLayout;
use Bic\Vulkan\VkImageTiling;
use Bic\Vulkan\VkImageType;
use Bic\Vulkan\VkIndexType;
use Bic\Vulkan\VkPipelineBindPoint;
use Bic\Vulkan\VkPipelineStageFlagBits;
use Bic\Vulkan\VkSampleCountFlagBits;
use Bic\Vulkan\VkSubpassContents;
use Bic\Vulkan\Version;
use Bic\Vulkan\VkAllocationCallbacks;
use Bic\Vulkan\VkBindSparseInfo;
use Bic\Vulkan\VkBuffer;
use Bic\Vulkan\VkBufferCopy;
use Bic\Vulkan\VkBufferCreateInfo;
use Bic\Vulkan\VkBufferImageCopy;
use Bic\Vulkan\VkBufferMemoryBarrier;
use Bic\Vulkan\VkBufferView;
use Bic\Vulkan\VkBufferViewCreateInfo;
use Bic\Vulkan\VkClearAttachment;
use Bic\Vulkan\VkClearDepthStencilValue;
use Bic\Vulkan\VkClearRect;
use Bic\Vulkan\VkCommandBuffer;
use Bic\Vulkan\VkCommandBufferAllocateInfo;
use Bic\Vulkan\VkCommandBufferBeginInfo;
use Bic\Vulkan\VkCommandPool;
use Bic\Vulkan\VkCommandPoolCreateInfo;
use Bic\Vulkan\VkComputePipelineCreateInfo;
use Bic\Vulkan\VkCopyDescriptorSet;
use Bic\Vulkan\VkDescriptorPool;
use Bic\Vulkan\VkDescriptorPoolCreateInfo;
use Bic\Vulkan\VkDescriptorSetAllocateInfo;
use Bic\Vulkan\VkDescriptorSetLayout;
use Bic\Vulkan\VkDescriptorSetLayoutCreateInfo;
use Bic\Vulkan\VkDevice;
use Bic\Vulkan\VkDeviceCreateInfo;
use Bic\Vulkan\VkDeviceMemory;
use Bic\Vulkan\VkEvent;
use Bic\Vulkan\VkEventCreateInfo;
use Bic\Vulkan\VkExtensionProperties;
use Bic\Vulkan\VkExtent2D;
use Bic\Vulkan\VkFence;
use Bic\Vulkan\VkFenceCreateInfo;
use Bic\Vulkan\VkFormatProperties;
use Bic\Vulkan\VkFramebuffer;
use Bic\Vulkan\VkFramebufferCreateInfo;
use Bic\Vulkan\VkGraphicsPipelineCreateInfo;
use Bic\Vulkan\VkImage;
use Bic\Vulkan\VkImageBlit;
use Bic\Vulkan\VkImageCopy;
use Bic\Vulkan\VkImageCreateInfo;
use Bic\Vulkan\VkImageFormatProperties;
use Bic\Vulkan\VkImageMemoryBarrier;
use Bic\Vulkan\VkImageResolve;
use Bic\Vulkan\VkImageSubresource;
use Bic\Vulkan\VkImageSubresourceRange;
use Bic\Vulkan\VkImageView;
use Bic\Vulkan\VkImageViewCreateInfo;
use Bic\Vulkan\VkInstance;
use Bic\Vulkan\VkInstanceCreateInfo;
use Bic\Vulkan\VkLayerProperties;
use Bic\Vulkan\VkMappedMemoryRange;
use Bic\Vulkan\VkMemoryAllocateInfo;
use Bic\Vulkan\VkMemoryBarrier;
use Bic\Vulkan\VkMemoryRequirements;
use Bic\Vulkan\VkPhysicalDevice;
use Bic\Vulkan\VkPhysicalDeviceFeatures;
use Bic\Vulkan\VkPhysicalDeviceMemoryProperties;
use Bic\Vulkan\VkPhysicalDeviceProperties;
use Bic\Vulkan\VkPipeline;
use Bic\Vulkan\VkPipelineCache;
use Bic\Vulkan\VkPipelineCacheCreateInfo;
use Bic\Vulkan\VkPipelineLayout;
use Bic\Vulkan\VkPipelineLayoutCreateInfo;
use Bic\Vulkan\VkQueryPool;
use Bic\Vulkan\VkQueryPoolCreateInfo;
use Bic\Vulkan\VkQueue;
use Bic\Vulkan\VkQueueFamilyProperties;
use Bic\Vulkan\VkRect2D;
use Bic\Vulkan\VkRenderPass;
use Bic\Vulkan\VkRenderPassBeginInfo;
use Bic\Vulkan\VkRenderPassCreateInfo;
use Bic\Vulkan\VkSampler;
use Bic\Vulkan\VkSamplerCreateInfo;
use Bic\Vulkan\VkSemaphore;
use Bic\Vulkan\VkSemaphoreCreateInfo;
use Bic\Vulkan\VkShaderModule;
use Bic\Vulkan\VkShaderModuleCreateInfo;
use Bic\Vulkan\VkSparseImageFormatProperties;
use Bic\Vulkan\VkSparseImageMemoryRequirements;
use Bic\Vulkan\VkSubmitInfo;
use Bic\Vulkan\VkSubresourceLayout;
use Bic\Vulkan\VkViewport;
use Bic\Vulkan\VkWriteDescriptorSet;
use FFI\CData;

/**
 * @mixin Vulkan10Interface
 * @version 1.0
 */
trait Vulkan10MethodsTrait
{
    /**
     * @param CData<VkInstanceCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pInstance
     * @return int
     * @since 1.0
     */
    public function createInstance(?CData $pCreateInfo, ?CData $pAllocator, ?CData $pInstance): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkInstance required Vulkan v1.0');

        return $this->ffi->vkCreateInstance($pCreateInfo, $pAllocator, $pInstance);
    }

    /**
     * @param CData|VkInstance $instance
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyInstance(CData $instance, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyInstance($instance, $pAllocator);
    }

    /**
     * @param CData|VkInstance $instance
     * @param CData|null $pPhysicalDeviceCount
     * @param CData|null $pPhysicalDevices
     * @return int
     * @since 1.0
     */
    public function enumeratePhysicalDevices(
        CData $instance,
        ?CData $pPhysicalDeviceCount,
        ?CData $pPhysicalDevices
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkPhysicalDevice required Vulkan v1.0');

        return $this->ffi->vkEnumeratePhysicalDevices($instance, $pPhysicalDeviceCount, $pPhysicalDevices);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceFeatures>|null $pFeatures
     * @return void
     * @since 1.0
     */
    public function getPhysicalDeviceFeatures(CData $physicalDevice, ?CData $pFeatures): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkPhysicalDeviceFeatures required Vulkan v1.0');

        $this->ffi->vkGetPhysicalDeviceFeatures($physicalDevice, $pFeatures);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param int $format
     * @param CData<VkFormatProperties>|null $pFormatProperties
     * @return void
     * @since 1.0
     * @psalm-param VkFormat::* $format
     *
     */
    public function getPhysicalDeviceFormatProperties(
        CData $physicalDevice,
        int $format,
        ?CData $pFormatProperties
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkFormatProperties required Vulkan v1.0');

        $this->ffi->vkGetPhysicalDeviceFormatProperties($physicalDevice, $format, $pFormatProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param int $format
     * @param int $type
     * @param int $tiling
     * @param int $usage
     * @param int $flags
     * @param CData<VkImageFormatProperties>|null $pImageFormatProperties
     * @return int
     * @since 1.0
     * @psalm-param VkFormat::* $format
     * @psalm-param VkImageType::* $type
     * @psalm-param VkImageTiling::* $tiling
     *
     */
    public function getPhysicalDeviceImageFormatProperties(
        CData $physicalDevice,
        int $format,
        int $type,
        int $tiling,
        int $usage,
        int $flags,
        ?CData $pImageFormatProperties
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkImageFormatProperties required Vulkan v1.0');

        return $this->ffi->vkGetPhysicalDeviceImageFormatProperties($physicalDevice, $format, $type, $tiling, $usage,
            $flags, $pImageFormatProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceProperties>|null $pProperties
     * @return void
     * @since 1.0
     */
    public function getPhysicalDeviceProperties(CData $physicalDevice, ?CData $pProperties): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkPhysicalDeviceProperties required Vulkan v1.0');

        $this->ffi->vkGetPhysicalDeviceProperties($physicalDevice, $pProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData|null $pQueueFamilyPropertyCount
     * @param CData<VkQueueFamilyProperties>|null $pQueueFamilyProperties
     * @return void
     * @since 1.0
     */
    public function getPhysicalDeviceQueueFamilyProperties(
        CData $physicalDevice,
        ?CData $pQueueFamilyPropertyCount,
        ?CData $pQueueFamilyProperties
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkQueueFamilyProperties required Vulkan v1.0');

        $this->ffi->vkGetPhysicalDeviceQueueFamilyProperties($physicalDevice, $pQueueFamilyPropertyCount,
            $pQueueFamilyProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceMemoryProperties>|null $pMemoryProperties
     * @return void
     * @since 1.0
     */
    public function getPhysicalDeviceMemoryProperties(CData $physicalDevice, ?CData $pMemoryProperties): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkPhysicalDeviceMemoryProperties required Vulkan v1.0');

        $this->ffi->vkGetPhysicalDeviceMemoryProperties($physicalDevice, $pMemoryProperties);
    }

    /**
     * @param CData|VkInstance $instance
     * @param string|null $pName
     * @return CData|callable|null
     * @since 1.0
     */
    public function getInstanceProcAddr(CData $instance, ?string $pName): ?CData
    {
        assert(Version::make(1, 0) >= $this->version, 'vkGetInstanceProcAddr required Vulkan v1.0');

        return $this->ffi->vkGetInstanceProcAddr($instance, $pName);
    }

    /**
     * @param CData|VkDevice $device
     * @param string|null $pName
     * @return CData|callable|null
     * @since 1.0
     */
    public function getDeviceProcAddr(CData $device, ?string $pName): ?CData
    {
        assert(Version::make(1, 0) >= $this->version, 'vkGetDeviceProcAddr required Vulkan v1.0');

        return $this->ffi->vkGetDeviceProcAddr($device, $pName);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkDeviceCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pDevice
     * @return int
     * @since 1.0
     */
    public function createDevice(
        CData $physicalDevice,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pDevice
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkDevice required Vulkan v1.0');

        return $this->ffi->vkCreateDevice($physicalDevice, $pCreateInfo, $pAllocator, $pDevice);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyDevice(CData $device, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyDevice($device, $pAllocator);
    }

    /**
     * @param string|null $pLayerName
     * @param CData|null $pPropertyCount
     * @param CData<VkExtensionProperties>|null $pProperties
     * @return int
     * @since 1.0
     */
    public function enumerateInstanceExtensionProperties(
        ?string $pLayerName,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkExtensionProperties required Vulkan v1.0');

        return $this->ffi->vkEnumerateInstanceExtensionProperties($pLayerName, $pPropertyCount, $pProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param string|null $pLayerName
     * @param CData|null $pPropertyCount
     * @param CData<VkExtensionProperties>|null $pProperties
     * @return int
     * @since 1.0
     */
    public function enumerateDeviceExtensionProperties(
        CData $physicalDevice,
        ?string $pLayerName,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkExtensionProperties required Vulkan v1.0');

        return $this->ffi->vkEnumerateDeviceExtensionProperties($physicalDevice, $pLayerName, $pPropertyCount,
            $pProperties);
    }

    /**
     * @param CData|null $pPropertyCount
     * @param CData<VkLayerProperties>|null $pProperties
     * @return int
     * @since 1.0
     */
    public function enumerateInstanceLayerProperties(?CData $pPropertyCount, ?CData $pProperties): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkLayerProperties required Vulkan v1.0');

        return $this->ffi->vkEnumerateInstanceLayerProperties($pPropertyCount, $pProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData|null $pPropertyCount
     * @param CData<VkLayerProperties>|null $pProperties
     * @return int
     * @since 1.0
     */
    public function enumerateDeviceLayerProperties(
        CData $physicalDevice,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkLayerProperties required Vulkan v1.0');

        return $this->ffi->vkEnumerateDeviceLayerProperties($physicalDevice, $pPropertyCount, $pProperties);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $queueFamilyIndex
     * @param int $queueIndex
     * @param CData|null $pQueue
     * @return void
     * @since 1.0
     */
    public function getDeviceQueue(CData $device, int $queueFamilyIndex, int $queueIndex, ?CData $pQueue): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkQueue required Vulkan v1.0');

        $this->ffi->vkGetDeviceQueue($device, $queueFamilyIndex, $queueIndex, $pQueue);
    }

    /**
     * @param CData|VkQueue $queue
     * @param int $submitCount
     * @param CData<VkSubmitInfo>|null $pSubmits
     * @param CData|VkFence $fence
     * @return int
     * @since 1.0
     */
    public function queueSubmit(CData $queue, int $submitCount, ?CData $pSubmits, CData $fence): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkSubmitInfo required Vulkan v1.0');

        return $this->ffi->vkQueueSubmit($queue, $submitCount, $pSubmits, $fence);
    }

    /**
     * @param CData|VkQueue $queue
     * @return int
     * @since 1.0
     */
    public function queueWaitIdle(CData $queue): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkQueueWaitIdle required Vulkan v1.0');

        return $this->ffi->vkQueueWaitIdle($queue);
    }

    /**
     * @param CData|VkDevice $device
     * @return int
     * @since 1.0
     */
    public function deviceWaitIdle(CData $device): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkDeviceWaitIdle required Vulkan v1.0');

        return $this->ffi->vkDeviceWaitIdle($device);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkMemoryAllocateInfo>|null $pAllocateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pMemory
     * @return int
     * @since 1.0
     */
    public function allocateMemory(
        CData $device,
        ?CData $pAllocateInfo,
        ?CData $pAllocator,
        ?CData $pMemory
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkDeviceMemory required Vulkan v1.0');

        return $this->ffi->vkAllocateMemory($device, $pAllocateInfo, $pAllocator, $pMemory);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDeviceMemory $memory
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function freeMemory(CData $device, CData $memory, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkFreeMemory($device, $memory, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDeviceMemory $memory
     * @param int $offset
     * @param int $size
     * @param int $flags
     * @param CData|null $ppData
     * @return int
     * @since 1.0
     */
    public function mapMemory(
        CData $device,
        CData $memory,
        int $offset,
        int $size,
        int $flags,
        ?CData $ppData
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'void required Vulkan v1.0');

        return $this->ffi->vkMapMemory($device, $memory, $offset, $size, $flags, $ppData);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDeviceMemory $memory
     * @return void
     * @since 1.0
     */
    public function unmapMemory(CData $device, CData $memory): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkUnmapMemory required Vulkan v1.0');

        $this->ffi->vkUnmapMemory($device, $memory);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $memoryRangeCount
     * @param CData<VkMappedMemoryRange>|null $pMemoryRanges
     * @return int
     * @since 1.0
     */
    public function flushMappedMemoryRanges(CData $device, int $memoryRangeCount, ?CData $pMemoryRanges): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkMappedMemoryRange required Vulkan v1.0');

        return $this->ffi->vkFlushMappedMemoryRanges($device, $memoryRangeCount, $pMemoryRanges);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $memoryRangeCount
     * @param CData<VkMappedMemoryRange>|null $pMemoryRanges
     * @return int
     * @since 1.0
     */
    public function invalidateMappedMemoryRanges(
        CData $device,
        int $memoryRangeCount,
        ?CData $pMemoryRanges
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkMappedMemoryRange required Vulkan v1.0');

        return $this->ffi->vkInvalidateMappedMemoryRanges($device, $memoryRangeCount, $pMemoryRanges);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDeviceMemory $memory
     * @param CData|null $pCommittedMemoryInBytes
     * @return void
     * @since 1.0
     */
    public function getDeviceMemoryCommitment(
        CData $device,
        CData $memory,
        ?CData $pCommittedMemoryInBytes
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkDeviceSize required Vulkan v1.0');

        $this->ffi->vkGetDeviceMemoryCommitment($device, $memory, $pCommittedMemoryInBytes);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkBuffer $buffer
     * @param CData|VkDeviceMemory $memory
     * @param int $memoryOffset
     * @return int
     * @since 1.0
     */
    public function bindBufferMemory(CData $device, CData $buffer, CData $memory, int $memoryOffset): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkBindBufferMemory required Vulkan v1.0');

        return $this->ffi->vkBindBufferMemory($device, $buffer, $memory, $memoryOffset);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CData|VkDeviceMemory $memory
     * @param int $memoryOffset
     * @return int
     * @since 1.0
     */
    public function bindImageMemory(CData $device, CData $image, CData $memory, int $memoryOffset): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkBindImageMemory required Vulkan v1.0');

        return $this->ffi->vkBindImageMemory($device, $image, $memory, $memoryOffset);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkBuffer $buffer
     * @param CData<VkMemoryRequirements>|null $pMemoryRequirements
     * @return void
     * @since 1.0
     */
    public function getBufferMemoryRequirements(
        CData $device,
        CData $buffer,
        ?CData $pMemoryRequirements
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkMemoryRequirements required Vulkan v1.0');

        $this->ffi->vkGetBufferMemoryRequirements($device, $buffer, $pMemoryRequirements);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CData<VkMemoryRequirements>|null $pMemoryRequirements
     * @return void
     * @since 1.0
     */
    public function getImageMemoryRequirements(CData $device, CData $image, ?CData $pMemoryRequirements): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkMemoryRequirements required Vulkan v1.0');

        $this->ffi->vkGetImageMemoryRequirements($device, $image, $pMemoryRequirements);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CData|null $pSparseMemoryRequirementCount
     * @param CData<VkSparseImageMemoryRequirements>|null $pSparseMemoryRequirements
     * @return void
     * @since 1.0
     */
    public function getImageSparseMemoryRequirements(
        CData $device,
        CData $image,
        ?CData $pSparseMemoryRequirementCount,
        ?CData $pSparseMemoryRequirements
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkSparseImageMemoryRequirements required Vulkan v1.0');

        $this->ffi->vkGetImageSparseMemoryRequirements($device, $image, $pSparseMemoryRequirementCount,
            $pSparseMemoryRequirements);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param int $format
     * @param int $type
     * @param int $samples
     * @param int $usage
     * @param int $tiling
     * @param CData|null $pPropertyCount
     * @param CData<VkSparseImageFormatProperties>|null $pProperties
     * @return void
     * @since 1.0
     * @psalm-param VkFormat::* $format
     * @psalm-param VkImageType::* $type
     * @psalm-param VkSampleCountFlagBits::* $samples
     * @psalm-param VkImageTiling::* $tiling
     *
     */
    public function getPhysicalDeviceSparseImageFormatProperties(
        CData $physicalDevice,
        int $format,
        int $type,
        int $samples,
        int $usage,
        int $tiling,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkSparseImageFormatProperties required Vulkan v1.0');

        $this->ffi->vkGetPhysicalDeviceSparseImageFormatProperties($physicalDevice, $format, $type, $samples, $usage,
            $tiling, $pPropertyCount, $pProperties);
    }

    /**
     * @param CData|VkQueue $queue
     * @param int $bindInfoCount
     * @param CData<VkBindSparseInfo>|null $pBindInfo
     * @param CData|VkFence $fence
     * @return int
     * @since 1.0
     */
    public function queueBindSparse(CData $queue, int $bindInfoCount, ?CData $pBindInfo, CData $fence): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkBindSparseInfo required Vulkan v1.0');

        return $this->ffi->vkQueueBindSparse($queue, $bindInfoCount, $pBindInfo, $fence);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkFenceCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pFence
     * @return int
     * @since 1.0
     */
    public function createFence(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pFence): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkFence required Vulkan v1.0');

        return $this->ffi->vkCreateFence($device, $pCreateInfo, $pAllocator, $pFence);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkFence $fence
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyFence(CData $device, CData $fence, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyFence($device, $fence, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $fenceCount
     * @param CData|null $pFences
     * @return int
     * @since 1.0
     */
    public function resetFences(CData $device, int $fenceCount, ?CData $pFences): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkFence required Vulkan v1.0');

        return $this->ffi->vkResetFences($device, $fenceCount, $pFences);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkFence $fence
     * @return int
     * @since 1.0
     */
    public function getFenceStatus(CData $device, CData $fence): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkGetFenceStatus required Vulkan v1.0');

        return $this->ffi->vkGetFenceStatus($device, $fence);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $fenceCount
     * @param CData|null $pFences
     * @param int $waitAll
     * @param int $timeout
     * @return int
     * @since 1.0
     */
    public function waitForFences(
        CData $device,
        int $fenceCount,
        ?CData $pFences,
        int $waitAll,
        int $timeout
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkFence required Vulkan v1.0');

        return $this->ffi->vkWaitForFences($device, $fenceCount, $pFences, $waitAll, $timeout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkSemaphoreCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pSemaphore
     * @return int
     * @since 1.0
     */
    public function createSemaphore(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pSemaphore
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkSemaphore required Vulkan v1.0');

        return $this->ffi->vkCreateSemaphore($device, $pCreateInfo, $pAllocator, $pSemaphore);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkSemaphore $semaphore
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroySemaphore(CData $device, CData $semaphore, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroySemaphore($device, $semaphore, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkEventCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pEvent
     * @return int
     * @since 1.0
     */
    public function createEvent(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pEvent): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkEvent required Vulkan v1.0');

        return $this->ffi->vkCreateEvent($device, $pCreateInfo, $pAllocator, $pEvent);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkEvent $event
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyEvent(CData $device, CData $event, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyEvent($device, $event, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkEvent $event
     * @return int
     * @since 1.0
     */
    public function getEventStatus(CData $device, CData $event): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkGetEventStatus required Vulkan v1.0');

        return $this->ffi->vkGetEventStatus($device, $event);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkEvent $event
     * @return int
     * @since 1.0
     */
    public function setEvent(CData $device, CData $event): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkSetEvent required Vulkan v1.0');

        return $this->ffi->vkSetEvent($device, $event);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkEvent $event
     * @return int
     * @since 1.0
     */
    public function resetEvent(CData $device, CData $event): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkResetEvent required Vulkan v1.0');

        return $this->ffi->vkResetEvent($device, $event);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkQueryPoolCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pQueryPool
     * @return int
     * @since 1.0
     */
    public function createQueryPool(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pQueryPool
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkQueryPool required Vulkan v1.0');

        return $this->ffi->vkCreateQueryPool($device, $pCreateInfo, $pAllocator, $pQueryPool);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkQueryPool $queryPool
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyQueryPool(CData $device, CData $queryPool, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyQueryPool($device, $queryPool, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @param int $dataSize
     * @param CData|null $pData
     * @param int $stride
     * @param int $flags
     * @return int
     * @since 1.0
     */
    public function getQueryPoolResults(
        CData $device,
        CData $queryPool,
        int $firstQuery,
        int $queryCount,
        int $dataSize,
        ?CData $pData,
        int $stride,
        int $flags
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'void required Vulkan v1.0');

        return $this->ffi->vkGetQueryPoolResults($device, $queryPool, $firstQuery, $queryCount, $dataSize, $pData,
            $stride, $flags);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkBufferCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pBuffer
     * @return int
     * @since 1.0
     */
    public function createBuffer(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pBuffer): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkBuffer required Vulkan v1.0');

        return $this->ffi->vkCreateBuffer($device, $pCreateInfo, $pAllocator, $pBuffer);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkBuffer $buffer
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyBuffer(CData $device, CData $buffer, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyBuffer($device, $buffer, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkBufferViewCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pView
     * @return int
     * @since 1.0
     */
    public function createBufferView(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pView
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkBufferView required Vulkan v1.0');

        return $this->ffi->vkCreateBufferView($device, $pCreateInfo, $pAllocator, $pView);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkBufferView $bufferView
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyBufferView(CData $device, CData $bufferView, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyBufferView($device, $bufferView, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkImageCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pImage
     * @return int
     * @since 1.0
     */
    public function createImage(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pImage): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkImage required Vulkan v1.0');

        return $this->ffi->vkCreateImage($device, $pCreateInfo, $pAllocator, $pImage);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyImage(CData $device, CData $image, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyImage($device, $image, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CData<VkImageSubresource>|null $pSubresource
     * @param CData<VkSubresourceLayout>|null $pLayout
     * @return void
     * @since 1.0
     */
    public function getImageSubresourceLayout(
        CData $device,
        CData $image,
        ?CData $pSubresource,
        ?CData $pLayout
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkSubresourceLayout required Vulkan v1.0');

        $this->ffi->vkGetImageSubresourceLayout($device, $image, $pSubresource, $pLayout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkImageViewCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pView
     * @return int
     * @since 1.0
     */
    public function createImageView(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pView): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkImageView required Vulkan v1.0');

        return $this->ffi->vkCreateImageView($device, $pCreateInfo, $pAllocator, $pView);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImageView $imageView
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyImageView(CData $device, CData $imageView, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyImageView($device, $imageView, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkShaderModuleCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pShaderModule
     * @return int
     * @since 1.0
     */
    public function createShaderModule(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pShaderModule
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkShaderModule required Vulkan v1.0');

        return $this->ffi->vkCreateShaderModule($device, $pCreateInfo, $pAllocator, $pShaderModule);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkShaderModule $shaderModule
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyShaderModule(CData $device, CData $shaderModule, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyShaderModule($device, $shaderModule, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkPipelineCacheCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pPipelineCache
     * @return int
     * @since 1.0
     */
    public function createPipelineCache(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pPipelineCache
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkPipelineCache required Vulkan v1.0');

        return $this->ffi->vkCreatePipelineCache($device, $pCreateInfo, $pAllocator, $pPipelineCache);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $pipelineCache
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyPipelineCache(CData $device, CData $pipelineCache, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyPipelineCache($device, $pipelineCache, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $pipelineCache
     * @param CData|null $pDataSize
     * @param CData|null $pData
     * @return int
     * @since 1.0
     */
    public function getPipelineCacheData(
        CData $device,
        CData $pipelineCache,
        ?CData $pDataSize,
        ?CData $pData
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'void required Vulkan v1.0');

        return $this->ffi->vkGetPipelineCacheData($device, $pipelineCache, $pDataSize, $pData);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $dstCache
     * @param int $srcCacheCount
     * @param CData|null $pSrcCaches
     * @return int
     * @since 1.0
     */
    public function mergePipelineCaches(
        CData $device,
        CData $dstCache,
        int $srcCacheCount,
        ?CData $pSrcCaches
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkPipelineCache required Vulkan v1.0');

        return $this->ffi->vkMergePipelineCaches($device, $dstCache, $srcCacheCount, $pSrcCaches);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $pipelineCache
     * @param int $createInfoCount
     * @param CData<VkGraphicsPipelineCreateInfo>|null $pCreateInfos
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pPipelines
     * @return int
     * @since 1.0
     */
    public function createGraphicsPipelines(
        CData $device,
        CData $pipelineCache,
        int $createInfoCount,
        ?CData $pCreateInfos,
        ?CData $pAllocator,
        ?CData $pPipelines
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkPipeline required Vulkan v1.0');

        return $this->ffi->vkCreateGraphicsPipelines($device, $pipelineCache, $createInfoCount, $pCreateInfos,
            $pAllocator, $pPipelines);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $pipelineCache
     * @param int $createInfoCount
     * @param CData<VkComputePipelineCreateInfo>|null $pCreateInfos
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pPipelines
     * @return int
     * @since 1.0
     */
    public function createComputePipelines(
        CData $device,
        CData $pipelineCache,
        int $createInfoCount,
        ?CData $pCreateInfos,
        ?CData $pAllocator,
        ?CData $pPipelines
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkPipeline required Vulkan v1.0');

        return $this->ffi->vkCreateComputePipelines($device, $pipelineCache, $createInfoCount, $pCreateInfos,
            $pAllocator, $pPipelines);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipeline $pipeline
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyPipeline(CData $device, CData $pipeline, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyPipeline($device, $pipeline, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkPipelineLayoutCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pPipelineLayout
     * @return int
     * @since 1.0
     */
    public function createPipelineLayout(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pPipelineLayout
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkPipelineLayout required Vulkan v1.0');

        return $this->ffi->vkCreatePipelineLayout($device, $pCreateInfo, $pAllocator, $pPipelineLayout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineLayout $pipelineLayout
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyPipelineLayout(CData $device, CData $pipelineLayout, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyPipelineLayout($device, $pipelineLayout, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkSamplerCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pSampler
     * @return int
     * @since 1.0
     */
    public function createSampler(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pSampler
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkSampler required Vulkan v1.0');

        return $this->ffi->vkCreateSampler($device, $pCreateInfo, $pAllocator, $pSampler);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkSampler $sampler
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroySampler(CData $device, CData $sampler, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroySampler($device, $sampler, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkDescriptorSetLayoutCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pSetLayout
     * @return int
     * @since 1.0
     */
    public function createDescriptorSetLayout(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pSetLayout
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkDescriptorSetLayout required Vulkan v1.0');

        return $this->ffi->vkCreateDescriptorSetLayout($device, $pCreateInfo, $pAllocator, $pSetLayout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorSetLayout $descriptorSetLayout
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyDescriptorSetLayout(
        CData $device,
        CData $descriptorSetLayout,
        ?CData $pAllocator
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyDescriptorSetLayout($device, $descriptorSetLayout, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkDescriptorPoolCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pDescriptorPool
     * @return int
     * @since 1.0
     */
    public function createDescriptorPool(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pDescriptorPool
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkDescriptorPool required Vulkan v1.0');

        return $this->ffi->vkCreateDescriptorPool($device, $pCreateInfo, $pAllocator, $pDescriptorPool);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorPool $descriptorPool
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyDescriptorPool(CData $device, CData $descriptorPool, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyDescriptorPool($device, $descriptorPool, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorPool $descriptorPool
     * @param int $flags
     * @return int
     * @since 1.0
     */
    public function resetDescriptorPool(CData $device, CData $descriptorPool, int $flags): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkResetDescriptorPool required Vulkan v1.0');

        return $this->ffi->vkResetDescriptorPool($device, $descriptorPool, $flags);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkDescriptorSetAllocateInfo>|null $pAllocateInfo
     * @param CData|null $pDescriptorSets
     * @return int
     * @since 1.0
     */
    public function allocateDescriptorSets(CData $device, ?CData $pAllocateInfo, ?CData $pDescriptorSets): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkDescriptorSet required Vulkan v1.0');

        return $this->ffi->vkAllocateDescriptorSets($device, $pAllocateInfo, $pDescriptorSets);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorPool $descriptorPool
     * @param int $descriptorSetCount
     * @param CData|null $pDescriptorSets
     * @return int
     * @since 1.0
     */
    public function freeDescriptorSets(
        CData $device,
        CData $descriptorPool,
        int $descriptorSetCount,
        ?CData $pDescriptorSets
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkDescriptorSet required Vulkan v1.0');

        return $this->ffi->vkFreeDescriptorSets($device, $descriptorPool, $descriptorSetCount, $pDescriptorSets);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $descriptorWriteCount
     * @param CData<VkWriteDescriptorSet>|null $pDescriptorWrites
     * @param int $descriptorCopyCount
     * @param CData<VkCopyDescriptorSet>|null $pDescriptorCopies
     * @return void
     * @since 1.0
     */
    public function updateDescriptorSets(
        CData $device,
        int $descriptorWriteCount,
        ?CData $pDescriptorWrites,
        int $descriptorCopyCount,
        ?CData $pDescriptorCopies
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkCopyDescriptorSet required Vulkan v1.0');

        $this->ffi->vkUpdateDescriptorSets($device, $descriptorWriteCount, $pDescriptorWrites, $descriptorCopyCount,
            $pDescriptorCopies);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkFramebufferCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pFramebuffer
     * @return int
     * @since 1.0
     */
    public function createFramebuffer(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pFramebuffer
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkFramebuffer required Vulkan v1.0');

        return $this->ffi->vkCreateFramebuffer($device, $pCreateInfo, $pAllocator, $pFramebuffer);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkFramebuffer $framebuffer
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyFramebuffer(CData $device, CData $framebuffer, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyFramebuffer($device, $framebuffer, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkRenderPassCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pRenderPass
     * @return int
     * @since 1.0
     */
    public function createRenderPass(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pRenderPass
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkRenderPass required Vulkan v1.0');

        return $this->ffi->vkCreateRenderPass($device, $pCreateInfo, $pAllocator, $pRenderPass);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkRenderPass $renderPass
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyRenderPass(CData $device, CData $renderPass, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyRenderPass($device, $renderPass, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkRenderPass $renderPass
     * @param CData<VkExtent2D>|null $pGranularity
     * @return void
     * @since 1.0
     */
    public function getRenderAreaGranularity(CData $device, CData $renderPass, ?CData $pGranularity): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkExtent2D required Vulkan v1.0');

        $this->ffi->vkGetRenderAreaGranularity($device, $renderPass, $pGranularity);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkCommandPoolCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pCommandPool
     * @return int
     * @since 1.0
     */
    public function createCommandPool(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pCommandPool
    ): int {
        assert(Version::make(1, 0) >= $this->version, 'VkCommandPool required Vulkan v1.0');

        return $this->ffi->vkCreateCommandPool($device, $pCreateInfo, $pAllocator, $pCommandPool);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkCommandPool $commandPool
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public function destroyCommandPool(CData $device, CData $commandPool, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.0');

        $this->ffi->vkDestroyCommandPool($device, $commandPool, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkCommandPool $commandPool
     * @param int $flags
     * @return int
     * @since 1.0
     */
    public function resetCommandPool(CData $device, CData $commandPool, int $flags): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkResetCommandPool required Vulkan v1.0');

        return $this->ffi->vkResetCommandPool($device, $commandPool, $flags);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkCommandBufferAllocateInfo>|null $pAllocateInfo
     * @param CData|null $pCommandBuffers
     * @return int
     * @since 1.0
     */
    public function allocateCommandBuffers(CData $device, ?CData $pAllocateInfo, ?CData $pCommandBuffers): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkCommandBuffer required Vulkan v1.0');

        return $this->ffi->vkAllocateCommandBuffers($device, $pAllocateInfo, $pCommandBuffers);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkCommandPool $commandPool
     * @param int $commandBufferCount
     * @param CData|null $pCommandBuffers
     * @return void
     * @since 1.0
     */
    public function freeCommandBuffers(
        CData $device,
        CData $commandPool,
        int $commandBufferCount,
        ?CData $pCommandBuffers
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkCommandBuffer required Vulkan v1.0');

        $this->ffi->vkFreeCommandBuffers($device, $commandPool, $commandBufferCount, $pCommandBuffers);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData<VkCommandBufferBeginInfo>|null $pBeginInfo
     * @return int
     * @since 1.0
     */
    public function beginCommandBuffer(CData $commandBuffer, ?CData $pBeginInfo): int
    {
        assert(Version::make(1, 0) >= $this->version, 'VkCommandBufferBeginInfo required Vulkan v1.0');

        return $this->ffi->vkBeginCommandBuffer($commandBuffer, $pBeginInfo);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @return int
     * @since 1.0
     */
    public function endCommandBuffer(CData $commandBuffer): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkEndCommandBuffer required Vulkan v1.0');

        return $this->ffi->vkEndCommandBuffer($commandBuffer);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $flags
     * @return int
     * @since 1.0
     */
    public function resetCommandBuffer(CData $commandBuffer, int $flags): int
    {
        assert(Version::make(1, 0) >= $this->version, 'vkResetCommandBuffer required Vulkan v1.0');

        return $this->ffi->vkResetCommandBuffer($commandBuffer, $flags);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $pipelineBindPoint
     * @param CData|VkPipeline $pipeline
     * @return void
     * @since 1.0
     * @psalm-param VkPipelineBindPoint::* $pipelineBindPoint
     *
     */
    public function cmdBindPipeline(CData $commandBuffer, int $pipelineBindPoint, CData $pipeline): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdBindPipeline required Vulkan v1.0');

        $this->ffi->vkCmdBindPipeline($commandBuffer, $pipelineBindPoint, $pipeline);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $firstViewport
     * @param int $viewportCount
     * @param CData<VkViewport>|null $pViewports
     * @return void
     * @since 1.0
     */
    public function cmdSetViewport(
        CData $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        ?CData $pViewports
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkViewport required Vulkan v1.0');

        $this->ffi->vkCmdSetViewport($commandBuffer, $firstViewport, $viewportCount, $pViewports);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $firstScissor
     * @param int $scissorCount
     * @param CData<VkRect2D>|null $pScissors
     * @return void
     * @since 1.0
     */
    public function cmdSetScissor(
        CData $commandBuffer,
        int $firstScissor,
        int $scissorCount,
        ?CData $pScissors
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkRect2D required Vulkan v1.0');

        $this->ffi->vkCmdSetScissor($commandBuffer, $firstScissor, $scissorCount, $pScissors);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param float $lineWidth
     * @return void
     * @since 1.0
     */
    public function cmdSetLineWidth(CData $commandBuffer, float $lineWidth): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdSetLineWidth required Vulkan v1.0');

        $this->ffi->vkCmdSetLineWidth($commandBuffer, $lineWidth);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param float $depthBiasConstantFactor
     * @param float $depthBiasClamp
     * @param float $depthBiasSlopeFactor
     * @return void
     * @since 1.0
     */
    public function cmdSetDepthBias(
        CData $commandBuffer,
        float $depthBiasConstantFactor,
        float $depthBiasClamp,
        float $depthBiasSlopeFactor
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdSetDepthBias required Vulkan v1.0');

        $this->ffi->vkCmdSetDepthBias($commandBuffer, $depthBiasConstantFactor, $depthBiasClamp, $depthBiasSlopeFactor);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData $blendConstants
     * @return void
     * @since 1.0
     */
    public function cmdSetBlendConstants(CData $commandBuffer, CData $blendConstants): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdSetBlendConstants required Vulkan v1.0');

        $this->ffi->vkCmdSetBlendConstants($commandBuffer, $blendConstants);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param float $minDepthBounds
     * @param float $maxDepthBounds
     * @return void
     * @since 1.0
     */
    public function cmdSetDepthBounds(CData $commandBuffer, float $minDepthBounds, float $maxDepthBounds): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdSetDepthBounds required Vulkan v1.0');

        $this->ffi->vkCmdSetDepthBounds($commandBuffer, $minDepthBounds, $maxDepthBounds);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $faceMask
     * @param int $compareMask
     * @return void
     * @since 1.0
     */
    public function cmdSetStencilCompareMask(CData $commandBuffer, int $faceMask, int $compareMask): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdSetStencilCompareMask required Vulkan v1.0');

        $this->ffi->vkCmdSetStencilCompareMask($commandBuffer, $faceMask, $compareMask);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $faceMask
     * @param int $writeMask
     * @return void
     * @since 1.0
     */
    public function cmdSetStencilWriteMask(CData $commandBuffer, int $faceMask, int $writeMask): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdSetStencilWriteMask required Vulkan v1.0');

        $this->ffi->vkCmdSetStencilWriteMask($commandBuffer, $faceMask, $writeMask);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $faceMask
     * @param int $reference
     * @return void
     * @since 1.0
     */
    public function cmdSetStencilReference(CData $commandBuffer, int $faceMask, int $reference): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdSetStencilReference required Vulkan v1.0');

        $this->ffi->vkCmdSetStencilReference($commandBuffer, $faceMask, $reference);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $pipelineBindPoint
     * @param CData|VkPipelineLayout $layout
     * @param int $firstSet
     * @param int $descriptorSetCount
     * @param CData|null $pDescriptorSets
     * @param int $dynamicOffsetCount
     * @param CData|null $pDynamicOffsets
     * @return void
     * @since 1.0
     * @psalm-param VkPipelineBindPoint::* $pipelineBindPoint
     *
     */
    public function cmdBindDescriptorSets(
        CData $commandBuffer,
        int $pipelineBindPoint,
        CData $layout,
        int $firstSet,
        int $descriptorSetCount,
        ?CData $pDescriptorSets,
        int $dynamicOffsetCount,
        ?CData $pDynamicOffsets
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'uint32_t required Vulkan v1.0');

        $this->ffi->vkCmdBindDescriptorSets($commandBuffer, $pipelineBindPoint, $layout, $firstSet, $descriptorSetCount,
            $pDescriptorSets, $dynamicOffsetCount, $pDynamicOffsets);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $buffer
     * @param int $offset
     * @param int $indexType
     * @return void
     * @since 1.0
     * @psalm-param VkIndexType::* $indexType
     *
     */
    public function cmdBindIndexBuffer(CData $commandBuffer, CData $buffer, int $offset, int $indexType): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdBindIndexBuffer required Vulkan v1.0');

        $this->ffi->vkCmdBindIndexBuffer($commandBuffer, $buffer, $offset, $indexType);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $firstBinding
     * @param int $bindingCount
     * @param CData|null $pBuffers
     * @param CData|null $pOffsets
     * @return void
     * @since 1.0
     */
    public function cmdBindVertexBuffers(
        CData $commandBuffer,
        int $firstBinding,
        int $bindingCount,
        ?CData $pBuffers,
        ?CData $pOffsets
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkDeviceSize required Vulkan v1.0');

        $this->ffi->vkCmdBindVertexBuffers($commandBuffer, $firstBinding, $bindingCount, $pBuffers, $pOffsets);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $vertexCount
     * @param int $instanceCount
     * @param int $firstVertex
     * @param int $firstInstance
     * @return void
     * @since 1.0
     */
    public function cmdDraw(
        CData $commandBuffer,
        int $vertexCount,
        int $instanceCount,
        int $firstVertex,
        int $firstInstance
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdDraw required Vulkan v1.0');

        $this->ffi->vkCmdDraw($commandBuffer, $vertexCount, $instanceCount, $firstVertex, $firstInstance);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $indexCount
     * @param int $instanceCount
     * @param int $firstIndex
     * @param int $vertexOffset
     * @param int $firstInstance
     * @return void
     * @since 1.0
     */
    public function cmdDrawIndexed(
        CData $commandBuffer,
        int $indexCount,
        int $instanceCount,
        int $firstIndex,
        int $vertexOffset,
        int $firstInstance
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdDrawIndexed required Vulkan v1.0');

        $this->ffi->vkCmdDrawIndexed($commandBuffer, $indexCount, $instanceCount, $firstIndex, $vertexOffset,
            $firstInstance);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $buffer
     * @param int $offset
     * @param int $drawCount
     * @param int $stride
     * @return void
     * @since 1.0
     */
    public function cmdDrawIndirect(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        int $drawCount,
        int $stride
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdDrawIndirect required Vulkan v1.0');

        $this->ffi->vkCmdDrawIndirect($commandBuffer, $buffer, $offset, $drawCount, $stride);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $buffer
     * @param int $offset
     * @param int $drawCount
     * @param int $stride
     * @return void
     * @since 1.0
     */
    public function cmdDrawIndexedIndirect(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        int $drawCount,
        int $stride
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdDrawIndexedIndirect required Vulkan v1.0');

        $this->ffi->vkCmdDrawIndexedIndirect($commandBuffer, $buffer, $offset, $drawCount, $stride);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $groupCountX
     * @param int $groupCountY
     * @param int $groupCountZ
     * @return void
     * @since 1.0
     */
    public function cmdDispatch(
        CData $commandBuffer,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdDispatch required Vulkan v1.0');

        $this->ffi->vkCmdDispatch($commandBuffer, $groupCountX, $groupCountY, $groupCountZ);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $buffer
     * @param int $offset
     * @return void
     * @since 1.0
     */
    public function cmdDispatchIndirect(CData $commandBuffer, CData $buffer, int $offset): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdDispatchIndirect required Vulkan v1.0');

        $this->ffi->vkCmdDispatchIndirect($commandBuffer, $buffer, $offset);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $srcBuffer
     * @param CData|VkBuffer $dstBuffer
     * @param int $regionCount
     * @param CData<VkBufferCopy>|null $pRegions
     * @return void
     * @since 1.0
     */
    public function cmdCopyBuffer(
        CData $commandBuffer,
        CData $srcBuffer,
        CData $dstBuffer,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkBufferCopy required Vulkan v1.0');

        $this->ffi->vkCmdCopyBuffer($commandBuffer, $srcBuffer, $dstBuffer, $regionCount, $pRegions);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $srcImage
     * @param int $srcImageLayout
     * @param CData|VkImage $dstImage
     * @param int $dstImageLayout
     * @param int $regionCount
     * @param CData<VkImageCopy>|null $pRegions
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     * @psalm-param VkImageLayout::* $dstImageLayout
     *
     */
    public function cmdCopyImage(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkImageCopy required Vulkan v1.0');

        $this->ffi->vkCmdCopyImage($commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount,
            $pRegions);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $srcImage
     * @param int $srcImageLayout
     * @param CData|VkImage $dstImage
     * @param int $dstImageLayout
     * @param int $regionCount
     * @param CData<VkImageBlit>|null $pRegions
     * @param int $filter
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     * @psalm-param VkImageLayout::* $dstImageLayout
     * @psalm-param VkFilter::* $filter
     *
     */
    public function cmdBlitImage(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions,
        int $filter
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkImageBlit required Vulkan v1.0');

        $this->ffi->vkCmdBlitImage($commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount,
            $pRegions, $filter);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $srcBuffer
     * @param CData|VkImage $dstImage
     * @param int $dstImageLayout
     * @param int $regionCount
     * @param CData<VkBufferImageCopy>|null $pRegions
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $dstImageLayout
     *
     */
    public function cmdCopyBufferToImage(
        CData $commandBuffer,
        CData $srcBuffer,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkBufferImageCopy required Vulkan v1.0');

        $this->ffi->vkCmdCopyBufferToImage($commandBuffer, $srcBuffer, $dstImage, $dstImageLayout, $regionCount,
            $pRegions);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $srcImage
     * @param int $srcImageLayout
     * @param CData|VkBuffer $dstBuffer
     * @param int $regionCount
     * @param CData<VkBufferImageCopy>|null $pRegions
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     *
     */
    public function cmdCopyImageToBuffer(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstBuffer,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkBufferImageCopy required Vulkan v1.0');

        $this->ffi->vkCmdCopyImageToBuffer($commandBuffer, $srcImage, $srcImageLayout, $dstBuffer, $regionCount,
            $pRegions);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $dstBuffer
     * @param int $dstOffset
     * @param int $dataSize
     * @param CData|null $pData
     * @return void
     * @since 1.0
     */
    public function cmdUpdateBuffer(
        CData $commandBuffer,
        CData $dstBuffer,
        int $dstOffset,
        int $dataSize,
        ?CData $pData
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'void required Vulkan v1.0');

        $this->ffi->vkCmdUpdateBuffer($commandBuffer, $dstBuffer, $dstOffset, $dataSize, $pData);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $dstBuffer
     * @param int $dstOffset
     * @param int $size
     * @param int $data
     * @return void
     * @since 1.0
     */
    public function cmdFillBuffer(
        CData $commandBuffer,
        CData $dstBuffer,
        int $dstOffset,
        int $size,
        int $data
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdFillBuffer required Vulkan v1.0');

        $this->ffi->vkCmdFillBuffer($commandBuffer, $dstBuffer, $dstOffset, $size, $data);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $image
     * @param int $imageLayout
     * @param CData|null $pColor
     * @param int $rangeCount
     * @param CData<VkImageSubresourceRange>|null $pRanges
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $imageLayout
     *
     */
    public function cmdClearColorImage(
        CData $commandBuffer,
        CData $image,
        int $imageLayout,
        ?CData $pColor,
        int $rangeCount,
        ?CData $pRanges
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkImageSubresourceRange required Vulkan v1.0');

        $this->ffi->vkCmdClearColorImage($commandBuffer, $image, $imageLayout, $pColor, $rangeCount, $pRanges);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $image
     * @param int $imageLayout
     * @param CData<VkClearDepthStencilValue>|null $pDepthStencil
     * @param int $rangeCount
     * @param CData<VkImageSubresourceRange>|null $pRanges
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $imageLayout
     *
     */
    public function cmdClearDepthStencilImage(
        CData $commandBuffer,
        CData $image,
        int $imageLayout,
        ?CData $pDepthStencil,
        int $rangeCount,
        ?CData $pRanges
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkImageSubresourceRange required Vulkan v1.0');

        $this->ffi->vkCmdClearDepthStencilImage($commandBuffer, $image, $imageLayout, $pDepthStencil, $rangeCount,
            $pRanges);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $attachmentCount
     * @param CData<VkClearAttachment>|null $pAttachments
     * @param int $rectCount
     * @param CData<VkClearRect>|null $pRects
     * @return void
     * @since 1.0
     */
    public function cmdClearAttachments(
        CData $commandBuffer,
        int $attachmentCount,
        ?CData $pAttachments,
        int $rectCount,
        ?CData $pRects
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkClearRect required Vulkan v1.0');

        $this->ffi->vkCmdClearAttachments($commandBuffer, $attachmentCount, $pAttachments, $rectCount, $pRects);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $srcImage
     * @param int $srcImageLayout
     * @param CData|VkImage $dstImage
     * @param int $dstImageLayout
     * @param int $regionCount
     * @param CData<VkImageResolve>|null $pRegions
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     * @psalm-param VkImageLayout::* $dstImageLayout
     *
     */
    public function cmdResolveImage(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkImageResolve required Vulkan v1.0');

        $this->ffi->vkCmdResolveImage($commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout,
            $regionCount, $pRegions);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkEvent $event
     * @param int $stageMask
     * @return void
     * @since 1.0
     */
    public function cmdSetEvent(CData $commandBuffer, CData $event, int $stageMask): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdSetEvent required Vulkan v1.0');

        $this->ffi->vkCmdSetEvent($commandBuffer, $event, $stageMask);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkEvent $event
     * @param int $stageMask
     * @return void
     * @since 1.0
     */
    public function cmdResetEvent(CData $commandBuffer, CData $event, int $stageMask): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdResetEvent required Vulkan v1.0');

        $this->ffi->vkCmdResetEvent($commandBuffer, $event, $stageMask);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $eventCount
     * @param CData|null $pEvents
     * @param int $srcStageMask
     * @param int $dstStageMask
     * @param int $memoryBarrierCount
     * @param CData<VkMemoryBarrier>|null $pMemoryBarriers
     * @param int $bufferMemoryBarrierCount
     * @param CData<VkBufferMemoryBarrier>|null $pBufferMemoryBarriers
     * @param int $imageMemoryBarrierCount
     * @param CData<VkImageMemoryBarrier>|null $pImageMemoryBarriers
     * @return void
     * @since 1.0
     */
    public function cmdWaitEvents(
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
        assert(Version::make(1, 0) >= $this->version, 'VkImageMemoryBarrier required Vulkan v1.0');

        $this->ffi->vkCmdWaitEvents($commandBuffer, $eventCount, $pEvents, $srcStageMask, $dstStageMask,
            $memoryBarrierCount, $pMemoryBarriers, $bufferMemoryBarrierCount, $pBufferMemoryBarriers,
            $imageMemoryBarrierCount, $pImageMemoryBarriers);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $srcStageMask
     * @param int $dstStageMask
     * @param int $dependencyFlags
     * @param int $memoryBarrierCount
     * @param CData<VkMemoryBarrier>|null $pMemoryBarriers
     * @param int $bufferMemoryBarrierCount
     * @param CData<VkBufferMemoryBarrier>|null $pBufferMemoryBarriers
     * @param int $imageMemoryBarrierCount
     * @param CData<VkImageMemoryBarrier>|null $pImageMemoryBarriers
     * @return void
     * @since 1.0
     */
    public function cmdPipelineBarrier(
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
        assert(Version::make(1, 0) >= $this->version, 'VkImageMemoryBarrier required Vulkan v1.0');

        $this->ffi->vkCmdPipelineBarrier($commandBuffer, $srcStageMask, $dstStageMask, $dependencyFlags,
            $memoryBarrierCount, $pMemoryBarriers, $bufferMemoryBarrierCount, $pBufferMemoryBarriers,
            $imageMemoryBarrierCount, $pImageMemoryBarriers);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkQueryPool $queryPool
     * @param int $query
     * @param int $flags
     * @return void
     * @since 1.0
     */
    public function cmdBeginQuery(CData $commandBuffer, CData $queryPool, int $query, int $flags): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdBeginQuery required Vulkan v1.0');

        $this->ffi->vkCmdBeginQuery($commandBuffer, $queryPool, $query, $flags);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkQueryPool $queryPool
     * @param int $query
     * @return void
     * @since 1.0
     */
    public function cmdEndQuery(CData $commandBuffer, CData $queryPool, int $query): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdEndQuery required Vulkan v1.0');

        $this->ffi->vkCmdEndQuery($commandBuffer, $queryPool, $query);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @return void
     * @since 1.0
     */
    public function cmdResetQueryPool(
        CData $commandBuffer,
        CData $queryPool,
        int $firstQuery,
        int $queryCount
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdResetQueryPool required Vulkan v1.0');

        $this->ffi->vkCmdResetQueryPool($commandBuffer, $queryPool, $firstQuery, $queryCount);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $pipelineStage
     * @param CData|VkQueryPool $queryPool
     * @param int $query
     * @return void
     * @since 1.0
     * @psalm-param VkPipelineStageFlagBits::* $pipelineStage
     *
     */
    public function cmdWriteTimestamp(
        CData $commandBuffer,
        int $pipelineStage,
        CData $queryPool,
        int $query
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdWriteTimestamp required Vulkan v1.0');

        $this->ffi->vkCmdWriteTimestamp($commandBuffer, $pipelineStage, $queryPool, $query);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @param CData|VkBuffer $dstBuffer
     * @param int $dstOffset
     * @param int $stride
     * @param int $flags
     * @return void
     * @since 1.0
     */
    public function cmdCopyQueryPoolResults(
        CData $commandBuffer,
        CData $queryPool,
        int $firstQuery,
        int $queryCount,
        CData $dstBuffer,
        int $dstOffset,
        int $stride,
        int $flags
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdCopyQueryPoolResults required Vulkan v1.0');

        $this->ffi->vkCmdCopyQueryPoolResults($commandBuffer, $queryPool, $firstQuery, $queryCount, $dstBuffer,
            $dstOffset, $stride, $flags);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkPipelineLayout $layout
     * @param int $stageFlags
     * @param int $offset
     * @param int $size
     * @param CData|null $pValues
     * @return void
     * @since 1.0
     */
    public function cmdPushConstants(
        CData $commandBuffer,
        CData $layout,
        int $stageFlags,
        int $offset,
        int $size,
        ?CData $pValues
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'void required Vulkan v1.0');

        $this->ffi->vkCmdPushConstants($commandBuffer, $layout, $stageFlags, $offset, $size, $pValues);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData<VkRenderPassBeginInfo>|null $pRenderPassBegin
     * @param int $contents
     * @return void
     * @since 1.0
     * @psalm-param VkSubpassContents::* $contents
     *
     */
    public function cmdBeginRenderPass(CData $commandBuffer, ?CData $pRenderPassBegin, int $contents): void
    {
        assert(Version::make(1, 0) >= $this->version, 'VkRenderPassBeginInfo required Vulkan v1.0');

        $this->ffi->vkCmdBeginRenderPass($commandBuffer, $pRenderPassBegin, $contents);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $contents
     * @return void
     * @since 1.0
     * @psalm-param VkSubpassContents::* $contents
     *
     */
    public function cmdNextSubpass(CData $commandBuffer, int $contents): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdNextSubpass required Vulkan v1.0');

        $this->ffi->vkCmdNextSubpass($commandBuffer, $contents);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @return void
     * @since 1.0
     */
    public function cmdEndRenderPass(CData $commandBuffer): void
    {
        assert(Version::make(1, 0) >= $this->version, 'vkCmdEndRenderPass required Vulkan v1.0');

        $this->ffi->vkCmdEndRenderPass($commandBuffer);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $commandBufferCount
     * @param CData|null $pCommandBuffers
     * @return void
     * @since 1.0
     */
    public function cmdExecuteCommands(
        CData $commandBuffer,
        int $commandBufferCount,
        ?CData $pCommandBuffers
    ): void {
        assert(Version::make(1, 0) >= $this->version, 'VkCommandBuffer required Vulkan v1.0');

        $this->ffi->vkCmdExecuteCommands($commandBuffer, $commandBufferCount, $pCommandBuffers);
    }
}
