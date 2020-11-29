<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

use Bic\Vulkan\Enum\VkFormat;
use Bic\Vulkan\Version;
use Bic\Vulkan\VkAllocationCallbacks;
use Bic\Vulkan\VkAllocationCallbacksPtr;
use Bic\Vulkan\VkBindBufferMemoryInfo;
use Bic\Vulkan\VkBindBufferMemoryInfoPtr;
use Bic\Vulkan\VkBindImageMemoryInfo;
use Bic\Vulkan\VkBindImageMemoryInfoPtr;
use Bic\Vulkan\VkBufferMemoryRequirementsInfo2;
use Bic\Vulkan\VkBufferMemoryRequirementsInfo2Ptr;
use Bic\Vulkan\VkCommandBuffer;
use Bic\Vulkan\VkCommandPool;
use Bic\Vulkan\VkDescriptorSet;
use Bic\Vulkan\VkDescriptorSetLayoutCreateInfo;
use Bic\Vulkan\VkDescriptorSetLayoutCreateInfoPtr;
use Bic\Vulkan\VkDescriptorSetLayoutSupport;
use Bic\Vulkan\VkDescriptorSetLayoutSupportPtr;
use Bic\Vulkan\VkDescriptorUpdateTemplate;
use Bic\Vulkan\VkDescriptorUpdateTemplateCreateInfo;
use Bic\Vulkan\VkDescriptorUpdateTemplateCreateInfoPtr;
use Bic\Vulkan\VkDevice;
use Bic\Vulkan\VkDeviceQueueInfo2;
use Bic\Vulkan\VkDeviceQueueInfo2Ptr;
use Bic\Vulkan\VkExternalBufferProperties;
use Bic\Vulkan\VkExternalBufferPropertiesPtr;
use Bic\Vulkan\VkExternalFenceProperties;
use Bic\Vulkan\VkExternalFencePropertiesPtr;
use Bic\Vulkan\VkExternalSemaphoreProperties;
use Bic\Vulkan\VkExternalSemaphorePropertiesPtr;
use Bic\Vulkan\VkFormatProperties2;
use Bic\Vulkan\VkFormatProperties2Ptr;
use Bic\Vulkan\VkImageFormatProperties2;
use Bic\Vulkan\VkImageFormatProperties2Ptr;
use Bic\Vulkan\VkImageMemoryRequirementsInfo2;
use Bic\Vulkan\VkImageMemoryRequirementsInfo2Ptr;
use Bic\Vulkan\VkImageSparseMemoryRequirementsInfo2;
use Bic\Vulkan\VkImageSparseMemoryRequirementsInfo2Ptr;
use Bic\Vulkan\VkInstance;
use Bic\Vulkan\VkMemoryRequirements2;
use Bic\Vulkan\VkMemoryRequirements2Ptr;
use Bic\Vulkan\VkPhysicalDevice;
use Bic\Vulkan\VkPhysicalDeviceExternalBufferInfo;
use Bic\Vulkan\VkPhysicalDeviceExternalBufferInfoPtr;
use Bic\Vulkan\VkPhysicalDeviceExternalFenceInfo;
use Bic\Vulkan\VkPhysicalDeviceExternalFenceInfoPtr;
use Bic\Vulkan\VkPhysicalDeviceExternalSemaphoreInfo;
use Bic\Vulkan\VkPhysicalDeviceExternalSemaphoreInfoPtr;
use Bic\Vulkan\VkPhysicalDeviceFeatures2;
use Bic\Vulkan\VkPhysicalDeviceFeatures2Ptr;
use Bic\Vulkan\VkPhysicalDeviceGroupProperties;
use Bic\Vulkan\VkPhysicalDeviceGroupPropertiesPtr;
use Bic\Vulkan\VkPhysicalDeviceImageFormatInfo2;
use Bic\Vulkan\VkPhysicalDeviceImageFormatInfo2Ptr;
use Bic\Vulkan\VkPhysicalDeviceMemoryProperties2;
use Bic\Vulkan\VkPhysicalDeviceMemoryProperties2Ptr;
use Bic\Vulkan\VkPhysicalDeviceProperties2;
use Bic\Vulkan\VkPhysicalDeviceProperties2Ptr;
use Bic\Vulkan\VkPhysicalDeviceSparseImageFormatInfo2;
use Bic\Vulkan\VkPhysicalDeviceSparseImageFormatInfo2Ptr;
use Bic\Vulkan\VkQueueFamilyProperties2;
use Bic\Vulkan\VkQueueFamilyProperties2Ptr;
use Bic\Vulkan\VkSamplerYcbcrConversion;
use Bic\Vulkan\VkSamplerYcbcrConversionCreateInfo;
use Bic\Vulkan\VkSamplerYcbcrConversionCreateInfoPtr;
use Bic\Vulkan\VkSparseImageFormatProperties2;
use Bic\Vulkan\VkSparseImageFormatProperties2Ptr;
use Bic\Vulkan\VkSparseImageMemoryRequirements2;
use Bic\Vulkan\VkSparseImageMemoryRequirements2Ptr;
use FFI\CData;
use FFI\CPointer;

