<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

use FFI\CChar;
use FFI\CData;
use FFI\CFloatPtr;
use FFI\CIntPtr;
use FFI\CStruct;

/**
 * @mixin CStruct
 */
final class VkInstance extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDevice extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDevice extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkQueue extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkSemaphore extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkCommandBuffer extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkFence extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDeviceMemory extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkBuffer extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkImage extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkEvent extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkQueryPool extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkBufferView extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkImageView extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkShaderModule extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkPipelineCache extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkPipelineLayout extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkRenderPass extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkPipeline extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDescriptorSetLayout extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkSampler extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDescriptorPool extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDescriptorSet extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkFramebuffer extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkCommandPool extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkApplicationInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var string|CData|CChar[]|null */
    public ?CData $pApplicationName;

    public int $applicationVersion;

    /** @var string|CData|CChar[]|null */
    public ?CData $pEngineName;

    public int $engineVersion;

    public int $apiVersion;
}

/**
 * @mixin CStruct
 */
final class VkInstanceCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public ?CData $pApplicationInfo;

    public int $enabledLayerCount;

    /** @var CData|string[]|null */
    public ?CData $ppEnabledLayerNames;

    public int $enabledExtensionCount;

    /** @var CData|string[]|null */
    public ?CData $ppEnabledExtensionNames;
}

/**
 * @mixin CStruct
 */
final class VkAllocationCallbacks extends CData
{
    public ?CData $pUserData;

    public ?CData $pfnAllocation;

    public ?CData $pfnReallocation;

    public ?CData $pfnFree;

    public ?CData $pfnInternalAllocation;

    public ?CData $pfnInternalFree;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceFeatures extends CData
{
    public int $robustBufferAccess;

    public int $fullDrawIndexUint32;

    public int $imageCubeArray;

    public int $independentBlend;

    public int $geometryShader;

    public int $tessellationShader;

    public int $sampleRateShading;

    public int $dualSrcBlend;

    public int $logicOp;

    public int $multiDrawIndirect;

    public int $drawIndirectFirstInstance;

    public int $depthClamp;

    public int $depthBiasClamp;

    public int $fillModeNonSolid;

    public int $depthBounds;

    public int $wideLines;

    public int $largePoints;

    public int $alphaToOne;

    public int $multiViewport;

    public int $samplerAnisotropy;

    public int $textureCompressionETC2;

    public int $textureCompressionASTC_LDR;

    public int $textureCompressionBC;

    public int $occlusionQueryPrecise;

    public int $pipelineStatisticsQuery;

    public int $vertexPipelineStoresAndAtomics;

    public int $fragmentStoresAndAtomics;

    public int $shaderTessellationAndGeometryPointSize;

    public int $shaderImageGatherExtended;

    public int $shaderStorageImageExtendedFormats;

    public int $shaderStorageImageMultisample;

    public int $shaderStorageImageReadWithoutFormat;

    public int $shaderStorageImageWriteWithoutFormat;

    public int $shaderUniformBufferArrayDynamicIndexing;

    public int $shaderSampledImageArrayDynamicIndexing;

    public int $shaderStorageBufferArrayDynamicIndexing;

    public int $shaderStorageImageArrayDynamicIndexing;

    public int $shaderClipDistance;

    public int $shaderCullDistance;

    public int $shaderFloat64;

    public int $shaderInt64;

    public int $shaderInt16;

    public int $shaderResourceResidency;

    public int $shaderResourceMinLod;

    public int $sparseBinding;

    public int $sparseResidencyBuffer;

    public int $sparseResidencyImage2D;

    public int $sparseResidencyImage3D;

    public int $sparseResidency2Samples;

    public int $sparseResidency4Samples;

    public int $sparseResidency8Samples;

    public int $sparseResidency16Samples;

    public int $sparseResidencyAliased;

    public int $variableMultisampleRate;

    public int $inheritedQueries;
}

/**
 * @mixin CStruct
 */
final class VkFormatProperties extends CData
{
    public int $linearTilingFeatures;

    public int $optimalTilingFeatures;

    public int $bufferFeatures;
}

/**
 * @mixin CStruct
 */
final class VkExtent3D extends CData
{
    public int $width;

    public int $height;

    public int $depth;
}

/**
 * @mixin CStruct
 */
final class VkImageFormatProperties extends CData
{
    public VkExtent3D $maxExtent;

    public int $maxMipLevels;

    public int $maxArrayLayers;

    public int $sampleCounts;

    public int $maxResourceSize;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceLimits extends CData
{
    public int $maxImageDimension1D;

    public int $maxImageDimension2D;

    public int $maxImageDimension3D;

    public int $maxImageDimensionCube;

    public int $maxImageArrayLayers;

    public int $maxTexelBufferElements;

    public int $maxUniformBufferRange;

    public int $maxStorageBufferRange;

    public int $maxPushConstantsSize;

    public int $maxMemoryAllocationCount;

    public int $maxSamplerAllocationCount;

    public int $bufferImageGranularity;

    public int $sparseAddressSpaceSize;

    public int $maxBoundDescriptorSets;

    public int $maxPerStageDescriptorSamplers;

    public int $maxPerStageDescriptorUniformBuffers;

    public int $maxPerStageDescriptorStorageBuffers;

    public int $maxPerStageDescriptorSampledImages;

    public int $maxPerStageDescriptorStorageImages;

    public int $maxPerStageDescriptorInputAttachments;

    public int $maxPerStageResources;

    public int $maxDescriptorSetSamplers;

    public int $maxDescriptorSetUniformBuffers;

    public int $maxDescriptorSetUniformBuffersDynamic;

    public int $maxDescriptorSetStorageBuffers;

    public int $maxDescriptorSetStorageBuffersDynamic;

    public int $maxDescriptorSetSampledImages;

    public int $maxDescriptorSetStorageImages;

    public int $maxDescriptorSetInputAttachments;

    public int $maxVertexInputAttributes;

    public int $maxVertexInputBindings;

    public int $maxVertexInputAttributeOffset;

    public int $maxVertexInputBindingStride;

    public int $maxVertexOutputComponents;

    public int $maxTessellationGenerationLevel;

    public int $maxTessellationPatchSize;

    public int $maxTessellationControlPerVertexInputComponents;

    public int $maxTessellationControlPerVertexOutputComponents;

    public int $maxTessellationControlPerPatchOutputComponents;

    public int $maxTessellationControlTotalOutputComponents;

    public int $maxTessellationEvaluationInputComponents;

    public int $maxTessellationEvaluationOutputComponents;

    public int $maxGeometryShaderInvocations;

    public int $maxGeometryInputComponents;

    public int $maxGeometryOutputComponents;

    public int $maxGeometryOutputVertices;

    public int $maxGeometryTotalOutputComponents;

    public int $maxFragmentInputComponents;

    public int $maxFragmentOutputAttachments;

    public int $maxFragmentDualSrcAttachments;

    public int $maxFragmentCombinedOutputResources;

    public int $maxComputeSharedMemorySize;

    /** @var int[] */
    public array $maxComputeWorkGroupCount;

    public int $maxComputeWorkGroupInvocations;

    /** @var int[] */
    public array $maxComputeWorkGroupSize;

    public int $subPixelPrecisionBits;

    public int $subTexelPrecisionBits;

    public int $mipmapPrecisionBits;

    public int $maxDrawIndexedIndexValue;

    public int $maxDrawIndirectCount;

    public float $maxSamplerLodBias;

    public float $maxSamplerAnisotropy;

    public int $maxViewports;

    /** @var int[] */
    public array $maxViewportDimensions;

    /** @var float[] */
    public array $viewportBoundsRange;

    public int $viewportSubPixelBits;

    public int $minMemoryMapAlignment;

    public int $minTexelBufferOffsetAlignment;

    public int $minUniformBufferOffsetAlignment;

    public int $minStorageBufferOffsetAlignment;

    public int $minTexelOffset;

    public int $maxTexelOffset;

    public int $minTexelGatherOffset;

    public int $maxTexelGatherOffset;

    public float $minInterpolationOffset;

    public float $maxInterpolationOffset;

    public int $subPixelInterpolationOffsetBits;

    public int $maxFramebufferWidth;

    public int $maxFramebufferHeight;

    public int $maxFramebufferLayers;

    public int $framebufferColorSampleCounts;

    public int $framebufferDepthSampleCounts;

    public int $framebufferStencilSampleCounts;

    public int $framebufferNoAttachmentsSampleCounts;

    public int $maxColorAttachments;

    public int $sampledImageColorSampleCounts;

    public int $sampledImageIntegerSampleCounts;

    public int $sampledImageDepthSampleCounts;

    public int $sampledImageStencilSampleCounts;

    public int $storageImageSampleCounts;

    public int $maxSampleMaskWords;

    public int $timestampComputeAndGraphics;

    public float $timestampPeriod;

    public int $maxClipDistances;

    public int $maxCullDistances;

    public int $maxCombinedClipAndCullDistances;

    public int $discreteQueuePriorities;

    /** @var float[] */
    public array $pointSizeRange;

    /** @var float[] */
    public array $lineWidthRange;

    public float $pointSizeGranularity;

    public float $lineWidthGranularity;

    public int $strictLines;

    public int $standardSampleLocations;

    public int $optimalBufferCopyOffsetAlignment;

    public int $optimalBufferCopyRowPitchAlignment;

    public int $nonCoherentAtomSize;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSparseProperties extends CData
{
    public int $residencyStandard2DBlockShape;

    public int $residencyStandard2DMultisampleBlockShape;

    public int $residencyStandard3DBlockShape;

    public int $residencyAlignedMipSize;

    public int $residencyNonResidentStrict;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceProperties extends CData
{
    public int $apiVersion;

    public int $driverVersion;

    public int $vendorID;

    public int $deviceID;

    public int $deviceType;

    /** @var string|CData|CChar[]|null */
    public ?CData $deviceName;

    /** @var int[] */
    public array $pipelineCacheUUID;

    public VkPhysicalDeviceLimits $limits;

    public VkPhysicalDeviceSparseProperties $sparseProperties;
}

/**
 * @mixin CStruct
 */
final class VkQueueFamilyProperties extends CData
{
    public int $queueFlags;

    public int $queueCount;

    public int $timestampValidBits;

    public VkExtent3D $minImageTransferGranularity;
}

/**
 * @mixin CStruct
 */
final class VkMemoryType extends CData
{
    public int $propertyFlags;

    public int $heapIndex;
}

/**
 * @mixin CStruct
 */
final class VkMemoryHeap extends CData
{
    public int $size;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMemoryProperties extends CData
{
    public int $memoryTypeCount;

    /** @var VkMemoryType[] */
    public array $memoryTypes;

    public int $memoryHeapCount;

    /** @var VkMemoryHeap[] */
    public array $memoryHeaps;
}

/**
 * @mixin CStruct
 */
final class VkDeviceQueueCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $queueFamilyIndex;

    public int $queueCount;

    public ?CData $pQueuePriorities;
}

/**
 * @mixin CStruct
 */
final class VkDeviceCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $queueCreateInfoCount;

    public ?CData $pQueueCreateInfos;

    public int $enabledLayerCount;

    /** @var CData|string[]|null */
    public ?CData $ppEnabledLayerNames;

    public int $enabledExtensionCount;

    /** @var CData|string[]|null */
    public ?CData $ppEnabledExtensionNames;

    public ?CData $pEnabledFeatures;
}

/**
 * @mixin CStruct
 */
final class VkExtensionProperties extends CData
{
    /** @var string|CData|CChar[]|null */
    public ?CData $extensionName;

    public int $specVersion;
}

/**
 * @mixin CStruct
 */
final class VkLayerProperties extends CData
{
    /** @var string|CData|CChar[]|null */
    public ?CData $layerName;

    public int $specVersion;

    public int $implementationVersion;

    /** @var string|CData|CChar[]|null */
    public ?CData $description;
}

/**
 * @mixin CStruct
 */
final class VkSubmitInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $waitSemaphoreCount;

    public ?CData $pWaitSemaphores;

    public ?CData $pWaitDstStageMask;

    public int $commandBufferCount;

    public ?CData $pCommandBuffers;

    public int $signalSemaphoreCount;

    public ?CData $pSignalSemaphores;
}

/**
 * @mixin CStruct
 */
final class VkMemoryAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $allocationSize;

    public int $memoryTypeIndex;
}

/**
 * @mixin CStruct
 */
final class VkMappedMemoryRange extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDeviceMemory $memory;

    public int $offset;

    public int $size;
}

/**
 * @mixin CStruct
 */
final class VkMemoryRequirements extends CData
{
    public int $size;

    public int $alignment;

    public int $memoryTypeBits;
}

/**
 * @mixin CStruct
 */
