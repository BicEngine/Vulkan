<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

use Bic\Vulkan\VkFormat;
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
    public function enumerateInstanceVersion(?CData $pApiVersion): int
    {
        assert(Version::make(1, 1) >= $this->version, 'vkEnumerateInstanceVersion required Vulkan v1.1');

        return $this->ffi->vkEnumerateInstanceVersion($pApiVersion);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $bindInfoCount
     * @param CData<VkBindBufferMemoryInfo>|null $pBindInfos
     * @return int
     * @since 1.1
     */
    public function bindBufferMemory2(CData $device, int $bindInfoCount, ?CData $pBindInfos): int
    {
        assert(Version::make(1, 1) >= $this->version, 'VkBindBufferMemoryInfo required Vulkan v1.1');

        return $this->ffi->vkBindBufferMemory2($device, $bindInfoCount, $pBindInfos);
    }

    /**
     * @param CData|VkDevice $device
     * @param int $bindInfoCount
     * @param CData<VkBindImageMemoryInfo>|null $pBindInfos
     * @return int
     * @since 1.1
     */
    public function bindImageMemory2(CData $device, int $bindInfoCount, ?CData $pBindInfos): int
    {
        assert(Version::make(1, 1) >= $this->version, 'VkBindImageMemoryInfo required Vulkan v1.1');

        return $this->ffi->vkBindImageMemory2($device, $bindInfoCount, $pBindInfos);
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
    public function getDeviceGroupPeerMemoryFeatures(
        CData $device,
        int $heapIndex,
        int $localDeviceIndex,
        int $remoteDeviceIndex,
        ?CData $pPeerMemoryFeatures
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkPeerMemoryFeatureFlags required Vulkan v1.1');

        $this->ffi->vkGetDeviceGroupPeerMemoryFeatures($device, $heapIndex, $localDeviceIndex, $remoteDeviceIndex,
            $pPeerMemoryFeatures);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param int $deviceMask
     * @return void
     * @since 1.1
     */
    public function cmdSetDeviceMask(CData $commandBuffer, int $deviceMask): void
    {
        assert(Version::make(1, 1) >= $this->version, 'vkCmdSetDeviceMask required Vulkan v1.1');

        $this->ffi->vkCmdSetDeviceMask($commandBuffer, $deviceMask);
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
    public function cmdDispatchBase(
        CData $commandBuffer,
        int $baseGroupX,
        int $baseGroupY,
        int $baseGroupZ,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'vkCmdDispatchBase required Vulkan v1.1');

        $this->ffi->vkCmdDispatchBase($commandBuffer, $baseGroupX, $baseGroupY, $baseGroupZ, $groupCountX, $groupCountY,
            $groupCountZ);
    }

    /**
     * @param CData|VkInstance $instance
     * @param CData|null $pPhysicalDeviceGroupCount
     * @param CData<VkPhysicalDeviceGroupProperties>|null $pPhysicalDeviceGroupProperties
     * @return int
     * @since 1.1
     */
    public function enumeratePhysicalDeviceGroups(
        CData $instance,
        ?CData $pPhysicalDeviceGroupCount,
        ?CData $pPhysicalDeviceGroupProperties
    ): int {
        assert(Version::make(1, 1) >= $this->version, 'VkPhysicalDeviceGroupProperties required Vulkan v1.1');

        return $this->ffi->vkEnumeratePhysicalDeviceGroups($instance, $pPhysicalDeviceGroupCount,
            $pPhysicalDeviceGroupProperties);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkImageMemoryRequirementsInfo2>|null $pInfo
     * @param CData<VkMemoryRequirements2>|null $pMemoryRequirements
     * @return void
     * @since 1.1
     */
    public function getImageMemoryRequirements2(
        CData $device,
        ?CData $pInfo,
        ?CData $pMemoryRequirements
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkMemoryRequirements2 required Vulkan v1.1');

        $this->ffi->vkGetImageMemoryRequirements2($device, $pInfo, $pMemoryRequirements);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkBufferMemoryRequirementsInfo2>|null $pInfo
     * @param CData<VkMemoryRequirements2>|null $pMemoryRequirements
     * @return void
     * @since 1.1
     */
    public function getBufferMemoryRequirements2(
        CData $device,
        ?CData $pInfo,
        ?CData $pMemoryRequirements
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkMemoryRequirements2 required Vulkan v1.1');

        $this->ffi->vkGetBufferMemoryRequirements2($device, $pInfo, $pMemoryRequirements);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkImageSparseMemoryRequirementsInfo2>|null $pInfo
     * @param CData|null $pSparseMemoryRequirementCount
     * @param CData<VkSparseImageMemoryRequirements2>|null $pSparseMemoryRequirements
     * @return void
     * @since 1.1
     */
    public function getImageSparseMemoryRequirements2(
        CData $device,
        ?CData $pInfo,
        ?CData $pSparseMemoryRequirementCount,
        ?CData $pSparseMemoryRequirements
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkSparseImageMemoryRequirements2 required Vulkan v1.1');

        $this->ffi->vkGetImageSparseMemoryRequirements2($device, $pInfo, $pSparseMemoryRequirementCount,
            $pSparseMemoryRequirements);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceFeatures2>|null $pFeatures
     * @return void
     * @since 1.1
     */
    public function getPhysicalDeviceFeatures2(CData $physicalDevice, ?CData $pFeatures): void
    {
        assert(Version::make(1, 1) >= $this->version, 'VkPhysicalDeviceFeatures2 required Vulkan v1.1');

        $this->ffi->vkGetPhysicalDeviceFeatures2($physicalDevice, $pFeatures);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceProperties2>|null $pProperties
     * @return void
     * @since 1.1
     */
    public function getPhysicalDeviceProperties2(CData $physicalDevice, ?CData $pProperties): void
    {
        assert(Version::make(1, 1) >= $this->version, 'VkPhysicalDeviceProperties2 required Vulkan v1.1');

        $this->ffi->vkGetPhysicalDeviceProperties2($physicalDevice, $pProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param int $format
     * @param CData<VkFormatProperties2>|null $pFormatProperties
     * @return void
     * @since 1.1
     * @psalm-param VkFormat::* $format
     *
     */
    public function getPhysicalDeviceFormatProperties2(
        CData $physicalDevice,
        int $format,
        ?CData $pFormatProperties
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkFormatProperties2 required Vulkan v1.1');

        $this->ffi->vkGetPhysicalDeviceFormatProperties2($physicalDevice, $format, $pFormatProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceImageFormatInfo2>|null $pImageFormatInfo
     * @param CData<VkImageFormatProperties2>|null $pImageFormatProperties
     * @return int
     * @since 1.1
     */
    public function getPhysicalDeviceImageFormatProperties2(
        CData $physicalDevice,
        ?CData $pImageFormatInfo,
        ?CData $pImageFormatProperties
    ): int {
        assert(Version::make(1, 1) >= $this->version, 'VkImageFormatProperties2 required Vulkan v1.1');

        return $this->ffi->vkGetPhysicalDeviceImageFormatProperties2($physicalDevice, $pImageFormatInfo,
            $pImageFormatProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData|null $pQueueFamilyPropertyCount
     * @param CData<VkQueueFamilyProperties2>|null $pQueueFamilyProperties
     * @return void
     * @since 1.1
     */
    public function getPhysicalDeviceQueueFamilyProperties2(
        CData $physicalDevice,
        ?CData $pQueueFamilyPropertyCount,
        ?CData $pQueueFamilyProperties
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkQueueFamilyProperties2 required Vulkan v1.1');

        $this->ffi->vkGetPhysicalDeviceQueueFamilyProperties2($physicalDevice, $pQueueFamilyPropertyCount,
            $pQueueFamilyProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceMemoryProperties2>|null $pMemoryProperties
     * @return void
     * @since 1.1
     */
    public function getPhysicalDeviceMemoryProperties2(CData $physicalDevice, ?CData $pMemoryProperties): void
    {
        assert(Version::make(1, 1) >= $this->version, 'VkPhysicalDeviceMemoryProperties2 required Vulkan v1.1');

        $this->ffi->vkGetPhysicalDeviceMemoryProperties2($physicalDevice, $pMemoryProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceSparseImageFormatInfo2>|null $pFormatInfo
     * @param CData|null $pPropertyCount
     * @param CData<VkSparseImageFormatProperties2>|null $pProperties
     * @return void
     * @since 1.1
     */
    public function getPhysicalDeviceSparseImageFormatProperties2(
        CData $physicalDevice,
        ?CData $pFormatInfo,
        ?CData $pPropertyCount,
        ?CData $pProperties
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkSparseImageFormatProperties2 required Vulkan v1.1');

        $this->ffi->vkGetPhysicalDeviceSparseImageFormatProperties2($physicalDevice, $pFormatInfo, $pPropertyCount,
            $pProperties);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkCommandPool $commandPool
     * @param int $flags
     * @return void
     * @since 1.1
     */
    public function trimCommandPool(CData $device, CData $commandPool, int $flags): void
    {
        assert(Version::make(1, 1) >= $this->version, 'vkTrimCommandPool required Vulkan v1.1');

        $this->ffi->vkTrimCommandPool($device, $commandPool, $flags);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkDeviceQueueInfo2>|null $pQueueInfo
     * @param CData|null $pQueue
     * @return void
     * @since 1.1
     */
    public function getDeviceQueue2(CData $device, ?CData $pQueueInfo, ?CData $pQueue): void
    {
        assert(Version::make(1, 1) >= $this->version, 'VkQueue required Vulkan v1.1');

        $this->ffi->vkGetDeviceQueue2($device, $pQueueInfo, $pQueue);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkSamplerYcbcrConversionCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pYcbcrConversion
     * @return int
     * @since 1.1
     */
    public function createSamplerYcbcrConversion(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pYcbcrConversion
    ): int {
        assert(Version::make(1, 1) >= $this->version, 'VkSamplerYcbcrConversion required Vulkan v1.1');

        return $this->ffi->vkCreateSamplerYcbcrConversion($device, $pCreateInfo, $pAllocator, $pYcbcrConversion);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkSamplerYcbcrConversion $ycbcrConversion
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.1
     */
    public function destroySamplerYcbcrConversion(
        CData $device,
        CData $ycbcrConversion,
        ?CData $pAllocator
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.1');

        $this->ffi->vkDestroySamplerYcbcrConversion($device, $ycbcrConversion, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkDescriptorUpdateTemplateCreateInfo>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pDescriptorUpdateTemplate
     * @return int
     * @since 1.1
     */
    public function createDescriptorUpdateTemplate(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pDescriptorUpdateTemplate
    ): int {
        assert(Version::make(1, 1) >= $this->version, 'VkDescriptorUpdateTemplate required Vulkan v1.1');

        return $this->ffi->vkCreateDescriptorUpdateTemplate($device, $pCreateInfo, $pAllocator,
            $pDescriptorUpdateTemplate);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorUpdateTemplate $descriptorUpdateTemplate
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @return void
     * @since 1.1
     */
    public function destroyDescriptorUpdateTemplate(
        CData $device,
        CData $descriptorUpdateTemplate,
        ?CData $pAllocator
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkAllocationCallbacks required Vulkan v1.1');

        $this->ffi->vkDestroyDescriptorUpdateTemplate($device, $descriptorUpdateTemplate, $pAllocator);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkDescriptorSet $descriptorSet
     * @param CData|VkDescriptorUpdateTemplate $descriptorUpdateTemplate
     * @param CData|null $pData
     * @return void
     * @since 1.1
     */
    public function updateDescriptorSetWithTemplate(
        CData $device,
        CData $descriptorSet,
        CData $descriptorUpdateTemplate,
        ?CData $pData
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'void required Vulkan v1.1');

        $this->ffi->vkUpdateDescriptorSetWithTemplate($device, $descriptorSet, $descriptorUpdateTemplate, $pData);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceExternalBufferInfo>|null $pExternalBufferInfo
     * @param CData<VkExternalBufferProperties>|null $pExternalBufferProperties
     * @return void
     * @since 1.1
     */
    public function getPhysicalDeviceExternalBufferProperties(
        CData $physicalDevice,
        ?CData $pExternalBufferInfo,
        ?CData $pExternalBufferProperties
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkExternalBufferProperties required Vulkan v1.1');

        $this->ffi->vkGetPhysicalDeviceExternalBufferProperties($physicalDevice, $pExternalBufferInfo,
            $pExternalBufferProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceExternalFenceInfo>|null $pExternalFenceInfo
     * @param CData<VkExternalFenceProperties>|null $pExternalFenceProperties
     * @return void
     * @since 1.1
     */
    public function getPhysicalDeviceExternalFenceProperties(
        CData $physicalDevice,
        ?CData $pExternalFenceInfo,
        ?CData $pExternalFenceProperties
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkExternalFenceProperties required Vulkan v1.1');

        $this->ffi->vkGetPhysicalDeviceExternalFenceProperties($physicalDevice, $pExternalFenceInfo,
            $pExternalFenceProperties);
    }

    /**
     * @param CData|VkPhysicalDevice $physicalDevice
     * @param CData<VkPhysicalDeviceExternalSemaphoreInfo>|null $pExternalSemaphoreInfo
     * @param CData<VkExternalSemaphoreProperties>|null $pExternalSemaphoreProperties
     * @return void
     * @since 1.1
     */
    public function getPhysicalDeviceExternalSemaphoreProperties(
        CData $physicalDevice,
        ?CData $pExternalSemaphoreInfo,
        ?CData $pExternalSemaphoreProperties
    ): void {
        assert(Version::make(1, 1) >= $this->version, 'VkExternalSemaphoreProperties required Vulkan v1.1');

        $this->ffi->vkGetPhysicalDeviceExternalSemaphoreProperties($physicalDevice, $pExternalSemaphoreInfo,
            $pExternalSemaphoreProperties);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkDescriptorSetLayoutCreateInfo>|null $pCreateInfo
     * @param CData<VkDescriptorSetLayoutSupport>|null $pSupport
     * @return void
     * @since 1.1
     */
    public function getDescriptorSetLayoutSupport(CData $device, ?CData $pCreateInfo, ?CData $pSupport): void
    {
        assert(Version::make(1, 1) >= $this->version, 'VkDescriptorSetLayoutSupport required Vulkan v1.1');

        $this->ffi->vkGetDescriptorSetLayoutSupport($device, $pCreateInfo, $pSupport);
    }
}
