<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

use FFI\CData;

final class VkInstance extends CData
{
}

final class VkPhysicalDevice extends CData
{
}

final class VkDevice extends CData
{
}

final class VkQueue extends CData
{
}

final class VkSemaphore extends CData
{
}

final class VkCommandBuffer extends CData
{
}

final class VkFence extends CData
{
}

final class VkDeviceMemory extends CData
{
}

final class VkBuffer extends CData
{
}

final class VkImage extends CData
{
}

final class VkEvent extends CData
{
}

final class VkQueryPool extends CData
{
}

final class VkBufferView extends CData
{
}

final class VkImageView extends CData
{
}

final class VkShaderModule extends CData
{
}

final class VkPipelineCache extends CData
{
}

final class VkPipelineLayout extends CData
{
}

final class VkRenderPass extends CData
{
}

final class VkPipeline extends CData
{
}

final class VkDescriptorSetLayout extends CData
{
}

final class VkSampler extends CData
{
}

final class VkDescriptorPool extends CData
{
}

final class VkDescriptorSet extends CData
{
}

final class VkFramebuffer extends CData
{
}

final class VkCommandPool extends CData
{
}

final class VkApplicationInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var string|CData|null */
    public ?CData $pApplicationName;

    public int $applicationVersion;

    /** @var string|CData|null */
    public ?CData $pEngineName;

    public int $engineVersion;

    public int $apiVersion;
}

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

final class VkAllocationCallbacks extends CData
{
    public ?CData $pUserData;

    public ?CData $pfnAllocation;

    public ?CData $pfnReallocation;

    public ?CData $pfnFree;

    public ?CData $pfnInternalAllocation;

    public ?CData $pfnInternalFree;
}

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

final class VkFormatProperties extends CData
{
    public int $linearTilingFeatures;

    public int $optimalTilingFeatures;

    public int $bufferFeatures;
}

final class VkExtent3D extends CData
{
    public int $width;

    public int $height;

    public int $depth;
}

final class VkImageFormatProperties extends CData
{
    public VkExtent3D $maxExtent;

    public int $maxMipLevels;

    public int $maxArrayLayers;

    public int $sampleCounts;

    public int $maxResourceSize;
}

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

final class VkPhysicalDeviceSparseProperties extends CData
{
    public int $residencyStandard2DBlockShape;

    public int $residencyStandard2DMultisampleBlockShape;

    public int $residencyStandard3DBlockShape;

    public int $residencyAlignedMipSize;

    public int $residencyNonResidentStrict;
}

final class VkPhysicalDeviceProperties extends CData
{
    public int $apiVersion;

    public int $driverVersion;

    public int $vendorID;

    public int $deviceID;

    public int $deviceType;

    /** @var string|CData|null */
    public ?CData $deviceName;

    /** @var int[] */
    public array $pipelineCacheUUID;

    public VkPhysicalDeviceLimits $limits;

    public VkPhysicalDeviceSparseProperties $sparseProperties;
}

final class VkQueueFamilyProperties extends CData
{
    public int $queueFlags;

    public int $queueCount;

    public int $timestampValidBits;

    public VkExtent3D $minImageTransferGranularity;
}

final class VkMemoryType extends CData
{
    public int $propertyFlags;

    public int $heapIndex;
}

final class VkMemoryHeap extends CData
{
    public int $size;

    public int $flags;
}

final class VkPhysicalDeviceMemoryProperties extends CData
{
    public int $memoryTypeCount;

    /** @var VkMemoryType[] */
    public array $memoryTypes;

    public int $memoryHeapCount;

    /** @var VkMemoryHeap[] */
    public array $memoryHeaps;
}

final class VkDeviceQueueCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $queueFamilyIndex;

    public int $queueCount;

    public ?CData $pQueuePriorities;
}

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

final class VkExtensionProperties extends CData
{
    /** @var string|CData|null */
    public ?CData $extensionName;

    public int $specVersion;
}

final class VkLayerProperties extends CData
{
    /** @var string|CData|null */
    public ?CData $layerName;

    public int $specVersion;

    public int $implementationVersion;

    /** @var string|CData|null */
    public ?CData $description;
}

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

final class VkMemoryAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $allocationSize;

    public int $memoryTypeIndex;
}

final class VkMappedMemoryRange extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDeviceMemory $memory;

    public int $offset;

    public int $size;
}

final class VkMemoryRequirements extends CData
{
    public int $size;

    public int $alignment;

    public int $memoryTypeBits;
}

final class VkSparseImageFormatProperties extends CData
{
    public int $aspectMask;

    public VkExtent3D $imageGranularity;

    public int $flags;
}

final class VkSparseImageMemoryRequirements extends CData
{
    public VkSparseImageFormatProperties $formatProperties;

    public int $imageMipTailFirstLod;

    public int $imageMipTailSize;

    public int $imageMipTailOffset;

    public int $imageMipTailStride;
}

final class VkSparseMemoryBind extends CData
{
    public int $resourceOffset;

    public int $size;

    public VkDeviceMemory $memory;

    public int $memoryOffset;

    public int $flags;
}

final class VkSparseBufferMemoryBindInfo extends CData
{
    public VkBuffer $buffer;

    public int $bindCount;

    public ?CData $pBinds;
}

final class VkSparseImageOpaqueMemoryBindInfo extends CData
{
    public VkImage $image;

    public int $bindCount;

    public ?CData $pBinds;
}

final class VkImageSubresource extends CData
{
    public int $aspectMask;

    public int $mipLevel;

    public int $arrayLayer;
}

final class VkOffset3D extends CData
{
    public int $x;

    public int $y;

    public int $z;
}

final class VkSparseImageMemoryBind extends CData
{
    public VkImageSubresource $subresource;

    public VkOffset3D $offset;

    public VkExtent3D $extent;

    public VkDeviceMemory $memory;

    public int $memoryOffset;

    public int $flags;
}

final class VkSparseImageMemoryBindInfo extends CData
{
    public VkImage $image;

    public int $bindCount;

    public ?CData $pBinds;
}

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

final class VkFenceCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}

final class VkSemaphoreCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}

final class VkEventCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}

final class VkQueryPoolCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $queryType;

    public int $queryCount;

    public int $pipelineStatistics;
}

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

final class VkSubresourceLayout extends CData
{
    public int $offset;

    public int $size;

    public int $rowPitch;

    public int $arrayPitch;

    public int $depthPitch;
}

final class VkComponentMapping extends CData
{
    public int $r;

    public int $g;

    public int $b;