final class VkSparseImageFormatProperties extends CData
{
    public int $aspectMask;

    public VkExtent3D $imageGranularity;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkSparseImageMemoryRequirements extends CData
{
    public VkSparseImageFormatProperties $formatProperties;

    public int $imageMipTailFirstLod;

    public int $imageMipTailSize;

    public int $imageMipTailOffset;

    public int $imageMipTailStride;
}

/**
 * @mixin CStruct
 */
final class VkSparseMemoryBind extends CData
{
    public int $resourceOffset;

    public int $size;

    public VkDeviceMemory $memory;

    public int $memoryOffset;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkSparseBufferMemoryBindInfo extends CData
{
    public VkBuffer $buffer;

    public int $bindCount;

    public ?CData $pBinds;
}

/**
 * @mixin CStruct
 */
final class VkSparseImageOpaqueMemoryBindInfo extends CData
{
    public VkImage $image;

    public int $bindCount;

    public ?CData $pBinds;
}

/**
 * @mixin CStruct
 */
final class VkImageSubresource extends CData
{
    public int $aspectMask;

    public int $mipLevel;

    public int $arrayLayer;
}

/**
 * @mixin CStruct
 */
final class VkOffset3D extends CData
{
    public int $x;

    public int $y;

    public int $z;
}

/**
 * @mixin CStruct
 */
final class VkSparseImageMemoryBind extends CData
{
    public VkImageSubresource $subresource;

    public VkOffset3D $offset;

    public VkExtent3D $extent;

    public VkDeviceMemory $memory;

    public int $memoryOffset;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkSparseImageMemoryBindInfo extends CData
{
    public VkImage $image;

    public int $bindCount;

    public ?CData $pBinds;
}

/**
 * @mixin CStruct
 */
final class VkBindSparseInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $waitSemaphoreCount;

    public ?CData $pWaitSemaphores;

    public int $bufferBindCount;

    public ?CData $pBufferBinds;

    public int $imageOpaqueBindCount;

    public ?CData $pImageOpaqueBinds;

    public int $imageBindCount;

    public ?CData $pImageBinds;

    public int $signalSemaphoreCount;

    public ?CData $pSignalSemaphores;
}

/**
 * @mixin CStruct
 */
final class VkFenceCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkSemaphoreCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkEventCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkQueryPoolCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $queryType;

    public int $queryCount;

    public int $pipelineStatistics;
}

/**
 * @mixin CStruct
 */
final class VkBufferCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $size;

    public int $usage;

    public int $sharingMode;

    public int $queueFamilyIndexCount;

    public ?CData $pQueueFamilyIndices;
}

/**
 * @mixin CStruct
 */
final class VkBufferViewCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public VkBuffer $buffer;

    public int $format;

    public int $offset;

    public int $range;
}

/**
 * @mixin CStruct
 */
final class VkImageCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $imageType;

    public int $format;

    public VkExtent3D $extent;

    public int $mipLevels;

    public int $arrayLayers;

    public int $samples;

    public int $tiling;

    public int $usage;

    public int $sharingMode;

    public int $queueFamilyIndexCount;

    public ?CData $pQueueFamilyIndices;

    public int $initialLayout;
}

/**
 * @mixin CStruct
 */
final class VkSubresourceLayout extends CData
{
    public int $offset;

    public int $size;

    public int $rowPitch;

    public int $arrayPitch;

    public int $depthPitch;
}

/**
 * @mixin CStruct
 */
final class VkComponentMapping extends CData
{
    public int $r;

    public int $g;

    public int $b;

    public int $a;
}

/**
 * @mixin CStruct
 */
final class VkImageSubresourceRange extends CData
{
    public int $aspectMask;

    public int $baseMipLevel;

    public int $levelCount;

    public int $baseArrayLayer;

    public int $layerCount;
}

/**
 * @mixin CStruct
 */
final class VkImageViewCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public VkImage $image;

    public int $viewType;

    public int $format;

    public VkComponentMapping $components;

    public VkImageSubresourceRange $subresourceRange;
}

/**
 * @mixin CStruct
 */
final class VkShaderModuleCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $codeSize;

    public ?CData $pCode;
}

/**
 * @mixin CStruct
 */
final class VkPipelineCacheCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $initialDataSize;

    public ?CData $pInitialData;
}

/**
 * @mixin CStruct
 */
final class VkSpecializationMapEntry extends CData
{
    public int $constantID;

    public int $offset;

    public int $size;
}

/**
 * @mixin CStruct
 */
final class VkSpecializationInfo extends CData
{
    public int $mapEntryCount;

    public ?CData $pMapEntries;

    public int $dataSize;

    public ?CData $pData;
}

/**
 * @mixin CStruct
 */
final class VkPipelineShaderStageCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $stage;

    public VkShaderModule $module;

    public ?CData $pName;

    public ?CData $pSpecializationInfo;
}

/**
 * @mixin CStruct
 */
final class VkVertexInputBindingDescription extends CData
{
    public int $binding;

    public int $stride;

    public int $inputRate;
}

/**
 * @mixin CStruct
 */
final class VkVertexInputAttributeDescription extends CData
{
    public int $location;

    public int $binding;

    public int $format;

    public int $offset;
}

/**
 * @mixin CStruct
 */
final class VkPipelineVertexInputStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $vertexBindingDescriptionCount;

    public ?CData $pVertexBindingDescriptions;

    public int $vertexAttributeDescriptionCount;

    public ?CData $pVertexAttributeDescriptions;
}

/**
 * @mixin CStruct
 */
final class VkPipelineInputAssemblyStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $topology;

    public int $primitiveRestartEnable;
}

/**
 * @mixin CStruct
 */
final class VkPipelineTessellationStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $patchControlPoints;
}

/**
 * @mixin CStruct
 */
final class VkViewport extends CData
{
    public float $x;

    public float $y;

    public float $width;

    public float $height;

    public float $minDepth;

    public float $maxDepth;
}

/**
 * @mixin CStruct
 */
final class VkOffset2D extends CData
{
    public int $x;

    public int $y;
}

/**
 * @mixin CStruct
 */
final class VkExtent2D extends CData
{
    public int $width;

    public int $height;
}

/**
 * @mixin CStruct
 */
final class VkRect2D extends CData
{
    public VkOffset2D $offset;

    public VkExtent2D $extent;
}

/**
 * @mixin CStruct
 */
final class VkPipelineViewportStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $viewportCount;

    public ?CData $pViewports;

    public int $scissorCount;

    public ?CData $pScissors;
}

/**
 * @mixin CStruct
 */
final class VkPipelineRasterizationStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $depthClampEnable;

    public int $rasterizerDiscardEnable;

    public int $polygonMode;

    public int $cullMode;

    public int $frontFace;

    public int $depthBiasEnable;

    public float $depthBiasConstantFactor;

    public float $depthBiasClamp;

    public float $depthBiasSlopeFactor;

    public float $lineWidth;
}

/**
 * @mixin CStruct
 */
final class VkPipelineMultisampleStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $rasterizationSamples;

    public int $sampleShadingEnable;

    public float $minSampleShading;

    public ?CData $pSampleMask;

    public int $alphaToCoverageEnable;

    public int $alphaToOneEnable;
}

/**
 * @mixin CStruct
 */
final class VkStencilOpState extends CData
{
    public int $failOp;

    public int $passOp;

    public int $depthFailOp;

    public int $compareOp;

    public int $compareMask;

    public int $writeMask;

    public int $reference;
}

/**
 * @mixin CStruct
 */
final class VkPipelineDepthStencilStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $depthTestEnable;

    public int $depthWriteEnable;

    public int $depthCompareOp;

    public int $depthBoundsTestEnable;

    public int $stencilTestEnable;

    public VkStencilOpState $front;

    public VkStencilOpState $back;

    public float $minDepthBounds;

    public float $maxDepthBounds;
}

/**
 * @mixin CStruct
 */
final class VkPipelineColorBlendAttachmentState extends CData
{
    public int $blendEnable;

    public int $srcColorBlendFactor;

    public int $dstColorBlendFactor;

    public int $colorBlendOp;

    public int $srcAlphaBlendFactor;

    public int $dstAlphaBlendFactor;

    public int $alphaBlendOp;

    public int $colorWriteMask;
}

/**
 * @mixin CStruct
 */
final class VkPipelineColorBlendStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $logicOpEnable;

    public int $logicOp;

    public int $attachmentCount;

    public ?CData $pAttachments;

    /** @var array|float[] */
    public array $blendConstants;
}

/**
 * @mixin CStruct
 */
final class VkPipelineDynamicStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $dynamicStateCount;

    public ?CData $pDynamicStates;
}

/**
 * @mixin CStruct
 */
final class VkGraphicsPipelineCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $stageCount;

    public ?CData $pStages;

    public ?CData $pVertexInputState;

    public ?CData $pInputAssemblyState;

    public ?CData $pTessellationState;

    public ?CData $pViewportState;

    public ?CData $pRasterizationState;

    public ?CData $pMultisampleState;

    public ?CData $pDepthStencilState;

    public ?CData $pColorBlendState;

    public ?CData $pDynamicState;

    public VkPipelineLayout $layout;

    public VkRenderPass $renderPass;

    public int $subpass;

    public VkPipeline $basePipelineHandle;

    public int $basePipelineIndex;
}

/**
 * @mixin CStruct
 */
final class VkComputePipelineCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public VkPipelineShaderStageCreateInfo $stage;

    public VkPipelineLayout $layout;

    public VkPipeline $basePipelineHandle;

    public int $basePipelineIndex;
}

/**
 * @mixin CStruct
 */
final class VkPushConstantRange extends CData
{
    public int $stageFlags;

    public int $offset;

    public int $size;
}

/**
 * @mixin CStruct
 */
final class VkPipelineLayoutCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $setLayoutCount;

    public ?CData $pSetLayouts;

    public int $pushConstantRangeCount;

    public ?CData $pPushConstantRanges;
}

/**
 * @mixin CStruct
 */
final class VkSamplerCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $magFilter;

    public int $minFilter;

    public int $mipmapMode;

    public int $addressModeU;

    public int $addressModeV;

    public int $addressModeW;

    public float $mipLodBias;

    public int $anisotropyEnable;

    public float $maxAnisotropy;

    public int $compareEnable;

    public int $compareOp;

    public float $minLod;

    public float $maxLod;

    public int $borderColor;

    public int $unnormalizedCoordinates;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorSetLayoutBinding extends CData
{
    public int $binding;

    public int $descriptorType;

    public int $descriptorCount;

    public int $stageFlags;

    public ?CData $pImmutableSamplers;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorSetLayoutCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $bindingCount;

    public ?CData $pBindings;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorPoolSize extends CData
{
    public int $type;

    public int $descriptorCount;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorPoolCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $maxSets;

    public int $poolSizeCount;

    public ?CData $pPoolSizes;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorSetAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDescriptorPool $descriptorPool;

    public int $descriptorSetCount;

    public ?CData $pSetLayouts;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorImageInfo extends CData
{
    public VkSampler $sampler;

    public VkImageView $imageView;

    public int $imageLayout;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorBufferInfo extends CData
{
    public VkBuffer $buffer;

    public int $offset;

    public int $range;
}

/**
 * @mixin CStruct
 */
final class VkWriteDescriptorSet extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDescriptorSet $dstSet;

    public int $dstBinding;

    public int $dstArrayElement;

    public int $descriptorCount;

    public int $descriptorType;

    public ?CData $pImageInfo;

    public ?CData $pBufferInfo;

    public ?CData $pTexelBufferView;
}

/**
 * @mixin CStruct
 */
final class VkCopyDescriptorSet extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDescriptorSet $srcSet;

    public int $srcBinding;

    public int $srcArrayElement;

    public VkDescriptorSet $dstSet;

    public int $dstBinding;

    public int $dstArrayElement;

    public int $descriptorCount;
}

/**
 * @mixin CStruct
 */
final class VkFramebufferCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public VkRenderPass $renderPass;

    public int $attachmentCount;

    public ?CData $pAttachments;

    public int $width;

    public int $height;

    public int $layers;
}

/**
 * @mixin CStruct
 */
final class VkAttachmentDescription extends CData
{
    public int $flags;

    public int $format;

    public int $samples;

    public int $loadOp;

    public int $storeOp;

    public int $stencilLoadOp;

    public int $stencilStoreOp;

    public int $initialLayout;

    public int $finalLayout;
}

/**
 * @mixin CStruct
 */
final class VkAttachmentReference extends CData
{
    public int $attachment;

    public int $layout;
}

/**
 * @mixin CStruct
 */
final class VkSubpassDescription extends CData
{
    public int $flags;

    public int $pipelineBindPoint;

    public int $inputAttachmentCount;

    public ?CData $pInputAttachments;

