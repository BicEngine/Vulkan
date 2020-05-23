<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

use FFI\CData;
use Bic\Vulkan\Enum\VkFormat;
use Bic\Vulkan\VkAllocationCallbacksPtr;
use Bic\Vulkan\VkBindBufferMemoryInfoPtr;
use Bic\Vulkan\VkBindImageMemoryInfoPtr;
use Bic\Vulkan\VkBufferMemoryRequirementsInfo2Ptr;
use Bic\Vulkan\VkCommandBuffer;
use Bic\Vulkan\VkCommandPool;
use Bic\Vulkan\VkDescriptorSet;
use Bic\Vulkan\VkDescriptorSetLayoutCreateInfoPtr;
use Bic\Vulkan\VkDescriptorSetLayoutSupportPtr;
use Bic\Vulkan\VkDescriptorUpdateTemplate;
use Bic\Vulkan\VkDescriptorUpdateTemplateCreateInfoPtr;
use Bic\Vulkan\VkDevice;
use Bic\Vulkan\VkDeviceQueueInfo2Ptr;
use Bic\Vulkan\VkExternalBufferPropertiesPtr;
use Bic\Vulkan\VkExternalFencePropertiesPtr;
use Bic\Vulkan\VkExternalSemaphorePropertiesPtr;
use Bic\Vulkan\VkFormatProperties2Ptr;
use Bic\Vulkan\VkImageFormatProperties2Ptr;
use Bic\Vulkan\VkImageMemoryRequirementsInfo2Ptr;
use Bic\Vulkan\VkImageSparseMemoryRequirementsInfo2Ptr;
use Bic\Vulkan\VkInstance;
use Bic\Vulkan\VkMemoryRequirements2Ptr;
use Bic\Vulkan\VkPhysicalDevice;
use Bic\Vulkan\VkPhysicalDeviceExternalBufferInfoPtr;
use Bic\Vulkan\VkPhysicalDeviceExternalFenceInfoPtr;
use Bic\Vulkan\VkPhysicalDeviceExternalSemaphoreInfoPtr;
use Bic\Vulkan\VkPhysicalDeviceFeatures2Ptr;
use Bic\Vulkan\VkPhysicalDeviceGroupPropertiesPtr;
use Bic\Vulkan\VkPhysicalDeviceImageFormatInfo2Ptr;
use Bic\Vulkan\VkPhysicalDeviceMemoryProperties2Ptr;
use Bic\Vulkan\VkPhysicalDeviceProperties2Ptr;
use Bic\Vulkan\VkPhysicalDeviceSparseImageFormatInfo2Ptr;
use Bic\Vulkan\VkQueueFamilyProperties2Ptr;
use Bic\Vulkan\VkSamplerYcbcrConversion;
use Bic\Vulkan\VkSamplerYcbcrConversionCreateInfoPtr;
use Bic\Vulkan\VkSparseImageFormatProperties2Ptr;
use Bic\Vulkan\VkSparseImageMemoryRequirements2Ptr;

/**
 * @mixin Vulkan11Interface
 * @version 1.1
 */