    public int $a;
}

final class VkImageSubresourceRange extends CData
{
    public int $aspectMask;

    public int $baseMipLevel;

    public int $levelCount;

    public int $baseArrayLayer;

    public int $layerCount;
}

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

final class VkShaderModuleCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $codeSize;

    public ?CData $pCode;
}

final class VkPipelineCacheCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $initialDataSize;

    public ?CData $pInitialData;
}

final class VkSpecializationMapEntry extends CData
{
    public int $constantID;

    public int $offset;

    public int $size;
}

final class VkSpecializationInfo extends CData
{
    public int $mapEntryCount;

    public ?CData $pMapEntries;

    public int $dataSize;

    public ?CData $pData;
}

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

final class VkVertexInputBindingDescription extends CData
{
    public int $binding;

    public int $stride;

    public int $inputRate;
}

final class VkVertexInputAttributeDescription extends CData
{
    public int $location;

    public int $binding;

    public int $format;

    public int $offset;
}

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

final class VkPipelineInputAssemblyStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $topology;

    public int $primitiveRestartEnable;
}

final class VkPipelineTessellationStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $patchControlPoints;
}

final class VkViewport extends CData
{
    public float $x;

    public float $y;

    public float $width;

    public float $height;

    public float $minDepth;

    public float $maxDepth;
}

final class VkOffset2D extends CData
{
    public int $x;

    public int $y;
}

final class VkExtent2D extends CData
{
    public int $width;

    public int $height;
}

final class VkRect2D extends CData
{
    public VkOffset2D $offset;

    public VkExtent2D $extent;
}

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

final class VkPipelineDynamicStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $dynamicStateCount;

    public ?CData $pDynamicStates;
}

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

final class VkPushConstantRange extends CData
{
    public int $stageFlags;

    public int $offset;

    public int $size;
}

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

final class VkDescriptorSetLayoutBinding extends CData
{
    public int $binding;

    public int $descriptorType;

    public int $descriptorCount;

    public int $stageFlags;

    public ?CData $pImmutableSamplers;
}

final class VkDescriptorSetLayoutCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $bindingCount;

    public ?CData $pBindings;
}

final class VkDescriptorPoolSize extends CData
{
    public int $type;

    public int $descriptorCount;
}

final class VkDescriptorPoolCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $maxSets;

    public int $poolSizeCount;

    public ?CData $pPoolSizes;
}

final class VkDescriptorSetAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDescriptorPool $descriptorPool;

    public int $descriptorSetCount;

    public ?CData $pSetLayouts;
}

final class VkDescriptorImageInfo extends CData
{
    public VkSampler $sampler;

    public VkImageView $imageView;

    public int $imageLayout;
}

final class VkDescriptorBufferInfo extends CData
{
    public VkBuffer $buffer;

    public int $offset;

    public int $range;
}

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

final class VkAttachmentReference extends CData
{
    public int $attachment;

    public int $layout;
}

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

final class VkCommandPoolCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $queueFamilyIndex;
}

final class VkCommandBufferAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkCommandPool $commandPool;

    public int $level;

    public int $commandBufferCount;
}

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

final class VkCommandBufferBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public ?CData $pInheritanceInfo;
}

final class VkBufferCopy extends CData
{
    public int $srcOffset;

    public int $dstOffset;

    public int $size;
}

final class VkImageSubresourceLayers extends CData
{
    public int $aspectMask;

    public int $mipLevel;

    public int $baseArrayLayer;

    public int $layerCount;
}

final class VkImageCopy extends CData
{
    public VkImageSubresourceLayers $srcSubresource;

    public VkOffset3D $srcOffset;

    public VkImageSubresourceLayers $dstSubresource;

    public VkOffset3D $dstOffset;

    public VkExtent3D $extent;
}

final class VkImageBlit extends CData
{
    public VkImageSubresourceLayers $srcSubresource;

    /** @var VkOffset3D[] */
    public array $srcOffsets;

    public VkImageSubresourceLayers $dstSubresource;

    /** @var VkOffset3D[] */
    public array $dstOffsets;
}

final class VkBufferImageCopy extends CData
{
    public int $bufferOffset;

    public int $bufferRowLength;

    public int $bufferImageHeight;

    public VkImageSubresourceLayers $imageSubresource;

    public VkOffset3D $imageOffset;

    public VkExtent3D $imageExtent;
}

final class VkClearDepthStencilValue extends CData
{
    public float $depth;

    public int $stencil;
}

final class VkClearAttachment extends CData
{
    public int $aspectMask;

    public int $colorAttachment;

    public ?CData $clearValue;
}

final class VkClearRect extends CData
{
    public VkRect2D $rect;

    public int $baseArrayLayer;

    public int $layerCount;
}

final class VkImageResolve extends CData
{
    public VkImageSubresourceLayers $srcSubresource;

    public VkOffset3D $srcOffset;

    public VkImageSubresourceLayers $dstSubresource;

    public VkOffset3D $dstOffset;

    public VkExtent3D $extent;
}

final class VkMemoryBarrier extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $srcAccessMask;

    public int $dstAccessMask;
}

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

final class VkDispatchIndirectCommand extends CData
{
    public int $x;

    public int $y;

    public int $z;
}

final class VkDrawIndexedIndirectCommand extends CData
{
    public int $indexCount;

    public int $instanceCount;

    public int $firstIndex;

    public int $vertexOffset;

    public int $firstInstance;
}

final class VkDrawIndirectCommand extends CData
{
    public int $vertexCount;

    public int $instanceCount;

    public int $firstVertex;

    public int $firstInstance;
}

final class VkBaseOutStructure extends CData
{
    public int $sType;

    public ?CData $pNext;
}

final class VkBaseInStructure extends CData
{
    public int $sType;

    public ?CData $pNext;
}

final class VkSamplerYcbcrConversion extends CData
{
}

final class VkDescriptorUpdateTemplate extends CData
{
}

final class VkBindBufferMemoryInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkBuffer $buffer;

    public VkDeviceMemory $memory;

    public int $memoryOffset;
}

final class VkBindImageMemoryInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;

    public VkDeviceMemory $memory;

    public int $memoryOffset;
}

final class VkPhysicalDevice16BitStorageFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $storageBuffer16BitAccess;

    public int $uniformAndStorageBuffer16BitAccess;

    public int $storagePushConstant16;

    public int $storageInputOutput16;
}

final class VkMemoryDedicatedRequirements extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $prefersDedicatedAllocation;

    public int $requiresDedicatedAllocation;
}