    public int $colorAttachmentCount;

    public ?CData $pColorAttachments;

    public ?CData $pResolveAttachments;

    public ?CData $pDepthStencilAttachment;

    public int $preserveAttachmentCount;

    public ?CData $pPreserveAttachments;
}

/**
 * @mixin CStruct
 */
final class VkSubpassDependency extends CData
{
    public int $srcSubpass;

    public int $dstSubpass;

    public int $srcStageMask;

    public int $dstStageMask;

    public int $srcAccessMask;

    public int $dstAccessMask;

    public int $dependencyFlags;
}

/**
 * @mixin CStruct
 */
final class VkRenderPassCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $attachmentCount;

    public ?CData $pAttachments;

    public int $subpassCount;

    public ?CData $pSubpasses;

    public int $dependencyCount;

    public ?CData $pDependencies;
}

/**
 * @mixin CStruct
 */
final class VkCommandPoolCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $queueFamilyIndex;
}

/**
 * @mixin CStruct
 */
final class VkCommandBufferAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkCommandPool $commandPool;

    public int $level;

    public int $commandBufferCount;
}

/**
 * @mixin CStruct
 */
final class VkCommandBufferInheritanceInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkRenderPass $renderPass;

    public int $subpass;

    public VkFramebuffer $framebuffer;

    public int $occlusionQueryEnable;

    public int $queryFlags;

    public int $pipelineStatistics;
}

/**
 * @mixin CStruct
 */
final class VkCommandBufferBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public ?CData $pInheritanceInfo;
}

/**
 * @mixin CStruct
 */
final class VkBufferCopy extends CData
{
    public int $srcOffset;

    public int $dstOffset;

    public int $size;
}

/**
 * @mixin CStruct
 */
final class VkImageSubresourceLayers extends CData
{
    public int $aspectMask;

    public int $mipLevel;

    public int $baseArrayLayer;

    public int $layerCount;
}

/**
 * @mixin CStruct
 */
final class VkImageCopy extends CData
{
    public VkImageSubresourceLayers $srcSubresource;

    public VkOffset3D $srcOffset;

    public VkImageSubresourceLayers $dstSubresource;

    public VkOffset3D $dstOffset;

    public VkExtent3D $extent;
}

/**
 * @mixin CStruct
 */
final class VkImageBlit extends CData
{
    public VkImageSubresourceLayers $srcSubresource;

    /** @var VkOffset3D[] */
    public array $srcOffsets;

    public VkImageSubresourceLayers $dstSubresource;

    /** @var VkOffset3D[] */
    public array $dstOffsets;
}

/**
 * @mixin CStruct
 */
final class VkBufferImageCopy extends CData
{
    public int $bufferOffset;

    public int $bufferRowLength;

    public int $bufferImageHeight;

    public VkImageSubresourceLayers $imageSubresource;

    public VkOffset3D $imageOffset;

    public VkExtent3D $imageExtent;
}

/**
 * @mixin CStruct
 */
final class VkClearDepthStencilValue extends CData
{
    public float $depth;

    public int $stencil;
}

/**
 * @mixin CStruct
 */
final class VkClearAttachment extends CData
{
    public int $aspectMask;

    public int $colorAttachment;

    public ?CData $clearValue;
}

/**
 * @mixin CStruct
 */
final class VkClearRect extends CData
{
    public VkRect2D $rect;

    public int $baseArrayLayer;

    public int $layerCount;
}

/**
 * @mixin CStruct
 */
final class VkImageResolve extends CData
{
    public VkImageSubresourceLayers $srcSubresource;

    public VkOffset3D $srcOffset;

    public VkImageSubresourceLayers $dstSubresource;

    public VkOffset3D $dstOffset;

    public VkExtent3D $extent;
}

/**
 * @mixin CStruct
 */
final class VkMemoryBarrier extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $srcAccessMask;

    public int $dstAccessMask;
}

/**
 * @mixin CStruct
 */
final class VkBufferMemoryBarrier extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $srcAccessMask;

    public int $dstAccessMask;

    public int $srcQueueFamilyIndex;

    public int $dstQueueFamilyIndex;

    public VkBuffer $buffer;

    public int $offset;

    public int $size;
}

/**
 * @mixin CStruct
 */
final class VkImageMemoryBarrier extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $srcAccessMask;

    public int $dstAccessMask;

    public int $oldLayout;

    public int $newLayout;

    public int $srcQueueFamilyIndex;

    public int $dstQueueFamilyIndex;

    public VkImage $image;

    public VkImageSubresourceRange $subresourceRange;
}

/**
 * @mixin CStruct
 */
final class VkRenderPassBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkRenderPass $renderPass;

    public VkFramebuffer $framebuffer;

    public VkRect2D $renderArea;

    public int $clearValueCount;

    public ?CData $pClearValues;
}

/**
 * @mixin CStruct
 */
final class VkDispatchIndirectCommand extends CData
{
    public int $x;

    public int $y;

    public int $z;
}

/**
 * @mixin CStruct
 */
final class VkDrawIndexedIndirectCommand extends CData
{
    public int $indexCount;

    public int $instanceCount;

    public int $firstIndex;

    public int $vertexOffset;

    public int $firstInstance;
}

/**
 * @mixin CStruct
 */
final class VkDrawIndirectCommand extends CData
{
    public int $vertexCount;

    public int $instanceCount;

    public int $firstVertex;

    public int $firstInstance;
}

/**
 * @mixin CStruct
 */
final class VkBaseOutStructure extends CData
{
    public int $sType;

    public ?CData $pNext;
}

/**
 * @mixin CStruct
 */
final class VkBaseInStructure extends CData
{
    public int $sType;

    public ?CData $pNext;
}

/**
 * @mixin CStruct
 */
final class VkSamplerYcbcrConversion extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDescriptorUpdateTemplate extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkBindBufferMemoryInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkBuffer $buffer;

    public VkDeviceMemory $memory;

    public int $memoryOffset;
}

/**
 * @mixin CStruct
 */
final class VkBindImageMemoryInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;

    public VkDeviceMemory $memory;

    public int $memoryOffset;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDevice16BitStorageFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $storageBuffer16BitAccess;

    public int $uniformAndStorageBuffer16BitAccess;

    public int $storagePushConstant16;

    public int $storageInputOutput16;
}

/**
 * @mixin CStruct
 */
final class VkMemoryDedicatedRequirements extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $prefersDedicatedAllocation;

    public int $requiresDedicatedAllocation;
}

/**
 * @mixin CStruct
 */
final class VkMemoryDedicatedAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;

    public VkBuffer $buffer;
}

/**
 * @mixin CStruct
 */
final class VkMemoryAllocateFlagsInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $deviceMask;
}

/**
 * @mixin CStruct
 */
final class VkDeviceGroupRenderPassBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceMask;

    public int $deviceRenderAreaCount;

    public ?CData $pDeviceRenderAreas;
}

/**
 * @mixin CStruct
 */
final class VkDeviceGroupCommandBufferBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceMask;
}

/**
 * @mixin CStruct
 */
final class VkDeviceGroupSubmitInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $waitSemaphoreCount;

    public ?CData $pWaitSemaphoreDeviceIndices;

    public int $commandBufferCount;

    public ?CData $pCommandBufferDeviceMasks;

    public int $signalSemaphoreCount;

    public ?CData $pSignalSemaphoreDeviceIndices;
}

/**
 * @mixin CStruct
 */
final class VkDeviceGroupBindSparseInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $resourceDeviceIndex;

    public int $memoryDeviceIndex;
}

/**
 * @mixin CStruct
 */
final class VkBindBufferMemoryDeviceGroupInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceIndexCount;

    public ?CData $pDeviceIndices;
}

/**
 * @mixin CStruct
 */
final class VkBindImageMemoryDeviceGroupInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceIndexCount;

    public ?CData $pDeviceIndices;

    public int $splitInstanceBindRegionCount;

    public ?CData $pSplitInstanceBindRegions;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceGroupProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $physicalDeviceCount;

    /** @var array|VkPhysicalDevice[] */
    public array $physicalDevices;

    public int $subsetAllocation;
}

/**
 * @mixin CStruct
 */
final class VkDeviceGroupDeviceCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $physicalDeviceCount;

    public ?CData $pPhysicalDevices;
}

/**
 * @mixin CStruct
 */
final class VkBufferMemoryRequirementsInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkBuffer $buffer;
}

/**
 * @mixin CStruct
 */
final class VkImageMemoryRequirementsInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;
}

/**
 * @mixin CStruct
 */
final class VkImageSparseMemoryRequirementsInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;
}

/**
 * @mixin CStruct
 */
final class VkMemoryRequirements2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkMemoryRequirements $memoryRequirements;
}

/**
 * @mixin CStruct
 */
final class VkSparseImageMemoryRequirements2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSparseImageMemoryRequirements $memoryRequirements;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceFeatures2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPhysicalDeviceFeatures $features;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPhysicalDeviceProperties $properties;
}

/**
 * @mixin CStruct
 */
final class VkFormatProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkFormatProperties $formatProperties;
}

/**
 * @mixin CStruct
 */
final class VkImageFormatProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImageFormatProperties $imageFormatProperties;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceImageFormatInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $format;

    public int $type;

    public int $tiling;

    public int $usage;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkQueueFamilyProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkQueueFamilyProperties $queueFamilyProperties;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMemoryProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPhysicalDeviceMemoryProperties $memoryProperties;
}

/**
 * @mixin CStruct
 */
final class VkSparseImageFormatProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSparseImageFormatProperties $properties;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSparseImageFormatInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $format;

    public int $type;

    public int $samples;

    public int $usage;

    public int $tiling;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDevicePointClippingProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pointClippingBehavior;
}

/**
 * @mixin CStruct
 */
final class VkInputAttachmentAspectReference extends CData
{
    public int $subpass;

    public int $inputAttachmentIndex;

    public int $aspectMask;
}

/**
 * @mixin CStruct
 */
final class VkRenderPassInputAttachmentAspectCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $aspectReferenceCount;

    public ?CData $pAspectReferences;
}

/**
 * @mixin CStruct
 */
final class VkImageViewUsageCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $usage;
}

/**
 * @mixin CStruct
 */
final class VkPipelineTessellationDomainOriginStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $domainOrigin;
}

/**
 * @mixin CStruct
 */
final class VkRenderPassMultiviewCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $subpassCount;

    public ?CData $pViewMasks;

    public int $dependencyCount;

    public ?CData $pViewOffsets;

    public int $correlationMaskCount;

    public ?CData $pCorrelationMasks;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMultiviewFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $multiview;

    public int $multiviewGeometryShader;

    public int $multiviewTessellationShader;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMultiviewProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxMultiviewViewCount;

    public int $maxMultiviewInstanceIndex;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceVariablePointersFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $variablePointersStorageBuffer;

    public int $variablePointers;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceProtectedMemoryFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $protectedMemory;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceProtectedMemoryProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $protectedNoFault;
}

/**
 * @mixin CStruct
 */
final class VkDeviceQueueInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $queueFamilyIndex;

    public int $queueIndex;
}

/**
 * @mixin CStruct
 */
final class VkProtectedSubmitInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $protectedSubmit;
}

/**
 * @mixin CStruct
 */
final class VkSamplerYcbcrConversionCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $format;

    public int $ycbcrModel;

    public int $ycbcrRange;

    public VkComponentMapping $components;

    public int $xChromaOffset;

    public int $yChromaOffset;

    public int $chromaFilter;

    public int $forceExplicitReconstruction;
}

/**
 * @mixin CStruct
 */
final class VkSamplerYcbcrConversionInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSamplerYcbcrConversion $conversion;
}

/**
 * @mixin CStruct
 */
final class VkBindImagePlaneMemoryInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $planeAspect;
}

/**
 * @mixin CStruct
 */
final class VkImagePlaneMemoryRequirementsInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $planeAspect;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSamplerYcbcrConversionFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $samplerYcbcrConversion;
}

/**
 * @mixin CStruct
 */
final class VkSamplerYcbcrConversionImageFormatProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $combinedImageSamplerDescriptorCount;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorUpdateTemplateEntry extends CData
{
    public int $dstBinding;

    public int $dstArrayElement;

    public int $descriptorCount;

    public int $descriptorType;

    public int $offset;

    public int $stride;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorUpdateTemplateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $descriptorUpdateEntryCount;

    public ?CData $pDescriptorUpdateEntries;

    public int $templateType;

    public VkDescriptorSetLayout $descriptorSetLayout;

    public int $pipelineBindPoint;

    public VkPipelineLayout $pipelineLayout;

    public int $set;
}

/**
 * @mixin CStruct
 */