trait Vulkan11MethodsTrait
{
    /**
     * @since 1.1
     * @param CData|null|\FFI\CIntPtr $pApiVersion <<Native("uint32_t*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkEnumerateInstanceVersion(?CData $pApiVersion): int
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'vkEnumerateInstanceVersion required Vulkan v1.1 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkEnumerateInstanceVersion($pApiVersion);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param int $bindInfoCount <<Native("uint32_t")>>
     * @param CData|null|VkBindBufferMemoryInfoPtr $pBindInfos <<Native("const VkBindBufferMemoryInfo*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkBindBufferMemory2(CData $device, int $bindInfoCount, ?CData $pBindInfos): int
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkBindBufferMemoryInfo required Vulkan v1.1 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkBindBufferMemory2($device, $bindInfoCount, $pBindInfos);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param int $bindInfoCount <<Native("uint32_t")>>
     * @param CData|null|VkBindImageMemoryInfoPtr $pBindInfos <<Native("const VkBindImageMemoryInfo*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkBindImageMemory2(CData $device, int $bindInfoCount, ?CData $pBindInfos): int
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkBindImageMemoryInfo required Vulkan v1.1 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkBindImageMemory2($device, $bindInfoCount, $pBindInfos);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param int $heapIndex <<Native("uint32_t")>>
     * @param int $localDeviceIndex <<Native("uint32_t")>>
     * @param int $remoteDeviceIndex <<Native("uint32_t")>>
     * @param CData|null $pPeerMemoryFeatures <<Native("VkPeerMemoryFeatureFlags*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetDeviceGroupPeerMemoryFeatures(CData $device, int $heapIndex, int $localDeviceIndex, int $remoteDeviceIndex, ?CData $pPeerMemoryFeatures): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkPeerMemoryFeatureFlags required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetDeviceGroupPeerMemoryFeatures($device, $heapIndex, $localDeviceIndex, $remoteDeviceIndex, $pPeerMemoryFeatures);
    }

    /**
     * @since 1.1
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $deviceMask <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdSetDeviceMask(CData $commandBuffer, int $deviceMask): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'vkCmdSetDeviceMask required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdSetDeviceMask($commandBuffer, $deviceMask);
    }

    /**
     * @since 1.1
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param int $baseGroupX <<Native("uint32_t")>>
     * @param int $baseGroupY <<Native("uint32_t")>>
     * @param int $baseGroupZ <<Native("uint32_t")>>
     * @param int $groupCountX <<Native("uint32_t")>>
     * @param int $groupCountY <<Native("uint32_t")>>
     * @param int $groupCountZ <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdDispatchBase(
        CData $commandBuffer,
        int $baseGroupX,
        int $baseGroupY,
        int $baseGroupZ,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ
    ): void {
        assert(version_compare($this->info->version, '1.1') >= 0, 'vkCmdDispatchBase required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdDispatchBase($commandBuffer, $baseGroupX, $baseGroupY, $baseGroupZ, $groupCountX, $groupCountY, $groupCountZ);
    }

    /**
     * @since 1.1
     * @param CData|VkInstance $instance <<Native("VkInstance")>>
     * @param CData|null|\FFI\CIntPtr $pPhysicalDeviceGroupCount <<Native("uint32_t*")>>
     * @param CData|null|VkPhysicalDeviceGroupPropertiesPtr $pPhysicalDeviceGroupProperties <<Native("VkPhysicalDeviceGroupProperties*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkEnumeratePhysicalDeviceGroups(CData $instance, ?CData $pPhysicalDeviceGroupCount, ?CData $pPhysicalDeviceGroupProperties): int
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkPhysicalDeviceGroupProperties required Vulkan v1.1 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkEnumeratePhysicalDeviceGroups($instance, $pPhysicalDeviceGroupCount, $pPhysicalDeviceGroupProperties);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkImageMemoryRequirementsInfo2Ptr $pInfo <<Native("const VkImageMemoryRequirementsInfo2*")>>
     * @param CData|null|VkMemoryRequirements2Ptr $pMemoryRequirements <<Native("VkMemoryRequirements2*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetImageMemoryRequirements2(CData $device, ?CData $pInfo, ?CData $pMemoryRequirements): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkMemoryRequirements2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetImageMemoryRequirements2($device, $pInfo, $pMemoryRequirements);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkBufferMemoryRequirementsInfo2Ptr $pInfo <<Native("const VkBufferMemoryRequirementsInfo2*")>>
     * @param CData|null|VkMemoryRequirements2Ptr $pMemoryRequirements <<Native("VkMemoryRequirements2*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetBufferMemoryRequirements2(CData $device, ?CData $pInfo, ?CData $pMemoryRequirements): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkMemoryRequirements2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetBufferMemoryRequirements2($device, $pInfo, $pMemoryRequirements);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkImageSparseMemoryRequirementsInfo2Ptr $pInfo <<Native("const VkImageSparseMemoryRequirementsInfo2*")>>
     * @param CData|null|\FFI\CIntPtr $pSparseMemoryRequirementCount <<Native("uint32_t*")>>
     * @param CData|null|VkSparseImageMemoryRequirements2Ptr $pSparseMemoryRequirements <<Native("VkSparseImageMemoryRequirements2*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetImageSparseMemoryRequirements2(CData $device, ?CData $pInfo, ?CData $pSparseMemoryRequirementCount, ?CData $pSparseMemoryRequirements): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkSparseImageMemoryRequirements2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetImageSparseMemoryRequirements2($device, $pInfo, $pSparseMemoryRequirementCount, $pSparseMemoryRequirements);
    }

    /**
     * @since 1.1
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceFeatures2Ptr $pFeatures <<Native("VkPhysicalDeviceFeatures2*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceFeatures2(CData $physicalDevice, ?CData $pFeatures): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkPhysicalDeviceFeatures2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceFeatures2($physicalDevice, $pFeatures);
    }

    /**
     * @since 1.1
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceProperties2Ptr $pProperties <<Native("VkPhysicalDeviceProperties2*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceProperties2(CData $physicalDevice, ?CData $pProperties): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkPhysicalDeviceProperties2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceProperties2($physicalDevice, $pProperties);
    }

    /**
     * @since 1.1
     * @psalm-param VkFormat::* $format
     *
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param int $format <<Native("VkFormat")>>
     * @param CData|null|VkFormatProperties2Ptr $pFormatProperties <<Native("VkFormatProperties2*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceFormatProperties2(CData $physicalDevice, int $format, ?CData $pFormatProperties): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkFormatProperties2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceFormatProperties2($physicalDevice, $format, $pFormatProperties);
    }

    /**
     * @since 1.1
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceImageFormatInfo2Ptr $pImageFormatInfo <<Native("const VkPhysicalDeviceImageFormatInfo2*")>>
     * @param CData|null|VkImageFormatProperties2Ptr $pImageFormatProperties <<Native("VkImageFormatProperties2*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkGetPhysicalDeviceImageFormatProperties2(CData $physicalDevice, ?CData $pImageFormatInfo, ?CData $pImageFormatProperties): int
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkImageFormatProperties2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetPhysicalDeviceImageFormatProperties2($physicalDevice, $pImageFormatInfo, $pImageFormatProperties);
    }

    /**
     * @since 1.1
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|\FFI\CIntPtr $pQueueFamilyPropertyCount <<Native("uint32_t*")>>
     * @param CData|null|VkQueueFamilyProperties2Ptr $pQueueFamilyProperties <<Native("VkQueueFamilyProperties2*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceQueueFamilyProperties2(CData $physicalDevice, ?CData $pQueueFamilyPropertyCount, ?CData $pQueueFamilyProperties): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkQueueFamilyProperties2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceQueueFamilyProperties2($physicalDevice, $pQueueFamilyPropertyCount, $pQueueFamilyProperties);
    }

    /**
     * @since 1.1
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceMemoryProperties2Ptr $pMemoryProperties <<Native("VkPhysicalDeviceMemoryProperties2*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceMemoryProperties2(CData $physicalDevice, ?CData $pMemoryProperties): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkPhysicalDeviceMemoryProperties2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceMemoryProperties2($physicalDevice, $pMemoryProperties);
    }

    /**
     * @since 1.1
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceSparseImageFormatInfo2Ptr $pFormatInfo <<Native("const VkPhysicalDeviceSparseImageFormatInfo2*")>>
     * @param CData|null|\FFI\CIntPtr $pPropertyCount <<Native("uint32_t*")>>
     * @param CData|null|VkSparseImageFormatProperties2Ptr $pProperties <<Native("VkSparseImageFormatProperties2*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceSparseImageFormatProperties2(CData $physicalDevice, ?CData $pFormatInfo, ?CData $pPropertyCount, ?CData $pProperties): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkSparseImageFormatProperties2 required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceSparseImageFormatProperties2($physicalDevice, $pFormatInfo, $pPropertyCount, $pProperties);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkCommandPool $commandPool <<Native("VkCommandPool")>>
     * @param int $flags <<Native("VkCommandPoolTrimFlags")>>
     * @return void <<Native("void")>>
     */
    public function vkTrimCommandPool(CData $device, CData $commandPool, int $flags): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'vkTrimCommandPool required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkTrimCommandPool($device, $commandPool, $flags);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkDeviceQueueInfo2Ptr $pQueueInfo <<Native("const VkDeviceQueueInfo2*")>>
     * @param CData|null $pQueue <<Native("VkQueue*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetDeviceQueue2(CData $device, ?CData $pQueueInfo, ?CData $pQueue): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkQueue required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetDeviceQueue2($device, $pQueueInfo, $pQueue);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkSamplerYcbcrConversionCreateInfoPtr $pCreateInfo <<Native("const VkSamplerYcbcrConversionCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pYcbcrConversion <<Native("VkSamplerYcbcrConversion*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateSamplerYcbcrConversion(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pYcbcrConversion): int
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkSamplerYcbcrConversion required Vulkan v1.1 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateSamplerYcbcrConversion($device, $pCreateInfo, $pAllocator, $pYcbcrConversion);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkSamplerYcbcrConversion $ycbcrConversion <<Native("VkSamplerYcbcrConversion")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroySamplerYcbcrConversion(CData $device, CData $ycbcrConversion, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkAllocationCallbacks required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroySamplerYcbcrConversion($device, $ycbcrConversion, $pAllocator);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkDescriptorUpdateTemplateCreateInfoPtr $pCreateInfo <<Native("const VkDescriptorUpdateTemplateCreateInfo*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pDescriptorUpdateTemplate <<Native("VkDescriptorUpdateTemplate*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateDescriptorUpdateTemplate(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pDescriptorUpdateTemplate): int
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkDescriptorUpdateTemplate required Vulkan v1.1 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateDescriptorUpdateTemplate($device, $pCreateInfo, $pAllocator, $pDescriptorUpdateTemplate);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDescriptorUpdateTemplate $descriptorUpdateTemplate <<Native("VkDescriptorUpdateTemplate")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @return void <<Native("void")>>
     */
    public function vkDestroyDescriptorUpdateTemplate(CData $device, CData $descriptorUpdateTemplate, ?CData $pAllocator): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkAllocationCallbacks required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkDestroyDescriptorUpdateTemplate($device, $descriptorUpdateTemplate, $pAllocator);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkDescriptorSet $descriptorSet <<Native("VkDescriptorSet")>>
     * @param CData|VkDescriptorUpdateTemplate $descriptorUpdateTemplate <<Native("VkDescriptorUpdateTemplate")>>
     * @param CData|null $pData <<Native("const void*")>>
     * @return void <<Native("void")>>
     */
    public function vkUpdateDescriptorSetWithTemplate(CData $device, CData $descriptorSet, CData $descriptorUpdateTemplate, ?CData $pData): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'void required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkUpdateDescriptorSetWithTemplate($device, $descriptorSet, $descriptorUpdateTemplate, $pData);
    }

    /**
     * @since 1.1
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceExternalBufferInfoPtr $pExternalBufferInfo <<Native("const VkPhysicalDeviceExternalBufferInfo*")>>
     * @param CData|null|VkExternalBufferPropertiesPtr $pExternalBufferProperties <<Native("VkExternalBufferProperties*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceExternalBufferProperties(CData $physicalDevice, ?CData $pExternalBufferInfo, ?CData $pExternalBufferProperties): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkExternalBufferProperties required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceExternalBufferProperties($physicalDevice, $pExternalBufferInfo, $pExternalBufferProperties);
    }

    /**
     * @since 1.1
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceExternalFenceInfoPtr $pExternalFenceInfo <<Native("const VkPhysicalDeviceExternalFenceInfo*")>>
     * @param CData|null|VkExternalFencePropertiesPtr $pExternalFenceProperties <<Native("VkExternalFenceProperties*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceExternalFenceProperties(CData $physicalDevice, ?CData $pExternalFenceInfo, ?CData $pExternalFenceProperties): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkExternalFenceProperties required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceExternalFenceProperties($physicalDevice, $pExternalFenceInfo, $pExternalFenceProperties);
    }

    /**
     * @since 1.1
     * @param CData|VkPhysicalDevice $physicalDevice <<Native("VkPhysicalDevice")>>
     * @param CData|null|VkPhysicalDeviceExternalSemaphoreInfoPtr $pExternalSemaphoreInfo <<Native("const VkPhysicalDeviceExternalSemaphoreInfo*")>>
     * @param CData|null|VkExternalSemaphorePropertiesPtr $pExternalSemaphoreProperties <<Native("VkExternalSemaphoreProperties*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetPhysicalDeviceExternalSemaphoreProperties(CData $physicalDevice, ?CData $pExternalSemaphoreInfo, ?CData $pExternalSemaphoreProperties): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkExternalSemaphoreProperties required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetPhysicalDeviceExternalSemaphoreProperties($physicalDevice, $pExternalSemaphoreInfo, $pExternalSemaphoreProperties);
    }

    /**
     * @since 1.1
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkDescriptorSetLayoutCreateInfoPtr $pCreateInfo <<Native("const VkDescriptorSetLayoutCreateInfo*")>>
     * @param CData|null|VkDescriptorSetLayoutSupportPtr $pSupport <<Native("VkDescriptorSetLayoutSupport*")>>
     * @return void <<Native("void")>>
     */
    public function vkGetDescriptorSetLayoutSupport(CData $device, ?CData $pCreateInfo, ?CData $pSupport): void
    {
        assert(version_compare($this->info->version, '1.1') >= 0, 'VkDescriptorSetLayoutSupport required Vulkan v1.1 (current v' . $this->info->version . ')');

        $this->info->ffi->vkGetDescriptorSetLayoutSupport($device, $pCreateInfo, $pSupport);
    }
}