final class VkMemoryDedicatedAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;

    public VkBuffer $buffer;
}

final class VkMemoryAllocateFlagsInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $deviceMask;
}

final class VkDeviceGroupRenderPassBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceMask;

    public int $deviceRenderAreaCount;

    public ?CData $pDeviceRenderAreas;
}

final class VkDeviceGroupCommandBufferBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceMask;
}

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

final class VkDeviceGroupBindSparseInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $resourceDeviceIndex;

    public int $memoryDeviceIndex;
}

final class VkBindBufferMemoryDeviceGroupInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceIndexCount;

    public ?CData $pDeviceIndices;
}

final class VkBindImageMemoryDeviceGroupInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceIndexCount;

    public ?CData $pDeviceIndices;

    public int $splitInstanceBindRegionCount;

    public ?CData $pSplitInstanceBindRegions;
}

final class VkPhysicalDeviceGroupProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $physicalDeviceCount;

    /** @var array|VkPhysicalDevice[] */
    public array $physicalDevices;

    public int $subsetAllocation;
}

final class VkDeviceGroupDeviceCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $physicalDeviceCount;

    public ?CData $pPhysicalDevices;
}

final class VkBufferMemoryRequirementsInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkBuffer $buffer;
}

final class VkImageMemoryRequirementsInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;
}

final class VkImageSparseMemoryRequirementsInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;
}

final class VkMemoryRequirements2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkMemoryRequirements $memoryRequirements;
}

final class VkSparseImageMemoryRequirements2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSparseImageMemoryRequirements $memoryRequirements;
}

final class VkPhysicalDeviceFeatures2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPhysicalDeviceFeatures $features;
}

final class VkPhysicalDeviceProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPhysicalDeviceProperties $properties;
}

final class VkFormatProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkFormatProperties $formatProperties;
}

final class VkImageFormatProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImageFormatProperties $imageFormatProperties;
}

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

final class VkQueueFamilyProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkQueueFamilyProperties $queueFamilyProperties;
}

final class VkPhysicalDeviceMemoryProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPhysicalDeviceMemoryProperties $memoryProperties;
}

final class VkSparseImageFormatProperties2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSparseImageFormatProperties $properties;
}

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

final class VkPhysicalDevicePointClippingProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pointClippingBehavior;
}

final class VkInputAttachmentAspectReference extends CData
{
    public int $subpass;

    public int $inputAttachmentIndex;

    public int $aspectMask;
}

final class VkRenderPassInputAttachmentAspectCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $aspectReferenceCount;

    public ?CData $pAspectReferences;
}

final class VkImageViewUsageCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $usage;
}

final class VkPipelineTessellationDomainOriginStateCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $domainOrigin;
}

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

final class VkPhysicalDeviceMultiviewFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $multiview;

    public int $multiviewGeometryShader;

    public int $multiviewTessellationShader;
}

final class VkPhysicalDeviceMultiviewProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxMultiviewViewCount;

    public int $maxMultiviewInstanceIndex;
}

final class VkPhysicalDeviceVariablePointersFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $variablePointersStorageBuffer;

    public int $variablePointers;
}

final class VkPhysicalDeviceProtectedMemoryFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $protectedMemory;
}

final class VkPhysicalDeviceProtectedMemoryProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $protectedNoFault;
}

final class VkDeviceQueueInfo2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $queueFamilyIndex;

    public int $queueIndex;
}

final class VkProtectedSubmitInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $protectedSubmit;
}

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

final class VkSamplerYcbcrConversionInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSamplerYcbcrConversion $conversion;
}

final class VkBindImagePlaneMemoryInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $planeAspect;
}

final class VkImagePlaneMemoryRequirementsInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $planeAspect;
}

final class VkPhysicalDeviceSamplerYcbcrConversionFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $samplerYcbcrConversion;
}

final class VkSamplerYcbcrConversionImageFormatProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $combinedImageSamplerDescriptorCount;
}

final class VkDescriptorUpdateTemplateEntry extends CData
{
    public int $dstBinding;

    public int $dstArrayElement;

    public int $descriptorCount;

    public int $descriptorType;

    public int $offset;

    public int $stride;
}

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

final class VkExternalMemoryProperties extends CData
{
    public int $externalMemoryFeatures;

    public int $exportFromImportedHandleTypes;

    public int $compatibleHandleTypes;
}

final class VkPhysicalDeviceExternalImageFormatInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;
}

final class VkExternalImageFormatProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExternalMemoryProperties $externalMemoryProperties;
}

final class VkPhysicalDeviceExternalBufferInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $usage;

    public int $handleType;
}

final class VkExternalBufferProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExternalMemoryProperties $externalMemoryProperties;
}

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

final class VkExternalMemoryImageCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

final class VkExternalMemoryBufferCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

final class VkExportMemoryAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

final class VkPhysicalDeviceExternalFenceInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;
}

final class VkExternalFenceProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $exportFromImportedHandleTypes;

    public int $compatibleHandleTypes;

    public int $externalFenceFeatures;
}

final class VkExportFenceCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

final class VkExportSemaphoreCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

final class VkPhysicalDeviceExternalSemaphoreInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;
}

final class VkExternalSemaphoreProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $exportFromImportedHandleTypes;

    public int $compatibleHandleTypes;

    public int $externalSemaphoreFeatures;
}

final class VkPhysicalDeviceMaintenance3Properties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxPerSetDescriptors;

    public int $maxMemoryAllocationSize;
}

final class VkDescriptorSetLayoutSupport extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $supported;
}

final class VkPhysicalDeviceShaderDrawParametersFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderDrawParameters;
}

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

final class VkConformanceVersion extends CData
{
    public int $major;

    public int $minor;

    public int $subminor;

    public int $patch;
}

final class VkPhysicalDeviceVulkan12Properties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $driverID;

    /** @var string|CData|null */
    public ?CData $driverName;

    /** @var string|CData|null */
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

final class VkImageFormatListCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $viewFormatCount;

    public ?CData $pViewFormats;
}

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

final class VkAttachmentReference2 extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $attachment;

    public int $layout;

    public int $aspectMask;
}

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

final class VkSubpassBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $contents;
}

final class VkSubpassEndInfo extends CData
{
    public int $sType;

    public ?CData $pNext;
}

final class VkPhysicalDevice8BitStorageFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $storageBuffer8BitAccess;

    public int $uniformAndStorageBuffer8BitAccess;

    public int $storagePushConstant8;
}

final class VkPhysicalDeviceDriverProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $driverID;

    /** @var string|CData|null */
    public ?CData $driverName;

    /** @var string|CData|null */
    public ?CData $driverInfo;

    public VkConformanceVersion $conformanceVersion;
}

final class VkPhysicalDeviceShaderAtomicInt64Features extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderBufferInt64Atomics;

    public int $shaderSharedInt64Atomics;
}

final class VkPhysicalDeviceShaderFloat16Int8Features extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderFloat16;

    public int $shaderInt8;
}

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

final class VkDescriptorSetLayoutBindingFlagsCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $bindingCount;

    public ?CData $pBindingFlags;
}

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

final class VkDescriptorSetVariableDescriptorCountAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $descriptorSetCount;

    public ?CData $pDescriptorCounts;
}

final class VkDescriptorSetVariableDescriptorCountLayoutSupport extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxVariableDescriptorCount;
}

final class VkSubpassDescriptionDepthStencilResolve extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $depthResolveMode;

    public int $stencilResolveMode;

    public ?CData $pDepthStencilResolveAttachment;
}

final class VkPhysicalDeviceDepthStencilResolveProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $supportedDepthResolveModes;

    public int $supportedStencilResolveModes;

    public int $independentResolveNone;

    public int $independentResolve;
}

final class VkPhysicalDeviceScalarBlockLayoutFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $scalarBlockLayout;
}

final class VkImageStencilUsageCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stencilUsage;
}

final class VkSamplerReductionModeCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $reductionMode;
}

final class VkPhysicalDeviceSamplerFilterMinmaxProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $filterMinmaxSingleComponentFormats;

    public int $filterMinmaxImageComponentMapping;
}

final class VkPhysicalDeviceVulkanMemoryModelFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $vulkanMemoryModel;

    public int $vulkanMemoryModelDeviceScope;

    public int $vulkanMemoryModelAvailabilityVisibilityChains;
}

final class VkPhysicalDeviceImagelessFramebufferFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $imagelessFramebuffer;
}

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

final class VkFramebufferAttachmentsCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $attachmentImageInfoCount;

    public ?CData $pAttachmentImageInfos;
}

final class VkRenderPassAttachmentBeginInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $attachmentCount;

    public ?CData $pAttachments;
}

final class VkPhysicalDeviceUniformBufferStandardLayoutFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $uniformBufferStandardLayout;
}

final class VkPhysicalDeviceShaderSubgroupExtendedTypesFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderSubgroupExtendedTypes;
}

final class VkPhysicalDeviceSeparateDepthStencilLayoutsFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $separateDepthStencilLayouts;
}

final class VkAttachmentReferenceStencilLayout extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stencilLayout;
}

final class VkAttachmentDescriptionStencilLayout extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stencilInitialLayout;

    public int $stencilFinalLayout;
}

final class VkPhysicalDeviceHostQueryResetFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $hostQueryReset;
}

final class VkPhysicalDeviceTimelineSemaphoreFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $timelineSemaphore;
}

final class VkPhysicalDeviceTimelineSemaphoreProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxTimelineSemaphoreValueDifference;
}

final class VkSemaphoreTypeCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $semaphoreType;

    public int $initialValue;
}

final class VkTimelineSemaphoreSubmitInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $waitSemaphoreValueCount;

    public ?CData $pWaitSemaphoreValues;

    public int $signalSemaphoreValueCount;

    public ?CData $pSignalSemaphoreValues;
}

final class VkSemaphoreWaitInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $semaphoreCount;

    public ?CData $pSemaphores;

    public ?CData $pValues;
}

final class VkSemaphoreSignalInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSemaphore $semaphore;

    public int $value;
}

final class VkPhysicalDeviceBufferDeviceAddressFeatures extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $bufferDeviceAddress;

    public int $bufferDeviceAddressCaptureReplay;

    public int $bufferDeviceAddressMultiDevice;
}

final class VkBufferDeviceAddressInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkBuffer $buffer;
}

final class VkBufferOpaqueCaptureAddressCreateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $opaqueCaptureAddress;
}

final class VkMemoryOpaqueCaptureAddressAllocateInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $opaqueCaptureAddress;
}

final class VkDeviceMemoryOpaqueCaptureAddressInfo extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDeviceMemory $memory;
}

final class VkSwapchainKHR extends CData
{
}

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

final class VkImageSwapchainCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSwapchainKHR $swapchain;
}

final class VkBindImageMemorySwapchainInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSwapchainKHR $swapchain;

    public int $imageIndex;
}

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

final class VkDeviceGroupPresentCapabilitiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var int[] */
    public array $presentMask;

    public int $modes;
}

final class VkDeviceGroupPresentInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $swapchainCount;

    public ?CData $pDeviceMasks;

    public int $mode;
}

final class VkDeviceGroupSwapchainCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $modes;
}

final class VkDisplayKHR extends CData
{
}

final class VkDisplayModeKHR extends CData
{
}

final class VkDisplayModeParametersKHR extends CData
{
    public VkExtent2D $visibleRegion;

    public int $refreshRate;
}

final class VkDisplayModePropertiesKHR extends CData
{
    public VkDisplayModeKHR $displayMode;

    public VkDisplayModeParametersKHR $parameters;
}

final class VkDisplayModeCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public VkDisplayModeParametersKHR $parameters;
}

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

final class VkDisplayPlanePropertiesKHR extends CData
{
    public VkDisplayKHR $currentDisplay;

    public int $currentStackIndex;
}

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


final class VkDisplayPresentInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkRect2D $srcRect;

    public VkRect2D $dstRect;

    public int $persistent;
}

final class VkImportMemoryFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;

    public int $fd;
}

final class VkMemoryFdPropertiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $memoryTypeBits;
}

final class VkMemoryGetFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDeviceMemory $memory;

    public int $handleType;
}

final class VkImportSemaphoreFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSemaphore $semaphore;

    public int $flags;

    public int $handleType;

    public int $fd;
}

final class VkSemaphoreGetFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSemaphore $semaphore;

    public int $handleType;
}


final class VkPhysicalDevicePushDescriptorPropertiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxPushDescriptors;
}


final class VkRectLayerKHR extends CData
{
    public VkOffset2D $offset;

    public VkExtent2D $extent;

    public int $layer;
}

final class VkPresentRegionKHR extends CData
{
    public int $rectangleCount;

    public ?CData $pRectangles;
}

final class VkPresentRegionsKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $swapchainCount;

    public ?CData $pRegions;
}

final class VkSharedPresentSurfaceCapabilitiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $sharedPresentSupportedUsageFlags;
}

final class VkImportFenceFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkFence $fence;

    public int $flags;

    public int $handleType;

    public int $fd;
}

final class VkFenceGetFdInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkFence $fence;

    public int $handleType;
}

final class VkPhysicalDevicePerformanceQueryPropertiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $allowCommandBufferQueryCopies;
}

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

final class VkPerformanceCounterDescriptionKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    /** @var string|CData|null */
    public ?CData $name;

    /** @var string|CData|null */
    public ?CData $category;

    /** @var string|CData|null */
    public ?CData $description;
}

final class VkQueryPoolPerformanceCreateInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $queueFamilyIndex;

    public int $counterIndexCount;

    public ?CData $pCounterIndices;
}

final class VkAcquireProfilingLockInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $timeout;
}

final class VkPerformanceQuerySubmitInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $counterPassIndex;
}

final class VkPhysicalDeviceSurfaceInfo2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSurfaceKHR $surface;
}

final class VkSurfaceKHR extends CData
{
}

final class VkSurfaceCapabilities2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSurfaceCapabilitiesKHR $surfaceCapabilities;
}

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

final class VkSurfaceFormat2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkSurfaceFormatKHR $surfaceFormat;
}

final class VkSurfaceFormatKHR extends CData
{
    public int $format;

    public int $colorSpace;
}


final class VkDisplayProperties2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayPropertiesKHR $displayProperties;
}

final class VkDisplayPropertiesKHR extends CData
{
    public ?CData $display;

    /** @var string|CData|null */
    public ?CData $displayName;

    public ?CData $physicalDimensions;

    public ?CData $physicalResolution;

    public int $supportedTransforms;

    public int $planeReorderPossible;

    public int $persistentContent;
}


final class VkDisplayPlaneProperties2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayPlanePropertiesKHR $displayPlaneProperties;
}

final class VkDisplayModeProperties2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayModePropertiesKHR $displayModeProperties;
}

final class VkDisplayPlaneInfo2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayModeKHR $mode;

    public int $planeIndex;
}

final class VkDisplayPlaneCapabilities2KHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkDisplayPlaneCapabilitiesKHR $capabilities;
}

final class VkPhysicalDeviceShaderClockFeaturesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderSubgroupClock;

    public int $shaderDeviceClock;
}


final class VkSurfaceProtectedCapabilitiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $supportsProtected;
}

final class VkPipelineInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPipeline $pipeline;
}

final class VkPipelineExecutablePropertiesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stages;

    /** @var string|CData|null */
    public ?CData $name;

    /** @var string|CData|null */
    public ?CData $description;

    public int $subgroupSize;
}

final class VkPipelineExecutableInfoKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkPipeline $pipeline;

    public int $executableIndex;
}

final class VkPipelineExecutableStatisticKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var string|CData|null */
    public ?CData$name;

    /** @var string|CData|null */
    public ?CData $description;

    public int $format;

    public ?CData $value;
}

final class VkPipelineExecutableInternalRepresentationKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var string|CData|null */
    public ?CData$name;

    /** @var string|CData|null */
    public ?CData $description;

    public int $isText;

    public int $dataSize;

    public ?CData $pData;
}

final class VkDebugReportCallbackEXT extends CData
{
}

final class VkDebugReportCallbackCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    /** @var callable|\Closure */
    public object $pfnCallback;

    public ?CData $pUserData;
}


final class VkDebugMarkerObjectNameInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $objectType;

    public int $object;

    public ?CData $pObjectName;
}

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

final class VkDebugMarkerMarkerInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public ?CData $pMarkerName;

    /** @var float[] */
    public array $color;
}

final class VkDedicatedAllocationImageCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $dedicatedAllocation;
}

final class VkDedicatedAllocationBufferCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $dedicatedAllocation;
}

final class VkDedicatedAllocationMemoryAllocateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImage $image;

    public VkBuffer $buffer;
}

final class VkPhysicalDeviceTransformFeedbackFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $transformFeedback;

    public int $geometryStreams;
}

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

final class VkPipelineRasterizationStateStreamCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $rasterizationStream;
}

final class VkImageViewHandleInfoNVX extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkImageView $imageView;

    public int $descriptorType;

    public VkSampler $sampler;
}

final class VkTextureLODGatherFormatPropertiesAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $supportsTextureGatherLODBiasAMD;
}

final class VkShaderResourceUsageAMD extends CData
{
    public int $numUsedVgprs;

    public int $numUsedSgprs;

    public int $ldsSizePerLocalWorkGroup;

    public int $ldsUsageSizeInBytes;

    public int $scratchMemUsageInBytes;
}

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

final class VkPhysicalDeviceCornerSampledImageFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $cornerSampledImage;
}

final class VkExternalMemoryImageCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

final class VkExportMemoryAllocateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleTypes;
}

final class VkPhysicalDeviceTextureCompressionASTCHDRFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $textureCompressionASTC_HDR;
}

final class VkImageViewASTCDecodeModeEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $decodeMode;
}

final class VkPhysicalDeviceASTCDecodeFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $decodeModeSharedExponent;
}

final class VkPhysicalDeviceConditionalRenderingFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $conditionalRendering;

    public int $inheritedConditionalRendering;
}

final class VkCommandBufferInheritanceConditionalRenderingInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $conditionalRenderingEnable;
}

final class VkViewportWScalingNV extends CData
{
    public float $xcoeff;

    public float $ycoeff;
}

final class VkPipelineViewportWScalingStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $viewportWScalingEnable;

    public int $viewportCount;

    public ?CData $pViewportWScalings;
}

final class VkDeviceEventInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceEvent;
}

final class VkDisplayEventInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $displayEvent;
}

final class VkSwapchainCounterCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $surfaceCounters;
}

final class VkRefreshCycleDurationGOOGLE extends CData
{
    public int $refreshDuration;
}

final class VkPastPresentationTimingGOOGLE extends CData
{
    public int $presentID;

    public int $desiredPresentTime;

    public int $actualPresentTime;

    public int $earliestPresentTime;

    public int $presentMargin;
}

final class VkPresentTimeGOOGLE extends CData
{
    public int $presentID;

    public int $desiredPresentTime;
}

final class VkPresentTimesInfoGOOGLE extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $swapchainCount;

    public ?CData $pTimes;
}

final class VkPhysicalDeviceMultiviewPerViewAttributesPropertiesNVX extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $perViewPositionAllComponents;
}

final class VkPipelineViewportSwizzleStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $viewportCount;

    public ?CData $pViewportSwizzles;
}

final class VkPipelineDiscardRectangleStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $discardRectangleMode;

    public int $discardRectangleCount;

    public ?CData $pDiscardRectangles;
}

final class VkPipelineRasterizationConservativeStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $conservativeRasterizationMode;

    public float $extraPrimitiveOverestimationSize;
}

final class VkPhysicalDeviceDepthClipEnableFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $depthClipEnable;
}

final class VkPipelineRasterizationDepthClipStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $depthClipEnable;
}

final class VkXYColorEXT extends CData
{
    public float $x;

    public float $y;
}

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

final class VkDebugUtilsMessengerEXT extends CData
{
}

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

final class VkDebugUtilsLabelEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public ?CData $pLabelName;

    /** @var float[] */
    public array $color;
}

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

final class VkPhysicalDeviceInlineUniformBlockFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $inlineUniformBlock;

    public int $descriptorBindingInlineUniformBlockUpdateAfterBind;
}

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

final class VkWriteDescriptorSetInlineUniformBlockEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $dataSize;

    public ?CData $pData;
}

final class VkDescriptorPoolInlineUniformBlockCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxInlineUniformBlockBindings;
}

final class VkSampleLocationEXT extends CData
{
    public float $x;

    public float $y;
}

final class VkSampleLocationsInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $sampleLocationsPerPixel;

    public VkExtent2D $sampleLocationGridSize;

    public int $sampleLocationsCount;

    public ?CData $pSampleLocations;
}

final class VkAttachmentSampleLocationsEXT extends CData
{
    public int $attachmentIndex;

    public VkSampleLocationsInfoEXT $sampleLocationsInfo;
}

final class VkSubpassSampleLocationsEXT extends CData
{
    public int $subpassIndex;

    public VkSampleLocationsInfoEXT $sampleLocationsInfo;
}

final class VkRenderPassSampleLocationsBeginInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $attachmentInitialSampleLocationsCount;

    public ?CData $pAttachmentInitialSampleLocations;

    public int $postSubpassSampleLocationsCount;

    public ?CData $pPostSubpassSampleLocations;
}

final class VkPipelineSampleLocationsStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $sampleLocationsEnable;

    public VkSampleLocationsInfoEXT $sampleLocationsInfo;
}

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

final class VkMultisamplePropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExtent2D $maxSampleLocationGridSize;
}

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

final class VkPipelineColorBlendAdvancedStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $srcPremultiplied;

    public int $dstPremultiplied;

    public int $blendOverlap;
}

final class VkPipelineCoverageToColorStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $coverageToColorEnable;

    public int $coverageToColorLocation;
}

final class VkPhysicalDeviceShaderSMBuiltinsPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderSMCount;

    public int $shaderWarpsPerSM;
}

final class VkPhysicalDeviceShaderSMBuiltinsFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderSMBuiltins;
}

final class VkDrmFormatModifierPropertiesEXT extends CData
{
    public int $drmFormatModifier;

    public int $drmFormatModifierPlaneCount;

    public int $drmFormatModifierTilingFeatures;
}

final class VkDrmFormatModifierPropertiesListEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifierCount;

    public ?CData $pDrmFormatModifierProperties;
}

final class VkPhysicalDeviceImageDrmFormatModifierInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifier;

    public int $sharingMode;

    public int $queueFamilyIndexCount;

    public ?CData $pQueueFamilyIndices;
}

final class VkImageDrmFormatModifierListCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifierCount;

    public ?CData $pDrmFormatModifiers;
}

final class VkImageDrmFormatModifierExplicitCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifier;

    public int $drmFormatModifierPlaneCount;

    public ?CData $pPlaneLayouts;
}

final class VkImageDrmFormatModifierPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $drmFormatModifier;
}

final class VkValidationCacheEXT extends CData
{
}

final class VkShaderModuleValidationCacheCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkValidationCacheEXT $validationCache;
}

final class VkPipelineViewportShadingRateImageStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shadingRateImageEnable;

    public int $viewportCount;

    public ?CData $pShadingRatePalettes;
}

final class VkPhysicalDeviceShadingRateImageFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shadingRateImage;

    public int $shadingRateCoarseSampleOrder;
}

final class VkPhysicalDeviceShadingRateImagePropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExtent2D $shadingRateTexelSize;

    public int $shadingRatePaletteSize;

    public int $shadingRateMaxCoarseSamples;
}

final class VkCoarseSampleLocationNV extends CData
{
    public int $pixelX;

    public int $pixelY;

    public int $sample;
}

final class VkCoarseSampleOrderCustomNV extends CData
{
    public int $shadingRate;

    public int $sampleCount;

    public int $sampleLocationCount;

    public ?CData $pSampleLocations;
}

final class VkPipelineViewportCoarseSampleOrderStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $sampleOrderType;

    public int $customSampleOrderCount;

    public ?CData $pCustomSampleOrders;
}

final class VkAccelerationStructureKHR extends CData
{
}

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

final class VkGeometryAABBNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkBuffer $aabbData;

    public int $numAABBs;

    public int $stride;

    public int $offset;
}

final class VkGeometryDataNV extends CData
{
    public VkGeometryTrianglesNV $triangles;

    public VkGeometryAABBNV $aabbs;
}

final class VkGeometryNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $geometryType;

    public VkGeometryDataNV $geometry;

    public int $flags;
}

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

final class VkAccelerationStructureCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $compactedSize;

    public VkAccelerationStructureInfoNV $info;
}

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

final class VkWriteDescriptorSetAccelerationStructureKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $accelerationStructureCount;

    public ?CData $pAccelerationStructures;
}

final class VkAccelerationStructureMemoryRequirementsInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $type;

    public ?CData $accelerationStructure;
}

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

final class VkTransformMatrixKHR extends CData
{
    /** @var float[] */
    public array $matrix;
}

final class VkAabbPositionsKHR extends CData
{
    public float $minX;

    public float $minY;

    public float $minZ;

    public float $maxX;

    public float $maxY;

    public float $maxZ;
}

final class VkAccelerationStructureInstanceKHR extends CData
{
    public VkTransformMatrixKHR $transform;

    public int $instanceCustomIndex;

    public int $mask;

    public int $instanceShaderBindingTableRecordOffset;

    public int $flags;

    public int $accelerationStructureReference;
}