final class VkExternalMemoryProperties extends CData
{
    public int $externalMemoryFeatures;

    public int $exportFromImportedHandleTypes;

    public int $compatibleHandleTypes;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceExternalImageFormatInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;
}

/**
 * @mixin CStruct
 */
final class VkExternalImageFormatProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExternalMemoryProperties $externalMemoryProperties;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceExternalBufferInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $usage;

    public int $handleType;
}

/**
 * @mixin CStruct
 */
final class VkExternalBufferProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExternalMemoryProperties $externalMemoryProperties;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceIDProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var int[] */
    public array $deviceUUID;

    /** @var int[] */
    public array $driverUUID;

    /** @var int[] */
    public array $deviceLUID;

    public int $deviceNodeMask;

    public int $deviceLUIDValid;
}

/**
 * @mixin CStruct
 */
final class VkExternalMemoryImageCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

/**
 * @mixin CStruct
 */
final class VkExternalMemoryBufferCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

/**
 * @mixin CStruct
 */
final class VkExportMemoryAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceExternalFenceInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;
}

/**
 * @mixin CStruct
 */
final class VkExternalFenceProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $exportFromImportedHandleTypes;

    public int $compatibleHandleTypes;

    public int $externalFenceFeatures;
}

/**
 * @mixin CStruct
 */
final class VkExportFenceCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

/**
 * @mixin CStruct
 */
final class VkExportSemaphoreCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceExternalSemaphoreInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;
}

/**
 * @mixin CStruct
 */
final class VkExternalSemaphoreProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $exportFromImportedHandleTypes;

    public int $compatibleHandleTypes;

    public int $externalSemaphoreFeatures;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMaintenance3Properties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxPerSetDescriptors;

    public int $maxMemoryAllocationSize;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorSetLayoutSupport extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $supported;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderDrawParametersFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderDrawParameters;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceVulkan11Properties extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var int[] */
    public array $deviceUUID;

    /** @var int[] */
    public array $driverUUID;

    /** @var int[] */
    public array $deviceLUID;

    public int $deviceNodeMask;

    public int $deviceLUIDValid;

    public int $subgroupSize;

    public int $subgroupSupportedStages;

    public int $subgroupSupportedOperations;

    public int $subgroupQuadOperationsInAllStages;

    public int $pointClippingBehavior;

    public int $maxMultiviewViewCount;

    public int $maxMultiviewInstanceIndex;

    public int $protectedNoFault;

    public int $maxPerSetDescriptors;

    public int $maxMemoryAllocationSize;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceVulkan12Features extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $samplerMirrorClampToEdge;

    public int $drawIndirectCount;

    public int $storageBuffer8BitAccess;

    public int $uniformAndStorageBuffer8BitAccess;

    public int $storagePushConstant8;

    public int $shaderBufferInt64Atomics;

    public int $shaderSharedInt64Atomics;

    public int $shaderFloat16;

    public int $shaderInt8;

    public int $descriptorIndexing;

    public int $shaderInputAttachmentArrayDynamicIndexing;

    public int $shaderUniformTexelBufferArrayDynamicIndexing;

    public int $shaderStorageTexelBufferArrayDynamicIndexing;

    public int $shaderUniformBufferArrayNonUniformIndexing;

    public int $shaderSampledImageArrayNonUniformIndexing;

    public int $shaderStorageBufferArrayNonUniformIndexing;

    public int $shaderStorageImageArrayNonUniformIndexing;

    public int $shaderInputAttachmentArrayNonUniformIndexing;

    public int $shaderUniformTexelBufferArrayNonUniformIndexing;

    public int $shaderStorageTexelBufferArrayNonUniformIndexing;

    public int $descriptorBindingUniformBufferUpdateAfterBind;

    public int $descriptorBindingSampledImageUpdateAfterBind;

    public int $descriptorBindingStorageImageUpdateAfterBind;

    public int $descriptorBindingStorageBufferUpdateAfterBind;

    public int $descriptorBindingUniformTexelBufferUpdateAfterBind;

    public int $descriptorBindingStorageTexelBufferUpdateAfterBind;

    public int $descriptorBindingUpdateUnusedWhilePending;

    public int $descriptorBindingPartiallyBound;

    public int $descriptorBindingVariableDescriptorCount;

    public int $runtimeDescriptorArray;

    public int $samplerFilterMinmax;

    public int $scalarBlockLayout;

    public int $imagelessFramebuffer;

    public int $uniformBufferStandardLayout;

    public int $shaderSubgroupExtendedTypes;

    public int $separateDepthStencilLayouts;

    public int $hostQueryReset;

    public int $timelineSemaphore;

    public int $bufferDeviceAddress;

    public int $bufferDeviceAddressCaptureReplay;

    public int $bufferDeviceAddressMultiDevice;

    public int $vulkanMemoryModel;

    public int $vulkanMemoryModelDeviceScope;

    public int $vulkanMemoryModelAvailabilityVisibilityChains;

    public int $shaderOutputViewportIndex;

    public int $shaderOutputLayer;

    public int $subgroupBroadcastDynamicId;
}

/**
 * @mixin CStruct
 */
final class VkConformanceVersion extends CData
{
    public int $major;

    public int $minor;

    public int $subminor;

    public int $patch;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceVulkan12Properties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $driverID;

    /** @var string|CData|CChar[]|null */
    public ?CData $driverName;

    /** @var string|CData|CChar[]|null */
    public ?CData $driverInfo;

    public VkConformanceVersion $conformanceVersion;

    public int $denormBehaviorIndependence;

    public int $roundingModeIndependence;

    public int $shaderSignedZeroInfNanPreserveFloat16;

    public int $shaderSignedZeroInfNanPreserveFloat32;

    public int $shaderSignedZeroInfNanPreserveFloat64;

    public int $shaderDenormPreserveFloat16;

    public int $shaderDenormPreserveFloat32;

    public int $shaderDenormPreserveFloat64;

    public int $shaderDenormFlushToZeroFloat16;

    public int $shaderDenormFlushToZeroFloat32;

    public int $shaderDenormFlushToZeroFloat64;

    public int $shaderRoundingModeRTEFloat16;

    public int $shaderRoundingModeRTEFloat32;

    public int $shaderRoundingModeRTEFloat64;

    public int $shaderRoundingModeRTZFloat16;

    public int $shaderRoundingModeRTZFloat32;

    public int $shaderRoundingModeRTZFloat64;

    public int $maxUpdateAfterBindDescriptorsInAllPools;

    public int $shaderUniformBufferArrayNonUniformIndexingNative;

    public int $shaderSampledImageArrayNonUniformIndexingNative;

    public int $shaderStorageBufferArrayNonUniformIndexingNative;

    public int $shaderStorageImageArrayNonUniformIndexingNative;

    public int $shaderInputAttachmentArrayNonUniformIndexingNative;

    public int $robustBufferAccessUpdateAfterBind;

    public int $quadDivergentImplicitLod;

    public int $maxPerStageDescriptorUpdateAfterBindSamplers;

    public int $maxPerStageDescriptorUpdateAfterBindUniformBuffers;

    public int $maxPerStageDescriptorUpdateAfterBindStorageBuffers;

    public int $maxPerStageDescriptorUpdateAfterBindSampledImages;

    public int $maxPerStageDescriptorUpdateAfterBindStorageImages;

    public int $maxPerStageDescriptorUpdateAfterBindInputAttachments;

    public int $maxPerStageUpdateAfterBindResources;

    public int $maxDescriptorSetUpdateAfterBindSamplers;

    public int $maxDescriptorSetUpdateAfterBindUniformBuffers;

    public int $maxDescriptorSetUpdateAfterBindUniformBuffersDynamic;

    public int $maxDescriptorSetUpdateAfterBindStorageBuffers;

    public int $maxDescriptorSetUpdateAfterBindStorageBuffersDynamic;

    public int $maxDescriptorSetUpdateAfterBindSampledImages;

    public int $maxDescriptorSetUpdateAfterBindStorageImages;

    public int $maxDescriptorSetUpdateAfterBindInputAttachments;

    public int $supportedDepthResolveModes;

    public int $supportedStencilResolveModes;

    public int $independentResolveNone;

    public int $independentResolve;

    public int $filterMinmaxSingleComponentFormats;

    public int $filterMinmaxImageComponentMapping;

    public int $maxTimelineSemaphoreValueDifference;

    public int $framebufferIntegerColorSampleCounts;
}

/**
 * @mixin CStruct
 */
final class VkImageFormatListCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $viewFormatCount;

    public ?CData $pViewFormats;
}

/**
 * @mixin CStruct
 */
final class VkAttachmentDescription2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $format;

    public int $samples;

    public int $loadOp;

    public int $storeOp;

    public int $stencilLoadOp;

    public int $stencilStoreOp;

    public int $initialLayout;

    public int $finalLayout;
}

/**
 * @mixin CStruct
 */
final class VkAttachmentReference2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $attachment;

    public int $layout;

    public int $aspectMask;
}

/**
 * @mixin CStruct
 */
final class VkSubpassDescription2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $pipelineBindPoint;

    public int $viewMask;

    public int $inputAttachmentCount;

    public ?CData $pInputAttachments;

    public int $colorAttachmentCount;

    public ?CData $pColorAttachments;

    public ?CData $pResolveAttachments;

    public ?CData $pDepthStencilAttachment;

    public int $preserveAttachmentCount;

    public ?CData $pPreserveAttachments;
}

/**
 * @mixin CStruct
 */
final class VkSubpassDependency2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $srcSubpass;

    public int $dstSubpass;

    public int $srcStageMask;

    public int $dstStageMask;

    public int $srcAccessMask;

    public int $dstAccessMask;

    public int $dependencyFlags;

    public int $viewOffset;
}

/**
 * @mixin CStruct
 */
final class VkRenderPassCreateInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $attachmentCount;

    public ?CData $pAttachments;

    public int $subpassCount;

    public ?CData $pSubpasses;

    public int $dependencyCount;

    public ?CData $pDependencies;

    public int $correlatedViewMaskCount;

    public ?CData $pCorrelatedViewMasks;
}

/**
 * @mixin CStruct
 */
final class VkSubpassBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $contents;
}

/**
 * @mixin CStruct
 */
final class VkSubpassEndInfo extends CData
{
    public int $sType;

    public ?CData $pNext;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDevice8BitStorageFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $storageBuffer8BitAccess;

    public int $uniformAndStorageBuffer8BitAccess;

    public int $storagePushConstant8;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDriverProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $driverID;

    /** @var string|CData|CChar[]|null */
    public ?CData $driverName;

    /** @var string|CData|CChar[]|null */
    public ?CData $driverInfo;

    public VkConformanceVersion $conformanceVersion;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderAtomicInt64Features extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderBufferInt64Atomics;

    public int $shaderSharedInt64Atomics;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderFloat16Int8Features extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderFloat16;

    public int $shaderInt8;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceFloatControlsProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $denormBehaviorIndependence;

    public int $roundingModeIndependence;

    public int $shaderSignedZeroInfNanPreserveFloat16;

    public int $shaderSignedZeroInfNanPreserveFloat32;

    public int $shaderSignedZeroInfNanPreserveFloat64;

    public int $shaderDenormPreserveFloat16;

    public int $shaderDenormPreserveFloat32;

    public int $shaderDenormPreserveFloat64;

    public int $shaderDenormFlushToZeroFloat16;

    public int $shaderDenormFlushToZeroFloat32;

    public int $shaderDenormFlushToZeroFloat64;

    public int $shaderRoundingModeRTEFloat16;

    public int $shaderRoundingModeRTEFloat32;

    public int $shaderRoundingModeRTEFloat64;

    public int $shaderRoundingModeRTZFloat16;

    public int $shaderRoundingModeRTZFloat32;

    public int $shaderRoundingModeRTZFloat64;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorSetLayoutBindingFlagsCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $bindingCount;

    public ?CData $pBindingFlags;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDescriptorIndexingFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderInputAttachmentArrayDynamicIndexing;

    public int $shaderUniformTexelBufferArrayDynamicIndexing;

    public int $shaderStorageTexelBufferArrayDynamicIndexing;

    public int $shaderUniformBufferArrayNonUniformIndexing;

    public int $shaderSampledImageArrayNonUniformIndexing;

    public int $shaderStorageBufferArrayNonUniformIndexing;

    public int $shaderStorageImageArrayNonUniformIndexing;

    public int $shaderInputAttachmentArrayNonUniformIndexing;

    public int $shaderUniformTexelBufferArrayNonUniformIndexing;

    public int $shaderStorageTexelBufferArrayNonUniformIndexing;

    public int $descriptorBindingUniformBufferUpdateAfterBind;

    public int $descriptorBindingSampledImageUpdateAfterBind;

