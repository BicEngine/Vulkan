<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

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
use FFI\CPointer;

/**
 * @mixin Vulkan10Interface
 * @version 1.0
 */
trait Vulkan10MethodsTrait
{
    /**
     * @param CPointer<VkInstanceCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pInstance
     * @return int
     * @since 1.0
     */
    public static function vkCreateInstance(?CData $pCreateInfo, ?CData $pAllocator, ?CData $pInstance): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkInstance required Vulkan v1.0');

        return self::$ffi->vkCreateInstance($pCreateInfo, $pAllocator, $pInstance);
    }

    /**
     * @param CData|VkInstance $instance
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyInstance(CData $instance, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyInstance($instance, $pAllocator);
    }

    /**
     * @param CData|VkInstance $instance
     * @param CData|null $pPhysicalDeviceCount
     * @param CData|null $pPhysicalDevices
     * @return int
     * @since 1.0
     */
    public static function vkEnumeratePhysicalDevices(
        CData $instance,
        ?CData $pPhysicalDeviceCount,
        ?CData $pPhysicalDevices
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkPhysicalDevice required Vulkan v1.0');

        return self::$ffi->vkEnumeratePhysicalDevices($instance, $pPhysicalDeviceCount, $pPhysicalDevices);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceFeatures>|null $pFeatures
     * @return void
     * @since 1.0
     */
    public static function vkGetPhysicalDeviceFeatures(CData $physicalDevice, ?CData $pFeatures): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkPhysicalDeviceFeatures required Vulkan v1.0');

        self::$ffi->vkGetPhysicalDeviceFeatures($physicalDevice, $pFeatures);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param int $format
     * @param CPointer<VkFormatProperties>|null $pFormatProperties
     * @return void
     * @since 1.0
     * @psalm-param VkFormat::* $format
     *
     */
    public static function vkGetPhysicalDeviceFormatProperties(
        CData $physicalDevice,
        int $format,
        ?CData $pFormatProperties
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkFormatProperties required Vulkan v1.0');

        self::$ffi->vkGetPhysicalDeviceFormatProperties($physicalDevice, $format, $pFormatProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param int $format
     * @param int $type
     * @param int $tiling
     * @param int $usage
     * @param int $flags
     * @param CPointer<VkImageFormatProperties>|null $pImageFormatProperties
     * @return int
     * @since 1.0
     * @psalm-param VkFormat::* $format
     * @psalm-param VkImageType::* $type
     * @psalm-param VkImageTiling::* $tiling
     *
     */
    public static function vkGetPhysicalDeviceImageFormatProperties(
        CData $physicalDevice,
        int $format,
        int $type,
        int $tiling,
        int $usage,
        int $flags,
        ?CData $pImageFormatProperties
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkImageFormatProperties required Vulkan v1.0');

        return self::$ffi->vkGetPhysicalDeviceImageFormatProperties($physicalDevice, $format, $type, $tiling, $usage,
            $flags, $pImageFormatProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceProperties>|null $pProperties
     * @return void
     * @since 1.0
     */
    public static function vkGetPhysicalDeviceProperties(CData $physicalDevice, ?CData $pProperties): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkPhysicalDeviceProperties required Vulkan v1.0');

        self::$ffi->vkGetPhysicalDeviceProperties($physicalDevice, $pProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData|null $pQueueFamilyPropertyCount
     * @param CPointer<VkQueueFamilyProperties>|null $pQueueFamilyProperties
     * @return void
     * @since 1.0
     */
    public static function vkGetPhysicalDeviceQueueFamilyProperties(
        CData $physicalDevice,
        ?CData $pQueueFamilyPropertyCount,
        ?CData $pQueueFamilyProperties
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkQueueFamilyProperties required Vulkan v1.0');

        self::$ffi->vkGetPhysicalDeviceQueueFamilyProperties($physicalDevice, $pQueueFamilyPropertyCount,
            $pQueueFamilyProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceMemoryProperties>|null $pMemoryProperties
     * @return void
     * @since 1.0
     */
    public static function vkGetPhysicalDeviceMemoryProperties(CData $physicalDevice, ?CData $pMemoryProperties): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkPhysicalDeviceMemoryProperties required Vulkan v1.0');

        self::$ffi->vkGetPhysicalDeviceMemoryProperties($physicalDevice, $pMemoryProperties);
    }

    /**
     * @param CData|VkInstance $instance
     * @param string|null $pName
     * @return CData|callable|null
     * @since 1.0
     */
    public static function vkGetInstanceProcAddr(CData $instance, ?string $pName): ?CData
    {
        assert(Version::make(1, 0) >= self::$version, 'vkGetInstanceProcAddr required Vulkan v1.0');

        return self::$ffi->vkGetInstanceProcAddr($instance, $pName);
    }

    /**
     * @param CData|VkDevice $device
     * @param string|null $pName
     * @return CData|callable|null
     * @since 1.0
     */
    public static function vkGetDeviceProcAddr(CData $device, ?string $pName): ?CData
    {
        assert(Version::make(1, 0) >= self::$version, 'vkGetDeviceProcAddr required Vulkan v1.0');

        return self::$ffi->vkGetDeviceProcAddr($device, $pName);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkDeviceCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pDevice
     * @return int
     * @since 1.0
     */
    public static function vkCreateDevice(
        CData $physicalDevice,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pDevice
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkDevice required Vulkan v1.0');

        return self::$ffi->vkCreateDevice($physicalDevice, $pCreateInfo, $pAllocator, $pDevice);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyDevice(CData $device, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyDevice($device, $pAllocator);
    }

    /**
     * @param string|null $pLayerName
     * @param CData|null $pPropertyCount
     * @param CPointer<VkExtensionProperties>|null $pProperties
     * @return int
     * @since 1.0
     */
    public static function vkEnumerateInstanceExtensionProperties(
        ?string $pLayerName,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkExtensionProperties required Vulkan v1.0');

        return self::$ffi->vkEnumerateInstanceExtensionProperties($pLayerName, $pPropertyCount, $pProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param string|null $pLayerName
     * @param CData|null $pPropertyCount
     * @param CPointer<VkExtensionProperties>|null $pProperties
     * @return int
     * @since 1.0
     */
    public static function vkEnumerateDeviceExtensionProperties(
        CData $physicalDevice,
        ?string $pLayerName,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkExtensionProperties required Vulkan v1.0');

        return self::$ffi->vkEnumerateDeviceExtensionProperties($physicalDevice, $pLayerName, $pPropertyCount,
            $pProperties);
    }

    /**
     * @param CData|null $pPropertyCount
     * @param CPointer<VkLayerProperties>|null $pProperties
     * @return int
     * @since 1.0
     */
    public static function vkEnumerateInstanceLayerProperties(?CData $pPropertyCount, ?CData $pProperties): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkLayerProperties required Vulkan v1.0');

        return self::$ffi->vkEnumerateInstanceLayerProperties($pPropertyCount, $pProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData|null $pPropertyCount
     * @param CPointer<VkLayerProperties>|null $pProperties
     * @return int
     * @since 1.0
     */
    public static function vkEnumerateDeviceLayerProperties(
        CData $physicalDevice,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkLayerProperties required Vulkan v1.0');

        return self::$ffi->vkEnumerateDeviceLayerProperties($physicalDevice, $pPropertyCount, $pProperties);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $queueFamilyIndex
     * @param int $queueIndex
     * @param CData|null $pQueue
     * @return void
     * @since 1.0
     */
    public static function vkGetDeviceQueue(CData $device, int $queueFamilyIndex, int $queueIndex, ?CData $pQueue): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkQueue required Vulkan v1.0');

        self::$ffi->vkGetDeviceQueue($device, $queueFamilyIndex, $queueIndex, $pQueue);
    }

    /**
     * @param CData|VkQueue $queue
     * @param int $submitCount
     * @param CPointer<VkSubmitInfo>|null $pSubmits
     * @param CData|VkFence $fence
     * @return int
     * @since 1.0
     */
    public static function vkQueueSubmit(CData $queue, int $submitCount, ?CData $pSubmits, CData $fence): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkSubmitInfo required Vulkan v1.0');

        return self::$ffi->vkQueueSubmit($queue, $submitCount, $pSubmits, $fence);
    }

    /**
     * @param CData|VkQueue $queue
     * @return int
     * @since 1.0
     */
    public static function vkQueueWaitIdle(CData $queue): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkQueueWaitIdle required Vulkan v1.0');

        return self::$ffi->vkQueueWaitIdle($queue);
    }

    /**
     * @param CData|VkDevice $device
     * @return int
     * @since 1.0
     */
    public static function vkDeviceWaitIdle(CData $device): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkDeviceWaitIdle required Vulkan v1.0');

        return self::$ffi->vkDeviceWaitIdle($device);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkMemoryAllocateInfo>|null $pAllocateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pMemory
     * @return int
     * @since 1.0
     */
    public static function vkAllocateMemory(
        CData $device,
        ?CData $pAllocateInfo,
        ?CData $pAllocator,
        ?CData $pMemory
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkDeviceMemory required Vulkan v1.0');

        return self::$ffi->vkAllocateMemory($device, $pAllocateInfo, $pAllocator, $pMemory);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDeviceMemory $memory
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkFreeMemory(CData $device, CData $memory, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkFreeMemory($device, $memory, $pAllocator);
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
    public static function vkMapMemory(
        CData $device,
        CData $memory,
        int $offset,
        int $size,
        int $flags,
        ?CData $ppData
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'void required Vulkan v1.0');

        return self::$ffi->vkMapMemory($device, $memory, $offset, $size, $flags, $ppData);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDeviceMemory $memory
     * @return void
     * @since 1.0
     */
    public static function vkUnmapMemory(CData $device, CData $memory): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkUnmapMemory required Vulkan v1.0');

        self::$ffi->vkUnmapMemory($device, $memory);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $memoryRangeCount
     * @param CPointer<VkMappedMemoryRange>|null $pMemoryRanges
     * @return int
     * @since 1.0
     */
    public static function vkFlushMappedMemoryRanges(CData $device, int $memoryRangeCount, ?CData $pMemoryRanges): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkMappedMemoryRange required Vulkan v1.0');

        return self::$ffi->vkFlushMappedMemoryRanges($device, $memoryRangeCount, $pMemoryRanges);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $memoryRangeCount
     * @param CPointer<VkMappedMemoryRange>|null $pMemoryRanges
     * @return int
     * @since 1.0
     */
    public static function vkInvalidateMappedMemoryRanges(
        CData $device,
        int $memoryRangeCount,
        ?CData $pMemoryRanges
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkMappedMemoryRange required Vulkan v1.0');

        return self::$ffi->vkInvalidateMappedMemoryRanges($device, $memoryRangeCount, $pMemoryRanges);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDeviceMemory $memory
     * @param CData|null $pCommittedMemoryInBytes
     * @return void
     * @since 1.0
     */
    public static function vkGetDeviceMemoryCommitment(
        CData $device,
        CData $memory,
        ?CData $pCommittedMemoryInBytes
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkDeviceSize required Vulkan v1.0');

        self::$ffi->vkGetDeviceMemoryCommitment($device, $memory, $pCommittedMemoryInBytes);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkBuffer $buffer
     * @param CData|VkDeviceMemory $memory
     * @param int $memoryOffset
     * @return int
     * @since 1.0
     */
    public static function vkBindBufferMemory(CData $device, CData $buffer, CData $memory, int $memoryOffset): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkBindBufferMemory required Vulkan v1.0');

        return self::$ffi->vkBindBufferMemory($device, $buffer, $memory, $memoryOffset);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CData|VkDeviceMemory $memory
     * @param int $memoryOffset
     * @return int
     * @since 1.0
     */
    public static function vkBindImageMemory(CData $device, CData $image, CData $memory, int $memoryOffset): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkBindImageMemory required Vulkan v1.0');

        return self::$ffi->vkBindImageMemory($device, $image, $memory, $memoryOffset);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkBuffer $buffer
     * @param CPointer<VkMemoryRequirements>|null $pMemoryRequirements
     * @return void
     * @since 1.0
     */
    public static function vkGetBufferMemoryRequirements(
        CData $device,
        CData $buffer,
        ?CData $pMemoryRequirements
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkMemoryRequirements required Vulkan v1.0');

        self::$ffi->vkGetBufferMemoryRequirements($device, $buffer, $pMemoryRequirements);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CPointer<VkMemoryRequirements>|null $pMemoryRequirements
     * @return void
     * @since 1.0
     */
    public static function vkGetImageMemoryRequirements(CData $device, CData $image, ?CData $pMemoryRequirements): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkMemoryRequirements required Vulkan v1.0');

        self::$ffi->vkGetImageMemoryRequirements($device, $image, $pMemoryRequirements);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CData|null $pSparseMemoryRequirementCount
     * @param CPointer<VkSparseImageMemoryRequirements>|null $pSparseMemoryRequirements
     * @return void
     * @since 1.0
     */
    public static function vkGetImageSparseMemoryRequirements(
        CData $device,
        CData $image,
        ?CData $pSparseMemoryRequirementCount,
        ?CData $pSparseMemoryRequirements
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkSparseImageMemoryRequirements required Vulkan v1.0');

        self::$ffi->vkGetImageSparseMemoryRequirements($device, $image, $pSparseMemoryRequirementCount,
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
     * @param CPointer<VkSparseImageFormatProperties>|null $pProperties
     * @return void
     * @since 1.0
     * @psalm-param VkFormat::* $format
     * @psalm-param VkImageType::* $type
     * @psalm-param VkSampleCountFlagBits::* $samples
     * @psalm-param VkImageTiling::* $tiling
     *
     */
    public static function vkGetPhysicalDeviceSparseImageFormatProperties(
        CData $physicalDevice,
        int $format,
        int $type,
        int $samples,
        int $usage,
        int $tiling,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkSparseImageFormatProperties required Vulkan v1.0');

        self::$ffi->vkGetPhysicalDeviceSparseImageFormatProperties($physicalDevice, $format, $type, $samples, $usage,
            $tiling, $pPropertyCount, $pProperties);
    }

    /**
     * @param CData|VkQueue $queue
     * @param int $bindInfoCount
     * @param CPointer<VkBindSparseInfo>|null $pBindInfo
     * @param CData|VkFence $fence
     * @return int
     * @since 1.0
     */
    public static function vkQueueBindSparse(CData $queue, int $bindInfoCount, ?CData $pBindInfo, CData $fence): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkBindSparseInfo required Vulkan v1.0');

        return self::$ffi->vkQueueBindSparse($queue, $bindInfoCount, $pBindInfo, $fence);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkFenceCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pFence
     * @return int
     * @since 1.0
     */
    public static function vkCreateFence(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pFence): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkFence required Vulkan v1.0');

        return self::$ffi->vkCreateFence($device, $pCreateInfo, $pAllocator, $pFence);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkFence $fence
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyFence(CData $device, CData $fence, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyFence($device, $fence, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $fenceCount
     * @param CData|null $pFences
     * @return int
     * @since 1.0
     */
    public static function vkResetFences(CData $device, int $fenceCount, ?CData $pFences): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkFence required Vulkan v1.0');

        return self::$ffi->vkResetFences($device, $fenceCount, $pFences);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkFence $fence
     * @return int
     * @since 1.0
     */
    public static function vkGetFenceStatus(CData $device, CData $fence): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkGetFenceStatus required Vulkan v1.0');

        return self::$ffi->vkGetFenceStatus($device, $fence);
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
    public static function vkWaitForFences(
        CData $device,
        int $fenceCount,
        ?CData $pFences,
        int $waitAll,
        int $timeout
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkFence required Vulkan v1.0');

        return self::$ffi->vkWaitForFences($device, $fenceCount, $pFences, $waitAll, $timeout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkSemaphoreCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pSemaphore
     * @return int
     * @since 1.0
     */
    public static function vkCreateSemaphore(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pSemaphore
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkSemaphore required Vulkan v1.0');

        return self::$ffi->vkCreateSemaphore($device, $pCreateInfo, $pAllocator, $pSemaphore);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkSemaphore $semaphore
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroySemaphore(CData $device, CData $semaphore, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroySemaphore($device, $semaphore, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkEventCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pEvent
     * @return int
     * @since 1.0
     */
    public static function vkCreateEvent(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pEvent): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkEvent required Vulkan v1.0');

        return self::$ffi->vkCreateEvent($device, $pCreateInfo, $pAllocator, $pEvent);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkEvent $event
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyEvent(CData $device, CData $event, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyEvent($device, $event, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkEvent $event
     * @return int
     * @since 1.0
     */
    public static function vkGetEventStatus(CData $device, CData $event): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkGetEventStatus required Vulkan v1.0');

        return self::$ffi->vkGetEventStatus($device, $event);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkEvent $event
     * @return int
     * @since 1.0
     */
    public static function vkSetEvent(CData $device, CData $event): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkSetEvent required Vulkan v1.0');

        return self::$ffi->vkSetEvent($device, $event);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkEvent $event
     * @return int
     * @since 1.0
     */
    public static function vkResetEvent(CData $device, CData $event): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkResetEvent required Vulkan v1.0');

        return self::$ffi->vkResetEvent($device, $event);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkQueryPoolCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pQueryPool
     * @return int
     * @since 1.0
     */
    public static function vkCreateQueryPool(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pQueryPool
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkQueryPool required Vulkan v1.0');

        return self::$ffi->vkCreateQueryPool($device, $pCreateInfo, $pAllocator, $pQueryPool);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkQueryPool $queryPool
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyQueryPool(CData $device, CData $queryPool, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyQueryPool($device, $queryPool, $pAllocator);
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
    public static function vkGetQueryPoolResults(
        CData $device,
        CData $queryPool,
        int $firstQuery,
        int $queryCount,
        int $dataSize,
        ?CData $pData,
        int $stride,
        int $flags
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'void required Vulkan v1.0');

        return self::$ffi->vkGetQueryPoolResults($device, $queryPool, $firstQuery, $queryCount, $dataSize, $pData,
            $stride, $flags);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkBufferCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pBuffer
     * @return int
     * @since 1.0
     */
    public static function vkCreateBuffer(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pBuffer): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkBuffer required Vulkan v1.0');

        return self::$ffi->vkCreateBuffer($device, $pCreateInfo, $pAllocator, $pBuffer);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkBuffer $buffer
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyBuffer(CData $device, CData $buffer, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyBuffer($device, $buffer, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkBufferViewCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pView
     * @return int
     * @since 1.0
     */
    public static function vkCreateBufferView(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pView
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkBufferView required Vulkan v1.0');

        return self::$ffi->vkCreateBufferView($device, $pCreateInfo, $pAllocator, $pView);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkBufferView $bufferView
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyBufferView(CData $device, CData $bufferView, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyBufferView($device, $bufferView, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkImageCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pImage
     * @return int
     * @since 1.0
     */
    public static function vkCreateImage(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pImage): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkImage required Vulkan v1.0');

        return self::$ffi->vkCreateImage($device, $pCreateInfo, $pAllocator, $pImage);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyImage(CData $device, CData $image, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyImage($device, $image, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImage $image
     * @param CPointer<VkImageSubresource>|null $pSubresource
     * @param CPointer<VkSubresourceLayout>|null $pLayout
     * @return void
     * @since 1.0
     */
    public static function vkGetImageSubresourceLayout(
        CData $device,
        CData $image,
        ?CData $pSubresource,
        ?CData $pLayout
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkSubresourceLayout required Vulkan v1.0');

        self::$ffi->vkGetImageSubresourceLayout($device, $image, $pSubresource, $pLayout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkImageViewCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pView
     * @return int
     * @since 1.0
     */
    public static function vkCreateImageView(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pView): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkImageView required Vulkan v1.0');

        return self::$ffi->vkCreateImageView($device, $pCreateInfo, $pAllocator, $pView);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkImageView $imageView
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyImageView(CData $device, CData $imageView, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyImageView($device, $imageView, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkShaderModuleCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pShaderModule
     * @return int
     * @since 1.0
     */
    public static function vkCreateShaderModule(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pShaderModule
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkShaderModule required Vulkan v1.0');

        return self::$ffi->vkCreateShaderModule($device, $pCreateInfo, $pAllocator, $pShaderModule);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkShaderModule $shaderModule
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyShaderModule(CData $device, CData $shaderModule, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyShaderModule($device, $shaderModule, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkPipelineCacheCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pPipelineCache
     * @return int
     * @since 1.0
     */
    public static function vkCreatePipelineCache(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pPipelineCache
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkPipelineCache required Vulkan v1.0');

        return self::$ffi->vkCreatePipelineCache($device, $pCreateInfo, $pAllocator, $pPipelineCache);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $pipelineCache
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyPipelineCache(CData $device, CData $pipelineCache, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyPipelineCache($device, $pipelineCache, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $pipelineCache
     * @param CData|null $pDataSize
     * @param CData|null $pData
     * @return int
     * @since 1.0
     */
    public static function vkGetPipelineCacheData(
        CData $device,
        CData $pipelineCache,
        ?CData $pDataSize,
        ?CData $pData
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'void required Vulkan v1.0');

        return self::$ffi->vkGetPipelineCacheData($device, $pipelineCache, $pDataSize, $pData);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $dstCache
     * @param int $srcCacheCount
     * @param CData|null $pSrcCaches
     * @return int
     * @since 1.0
     */
    public static function vkMergePipelineCaches(
        CData $device,
        CData $dstCache,
        int $srcCacheCount,
        ?CData $pSrcCaches
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkPipelineCache required Vulkan v1.0');

        return self::$ffi->vkMergePipelineCaches($device, $dstCache, $srcCacheCount, $pSrcCaches);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $pipelineCache
     * @param int $createInfoCount
     * @param CPointer<VkGraphicsPipelineCreateInfo>|null $pCreateInfos
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pPipelines
     * @return int
     * @since 1.0
     */
    public static function vkCreateGraphicsPipelines(
        CData $device,
        CData $pipelineCache,
        int $createInfoCount,
        ?CData $pCreateInfos,
        ?CData $pAllocator,
        ?CData $pPipelines
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkPipeline required Vulkan v1.0');

        return self::$ffi->vkCreateGraphicsPipelines($device, $pipelineCache, $createInfoCount, $pCreateInfos,
            $pAllocator, $pPipelines);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineCache $pipelineCache
     * @param int $createInfoCount
     * @param CPointer<VkComputePipelineCreateInfo>|null $pCreateInfos
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pPipelines
     * @return int
     * @since 1.0
     */
    public static function vkCreateComputePipelines(
        CData $device,
        CData $pipelineCache,
        int $createInfoCount,
        ?CData $pCreateInfos,
        ?CData $pAllocator,
        ?CData $pPipelines
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkPipeline required Vulkan v1.0');

        return self::$ffi->vkCreateComputePipelines($device, $pipelineCache, $createInfoCount, $pCreateInfos,
            $pAllocator, $pPipelines);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipeline $pipeline
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyPipeline(CData $device, CData $pipeline, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyPipeline($device, $pipeline, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkPipelineLayoutCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pPipelineLayout
     * @return int
     * @since 1.0
     */
    public static function vkCreatePipelineLayout(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pPipelineLayout
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkPipelineLayout required Vulkan v1.0');

        return self::$ffi->vkCreatePipelineLayout($device, $pCreateInfo, $pAllocator, $pPipelineLayout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkPipelineLayout $pipelineLayout
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyPipelineLayout(CData $device, CData $pipelineLayout, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyPipelineLayout($device, $pipelineLayout, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkSamplerCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pSampler
     * @return int
     * @since 1.0
     */
    public static function vkCreateSampler(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pSampler
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkSampler required Vulkan v1.0');

        return self::$ffi->vkCreateSampler($device, $pCreateInfo, $pAllocator, $pSampler);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkSampler $sampler
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroySampler(CData $device, CData $sampler, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroySampler($device, $sampler, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkDescriptorSetLayoutCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pSetLayout
     * @return int
     * @since 1.0
     */
    public static function vkCreateDescriptorSetLayout(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pSetLayout
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkDescriptorSetLayout required Vulkan v1.0');

        return self::$ffi->vkCreateDescriptorSetLayout($device, $pCreateInfo, $pAllocator, $pSetLayout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorSetLayout $descriptorSetLayout
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyDescriptorSetLayout(
        CData $device,
        CData $descriptorSetLayout,
        ?CData $pAllocator
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyDescriptorSetLayout($device, $descriptorSetLayout, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkDescriptorPoolCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pDescriptorPool
     * @return int
     * @since 1.0
     */
    public static function vkCreateDescriptorPool(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pDescriptorPool
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkDescriptorPool required Vulkan v1.0');

        return self::$ffi->vkCreateDescriptorPool($device, $pCreateInfo, $pAllocator, $pDescriptorPool);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorPool $descriptorPool
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyDescriptorPool(CData $device, CData $descriptorPool, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyDescriptorPool($device, $descriptorPool, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorPool $descriptorPool
     * @param int $flags
     * @return int
     * @since 1.0
     */
    public static function vkResetDescriptorPool(CData $device, CData $descriptorPool, int $flags): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkResetDescriptorPool required Vulkan v1.0');

        return self::$ffi->vkResetDescriptorPool($device, $descriptorPool, $flags);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkDescriptorSetAllocateInfo>|null $pAllocateInfo
     * @param CData|null $pDescriptorSets
     * @return int
     * @since 1.0
     */
    public static function vkAllocateDescriptorSets(CData $device, ?CData $pAllocateInfo, ?CData $pDescriptorSets): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkDescriptorSet required Vulkan v1.0');

        return self::$ffi->vkAllocateDescriptorSets($device, $pAllocateInfo, $pDescriptorSets);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorPool $descriptorPool
     * @param int $descriptorSetCount
     * @param CData|null $pDescriptorSets
     * @return int
     * @since 1.0
     */
    public static function vkFreeDescriptorSets(
        CData $device,
        CData $descriptorPool,
        int $descriptorSetCount,
        ?CData $pDescriptorSets
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkDescriptorSet required Vulkan v1.0');

        return self::$ffi->vkFreeDescriptorSets($device, $descriptorPool, $descriptorSetCount, $pDescriptorSets);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $descriptorWriteCount
     * @param CPointer<VkWriteDescriptorSet>|null $pDescriptorWrites
     * @param int $descriptorCopyCount
     * @param CPointer<VkCopyDescriptorSet>|null $pDescriptorCopies
     * @return void
     * @since 1.0
     */
    public static function vkUpdateDescriptorSets(
        CData $device,
        int $descriptorWriteCount,
        ?CData $pDescriptorWrites,
        int $descriptorCopyCount,
        ?CData $pDescriptorCopies
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkCopyDescriptorSet required Vulkan v1.0');

        self::$ffi->vkUpdateDescriptorSets($device, $descriptorWriteCount, $pDescriptorWrites, $descriptorCopyCount,
            $pDescriptorCopies);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkFramebufferCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pFramebuffer
     * @return int
     * @since 1.0
     */
    public static function vkCreateFramebuffer(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pFramebuffer
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkFramebuffer required Vulkan v1.0');

        return self::$ffi->vkCreateFramebuffer($device, $pCreateInfo, $pAllocator, $pFramebuffer);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkFramebuffer $framebuffer
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyFramebuffer(CData $device, CData $framebuffer, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyFramebuffer($device, $framebuffer, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkRenderPassCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pRenderPass
     * @return int
     * @since 1.0
     */
    public static function vkCreateRenderPass(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pRenderPass
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkRenderPass required Vulkan v1.0');

        return self::$ffi->vkCreateRenderPass($device, $pCreateInfo, $pAllocator, $pRenderPass);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkRenderPass $renderPass
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyRenderPass(CData $device, CData $renderPass, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyRenderPass($device, $renderPass, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkRenderPass $renderPass
     * @param CPointer<VkExtent2D>|null $pGranularity
     * @return void
     * @since 1.0
     */
    public static function vkGetRenderAreaGranularity(CData $device, CData $renderPass, ?CData $pGranularity): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkExtent2D required Vulkan v1.0');

        self::$ffi->vkGetRenderAreaGranularity($device, $renderPass, $pGranularity);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkCommandPoolCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pCommandPool
     * @return int
     * @since 1.0
     */
    public static function vkCreateCommandPool(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pCommandPool
    ): int {
        assert(Version::make(1, 0) >= self::$version, 'VkCommandPool required Vulkan v1.0');

        return self::$ffi->vkCreateCommandPool($device, $pCreateInfo, $pAllocator, $pCommandPool);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkCommandPool $commandPool
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.0
     */
    public static function vkDestroyCommandPool(CData $device, CData $commandPool, ?CData $pAllocator): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.0');

        self::$ffi->vkDestroyCommandPool($device, $commandPool, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkCommandPool $commandPool
     * @param int $flags
     * @return int
     * @since 1.0
     */
    public static function vkResetCommandPool(CData $device, CData $commandPool, int $flags): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkResetCommandPool required Vulkan v1.0');

        return self::$ffi->vkResetCommandPool($device, $commandPool, $flags);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkCommandBufferAllocateInfo>|null $pAllocateInfo
     * @param CData|null $pCommandBuffers
     * @return int
     * @since 1.0
     */
    public static function vkAllocateCommandBuffers(CData $device, ?CData $pAllocateInfo, ?CData $pCommandBuffers): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkCommandBuffer required Vulkan v1.0');

        return self::$ffi->vkAllocateCommandBuffers($device, $pAllocateInfo, $pCommandBuffers);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkCommandPool $commandPool
     * @param int $commandBufferCount
     * @param CData|null $pCommandBuffers
     * @return void
     * @since 1.0
     */
    public static function vkFreeCommandBuffers(
        CData $device,
        CData $commandPool,
        int $commandBufferCount,
        ?CData $pCommandBuffers
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkCommandBuffer required Vulkan v1.0');

        self::$ffi->vkFreeCommandBuffers($device, $commandPool, $commandBufferCount, $pCommandBuffers);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CPointer<VkCommandBufferBeginInfo>|null $pBeginInfo
     * @return int
     * @since 1.0
     */
    public static function vkBeginCommandBuffer(CData $commandBuffer, ?CData $pBeginInfo): int
    {
        assert(Version::make(1, 0) >= self::$version, 'VkCommandBufferBeginInfo required Vulkan v1.0');

        return self::$ffi->vkBeginCommandBuffer($commandBuffer, $pBeginInfo);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @return int
     * @since 1.0
     */
    public static function vkEndCommandBuffer(CData $commandBuffer): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkEndCommandBuffer required Vulkan v1.0');

        return self::$ffi->vkEndCommandBuffer($commandBuffer);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $flags
     * @return int
     * @since 1.0
     */
    public static function vkResetCommandBuffer(CData $commandBuffer, int $flags): int
    {
        assert(Version::make(1, 0) >= self::$version, 'vkResetCommandBuffer required Vulkan v1.0');

        return self::$ffi->vkResetCommandBuffer($commandBuffer, $flags);
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
    public static function vkCmdBindPipeline(CData $commandBuffer, int $pipelineBindPoint, CData $pipeline): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdBindPipeline required Vulkan v1.0');

        self::$ffi->vkCmdBindPipeline($commandBuffer, $pipelineBindPoint, $pipeline);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $firstViewport
     * @param int $viewportCount
     * @param CPointer<VkViewport>|null $pViewports
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetViewport(
        CData $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        ?CData $pViewports
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkViewport required Vulkan v1.0');

        self::$ffi->vkCmdSetViewport($commandBuffer, $firstViewport, $viewportCount, $pViewports);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $firstScissor
     * @param int $scissorCount
     * @param CPointer<VkRect2D>|null $pScissors
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetScissor(
        CData $commandBuffer,
        int $firstScissor,
        int $scissorCount,
        ?CData $pScissors
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkRect2D required Vulkan v1.0');

        self::$ffi->vkCmdSetScissor($commandBuffer, $firstScissor, $scissorCount, $pScissors);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param float $lineWidth
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetLineWidth(CData $commandBuffer, float $lineWidth): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdSetLineWidth required Vulkan v1.0');

        self::$ffi->vkCmdSetLineWidth($commandBuffer, $lineWidth);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param float $depthBiasConstantFactor
     * @param float $depthBiasClamp
     * @param float $depthBiasSlopeFactor
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetDepthBias(
        CData $commandBuffer,
        float $depthBiasConstantFactor,
        float $depthBiasClamp,
        float $depthBiasSlopeFactor
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdSetDepthBias required Vulkan v1.0');

        self::$ffi->vkCmdSetDepthBias($commandBuffer, $depthBiasConstantFactor, $depthBiasClamp, $depthBiasSlopeFactor);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData $blendConstants
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetBlendConstants(CData $commandBuffer, CData $blendConstants): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdSetBlendConstants required Vulkan v1.0');

        self::$ffi->vkCmdSetBlendConstants($commandBuffer, $blendConstants);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param float $minDepthBounds
     * @param float $maxDepthBounds
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetDepthBounds(CData $commandBuffer, float $minDepthBounds, float $maxDepthBounds): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdSetDepthBounds required Vulkan v1.0');

        self::$ffi->vkCmdSetDepthBounds($commandBuffer, $minDepthBounds, $maxDepthBounds);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $faceMask
     * @param int $compareMask
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetStencilCompareMask(CData $commandBuffer, int $faceMask, int $compareMask): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdSetStencilCompareMask required Vulkan v1.0');

        self::$ffi->vkCmdSetStencilCompareMask($commandBuffer, $faceMask, $compareMask);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $faceMask
     * @param int $writeMask
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetStencilWriteMask(CData $commandBuffer, int $faceMask, int $writeMask): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdSetStencilWriteMask required Vulkan v1.0');

        self::$ffi->vkCmdSetStencilWriteMask($commandBuffer, $faceMask, $writeMask);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $faceMask
     * @param int $reference
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetStencilReference(CData $commandBuffer, int $faceMask, int $reference): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdSetStencilReference required Vulkan v1.0');

        self::$ffi->vkCmdSetStencilReference($commandBuffer, $faceMask, $reference);
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
    public static function vkCmdBindDescriptorSets(
        CData $commandBuffer,
        int $pipelineBindPoint,
        CData $layout,
        int $firstSet,
        int $descriptorSetCount,
        ?CData $pDescriptorSets,
        int $dynamicOffsetCount,
        ?CData $pDynamicOffsets
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'uint32_t required Vulkan v1.0');

        self::$ffi->vkCmdBindDescriptorSets($commandBuffer, $pipelineBindPoint, $layout, $firstSet, $descriptorSetCount,
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
    public static function vkCmdBindIndexBuffer(CData $commandBuffer, CData $buffer, int $offset, int $indexType): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdBindIndexBuffer required Vulkan v1.0');

        self::$ffi->vkCmdBindIndexBuffer($commandBuffer, $buffer, $offset, $indexType);
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
    public static function vkCmdBindVertexBuffers(
        CData $commandBuffer,
        int $firstBinding,
        int $bindingCount,
        ?CData $pBuffers,
        ?CData $pOffsets
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkDeviceSize required Vulkan v1.0');

        self::$ffi->vkCmdBindVertexBuffers($commandBuffer, $firstBinding, $bindingCount, $pBuffers, $pOffsets);
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
    public static function vkCmdDraw(
        CData $commandBuffer,
        int $vertexCount,
        int $instanceCount,
        int $firstVertex,
        int $firstInstance
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdDraw required Vulkan v1.0');

        self::$ffi->vkCmdDraw($commandBuffer, $vertexCount, $instanceCount, $firstVertex, $firstInstance);
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
    public static function vkCmdDrawIndexed(
        CData $commandBuffer,
        int $indexCount,
        int $instanceCount,
        int $firstIndex,
        int $vertexOffset,
        int $firstInstance
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdDrawIndexed required Vulkan v1.0');

        self::$ffi->vkCmdDrawIndexed($commandBuffer, $indexCount, $instanceCount, $firstIndex, $vertexOffset,
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
    public static function vkCmdDrawIndirect(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        int $drawCount,
        int $stride
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdDrawIndirect required Vulkan v1.0');

        self::$ffi->vkCmdDrawIndirect($commandBuffer, $buffer, $offset, $drawCount, $stride);
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
    public static function vkCmdDrawIndexedIndirect(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        int $drawCount,
        int $stride
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdDrawIndexedIndirect required Vulkan v1.0');

        self::$ffi->vkCmdDrawIndexedIndirect($commandBuffer, $buffer, $offset, $drawCount, $stride);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $groupCountX
     * @param int $groupCountY
     * @param int $groupCountZ
     * @return void
     * @since 1.0
     */
    public static function vkCmdDispatch(
        CData $commandBuffer,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdDispatch required Vulkan v1.0');

        self::$ffi->vkCmdDispatch($commandBuffer, $groupCountX, $groupCountY, $groupCountZ);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $buffer
     * @param int $offset
     * @return void
     * @since 1.0
     */
    public static function vkCmdDispatchIndirect(CData $commandBuffer, CData $buffer, int $offset): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdDispatchIndirect required Vulkan v1.0');

        self::$ffi->vkCmdDispatchIndirect($commandBuffer, $buffer, $offset);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $srcBuffer
     * @param CData|VkBuffer $dstBuffer
     * @param int $regionCount
     * @param CPointer<VkBufferCopy>|null $pRegions
     * @return void
     * @since 1.0
     */
    public static function vkCmdCopyBuffer(
        CData $commandBuffer,
        CData $srcBuffer,
        CData $dstBuffer,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkBufferCopy required Vulkan v1.0');

        self::$ffi->vkCmdCopyBuffer($commandBuffer, $srcBuffer, $dstBuffer, $regionCount, $pRegions);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $srcImage
     * @param int $srcImageLayout
     * @param CData|VkImage $dstImage
     * @param int $dstImageLayout
     * @param int $regionCount
     * @param CPointer<VkImageCopy>|null $pRegions
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     * @psalm-param VkImageLayout::* $dstImageLayout
     *
     */
    public static function vkCmdCopyImage(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkImageCopy required Vulkan v1.0');

        self::$ffi->vkCmdCopyImage($commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount,
            $pRegions);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $srcImage
     * @param int $srcImageLayout
     * @param CData|VkImage $dstImage
     * @param int $dstImageLayout
     * @param int $regionCount
     * @param CPointer<VkImageBlit>|null $pRegions
     * @param int $filter
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     * @psalm-param VkImageLayout::* $dstImageLayout
     * @psalm-param VkFilter::* $filter
     *
     */
    public static function vkCmdBlitImage(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions,
        int $filter
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkImageBlit required Vulkan v1.0');

        self::$ffi->vkCmdBlitImage($commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount,
            $pRegions, $filter);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $srcBuffer
     * @param CData|VkImage $dstImage
     * @param int $dstImageLayout
     * @param int $regionCount
     * @param CPointer<VkBufferImageCopy>|null $pRegions
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $dstImageLayout
     *
     */
    public static function vkCmdCopyBufferToImage(
        CData $commandBuffer,
        CData $srcBuffer,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkBufferImageCopy required Vulkan v1.0');

        self::$ffi->vkCmdCopyBufferToImage($commandBuffer, $srcBuffer, $dstImage, $dstImageLayout, $regionCount,
            $pRegions);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $srcImage
     * @param int $srcImageLayout
     * @param CData|VkBuffer $dstBuffer
     * @param int $regionCount
     * @param CPointer<VkBufferImageCopy>|null $pRegions
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     *
     */
    public static function vkCmdCopyImageToBuffer(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstBuffer,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkBufferImageCopy required Vulkan v1.0');

        self::$ffi->vkCmdCopyImageToBuffer($commandBuffer, $srcImage, $srcImageLayout, $dstBuffer, $regionCount,
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
    public static function vkCmdUpdateBuffer(
        CData $commandBuffer,
        CData $dstBuffer,
        int $dstOffset,
        int $dataSize,
        ?CData $pData
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'void required Vulkan v1.0');

        self::$ffi->vkCmdUpdateBuffer($commandBuffer, $dstBuffer, $dstOffset, $dataSize, $pData);
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
    public static function vkCmdFillBuffer(
        CData $commandBuffer,
        CData $dstBuffer,
        int $dstOffset,
        int $size,
        int $data
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdFillBuffer required Vulkan v1.0');

        self::$ffi->vkCmdFillBuffer($commandBuffer, $dstBuffer, $dstOffset, $size, $data);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $image
     * @param int $imageLayout
     * @param CData|null $pColor
     * @param int $rangeCount
     * @param CPointer<VkImageSubresourceRange>|null $pRanges
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $imageLayout
     *
     */
    public static function vkCmdClearColorImage(
        CData $commandBuffer,
        CData $image,
        int $imageLayout,
        ?CData $pColor,
        int $rangeCount,
        ?CData $pRanges
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkImageSubresourceRange required Vulkan v1.0');

        self::$ffi->vkCmdClearColorImage($commandBuffer, $image, $imageLayout, $pColor, $rangeCount, $pRanges);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $image
     * @param int $imageLayout
     * @param CPointer<VkClearDepthStencilValue>|null $pDepthStencil
     * @param int $rangeCount
     * @param CPointer<VkImageSubresourceRange>|null $pRanges
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $imageLayout
     *
     */
    public static function vkCmdClearDepthStencilImage(
        CData $commandBuffer,
        CData $image,
        int $imageLayout,
        ?CData $pDepthStencil,
        int $rangeCount,
        ?CData $pRanges
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkImageSubresourceRange required Vulkan v1.0');

        self::$ffi->vkCmdClearDepthStencilImage($commandBuffer, $image, $imageLayout, $pDepthStencil, $rangeCount,
            $pRanges);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $attachmentCount
     * @param CPointer<VkClearAttachment>|null $pAttachments
     * @param int $rectCount
     * @param CPointer<VkClearRect>|null $pRects
     * @return void
     * @since 1.0
     */
    public static function vkCmdClearAttachments(
        CData $commandBuffer,
        int $attachmentCount,
        ?CData $pAttachments,
        int $rectCount,
        ?CData $pRects
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkClearRect required Vulkan v1.0');

        self::$ffi->vkCmdClearAttachments($commandBuffer, $attachmentCount, $pAttachments, $rectCount, $pRects);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkImage $srcImage
     * @param int $srcImageLayout
     * @param CData|VkImage $dstImage
     * @param int $dstImageLayout
     * @param int $regionCount
     * @param CPointer<VkImageResolve>|null $pRegions
     * @return void
     * @since 1.0
     * @psalm-param VkImageLayout::* $srcImageLayout
     * @psalm-param VkImageLayout::* $dstImageLayout
     *
     */
    public static function vkCmdResolveImage(
        CData $commandBuffer,
        CData $srcImage,
        int $srcImageLayout,
        CData $dstImage,
        int $dstImageLayout,
        int $regionCount,
        ?CData $pRegions
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkImageResolve required Vulkan v1.0');

        self::$ffi->vkCmdResolveImage($commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout,
            $regionCount, $pRegions);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkEvent $event
     * @param int $stageMask
     * @return void
     * @since 1.0
     */
    public static function vkCmdSetEvent(CData $commandBuffer, CData $event, int $stageMask): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdSetEvent required Vulkan v1.0');

        self::$ffi->vkCmdSetEvent($commandBuffer, $event, $stageMask);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkEvent $event
     * @param int $stageMask
     * @return void
     * @since 1.0
     */
    public static function vkCmdResetEvent(CData $commandBuffer, CData $event, int $stageMask): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdResetEvent required Vulkan v1.0');

        self::$ffi->vkCmdResetEvent($commandBuffer, $event, $stageMask);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $eventCount
     * @param CData|null $pEvents
     * @param int $srcStageMask
     * @param int $dstStageMask
     * @param int $memoryBarrierCount
     * @param CPointer<VkMemoryBarrier>|null $pMemoryBarriers
     * @param int $bufferMemoryBarrierCount
     * @param CPointer<VkBufferMemoryBarrier>|null $pBufferMemoryBarriers
     * @param int $imageMemoryBarrierCount
     * @param CPointer<VkImageMemoryBarrier>|null $pImageMemoryBarriers
     * @return void
     * @since 1.0
     */
    public static function vkCmdWaitEvents(
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
        assert(Version::make(1, 0) >= self::$version, 'VkImageMemoryBarrier required Vulkan v1.0');

        self::$ffi->vkCmdWaitEvents($commandBuffer, $eventCount, $pEvents, $srcStageMask, $dstStageMask,
            $memoryBarrierCount, $pMemoryBarriers, $bufferMemoryBarrierCount, $pBufferMemoryBarriers,
            $imageMemoryBarrierCount, $pImageMemoryBarriers);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $srcStageMask
     * @param int $dstStageMask
     * @param int $dependencyFlags
     * @param int $memoryBarrierCount
     * @param CPointer<VkMemoryBarrier>|null $pMemoryBarriers
     * @param int $bufferMemoryBarrierCount
     * @param CPointer<VkBufferMemoryBarrier>|null $pBufferMemoryBarriers
     * @param int $imageMemoryBarrierCount
     * @param CPointer<VkImageMemoryBarrier>|null $pImageMemoryBarriers
     * @return void
     * @since 1.0
     */
    public static function vkCmdPipelineBarrier(
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
        assert(Version::make(1, 0) >= self::$version, 'VkImageMemoryBarrier required Vulkan v1.0');

        self::$ffi->vkCmdPipelineBarrier($commandBuffer, $srcStageMask, $dstStageMask, $dependencyFlags,
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
    public static function vkCmdBeginQuery(CData $commandBuffer, CData $queryPool, int $query, int $flags): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdBeginQuery required Vulkan v1.0');

        self::$ffi->vkCmdBeginQuery($commandBuffer, $queryPool, $query, $flags);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkQueryPool $queryPool
     * @param int $query
     * @return void
     * @since 1.0
     */
    public static function vkCmdEndQuery(CData $commandBuffer, CData $queryPool, int $query): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdEndQuery required Vulkan v1.0');

        self::$ffi->vkCmdEndQuery($commandBuffer, $queryPool, $query);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @return void
     * @since 1.0
     */
    public static function vkCmdResetQueryPool(
        CData $commandBuffer,
        CData $queryPool,
        int $firstQuery,
        int $queryCount
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdResetQueryPool required Vulkan v1.0');

        self::$ffi->vkCmdResetQueryPool($commandBuffer, $queryPool, $firstQuery, $queryCount);
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
    public static function vkCmdWriteTimestamp(
        CData $commandBuffer,
        int $pipelineStage,
        CData $queryPool,
        int $query
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdWriteTimestamp required Vulkan v1.0');

        self::$ffi->vkCmdWriteTimestamp($commandBuffer, $pipelineStage, $queryPool, $query);
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
    public static function vkCmdCopyQueryPoolResults(
        CData $commandBuffer,
        CData $queryPool,
        int $firstQuery,
        int $queryCount,
        CData $dstBuffer,
        int $dstOffset,
        int $stride,
        int $flags
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdCopyQueryPoolResults required Vulkan v1.0');

        self::$ffi->vkCmdCopyQueryPoolResults($commandBuffer, $queryPool, $firstQuery, $queryCount, $dstBuffer,
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
    public static function vkCmdPushConstants(
        CData $commandBuffer,
        CData $layout,
        int $stageFlags,
        int $offset,
        int $size,
        ?CData $pValues
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'void required Vulkan v1.0');

        self::$ffi->vkCmdPushConstants($commandBuffer, $layout, $stageFlags, $offset, $size, $pValues);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CPointer<VkRenderPassBeginInfo>|null $pRenderPassBegin
     * @param int $contents
     * @return void
     * @since 1.0
     * @psalm-param VkSubpassContents::* $contents
     *
     */
    public static function vkCmdBeginRenderPass(CData $commandBuffer, ?CData $pRenderPassBegin, int $contents): void
    {
        assert(Version::make(1, 0) >= self::$version, 'VkRenderPassBeginInfo required Vulkan v1.0');

        self::$ffi->vkCmdBeginRenderPass($commandBuffer, $pRenderPassBegin, $contents);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $contents
     * @return void
     * @since 1.0
     * @psalm-param VkSubpassContents::* $contents
     *
     */
    public static function vkCmdNextSubpass(CData $commandBuffer, int $contents): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdNextSubpass required Vulkan v1.0');

        self::$ffi->vkCmdNextSubpass($commandBuffer, $contents);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @return void
     * @since 1.0
     */
    public static function vkCmdEndRenderPass(CData $commandBuffer): void
    {
        assert(Version::make(1, 0) >= self::$version, 'vkCmdEndRenderPass required Vulkan v1.0');

        self::$ffi->vkCmdEndRenderPass($commandBuffer);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $commandBufferCount
     * @param CData|null $pCommandBuffers
     * @return void
     * @since 1.0
     */
    public static function vkCmdExecuteCommands(
        CData $commandBuffer,
        int $commandBufferCount,
        ?CData $pCommandBuffers
    ): void {
        assert(Version::make(1, 0) >= self::$version, 'VkCommandBuffer required Vulkan v1.0');

        self::$ffi->vkCmdExecuteCommands($commandBuffer, $commandBufferCount, $pCommandBuffers);
    }
}