final class VkPhysicalDeviceRepresentativeFragmentTestFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $representativeFragmentTest;
}

final class VkPipelineRepresentativeFragmentTestStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $representativeFragmentTestEnable;
}

final class VkPhysicalDeviceImageViewImageFormatInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $imageViewType;
}

final class VkFilterCubicImageViewImageFormatPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $filterCubic;

    public int $filterCubicMinmax;
}

final class VkImportMemoryHostPointerInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $handleType;

    public ?CData $pHostPointer;
}

final class VkMemoryHostPointerPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $memoryTypeBits;
}

final class VkPhysicalDeviceExternalMemoryHostPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $minImportedHostPointerAlignment;
}

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

final class VkPhysicalDeviceVertexAttributeDivisorPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxVertexAttribDivisor;
}

final class VkVertexInputBindingDivisorDescriptionEXT extends CData
{
    public int $binding;

    public int $divisor;
}

final class VkPipelineVertexInputDivisorStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $vertexBindingDivisorCount;

    public ?CData $pVertexBindingDivisors;
}

final class VkPhysicalDeviceVertexAttributeDivisorFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $vertexAttributeInstanceRateDivisor;

    public int $vertexAttributeInstanceRateZeroDivisor;
}

final class VkPipelineCreationFeedbackCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public ?CData $pPipelineCreationFeedback;

    public int $pipelineStageCreationFeedbackCount;

    public ?CData $pPipelineStageCreationFeedbacks;
}

final class VkPhysicalDeviceComputeShaderDerivativesFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $computeDerivativeGroupQuads;

    public int $computeDerivativeGroupLinear;
}

final class VkPhysicalDeviceMeshShaderFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $taskShader;

    public int $meshShader;
}

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

final class VkDrawMeshTasksIndirectCommandNV extends CData
{
    public int $taskCount;

    public int $firstTask;
}

final class VkPhysicalDeviceFragmentShaderBarycentricFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $fragmentShaderBarycentric;
}

final class VkPhysicalDeviceShaderImageFootprintFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $imageFootprint;
}

final class VkPipelineViewportExclusiveScissorStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $exclusiveScissorCount;

    public ?CData $pExclusiveScissors;
}

final class VkPhysicalDeviceExclusiveScissorFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $exclusiveScissor;
}


final class VkQueueFamilyCheckpointPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $checkpointExecutionStageMask;
}

final class VkCheckpointDataNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stage;

    public ?CData $pCheckpointMarker;
}


final class VkPhysicalDeviceShaderIntegerFunctions2FeaturesINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderIntegerFunctions2;
}

final class VkPerformanceConfigurationINTEL extends CData
{
}

final class VkPerformanceValueINTEL extends CData
{
    public int $type;

    public ?CData $data;
}

final class VkInitializePerformanceApiInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public ?CData $pUserData;
}

final class VkQueryPoolPerformanceQueryCreateInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $performanceCountersSampling;
}

final class VkPerformanceMarkerInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $marker;
}

final class VkPerformanceStreamMarkerInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $marker;
}

final class VkPerformanceOverrideInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $type;

    public int $enable;

    public int $parameter;
}

final class VkPerformanceConfigurationAcquireInfoINTEL extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $type;
}


final class VkPhysicalDevicePCIBusInfoPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pciDomain;

    public int $pciBus;

    public int $pciDevice;

    public int $pciFunction;
}

final class VkDisplayNativeHdrSurfaceCapabilitiesAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $localDimmingSupport;
}

final class VkSwapchainDisplayNativeHdrCreateInfoAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $localDimmingEnable;
}

final class VkPhysicalDeviceFragmentDensityMapFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $fragmentDensityMap;

    public int $fragmentDensityMapDynamic;

    public int $fragmentDensityMapNonSubsampledImages;
}

final class VkPhysicalDeviceFragmentDensityMapPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkExtent2D $minFragmentDensityTexelSize;

    public VkExtent2D $maxFragmentDensityTexelSize;

    public int $fragmentDensityInvocations;
}

final class VkRenderPassFragmentDensityMapCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public VkAttachmentReference $fragmentDensityMapAttachment;
}

final class VkPhysicalDeviceSubgroupSizeControlFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $subgroupSizeControl;

    public int $computeFullSubgroups;
}

final class VkPhysicalDeviceSubgroupSizeControlPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $minSubgroupSize;

    public int $maxSubgroupSize;

    public int $maxComputeWorkgroupSubgroups;

    public int $requiredSubgroupSizeStages;
}

final class VkPipelineShaderStageRequiredSubgroupSizeCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $requiredSubgroupSize;
}

final class VkPhysicalDeviceCoherentMemoryFeaturesAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceCoherentMemory;
}

final class VkPhysicalDeviceMemoryBudgetPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var int[] */
    public array $heapBudget;

    /** @var int[] */
    public array $heapUsage;
}

final class VkPhysicalDeviceMemoryPriorityFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $memoryPriority;
}

final class VkMemoryPriorityAllocateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public float $priority;
}

final class VkPhysicalDeviceDedicatedAllocationImageAliasingFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $dedicatedAllocationImageAliasing;
}

final class VkPhysicalDeviceBufferDeviceAddressFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $bufferDeviceAddress;

    public int $bufferDeviceAddressCaptureReplay;

    public int $bufferDeviceAddressMultiDevice;
}

final class VkBufferDeviceAddressCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceAddress;
}

final class VkPhysicalDeviceCooperativeMatrixFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $cooperativeMatrix;

    public int $cooperativeMatrixRobustBufferAccess;
}

final class VkPhysicalDeviceCooperativeMatrixPropertiesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $cooperativeMatrixSupportedStages;
}


final class VkPipelineCoverageReductionStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $coverageReductionMode;
}

final class VkFramebufferMixedSamplesCombinationNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $coverageReductionMode;

    public int $rasterizationSamples;

    public int $depthStencilSamples;

    public int $colorSamples;
}

final class VkPhysicalDeviceFragmentShaderInterlockFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $fragmentShaderSampleInterlock;

    public int $fragmentShaderPixelInterlock;

    public int $fragmentShaderShadingRateInterlock;
}

final class VkPhysicalDeviceYcbcrImageArraysFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $ycbcrImageArrays;
}

final class VkHeadlessSurfaceCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}


final class VkPhysicalDeviceLineRasterizationPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $lineSubPixelPrecisionBits;
}

final class VkPipelineRasterizationLineStateCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $lineRasterizationMode;

    public int $stippledLineEnable;

    public int $lineStippleFactor;

    public int $lineStipplePattern;
}