    public int $descriptorBindingStorageImageUpdateAfterBind;

    public int $descriptorBindingStorageBufferUpdateAfterBind;

    public int $descriptorBindingUniformTexelBufferUpdateAfterBind;

    public int $descriptorBindingStorageTexelBufferUpdateAfterBind;

    public int $descriptorBindingUpdateUnusedWhilePending;

    public int $descriptorBindingPartiallyBound;

    public int $descriptorBindingVariableDescriptorCount;

    public int $runtimeDescriptorArray;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDescriptorIndexingProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxUpdateAfterBindDescriptorsInAllPools;

    public int $shaderUniformBufferArrayNonUniformIndexingNative;

    public int $shaderSampledImageArrayNonUniformIndexingNative;

    public int $shaderStorageBufferArrayNonUniformIndexingNative;

    public int $shaderStorageImageArrayNonUniformIndexingNative;

    public int $shaderInputAttachmentArrayNonUniformIndexingNative;

    public int $robustBufferAccessUpdateAfterBind;

    public int $quadDivergentImplicitLod;

    public int $maxPerStageDescriptorUpdateAfterBindSamplers;

    public int $maxPerStageDescriptorUpdateAfterBindUniformBuffers;

    public int $maxPerStageDescriptorUpdateAfterBindStorageBuffers;

    public int $maxPerStageDescriptorUpdateAfterBindSampledImages;

    public int $maxPerStageDescriptorUpdateAfterBindStorageImages;

    public int $maxPerStageDescriptorUpdateAfterBindInputAttachments;

    public int $maxPerStageUpdateAfterBindResources;

    public int $maxDescriptorSetUpdateAfterBindSamplers;

    public int $maxDescriptorSetUpdateAfterBindUniformBuffers;

    public int $maxDescriptorSetUpdateAfterBindUniformBuffersDynamic;

    public int $maxDescriptorSetUpdateAfterBindStorageBuffers;

    public int $maxDescriptorSetUpdateAfterBindStorageBuffersDynamic;

    public int $maxDescriptorSetUpdateAfterBindSampledImages;

    public int $maxDescriptorSetUpdateAfterBindStorageImages;

    public int $maxDescriptorSetUpdateAfterBindInputAttachments;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorSetVariableDescriptorCountAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $descriptorSetCount;

    public ?CData $pDescriptorCounts;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorSetVariableDescriptorCountLayoutSupport extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxVariableDescriptorCount;
}

/**
 * @mixin CStruct
 */
final class VkSubpassDescriptionDepthStencilResolve extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $depthResolveMode;

    public int $stencilResolveMode;

    public ?CData $pDepthStencilResolveAttachment;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDepthStencilResolveProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $supportedDepthResolveModes;

    public int $supportedStencilResolveModes;

    public int $independentResolveNone;

    public int $independentResolve;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceScalarBlockLayoutFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $scalarBlockLayout;
}

/**
 * @mixin CStruct
 */
final class VkImageStencilUsageCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stencilUsage;
}

/**
 * @mixin CStruct
 */
final class VkSamplerReductionModeCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $reductionMode;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSamplerFilterMinmaxProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $filterMinmaxSingleComponentFormats;

    public int $filterMinmaxImageComponentMapping;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceVulkanMemoryModelFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $vulkanMemoryModel;

    public int $vulkanMemoryModelDeviceScope;

    public int $vulkanMemoryModelAvailabilityVisibilityChains;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceImagelessFramebufferFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $imagelessFramebuffer;
}

/**
 * @mixin CStruct
 */
final class VkFramebufferAttachmentImageInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $usage;

    public int $width;

    public int $height;

    public int $layerCount;

    public int $viewFormatCount;

    public ?CData $pViewFormats;
}

/**
 * @mixin CStruct
 */
final class VkFramebufferAttachmentsCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $attachmentImageInfoCount;

    public ?CData $pAttachmentImageInfos;
}

/**
 * @mixin CStruct
 */
final class VkRenderPassAttachmentBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $attachmentCount;

    public ?CData $pAttachments;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceUniformBufferStandardLayoutFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $uniformBufferStandardLayout;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderSubgroupExtendedTypesFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderSubgroupExtendedTypes;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSeparateDepthStencilLayoutsFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $separateDepthStencilLayouts;
}

/**
 * @mixin CStruct
 */
final class VkAttachmentReferenceStencilLayout extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stencilLayout;
}

/**
 * @mixin CStruct
 */
final class VkAttachmentDescriptionStencilLayout extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stencilInitialLayout;

    public int $stencilFinalLayout;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceHostQueryResetFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $hostQueryReset;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceTimelineSemaphoreFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $timelineSemaphore;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceTimelineSemaphoreProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxTimelineSemaphoreValueDifference;
}

/**
 * @mixin CStruct
 */
final class VkSemaphoreTypeCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $semaphoreType;

    public int $initialValue;
}

/**
 * @mixin CStruct
 */
final class VkTimelineSemaphoreSubmitInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $waitSemaphoreValueCount;

    public ?CData $pWaitSemaphoreValues;

    public int $signalSemaphoreValueCount;

    public ?CData $pSignalSemaphoreValues;
}

/**
 * @mixin CStruct
 */
final class VkSemaphoreWaitInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $semaphoreCount;

    public ?CData $pSemaphores;

    public ?CData $pValues;
}

/**
 * @mixin CStruct
 */
final class VkSemaphoreSignalInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSemaphore $semaphore;

    public int $value;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceBufferDeviceAddressFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $bufferDeviceAddress;

    public int $bufferDeviceAddressCaptureReplay;

    public int $bufferDeviceAddressMultiDevice;
}

/**
 * @mixin CStruct
 */
final class VkBufferDeviceAddressInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkBuffer $buffer;
}

/**
 * @mixin CStruct
 */
final class VkBufferOpaqueCaptureAddressCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $opaqueCaptureAddress;
}

/**
 * @mixin CStruct
 */
final class VkMemoryOpaqueCaptureAddressAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $opaqueCaptureAddress;
}

/**
 * @mixin CStruct
 */
final class VkDeviceMemoryOpaqueCaptureAddressInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDeviceMemory $memory;
}

/**
 * @mixin CStruct
 */
final class VkSwapchainKHR extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkPresentInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $waitSemaphoreCount;

    public ?CData $pWaitSemaphores;

    public int $swapchainCount;

    public ?CData $pSwapchains;

    public ?CData $pImageIndices;

    public ?CData $pResults;
}

/**
 * @mixin CStruct
 */
final class VkImageSwapchainCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSwapchainKHR $swapchain;
}

/**
 * @mixin CStruct
 */
final class VkBindImageMemorySwapchainInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSwapchainKHR $swapchain;

    public int $imageIndex;
}

/**
 * @mixin CStruct
 */
final class VkAcquireNextImageInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSwapchainKHR $swapchain;

    public int $timeout;

    public VkSemaphore $semaphore;

    public VkFence $fence;

    public int $deviceMask;
}

/**
 * @mixin CStruct
 */
final class VkDeviceGroupPresentCapabilitiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var int[] */
    public array $presentMask;

    public int $modes;
}

/**
 * @mixin CStruct
 */
final class VkDeviceGroupPresentInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $swapchainCount;

    public ?CData $pDeviceMasks;

    public int $mode;
}

/**
 * @mixin CStruct
 */
final class VkDeviceGroupSwapchainCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $modes;
}

/**
 * @mixin CStruct
 */
final class VkDisplayKHR extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDisplayModeKHR extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDisplayModeParametersKHR extends CData
{
    public VkExtent2D $visibleRegion;

    public int $refreshRate;
}

/**
 * @mixin CStruct
 */
final class VkDisplayModePropertiesKHR extends CData
{
    public VkDisplayModeKHR $displayMode;

    public VkDisplayModeParametersKHR $parameters;
}

/**
 * @mixin CStruct
 */
final class VkDisplayModeCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public VkDisplayModeParametersKHR $parameters;
}

/**
 * @mixin CStruct
 */
final class VkDisplayPlaneCapabilitiesKHR extends CData
{
    public int $supportedAlpha;

    public VkOffset2D $minSrcPosition;

    public VkOffset2D $maxSrcPosition;

    public VkExtent2D $minSrcExtent;

    public VkExtent2D $maxSrcExtent;

    public VkOffset2D $minDstPosition;

    public VkOffset2D $maxDstPosition;

    public VkExtent2D $minDstExtent;

    public VkExtent2D $maxDstExtent;
}

/**
 * @mixin CStruct
 */
final class VkDisplayPlanePropertiesKHR extends CData
{
    public VkDisplayKHR $currentDisplay;

    public int $currentStackIndex;
}

/**
 * @mixin CStruct
 */
final class VkDisplaySurfaceCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public VkDisplayModeKHR $displayMode;

    public int $planeIndex;

    public int $planeStackIndex;

    public int $transform;

    public float $globalAlpha;

    public int $alphaMode;

    public VkExtent2D $imageExtent;
}


/**
 * @mixin CStruct
 */
final class VkDisplayPresentInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkRect2D $srcRect;

    public VkRect2D $dstRect;

    public int $persistent;
}

/**
 * @mixin CStruct
 */
final class VkImportMemoryFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;

    public int $fd;
}

/**
 * @mixin CStruct
 */
final class VkMemoryFdPropertiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $memoryTypeBits;
}

/**
 * @mixin CStruct
 */
final class VkMemoryGetFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDeviceMemory $memory;

    public int $handleType;
}

/**
 * @mixin CStruct
 */
final class VkImportSemaphoreFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSemaphore $semaphore;

    public int $flags;

    public int $handleType;

    public int $fd;
}

/**
 * @mixin CStruct
 */
final class VkSemaphoreGetFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSemaphore $semaphore;

    public int $handleType;
}


/**
 * @mixin CStruct
 */
final class VkPhysicalDevicePushDescriptorPropertiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxPushDescriptors;
}


/**
 * @mixin CStruct
 */
final class VkRectLayerKHR extends CData
{
    public VkOffset2D $offset;

    public VkExtent2D $extent;

    public int $layer;
}

/**
 * @mixin CStruct
 */
final class VkPresentRegionKHR extends CData
{
    public int $rectangleCount;

    public ?CData $pRectangles;
}

/**
 * @mixin CStruct
 */
final class VkPresentRegionsKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $swapchainCount;

    public ?CData $pRegions;
}

/**
 * @mixin CStruct
 */
final class VkSharedPresentSurfaceCapabilitiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $sharedPresentSupportedUsageFlags;
}

/**
 * @mixin CStruct
 */
final class VkImportFenceFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkFence $fence;

    public int $flags;

    public int $handleType;

    public int $fd;
}

/**
 * @mixin CStruct
 */
final class VkFenceGetFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkFence $fence;

    public int $handleType;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDevicePerformanceQueryPropertiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $allowCommandBufferQueryCopies;
}

/**
 * @mixin CStruct
 */
final class VkPerformanceCounterKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $unit;

    public int $scope;

    public int $storage;

    /** @var int[] */
    public array $uuid;
}

/**
 * @mixin CStruct
 */
final class VkPerformanceCounterDescriptionKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    /** @var string|CData|CChar[]|null */
    public ?CData $name;

    /** @var string|CData|CChar[]|null */
    public ?CData $category;

    /** @var string|CData|CChar[]|null */
    public ?CData $description;
}

/**
 * @mixin CStruct
 */
final class VkQueryPoolPerformanceCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $queueFamilyIndex;

    public int $counterIndexCount;

    public ?CData $pCounterIndices;
}

/**
 * @mixin CStruct
 */
final class VkAcquireProfilingLockInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $timeout;
}

/**
 * @mixin CStruct
 */
final class VkPerformanceQuerySubmitInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $counterPassIndex;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSurfaceInfo2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSurfaceKHR $surface;
}

/**
 * @mixin CStruct
 */
final class VkSurfaceKHR extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkSurfaceCapabilities2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSurfaceCapabilitiesKHR $surfaceCapabilities;
}

/**
 * @mixin CStruct
 */
final class VkSurfaceCapabilitiesKHR extends CData
{
    public int $minImageCount;

    public int $maxImageCount;

    public VkExtent2D $currentExtent;

    public VkExtent2D $minImageExtent;

    public VkExtent2D $maxImageExtent;

    public int $maxImageArrayLayers;

    public int $supportedTransforms;

    public int $currentTransform;

    public int $supportedCompositeAlpha;

    public int $supportedUsageFlags;
}

/**
 * @mixin CStruct
 */
final class VkSurfaceFormat2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSurfaceFormatKHR $surfaceFormat;
}

/**
 * @mixin CStruct
 */
final class VkSurfaceFormatKHR extends CData
{
    public int $format;

    public int $colorSpace;
}