/**
 * @mixin Vulkan11Interface
 * @version 1.1
 */
trait Vulkan11MethodsTrait
{
    /**
     * @param CData|null $pApiVersion
     * @return int
     * @since 1.1
     */
    public static function vkEnumerateInstanceVersion(?CData $pApiVersion): int
    {
        assert(Version::make(1, 1) >= self::$version, 'vkEnumerateInstanceVersion required Vulkan v1.1');

        return self::$ffi->vkEnumerateInstanceVersion($pApiVersion);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $bindInfoCount
     * @param CPointer<VkBindBufferMemoryInfo>|null $pBindInfos
     * @return int
     * @since 1.1
     */
    public static function vkBindBufferMemory2(CData $device, int $bindInfoCount, ?CData $pBindInfos): int
    {
        assert(Version::make(1, 1) >= self::$version, 'VkBindBufferMemoryInfo required Vulkan v1.1');

        return self::$ffi->vkBindBufferMemory2($device, $bindInfoCount, $pBindInfos);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $bindInfoCount
     * @param CPointer<VkBindImageMemoryInfo>|null $pBindInfos
     * @return int
     * @since 1.1
     */
    public static function vkBindImageMemory2(CData $device, int $bindInfoCount, ?CData $pBindInfos): int
    {
        assert(Version::make(1, 1) >= self::$version, 'VkBindImageMemoryInfo required Vulkan v1.1');

        return self::$ffi->vkBindImageMemory2($device, $bindInfoCount, $pBindInfos);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $heapIndex
     * @param int $localDeviceIndex
     * @param int $remoteDeviceIndex
     * @param CData|null $pPeerMemoryFeatures
     * @return void
     * @since 1.1
     */
    public static function vkGetDeviceGroupPeerMemoryFeatures(
        CData $device,
        int $heapIndex,
        int $localDeviceIndex,
        int $remoteDeviceIndex,
        ?CData $pPeerMemoryFeatures
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkPeerMemoryFeatureFlags required Vulkan v1.1');

        self::$ffi->vkGetDeviceGroupPeerMemoryFeatures($device, $heapIndex, $localDeviceIndex, $remoteDeviceIndex,
            $pPeerMemoryFeatures);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $deviceMask
     * @return void
     * @since 1.1
     */
    public static function vkCmdSetDeviceMask(CData $commandBuffer, int $deviceMask): void
    {
        assert(Version::make(1, 1) >= self::$version, 'vkCmdSetDeviceMask required Vulkan v1.1');

        self::$ffi->vkCmdSetDeviceMask($commandBuffer, $deviceMask);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $baseGroupX
     * @param int $baseGroupY
     * @param int $baseGroupZ
     * @param int $groupCountX
     * @param int $groupCountY
     * @param int $groupCountZ
     * @return void
     * @since 1.1
     */
    public static function vkCmdDispatchBase(
        CData $commandBuffer,
        int $baseGroupX,
        int $baseGroupY,
        int $baseGroupZ,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'vkCmdDispatchBase required Vulkan v1.1');

        self::$ffi->vkCmdDispatchBase($commandBuffer, $baseGroupX, $baseGroupY, $baseGroupZ, $groupCountX, $groupCountY,
            $groupCountZ);
    }

    /**
     * @param CData|VkInstance $instance
     * @param CData|null $pPhysicalDeviceGroupCount
     * @param CPointer<VkPhysicalDeviceGroupProperties>|null $pPhysicalDeviceGroupProperties
     * @return int
     * @since 1.1
     */
    public static function vkEnumeratePhysicalDeviceGroups(
        CData $instance,
        ?CData $pPhysicalDeviceGroupCount,
        ?CData $pPhysicalDeviceGroupProperties
    ): int {
        assert(Version::make(1, 1) >= self::$version, 'VkPhysicalDeviceGroupProperties required Vulkan v1.1');

        return self::$ffi->vkEnumeratePhysicalDeviceGroups($instance, $pPhysicalDeviceGroupCount,
            $pPhysicalDeviceGroupProperties);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkImageMemoryRequirementsInfo2>|null $pInfo
     * @param CPointer<VkMemoryRequirements2>|null $pMemoryRequirements
     * @return void
     * @since 1.1
     */
    public static function vkGetImageMemoryRequirements2(
        CData $device,
        ?CData $pInfo,
        ?CData $pMemoryRequirements
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkMemoryRequirements2 required Vulkan v1.1');

        self::$ffi->vkGetImageMemoryRequirements2($device, $pInfo, $pMemoryRequirements);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkBufferMemoryRequirementsInfo2>|null $pInfo
     * @param CPointer<VkMemoryRequirements2>|null $pMemoryRequirements
     * @return void
     * @since 1.1
     */
    public static function vkGetBufferMemoryRequirements2(
        CData $device,
        ?CData $pInfo,
        ?CData $pMemoryRequirements
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkMemoryRequirements2 required Vulkan v1.1');

        self::$ffi->vkGetBufferMemoryRequirements2($device, $pInfo, $pMemoryRequirements);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkImageSparseMemoryRequirementsInfo2>|null $pInfo
     * @param CData|null $pSparseMemoryRequirementCount
     * @param CPointer<VkSparseImageMemoryRequirements2>|null $pSparseMemoryRequirements
     * @return void
     * @since 1.1
     */
    public static function vkGetImageSparseMemoryRequirements2(
        CData $device,
        ?CData $pInfo,
        ?CData $pSparseMemoryRequirementCount,
        ?CData $pSparseMemoryRequirements
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkSparseImageMemoryRequirements2 required Vulkan v1.1');

        self::$ffi->vkGetImageSparseMemoryRequirements2($device, $pInfo, $pSparseMemoryRequirementCount,
            $pSparseMemoryRequirements);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceFeatures2>|null $pFeatures
     * @return void
     * @since 1.1
     */
    public static function vkGetPhysicalDeviceFeatures2(CData $physicalDevice, ?CData $pFeatures): void
    {
        assert(Version::make(1, 1) >= self::$version, 'VkPhysicalDeviceFeatures2 required Vulkan v1.1');

        self::$ffi->vkGetPhysicalDeviceFeatures2($physicalDevice, $pFeatures);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceProperties2>|null $pProperties
     * @return void
     * @since 1.1
     */
    public static function vkGetPhysicalDeviceProperties2(CData $physicalDevice, ?CData $pProperties): void
    {
        assert(Version::make(1, 1) >= self::$version, 'VkPhysicalDeviceProperties2 required Vulkan v1.1');

        self::$ffi->vkGetPhysicalDeviceProperties2($physicalDevice, $pProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param int $format
     * @param CPointer<VkFormatProperties2>|null $pFormatProperties
     * @return void
     * @since 1.1
     * @psalm-param VkFormat::* $format
     *
     */
    public static function vkGetPhysicalDeviceFormatProperties2(
        CData $physicalDevice,
        int $format,
        ?CData $pFormatProperties
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkFormatProperties2 required Vulkan v1.1');

        self::$ffi->vkGetPhysicalDeviceFormatProperties2($physicalDevice, $format, $pFormatProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceImageFormatInfo2>|null $pImageFormatInfo
     * @param CPointer<VkImageFormatProperties2>|null $pImageFormatProperties
     * @return int
     * @since 1.1
     */
    public static function vkGetPhysicalDeviceImageFormatProperties2(
        CData $physicalDevice,
        ?CData $pImageFormatInfo,
        ?CData $pImageFormatProperties
    ): int {
        assert(Version::make(1, 1) >= self::$version, 'VkImageFormatProperties2 required Vulkan v1.1');

        return self::$ffi->vkGetPhysicalDeviceImageFormatProperties2($physicalDevice, $pImageFormatInfo,
            $pImageFormatProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData|null $pQueueFamilyPropertyCount
     * @param CPointer<VkQueueFamilyProperties2>|null $pQueueFamilyProperties
     * @return void
     * @since 1.1
     */
    public static function vkGetPhysicalDeviceQueueFamilyProperties2(
        CData $physicalDevice,
        ?CData $pQueueFamilyPropertyCount,
        ?CData $pQueueFamilyProperties
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkQueueFamilyProperties2 required Vulkan v1.1');

        self::$ffi->vkGetPhysicalDeviceQueueFamilyProperties2($physicalDevice, $pQueueFamilyPropertyCount,
            $pQueueFamilyProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceMemoryProperties2>|null $pMemoryProperties
     * @return void
     * @since 1.1
     */
    public static function vkGetPhysicalDeviceMemoryProperties2(CData $physicalDevice, ?CData $pMemoryProperties): void
    {
        assert(Version::make(1, 1) >= self::$version, 'VkPhysicalDeviceMemoryProperties2 required Vulkan v1.1');

        self::$ffi->vkGetPhysicalDeviceMemoryProperties2($physicalDevice, $pMemoryProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceSparseImageFormatInfo2>|null $pFormatInfo
     * @param CData|null $pPropertyCount
     * @param CPointer<VkSparseImageFormatProperties2>|null $pProperties
     * @return void
     * @since 1.1
     */
    public static function vkGetPhysicalDeviceSparseImageFormatProperties2(
        CData $physicalDevice,
        ?CData $pFormatInfo,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkSparseImageFormatProperties2 required Vulkan v1.1');

        self::$ffi->vkGetPhysicalDeviceSparseImageFormatProperties2($physicalDevice, $pFormatInfo, $pPropertyCount,
            $pProperties);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkCommandPool $commandPool
     * @param int $flags
     * @return void
     * @since 1.1
     */
    public static function vkTrimCommandPool(CData $device, CData $commandPool, int $flags): void
    {
        assert(Version::make(1, 1) >= self::$version, 'vkTrimCommandPool required Vulkan v1.1');

        self::$ffi->vkTrimCommandPool($device, $commandPool, $flags);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkDeviceQueueInfo2>|null $pQueueInfo
     * @param CData|null $pQueue
     * @return void
     * @since 1.1
     */
    public static function vkGetDeviceQueue2(CData $device, ?CData $pQueueInfo, ?CData $pQueue): void
    {
        assert(Version::make(1, 1) >= self::$version, 'VkQueue required Vulkan v1.1');

        self::$ffi->vkGetDeviceQueue2($device, $pQueueInfo, $pQueue);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkSamplerYcbcrConversionCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pYcbcrConversion
     * @return int
     * @since 1.1
     */
    public static function vkCreateSamplerYcbcrConversion(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pYcbcrConversion
    ): int {
        assert(Version::make(1, 1) >= self::$version, 'VkSamplerYcbcrConversion required Vulkan v1.1');

        return self::$ffi->vkCreateSamplerYcbcrConversion($device, $pCreateInfo, $pAllocator, $pYcbcrConversion);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkSamplerYcbcrConversion $ycbcrConversion
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.1
     */
    public static function vkDestroySamplerYcbcrConversion(
        CData $device,
        CData $ycbcrConversion,
        ?CData $pAllocator
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.1');

        self::$ffi->vkDestroySamplerYcbcrConversion($device, $ycbcrConversion, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkDescriptorUpdateTemplateCreateInfo>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pDescriptorUpdateTemplate
     * @return int
     * @since 1.1
     */
    public static function vkCreateDescriptorUpdateTemplate(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pDescriptorUpdateTemplate
    ): int {
        assert(Version::make(1, 1) >= self::$version, 'VkDescriptorUpdateTemplate required Vulkan v1.1');

        return self::$ffi->vkCreateDescriptorUpdateTemplate($device, $pCreateInfo, $pAllocator,
            $pDescriptorUpdateTemplate);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorUpdateTemplate $descriptorUpdateTemplate
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.1
     */
    public static function vkDestroyDescriptorUpdateTemplate(
        CData $device,
        CData $descriptorUpdateTemplate,
        ?CData $pAllocator
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkAllocationCallbacks required Vulkan v1.1');

        self::$ffi->vkDestroyDescriptorUpdateTemplate($device, $descriptorUpdateTemplate, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorSet $descriptorSet
     * @param CData|VkDescriptorUpdateTemplate $descriptorUpdateTemplate
     * @param CData|null $pData
     * @return void
     * @since 1.1
     */
    public static function vkUpdateDescriptorSetWithTemplate(
        CData $device,
        CData $descriptorSet,
        CData $descriptorUpdateTemplate,
        ?CData $pData
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'void required Vulkan v1.1');

        self::$ffi->vkUpdateDescriptorSetWithTemplate($device, $descriptorSet, $descriptorUpdateTemplate, $pData);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceExternalBufferInfo>|null $pExternalBufferInfo
     * @param CPointer<VkExternalBufferProperties>|null $pExternalBufferProperties
     * @return void
     * @since 1.1
     */
    public static function vkGetPhysicalDeviceExternalBufferProperties(
        CData $physicalDevice,
        ?CData $pExternalBufferInfo,
        ?CData $pExternalBufferProperties
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkExternalBufferProperties required Vulkan v1.1');

        self::$ffi->vkGetPhysicalDeviceExternalBufferProperties($physicalDevice, $pExternalBufferInfo,
            $pExternalBufferProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceExternalFenceInfo>|null $pExternalFenceInfo
     * @param CPointer<VkExternalFenceProperties>|null $pExternalFenceProperties
     * @return void
     * @since 1.1
     */
    public static function vkGetPhysicalDeviceExternalFenceProperties(
        CData $physicalDevice,
        ?CData $pExternalFenceInfo,
        ?CData $pExternalFenceProperties
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkExternalFenceProperties required Vulkan v1.1');

        self::$ffi->vkGetPhysicalDeviceExternalFenceProperties($physicalDevice, $pExternalFenceInfo,
            $pExternalFenceProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CPointer<VkPhysicalDeviceExternalSemaphoreInfo>|null $pExternalSemaphoreInfo
     * @param CPointer<VkExternalSemaphoreProperties>|null $pExternalSemaphoreProperties
     * @return void
     * @since 1.1
     */
    public static function vkGetPhysicalDeviceExternalSemaphoreProperties(
        CData $physicalDevice,
        ?CData $pExternalSemaphoreInfo,
        ?CData $pExternalSemaphoreProperties
    ): void {
        assert(Version::make(1, 1) >= self::$version, 'VkExternalSemaphoreProperties required Vulkan v1.1');

        self::$ffi->vkGetPhysicalDeviceExternalSemaphoreProperties($physicalDevice, $pExternalSemaphoreInfo,
            $pExternalSemaphoreProperties);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkDescriptorSetLayoutCreateInfo>|null $pCreateInfo
     * @param CPointer<VkDescriptorSetLayoutSupport>|null $pSupport
     * @return void
     * @since 1.1
     */
    public static function vkGetDescriptorSetLayoutSupport(CData $device, ?CData $pCreateInfo, ?CData $pSupport): void
    {
        assert(Version::make(1, 1) >= self::$version, 'VkDescriptorSetLayoutSupport required Vulkan v1.1');

        self::$ffi->vkGetDescriptorSetLayoutSupport($device, $pCreateInfo, $pSupport);
    }
}