final class VkPhysicalDeviceIndexTypeUint8FeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $indexTypeUint8;
}

final class VkPhysicalDeviceShaderDemoteToHelperInvocationFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderDemoteToHelperInvocation;
}

final class VkIndirectCommandsLayoutNV extends CData
{
}

final class VkPhysicalDeviceDeviceGeneratedCommandsFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $deviceGeneratedCommands;
}

final class VkGraphicsShaderGroupCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $stageCount;

    public ?CData $pStages;

    public ?CData $pVertexInputState;

    public ?CData $pTessellationState;
}

final class VkGraphicsPipelineShaderGroupsCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $groupCount;

    public ?CData $pGroups;

    public int $pipelineCount;

    public ?CData $pPipelines;
}

final class VkBindShaderGroupIndirectCommandNV extends CData
{
    public int $groupIndex;
}

final class VkBindIndexBufferIndirectCommandNV extends CData
{
    public int $bufferAddress;

    public int $size;

    public int $indexType;
}

final class VkBindVertexBufferIndirectCommandNV extends CData
{
    public int $bufferAddress;

    public int $size;

    public int $stride;
}

final class VkSetStateFlagsIndirectCommandNV extends CData
{
    public int $data;
}

final class VkIndirectCommandsStreamNV extends CData
{
    public VkBuffer $buffer;

    public int $offset;
}

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

final class VkGeneratedCommandsMemoryRequirementsInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pipelineBindPoint;

    public VkPipeline $pipeline;

    public VkIndirectCommandsLayoutNV $indirectCommandsLayout;

    public int $maxSequencesCount;
}

final class VkPhysicalDeviceTexelBufferAlignmentFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $texelBufferAlignment;
}

final class VkPhysicalDeviceTexelBufferAlignmentPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $storageTexelBufferOffsetAlignmentBytes;

    public int $storageTexelBufferOffsetSingleTexelAlignment;

    public int $uniformTexelBufferOffsetAlignmentBytes;

    public int $uniformTexelBufferOffsetSingleTexelAlignment;
}

final class VkRenderPassTransformBeginInfoQCOM extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $transform;
}

final class VkCommandBufferInheritanceRenderPassTransformInfoQCOM extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $transform;

    public VkRect2D $renderArea;
}

final class VkPhysicalDevicePipelineCreationCacheControlFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pipelineCreationCacheControl;
}

final class VkDeviceDiagnosticsConfigCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;
}

final class VkPhysicalDeviceSubgroupProperties extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $subgroupSize;

    public int $supportedStages;

    public int $supportedOperations;

    public int $quadOperationsInAllStages;
}

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

    /** @var CData|null */
    public ?CData $pQueueFamilyIndices;

    public int $preTransform;

    public int $compositeAlpha;

    public int $presentMode;

    public int $clipped;

    /** @var CData|null|VkSwapchainKHR */
    public ?CData $oldSwapchain;
}

final class VkPhysicalDevicePerformanceQueryFeaturesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $performanceCounterQueryPools;

    public int $performanceCounterMultipleQueryPools;
}

final class VkPhysicalDevicePipelineExecutablePropertiesFeaturesKHR extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $pipelineExecutableInfo;
}

final class VkPipelineRasterizationStateRasterizationOrderAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $rasterizationOrder;
}

final class VkExternalImageFormatPropertiesNV extends CData
{
    /** @var CData|null|VkImageFormatProperties */
    public ?CData $imageFormatProperties;

    public int $externalMemoryFeatures;

    public int $exportFromImportedHandleTypes;

    public int $compatibleHandleTypes;
}

final class VkValidationFlagsEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $disabledValidationCheckCount;

    public ?CData $pDisabledValidationChecks;
}

final class VkConditionalRenderingBeginInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var CData|null|VkBuffer */
    public ?CData $buffer;

    public int $offset;

    public int $flags;
}

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

final class VkDisplayPowerInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $powerState;
}

final class VkViewportSwizzleNV extends CData
{
    public int $x;

    public int $y;

    public int $z;

    public int $w;
}

final class VkPhysicalDeviceDiscardRectanglePropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $maxDiscardRectangles;
}

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

final class VkDebugUtilsObjectNameInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $objectType;

    public int $objectHandle;

    /** @var string|CData|null */
    public ?CData $pObjectName;
}

final class VkPhysicalDeviceBlendOperationAdvancedFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $advancedBlendCoherentOperations;
}

final class VkPipelineCoverageModulationStateCreateInfoNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $coverageModulationMode;

    public int $coverageModulationTableEnable;

    public int $coverageModulationTableCount;

    /** @var CData|null */
    public ?CData $pCoverageModulationTable;
}

final class VkValidationCacheCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $flags;

    public int $coverageModulationMode;

    public int $coverageModulationTableEnable;

    public int $coverageModulationTableCount;

    /** @var CData|null */
    public ?CData $pCoverageModulationTable;
}

final class VkShadingRatePaletteNV extends CData
{
    public int $shadingRatePaletteEntryCount;

    public ?CData $pShadingRatePaletteEntries;
}

final class VkDeviceQueueGlobalPriorityCreateInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $globalPriority;
}

final class VkPipelineCompilerControlCreateInfoAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $compilerControlFlags;
}

final class VkCalibratedTimestampInfoEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $timeDomain;
}

final class VkDeviceMemoryOverallocationCreateInfoAMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $overallocationBehavior;
}

final class VkPipelineCreationFeedbackEXT extends CData
{
    public int $flags;

    public int $duration;
}

final class VkPhysicalDeviceShaderCoreProperties2AMD extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $shaderCoreFeatures;

    public int $activeComputeUnitCount;
}

final class VkPhysicalDeviceToolPropertiesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    /** @var string|CData|null */
    public ?CData $name;

    /** @var string|CData|null */
    public ?CData $version;

    public int $purposes;

    /** @var string|CData|null */
    public ?CData $description;

    /** @var string|CData|null */
    public ?CData $layer;
}

final class VkValidationFeaturesEXT extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $enabledValidationFeatureCount;

    public ?CData $pEnabledValidationFeatures;

    public int $disabledValidationFeatureCount;

    public ?CData $pDisabledValidationFeatures;
}

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

final class VkPhysicalDeviceCoverageReductionModeFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $coverageReductionMode;
}

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

final class VkPhysicalDeviceDiagnosticsConfigFeaturesNV extends CData
{
    public int $sType;

    public ?CData $pNext;

    public int $diagnosticsConfig;
}