/**
 * @mixin CStruct
 */
final class VkDisplayProperties2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayPropertiesKHR $displayProperties;
}

/**
 * @mixin CStruct
 */
final class VkDisplayPropertiesKHR extends CData
{
    public ?CData $display;

    /** @var string|CData|CChar[]|null */
    public ?CData $displayName;

    public ?CData $physicalDimensions;

    public ?CData $physicalResolution;

    public int $supportedTransforms;

    public int $planeReorderPossible;

    public int $persistentContent;
}


/**
 * @mixin CStruct
 */
final class VkDisplayPlaneProperties2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayPlanePropertiesKHR $displayPlaneProperties;
}

/**
 * @mixin CStruct
 */
final class VkDisplayModeProperties2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayModePropertiesKHR $displayModeProperties;
}

/**
 * @mixin CStruct
 */
final class VkDisplayPlaneInfo2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayModeKHR $mode;

    public int $planeIndex;
}

/**
 * @mixin CStruct
 */
final class VkDisplayPlaneCapabilities2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayPlaneCapabilitiesKHR $capabilities;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderClockFeaturesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderSubgroupClock;

    public int $shaderDeviceClock;
}


/**
 * @mixin CStruct
 */
final class VkSurfaceProtectedCapabilitiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $supportsProtected;
}

/**
 * @mixin CStruct
 */
final class VkPipelineInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPipeline $pipeline;
}

/**
 * @mixin CStruct
 */
final class VkPipelineExecutablePropertiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stages;

    /** @var string|CData|CChar[]|null */
    public ?CData $name;

    /** @var string|CData|CChar[]|null */
    public ?CData $description;

    public int $subgroupSize;
}

/**
 * @mixin CStruct
 */
final class VkPipelineExecutableInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPipeline $pipeline;

    public int $executableIndex;
}

/**
 * @mixin CStruct
 */
final class VkPipelineExecutableStatisticKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var string|CData|CChar[]|null */
    public ?CData$name;

    /** @var string|CData|CChar[]|null */
    public ?CData $description;

    public int $format;

    public ?CData $value;
}

/**
 * @mixin CStruct
 */
final class VkPipelineExecutableInternalRepresentationKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var string|CData|CChar[]|null */
    public ?CData$name;

    /** @var string|CData|CChar[]|null */
    public ?CData $description;

    public int $isText;

    public int $dataSize;

    public ?CData $pData;
}

/**
 * @mixin CStruct
 */
final class VkDebugReportCallbackEXT extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDebugReportCallbackCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    /** @var callable|\Closure */
    public object $pfnCallback;

    public ?CData $pUserData;
}


/**
 * @mixin CStruct
 */
final class VkDebugMarkerObjectNameInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $objectType;

    public int $object;

    public ?CData $pObjectName;
}

/**
 * @mixin CStruct
 */
final class VkDebugMarkerObjectTagInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $objectType;

    public int $object;

    public int $tagName;

    public int $tagSize;

    public ?CData $pTag;
}

/**
 * @mixin CStruct
 */
final class VkDebugMarkerMarkerInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public ?CData $pMarkerName;

    /** @var float[] */
    public array $color;
}

/**
 * @mixin CStruct
 */
final class VkDedicatedAllocationImageCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $dedicatedAllocation;
}

/**
 * @mixin CStruct
 */
final class VkDedicatedAllocationBufferCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $dedicatedAllocation;
}

/**
 * @mixin CStruct
 */
final class VkDedicatedAllocationMemoryAllocateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;

    public VkBuffer $buffer;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceTransformFeedbackFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $transformFeedback;

    public int $geometryStreams;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceTransformFeedbackPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxTransformFeedbackStreams;

    public int $maxTransformFeedbackBuffers;

    public int $maxTransformFeedbackBufferSize;

    public int $maxTransformFeedbackStreamDataSize;

    public int $maxTransformFeedbackBufferDataSize;

    public int $maxTransformFeedbackBufferDataStride;

    public int $transformFeedbackQueries;

    public int $transformFeedbackStreamsLinesTriangles;

    public int $transformFeedbackRasterizationStreamSelect;

    public int $transformFeedbackDraw;
}

/**
 * @mixin CStruct
 */
final class VkPipelineRasterizationStateStreamCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $rasterizationStream;
}

/**
 * @mixin CStruct
 */
final class VkImageViewHandleInfoNVX extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImageView $imageView;

    public int $descriptorType;

    public VkSampler $sampler;
}

/**
 * @mixin CStruct
 */
final class VkTextureLODGatherFormatPropertiesAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $supportsTextureGatherLODBiasAMD;
}

/**
 * @mixin CStruct
 */
final class VkShaderResourceUsageAMD extends CData
{
    public int $numUsedVgprs;

    public int $numUsedSgprs;

    public int $ldsSizePerLocalWorkGroup;

    public int $ldsUsageSizeInBytes;

    public int $scratchMemUsageInBytes;
}

/**
 * @mixin CStruct
 */
final class VkShaderStatisticsInfoAMD extends CData
{
    public int $shaderStageMask;

    public VkShaderResourceUsageAMD $resourceUsage;

    public int $numPhysicalVgprs;

    public int $numPhysicalSgprs;

    public int $numAvailableVgprs;

    public int $numAvailableSgprs;

    /** @var int[] */
    public array $computeWorkGroupSize;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceCornerSampledImageFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $cornerSampledImage;
}

/**
 * @mixin CStruct
 */
final class VkExternalMemoryImageCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

/**
 * @mixin CStruct
 */
final class VkExportMemoryAllocateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceTextureCompressionASTCHDRFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $textureCompressionASTC_HDR;
}

/**
 * @mixin CStruct
 */
final class VkImageViewASTCDecodeModeEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $decodeMode;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceASTCDecodeFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $decodeModeSharedExponent;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceConditionalRenderingFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $conditionalRendering;

    public int $inheritedConditionalRendering;
}

/**
 * @mixin CStruct
 */
final class VkCommandBufferInheritanceConditionalRenderingInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $conditionalRenderingEnable;
}

/**
 * @mixin CStruct
 */
final class VkViewportWScalingNV extends CData
{
    public float $xcoeff;

    public float $ycoeff;
}

/**
 * @mixin CStruct
 */
final class VkPipelineViewportWScalingStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $viewportWScalingEnable;

    public int $viewportCount;

    public ?CData $pViewportWScalings;
}

/**
 * @mixin CStruct
 */
final class VkDeviceEventInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceEvent;
}

/**
 * @mixin CStruct
 */
final class VkDisplayEventInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $displayEvent;
}

/**
 * @mixin CStruct
 */
final class VkSwapchainCounterCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $surfaceCounters;
}

/**
 * @mixin CStruct
 */
final class VkRefreshCycleDurationGOOGLE extends CData
{
    public int $refreshDuration;
}

/**
 * @mixin CStruct
 */
final class VkPastPresentationTimingGOOGLE extends CData
{
    public int $presentID;

    public int $desiredPresentTime;

    public int $actualPresentTime;

    public int $earliestPresentTime;

    public int $presentMargin;
}

/**
 * @mixin CStruct
 */
final class VkPresentTimeGOOGLE extends CData
{
    public int $presentID;

    public int $desiredPresentTime;
}

/**
 * @mixin CStruct
 */
final class VkPresentTimesInfoGOOGLE extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $swapchainCount;

    public ?CData $pTimes;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMultiviewPerViewAttributesPropertiesNVX extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $perViewPositionAllComponents;
}

/**
 * @mixin CStruct
 */
final class VkPipelineViewportSwizzleStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $viewportCount;

    public ?CData $pViewportSwizzles;
}

/**
 * @mixin CStruct
 */
final class VkPipelineDiscardRectangleStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $discardRectangleMode;

    public int $discardRectangleCount;

    public ?CData $pDiscardRectangles;
}

/**
 * @mixin CStruct
 */
final class VkPipelineRasterizationConservativeStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $conservativeRasterizationMode;

    public float $extraPrimitiveOverestimationSize;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDepthClipEnableFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $depthClipEnable;
}

/**
 * @mixin CStruct
 */
final class VkPipelineRasterizationDepthClipStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $depthClipEnable;
}

/**
 * @mixin CStruct
 */
final class VkXYColorEXT extends CData
{
    public float $x;

    public float $y;
}

/**
 * @mixin CStruct
 */
final class VkHdrMetadataEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkXYColorEXT $displayPrimaryRed;

    public VkXYColorEXT $displayPrimaryGreen;

    public VkXYColorEXT $displayPrimaryBlue;

    public VkXYColorEXT $whitePoint;

    public float $maxLuminance;

    public float $minLuminance;

    public float $maxContentLightLevel;

    public float $maxFrameAverageLightLevel;
}

/**
 * @mixin CStruct
 */
final class VkDebugUtilsMessengerEXT extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkDebugUtilsObjectTagInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $objectType;

    public int $objectHandle;

    public int $tagName;

    public int $tagSize;

    public ?CData $pTag;
}

/**
 * @mixin CStruct
 */
final class VkDebugUtilsLabelEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public ?CData $pLabelName;

    /** @var float[] */
    public array $color;
}

/**
 * @mixin CStruct
 */
final class VkDebugUtilsMessengerCallbackDataEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public ?CData $pMessageIdName;

    public int $messageIdNumber;

    public ?CData $pMessage;

    public int $queueLabelCount;

    public ?CData $pQueueLabels;

    public int $cmdBufLabelCount;

    public ?CData $pCmdBufLabels;

    public int $objectCount;

    public ?CData $pObjects;
}

/**
 * @mixin CStruct
 */
final class VkDebugUtilsMessengerCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $messageSeverity;

    public int $messageType;

    /** @var callable|\Closure */
    public object $pfnUserCallback;

    public ?CData $pUserData;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceInlineUniformBlockFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $inlineUniformBlock;

    public int $descriptorBindingInlineUniformBlockUpdateAfterBind;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceInlineUniformBlockPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxInlineUniformBlockSize;

    public int $maxPerStageDescriptorInlineUniformBlocks;

    public int $maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks;

    public int $maxDescriptorSetInlineUniformBlocks;

    public int $maxDescriptorSetUpdateAfterBindInlineUniformBlocks;
}

/**
 * @mixin CStruct
 */
final class VkWriteDescriptorSetInlineUniformBlockEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $dataSize;

    public ?CData $pData;
}

/**
 * @mixin CStruct
 */
final class VkDescriptorPoolInlineUniformBlockCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxInlineUniformBlockBindings;
}

/**
 * @mixin CStruct
 */
final class VkSampleLocationEXT extends CData
{
    public float $x;

    public float $y;
}

/**
 * @mixin CStruct
 */
final class VkSampleLocationsInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $sampleLocationsPerPixel;

    public VkExtent2D $sampleLocationGridSize;

    public int $sampleLocationsCount;

    public ?CData $pSampleLocations;
}

/**
 * @mixin CStruct
 */
final class VkAttachmentSampleLocationsEXT extends CData
{
    public int $attachmentIndex;

    public VkSampleLocationsInfoEXT $sampleLocationsInfo;
}

/**
 * @mixin CStruct
 */
final class VkSubpassSampleLocationsEXT extends CData
{
    public int $subpassIndex;

    public VkSampleLocationsInfoEXT $sampleLocationsInfo;
}

/**
 * @mixin CStruct
 */
final class VkRenderPassSampleLocationsBeginInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $attachmentInitialSampleLocationsCount;

    public ?CData $pAttachmentInitialSampleLocations;

    public int $postSubpassSampleLocationsCount;

    public ?CData $pPostSubpassSampleLocations;
}

/**
 * @mixin CStruct
 */
final class VkPipelineSampleLocationsStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $sampleLocationsEnable;

    public VkSampleLocationsInfoEXT $sampleLocationsInfo;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSampleLocationsPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $sampleLocationSampleCounts;

    public VkExtent2D $maxSampleLocationGridSize;

    /** @var float[] */
    public array $sampleLocationCoordinateRange;

    public int $sampleLocationSubPixelBits;

    public int $variableSampleLocations;
}

/**
 * @mixin CStruct
 */
final class VkMultisamplePropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExtent2D $maxSampleLocationGridSize;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceBlendOperationAdvancedPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $advancedBlendMaxColorAttachments;

    public int $advancedBlendIndependentBlend;

    public int $advancedBlendNonPremultipliedSrcColor;

    public int $advancedBlendNonPremultipliedDstColor;

    public int $advancedBlendCorrelatedOverlap;

    public int $advancedBlendAllOperations;
}

/**
 * @mixin CStruct
 */
final class VkPipelineColorBlendAdvancedStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $srcPremultiplied;

    public int $dstPremultiplied;

    public int $blendOverlap;
}

/**
 * @mixin CStruct
 */
final class VkPipelineCoverageToColorStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $coverageToColorEnable;

    public int $coverageToColorLocation;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderSMBuiltinsPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderSMCount;

    public int $shaderWarpsPerSM;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderSMBuiltinsFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderSMBuiltins;
}

/**
 * @mixin CStruct
 */
final class VkDrmFormatModifierPropertiesEXT extends CData
{
    public int $drmFormatModifier;

    public int $drmFormatModifierPlaneCount;

    public int $drmFormatModifierTilingFeatures;
}

/**
 * @mixin CStruct
 */
final class VkDrmFormatModifierPropertiesListEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifierCount;

    public ?CData $pDrmFormatModifierProperties;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceImageDrmFormatModifierInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifier;

    public int $sharingMode;

    public int $queueFamilyIndexCount;

    public ?CData $pQueueFamilyIndices;
}

/**
 * @mixin CStruct
 */
final class VkImageDrmFormatModifierListCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifierCount;

    public ?CData $pDrmFormatModifiers;
}

/**
 * @mixin CStruct
 */
final class VkImageDrmFormatModifierExplicitCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifier;

    public int $drmFormatModifierPlaneCount;

    public ?CData $pPlaneLayouts;
}

/**
 * @mixin CStruct
 */
final class VkImageDrmFormatModifierPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifier;
}

/**
 * @mixin CStruct
 */
final class VkValidationCacheEXT extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkShaderModuleValidationCacheCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkValidationCacheEXT $validationCache;
}

/**
 * @mixin CStruct
 */
final class VkPipelineViewportShadingRateImageStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shadingRateImageEnable;

    public int $viewportCount;

    public ?CData $pShadingRatePalettes;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShadingRateImageFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shadingRateImage;

    public int $shadingRateCoarseSampleOrder;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShadingRateImagePropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExtent2D $shadingRateTexelSize;

    public int $shadingRatePaletteSize;

    public int $shadingRateMaxCoarseSamples;
}

/**
 * @mixin CStruct
 */
final class VkCoarseSampleLocationNV extends CData
{
    public int $pixelX;

    public int $pixelY;

    public int $sample;
}

/**
 * @mixin CStruct
 */
final class VkCoarseSampleOrderCustomNV extends CData
{
    public int $shadingRate;

    public int $sampleCount;

    public int $sampleLocationCount;

    public ?CData $pSampleLocations;
}

/**
 * @mixin CStruct
 */
final class VkPipelineViewportCoarseSampleOrderStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $sampleOrderType;

    public int $customSampleOrderCount;

    public ?CData $pCustomSampleOrders;
}

/**
 * @mixin CStruct
 */
final class VkAccelerationStructureKHR extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkRayTracingShaderGroupCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $type;

    public int $generalShader;

    public int $closestHitShader;

    public int $anyHitShader;

    public int $intersectionShader;
}

/**
 * @mixin CStruct
 */
final class VkRayTracingPipelineCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $stageCount;

    public ?CData $pStages;

    public int $groupCount;

    public ?CData $pGroups;

    public int $maxRecursionDepth;

    public VkPipelineLayout $layout;

    public VkPipeline $basePipelineHandle;

    public int $basePipelineIndex;
}

/**
 * @mixin CStruct
 */
final class VkGeometryTrianglesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkBuffer $vertexData;

    public int $vertexOffset;

    public int $vertexCount;

    public int $vertexStride;

    public int $vertexFormat;

    public VkBuffer $indexData;

    public int $indexOffset;

    public int $indexCount;

    public int $indexType;

    public VkBuffer $transformData;

    public int $transformOffset;
}

/**
 * @mixin CStruct
 */
final class VkGeometryAABBNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkBuffer $aabbData;

    public int $numAABBs;

    public int $stride;

    public int $offset;
}

/**
 * @mixin CStruct
 */
final class VkGeometryDataNV extends CData
{
    public VkGeometryTrianglesNV $triangles;

    public VkGeometryAABBNV $aabbs;
}

/**
 * @mixin CStruct
 */
final class VkGeometryNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $geometryType;

    public VkGeometryDataNV $geometry;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkAccelerationStructureInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $type;

    public int $flags;

    public int $instanceCount;

    public int $geometryCount;

    public ?CData $pGeometries;
}

/**
 * @mixin CStruct
 */
final class VkAccelerationStructureCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $compactedSize;

    public VkAccelerationStructureInfoNV $info;
}

/**
 * @mixin CStruct
 */
final class VkBindAccelerationStructureMemoryInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkAccelerationStructureKHR $accelerationStructure;

    public VkDeviceMemory $memory;

    public int $memoryOffset;

    public int $deviceIndexCount;

    public ?CData $pDeviceIndices;
}

/**
 * @mixin CStruct
 */
final class VkWriteDescriptorSetAccelerationStructureKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $accelerationStructureCount;

    public ?CData $pAccelerationStructures;
}

/**
 * @mixin CStruct
 */
final class VkAccelerationStructureMemoryRequirementsInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $type;

    public ?CData $accelerationStructure;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceRayTracingPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderGroupHandleSize;

    public int $maxRecursionDepth;

    public int $maxShaderGroupStride;

    public int $shaderGroupBaseAlignment;

    public int $maxGeometryCount;

    public int $maxInstanceCount;

    public int $maxTriangleCount;

    public int $maxDescriptorSetAccelerationStructures;
}

/**
 * @mixin CStruct
 */
final class VkTransformMatrixKHR extends CData
{
    /** @var float[] */
    public array $matrix;
}

/**
 * @mixin CStruct
 */
final class VkAabbPositionsKHR extends CData
{
    public float $minX;

    public float $minY;

    public float $minZ;

    public float $maxX;

    public float $maxY;

    public float $maxZ;
}

/**
 * @mixin CStruct
 */
final class VkAccelerationStructureInstanceKHR extends CData
{
    public VkTransformMatrixKHR $transform;

    public int $instanceCustomIndex;

    public int $mask;

    public int $instanceShaderBindingTableRecordOffset;

    public int $flags;

    public int $accelerationStructureReference;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceRepresentativeFragmentTestFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $representativeFragmentTest;
}

/**
 * @mixin CStruct
 */
final class VkPipelineRepresentativeFragmentTestStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $representativeFragmentTestEnable;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceImageViewImageFormatInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $imageViewType;
}

/**
 * @mixin CStruct
 */
final class VkFilterCubicImageViewImageFormatPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $filterCubic;

    public int $filterCubicMinmax;
}

/**
 * @mixin CStruct
 */
final class VkImportMemoryHostPointerInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;

    public ?CData $pHostPointer;
}

/**
 * @mixin CStruct
 */
final class VkMemoryHostPointerPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $memoryTypeBits;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceExternalMemoryHostPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $minImportedHostPointerAlignment;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderCorePropertiesAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderEngineCount;

    public int $shaderArraysPerEngineCount;

    public int $computeUnitsPerShaderArray;

    public int $simdPerComputeUnit;

    public int $wavefrontsPerSimd;

    public int $wavefrontSize;

    public int $sgprsPerSimd;

    public int $minSgprAllocation;

    public int $maxSgprAllocation;

    public int $sgprAllocationGranularity;

    public int $vgprsPerSimd;

    public int $minVgprAllocation;

    public int $maxVgprAllocation;

    public int $vgprAllocationGranularity;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceVertexAttributeDivisorPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxVertexAttribDivisor;
}

/**
 * @mixin CStruct
 */
final class VkVertexInputBindingDivisorDescriptionEXT extends CData
{
    public int $binding;

    public int $divisor;
}

/**
 * @mixin CStruct
 */
final class VkPipelineVertexInputDivisorStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $vertexBindingDivisorCount;

    public ?CData $pVertexBindingDivisors;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceVertexAttributeDivisorFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $vertexAttributeInstanceRateDivisor;

    public int $vertexAttributeInstanceRateZeroDivisor;
}

/**
 * @mixin CStruct
 */
final class VkPipelineCreationFeedbackCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public ?CData $pPipelineCreationFeedback;

    public int $pipelineStageCreationFeedbackCount;

    public ?CData $pPipelineStageCreationFeedbacks;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceComputeShaderDerivativesFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $computeDerivativeGroupQuads;

    public int $computeDerivativeGroupLinear;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMeshShaderFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $taskShader;

    public int $meshShader;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMeshShaderPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxDrawMeshTasksCount;

    public int $maxTaskWorkGroupInvocations;

    /** @var int[] */
    public array $maxTaskWorkGroupSize;

    public int $maxTaskTotalMemorySize;

    public int $maxTaskOutputCount;

    public int $maxMeshWorkGroupInvocations;

    /** @var int[] */
    public array $maxMeshWorkGroupSize;

    public int $maxMeshTotalMemorySize;

    public int $maxMeshOutputVertices;

    public int $maxMeshOutputPrimitives;

    public int $maxMeshMultiviewViewCount;

    public int $meshOutputPerVertexGranularity;

    public int $meshOutputPerPrimitiveGranularity;
}

/**
 * @mixin CStruct
 */
final class VkDrawMeshTasksIndirectCommandNV extends CData
{
    public int $taskCount;

    public int $firstTask;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceFragmentShaderBarycentricFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $fragmentShaderBarycentric;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderImageFootprintFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $imageFootprint;
}

/**
 * @mixin CStruct
 */
final class VkPipelineViewportExclusiveScissorStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $exclusiveScissorCount;

    public ?CData $pExclusiveScissors;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceExclusiveScissorFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $exclusiveScissor;
}


/**
 * @mixin CStruct
 */
final class VkQueueFamilyCheckpointPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $checkpointExecutionStageMask;
}

/**
 * @mixin CStruct
 */
final class VkCheckpointDataNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stage;

    public ?CData $pCheckpointMarker;
}


/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderIntegerFunctions2FeaturesINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderIntegerFunctions2;
}

/**
 * @mixin CStruct
 */
final class VkPerformanceConfigurationINTEL extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkPerformanceValueINTEL extends CData
{
    public int $type;

    public ?CData $data;
}

/**
 * @mixin CStruct
 */
final class VkInitializePerformanceApiInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public ?CData $pUserData;
}

/**
 * @mixin CStruct
 */
final class VkQueryPoolPerformanceQueryCreateInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $performanceCountersSampling;
}

/**
 * @mixin CStruct
 */
final class VkPerformanceMarkerInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $marker;
}

/**
 * @mixin CStruct
 */
final class VkPerformanceStreamMarkerInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $marker;
}

/**
 * @mixin CStruct
 */
final class VkPerformanceOverrideInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $type;

    public int $enable;

    public int $parameter;
}

/**
 * @mixin CStruct
 */
final class VkPerformanceConfigurationAcquireInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $type;
}


/**
 * @mixin CStruct
 */
final class VkPhysicalDevicePCIBusInfoPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pciDomain;

    public int $pciBus;

    public int $pciDevice;

    public int $pciFunction;
}

/**
 * @mixin CStruct
 */
final class VkDisplayNativeHdrSurfaceCapabilitiesAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $localDimmingSupport;
}

/**
 * @mixin CStruct
 */
final class VkSwapchainDisplayNativeHdrCreateInfoAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $localDimmingEnable;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceFragmentDensityMapFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $fragmentDensityMap;

    public int $fragmentDensityMapDynamic;

    public int $fragmentDensityMapNonSubsampledImages;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceFragmentDensityMapPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExtent2D $minFragmentDensityTexelSize;

    public VkExtent2D $maxFragmentDensityTexelSize;

    public int $fragmentDensityInvocations;
}

/**
 * @mixin CStruct
 */
final class VkRenderPassFragmentDensityMapCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkAttachmentReference $fragmentDensityMapAttachment;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSubgroupSizeControlFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $subgroupSizeControl;

    public int $computeFullSubgroups;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSubgroupSizeControlPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $minSubgroupSize;

    public int $maxSubgroupSize;

    public int $maxComputeWorkgroupSubgroups;

    public int $requiredSubgroupSizeStages;
}

/**
 * @mixin CStruct
 */
final class VkPipelineShaderStageRequiredSubgroupSizeCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $requiredSubgroupSize;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceCoherentMemoryFeaturesAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceCoherentMemory;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMemoryBudgetPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var int[] */
    public array $heapBudget;

    /** @var int[] */
    public array $heapUsage;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceMemoryPriorityFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $memoryPriority;
}

/**
 * @mixin CStruct
 */
final class VkMemoryPriorityAllocateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public float $priority;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDedicatedAllocationImageAliasingFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $dedicatedAllocationImageAliasing;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceBufferDeviceAddressFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $bufferDeviceAddress;

    public int $bufferDeviceAddressCaptureReplay;

    public int $bufferDeviceAddressMultiDevice;
}

/**
 * @mixin CStruct
 */
final class VkBufferDeviceAddressCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceAddress;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceCooperativeMatrixFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $cooperativeMatrix;

    public int $cooperativeMatrixRobustBufferAccess;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceCooperativeMatrixPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $cooperativeMatrixSupportedStages;
}


/**
 * @mixin CStruct
 */
final class VkPipelineCoverageReductionStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $coverageReductionMode;
}

/**
 * @mixin CStruct
 */
final class VkFramebufferMixedSamplesCombinationNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $coverageReductionMode;

    public int $rasterizationSamples;

    public int $depthStencilSamples;

    public int $colorSamples;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceFragmentShaderInterlockFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $fragmentShaderSampleInterlock;

    public int $fragmentShaderPixelInterlock;

    public int $fragmentShaderShadingRateInterlock;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceYcbcrImageArraysFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $ycbcrImageArrays;
}

/**
 * @mixin CStruct
 */
final class VkHeadlessSurfaceCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}


/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceLineRasterizationPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $lineSubPixelPrecisionBits;
}

/**
 * @mixin CStruct
 */
final class VkPipelineRasterizationLineStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $lineRasterizationMode;

    public int $stippledLineEnable;

    public int $lineStippleFactor;

    public int $lineStipplePattern;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceIndexTypeUint8FeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $indexTypeUint8;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderDemoteToHelperInvocationFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderDemoteToHelperInvocation;
}

/**
 * @mixin CStruct
 */
final class VkIndirectCommandsLayoutNV extends CData
{
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDeviceGeneratedCommandsFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceGeneratedCommands;
}

/**
 * @mixin CStruct
 */
final class VkGraphicsShaderGroupCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stageCount;

    public ?CData $pStages;

    public ?CData $pVertexInputState;

    public ?CData $pTessellationState;
}

/**
 * @mixin CStruct
 */
final class VkGraphicsPipelineShaderGroupsCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $groupCount;

    public ?CData $pGroups;

    public int $pipelineCount;

    public ?CData $pPipelines;
}

/**
 * @mixin CStruct
 */
final class VkBindShaderGroupIndirectCommandNV extends CData
{
    public int $groupIndex;
}

/**
 * @mixin CStruct
 */
final class VkBindIndexBufferIndirectCommandNV extends CData
{
    public int $bufferAddress;

    public int $size;

    public int $indexType;
}

/**
 * @mixin CStruct
 */
final class VkBindVertexBufferIndirectCommandNV extends CData
{
    public int $bufferAddress;

    public int $size;

    public int $stride;
}

/**
 * @mixin CStruct
 */
final class VkSetStateFlagsIndirectCommandNV extends CData
{
    public int $data;
}

/**
 * @mixin CStruct
 */
final class VkIndirectCommandsStreamNV extends CData
{
    public VkBuffer $buffer;

    public int $offset;
}

/**
 * @mixin CStruct
 */
final class VkIndirectCommandsLayoutTokenNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $tokenType;

    public int $stream;

    public int $offset;

    public int $vertexBindingUnit;

    public int $vertexDynamicStride;

    public VkPipelineLayout $pushconstantPipelineLayout;

    public int $pushconstantShaderStageFlags;

    public int $pushconstantOffset;

    public int $pushconstantSize;

    public int $indirectStateFlags;

    public int $indexTypeCount;

    public ?CData $pIndexTypes;

    public ?CData $pIndexTypeValues;
}

/**
 * @mixin CStruct
 */
final class VkIndirectCommandsLayoutCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $pipelineBindPoint;

    public int $tokenCount;

    public ?CData $pTokens;

    public int $streamCount;

    public ?CData $pStreamStrides;
}

/**
 * @mixin CStruct
 */
final class VkGeneratedCommandsInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pipelineBindPoint;

    public VkPipeline $pipeline;

    public VkIndirectCommandsLayoutNV $indirectCommandsLayout;

    public int $streamCount;

    public ?CData $pStreams;

    public int $sequencesCount;

    public VkBuffer $preprocessBuffer;

    public int $preprocessOffset;

    public int $preprocessSize;

    public VkBuffer $sequencesCountBuffer;

    public int $sequencesCountOffset;

    public VkBuffer $sequencesIndexBuffer;

    public int $sequencesIndexOffset;
}

/**
 * @mixin CStruct
 */
final class VkGeneratedCommandsMemoryRequirementsInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pipelineBindPoint;

    public VkPipeline $pipeline;

    public VkIndirectCommandsLayoutNV $indirectCommandsLayout;

    public int $maxSequencesCount;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceTexelBufferAlignmentFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $texelBufferAlignment;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceTexelBufferAlignmentPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $storageTexelBufferOffsetAlignmentBytes;

    public int $storageTexelBufferOffsetSingleTexelAlignment;

    public int $uniformTexelBufferOffsetAlignmentBytes;

    public int $uniformTexelBufferOffsetSingleTexelAlignment;
}

/**
 * @mixin CStruct
 */
final class VkRenderPassTransformBeginInfoQCOM extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $transform;
}

/**
 * @mixin CStruct
 */
final class VkCommandBufferInheritanceRenderPassTransformInfoQCOM extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $transform;

    public VkRect2D $renderArea;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDevicePipelineCreationCacheControlFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pipelineCreationCacheControl;
}

/**
 * @mixin CStruct
 */
final class VkDeviceDiagnosticsConfigCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceSubgroupProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $subgroupSize;

    public int $supportedStages;

    public int $supportedOperations;

    public int $quadOperationsInAllStages;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceVulkan11Features extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $storageBuffer16BitAccess;

    public int $uniformAndStorageBuffer16BitAccess;

    public int $storagePushConstant16;

    public int $storageInputOutput16;

    public int $multiview;

    public int $multiviewGeometryShader;

    public int $multiviewTessellationShader;

    public int $variablePointersStorageBuffer;

    public int $variablePointers;

    public int $protectedMemory;

    public int $samplerYcbcrConversion;

    public int $shaderDrawParameters;
}

/**
 * @mixin CStruct
 */
final class VkSwapchainCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public ?CData $surface;

    public int $minImageCount;

    public int $imageFormat;

    public int $imageColorSpace;

    /** @var CData|null|VkExtent2D */
    public ?CData $imageExtent;

    public int $imageArrayLayers;

    public int $imageUsage;

    public int $imageSharingMode;

    public int $queueFamilyIndexCount;

    /** @var CData|null|CIntPtr */
    public ?CData $pQueueFamilyIndices;

    public int $preTransform;

    public int $compositeAlpha;

    public int $presentMode;

    public int $clipped;

    /** @var CData|null|VkSwapchainKHR */
    public ?CData $oldSwapchain;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDevicePerformanceQueryFeaturesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $performanceCounterQueryPools;

    public int $performanceCounterMultipleQueryPools;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDevicePipelineExecutablePropertiesFeaturesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pipelineExecutableInfo;
}

/**
 * @mixin CStruct
 */
final class VkPipelineRasterizationStateRasterizationOrderAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $rasterizationOrder;
}

/**
 * @mixin CStruct
 */
final class VkExternalImageFormatPropertiesNV extends CData
{
    /** @var CData|null|VkImageFormatProperties */
    public ?CData $imageFormatProperties;

    public int $externalMemoryFeatures;

    public int $exportFromImportedHandleTypes;

    public int $compatibleHandleTypes;
}

/**
 * @mixin CStruct
 */
final class VkValidationFlagsEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $disabledValidationCheckCount;

    public ?CData $pDisabledValidationChecks;
}

/**
 * @mixin CStruct
 */
final class VkConditionalRenderingBeginInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var CData|null|VkBuffer */
    public ?CData $buffer;

    public int $offset;

    public int $flags;
}

/**
 * @mixin CStruct
 */
final class VkSurfaceCapabilities2EXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $minImageCount;

    public int $maxImageCount;

    /** @var CData|null|VkExtent2D */
    public ?CData $currentExtent;

    /** @var CData|null|VkExtent2D */
    public ?CData $minImageExtent;

    /** @var CData|null|VkExtent2D */
    public ?CData $maxImageExtent;

    public int $maxImageArrayLayers;

    public int $supportedTransforms;

    public int $currentTransform;

    public int $supportedCompositeAlpha;

    public int $supportedUsageFlags;

    public int $supportedSurfaceCounters;
}

/**
 * @mixin CStruct
 */
final class VkDisplayPowerInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $powerState;
}

/**
 * @mixin CStruct
 */
final class VkViewportSwizzleNV extends CData
{
    public int $x;

    public int $y;

    public int $z;

    public int $w;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDiscardRectanglePropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxDiscardRectangles;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceConservativeRasterizationPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public float $primitiveOverestimationSize;

    public float $maxExtraPrimitiveOverestimationSize;

    public float $extraPrimitiveOverestimationSizeGranularity;

    public int $primitiveUnderestimation;

    public int $conservativePointAndLineRasterization;

    public int $degenerateTrianglesRasterized;

    public int $degenerateLinesRasterized;

    public int $fullyCoveredFragmentShaderInputVariable;

    public int $conservativeRasterizationPostDepthCoverage;
}

/**
 * @mixin CStruct
 */
final class VkDebugUtilsObjectNameInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $objectType;

    public int $objectHandle;

    /** @var string|CData|CChar[]|null */
    public ?CData $pObjectName;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceBlendOperationAdvancedFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $advancedBlendCoherentOperations;
}

/**
 * @mixin CStruct
 */
final class VkPipelineCoverageModulationStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $coverageModulationMode;

    public int $coverageModulationTableEnable;

    public int $coverageModulationTableCount;

    /** @var CData|null|CFloatPtr */
    public ?CData $pCoverageModulationTable;
}

/**
 * @mixin CStruct
 */
final class VkValidationCacheCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $coverageModulationMode;

    public int $coverageModulationTableEnable;

    public int $coverageModulationTableCount;

    /** @var CData|null|CFloatPtr */
    public ?CData $pCoverageModulationTable;
}

/**
 * @mixin CStruct
 */
final class VkShadingRatePaletteNV extends CData
{
    public int $shadingRatePaletteEntryCount;

    public ?CData $pShadingRatePaletteEntries;
}

/**
 * @mixin CStruct
 */
final class VkDeviceQueueGlobalPriorityCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $globalPriority;
}

/**
 * @mixin CStruct
 */
final class VkPipelineCompilerControlCreateInfoAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $compilerControlFlags;
}

/**
 * @mixin CStruct
 */
final class VkCalibratedTimestampInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $timeDomain;
}

/**
 * @mixin CStruct
 */
final class VkDeviceMemoryOverallocationCreateInfoAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $overallocationBehavior;
}

/**
 * @mixin CStruct
 */
final class VkPipelineCreationFeedbackEXT extends CData
{
    public int $flags;

    public int $duration;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceShaderCoreProperties2AMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderCoreFeatures;

    public int $activeComputeUnitCount;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceToolPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var string|CData|CChar[]|null */
    public ?CData $name;

    /** @var string|CData|CChar[]|null */
    public ?CData $version;

    public int $purposes;

    /** @var string|CData|CChar[]|null */
    public ?CData $description;

    /** @var string|CData|CChar[]|null */
    public ?CData $layer;
}

/**
 * @mixin CStruct
 */
final class VkValidationFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $enabledValidationFeatureCount;

    public ?CData $pEnabledValidationFeatures;

    public int $disabledValidationFeatureCount;

    public ?CData $pDisabledValidationFeatures;
}

/**
 * @mixin CStruct
 */
final class VkCooperativeMatrixPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $MSize;

    public int $NSize;

    public int $KSize;

    public int $AType;

    public int $BType;

    public int $CType;

    public int $DType;

    public int $scope;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceCoverageReductionModeFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $coverageReductionMode;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceLineRasterizationFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $rectangularLines;

    public int $bresenhamLines;

    public int $smoothLines;

    public int $stippledRectangularLines;

    public int $stippledBresenhamLines;

    public int $stippledSmoothLines;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDeviceGeneratedCommandsPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxGraphicsShaderGroupCount;

    public int $maxIndirectSequenceCount;

    public int $maxIndirectCommandsTokenCount;

    public int $maxIndirectCommandsStreamCount;

    public int $maxIndirectCommandsTokenOffset;

    public int $maxIndirectCommandsStreamStride;

    public int $minSequencesCountBufferOffsetAlignment;

    public int $minSequencesIndexBufferOffsetAlignment;

    public int $minIndirectCommandsBufferOffsetAlignment;
}

/**
 * @mixin CStruct
 */
final class VkPhysicalDeviceDiagnosticsConfigFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $diagnosticsConfig;
}
