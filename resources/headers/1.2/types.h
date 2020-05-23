typedef uint64_t VkDeviceAddress;
#define VK_MAX_DRIVER_NAME_SIZE           256
#define VK_MAX_DRIVER_INFO_SIZE           256

typedef enum VkDriverId {
    VK_DRIVER_ID_AMD_PROPRIETARY = 1,
    VK_DRIVER_ID_AMD_OPEN_SOURCE = 2,
    VK_DRIVER_ID_MESA_RADV = 3,
    VK_DRIVER_ID_NVIDIA_PROPRIETARY = 4,
    VK_DRIVER_ID_INTEL_PROPRIETARY_WINDOWS = 5,
    VK_DRIVER_ID_INTEL_OPEN_SOURCE_MESA = 6,
    VK_DRIVER_ID_IMAGINATION_PROPRIETARY = 7,
    VK_DRIVER_ID_QUALCOMM_PROPRIETARY = 8,
    VK_DRIVER_ID_ARM_PROPRIETARY = 9,
    VK_DRIVER_ID_GOOGLE_SWIFTSHADER = 10,
    VK_DRIVER_ID_GGP_PROPRIETARY = 11,
    VK_DRIVER_ID_BROADCOM_PROPRIETARY = 12,
    VK_DRIVER_ID_AMD_PROPRIETARY_KHR = VK_DRIVER_ID_AMD_PROPRIETARY,
    VK_DRIVER_ID_AMD_OPEN_SOURCE_KHR = VK_DRIVER_ID_AMD_OPEN_SOURCE,
    VK_DRIVER_ID_MESA_RADV_KHR = VK_DRIVER_ID_MESA_RADV,
    VK_DRIVER_ID_NVIDIA_PROPRIETARY_KHR = VK_DRIVER_ID_NVIDIA_PROPRIETARY,
    VK_DRIVER_ID_INTEL_PROPRIETARY_WINDOWS_KHR = VK_DRIVER_ID_INTEL_PROPRIETARY_WINDOWS,
    VK_DRIVER_ID_INTEL_OPEN_SOURCE_MESA_KHR = VK_DRIVER_ID_INTEL_OPEN_SOURCE_MESA,
    VK_DRIVER_ID_IMAGINATION_PROPRIETARY_KHR = VK_DRIVER_ID_IMAGINATION_PROPRIETARY,
    VK_DRIVER_ID_QUALCOMM_PROPRIETARY_KHR = VK_DRIVER_ID_QUALCOMM_PROPRIETARY,
    VK_DRIVER_ID_ARM_PROPRIETARY_KHR = VK_DRIVER_ID_ARM_PROPRIETARY,
    VK_DRIVER_ID_GOOGLE_SWIFTSHADER_KHR = VK_DRIVER_ID_GOOGLE_SWIFTSHADER,
    VK_DRIVER_ID_GGP_PROPRIETARY_KHR = VK_DRIVER_ID_GGP_PROPRIETARY,
    VK_DRIVER_ID_BROADCOM_PROPRIETARY_KHR = VK_DRIVER_ID_BROADCOM_PROPRIETARY,
    VK_DRIVER_ID_BEGIN_RANGE = VK_DRIVER_ID_AMD_PROPRIETARY,
    VK_DRIVER_ID_END_RANGE = VK_DRIVER_ID_BROADCOM_PROPRIETARY,
    VK_DRIVER_ID_RANGE_SIZE = (VK_DRIVER_ID_BROADCOM_PROPRIETARY - VK_DRIVER_ID_AMD_PROPRIETARY + 1),
    VK_DRIVER_ID_MAX_ENUM = 0x7FFFFFFF
} VkDriverId;

typedef enum VkShaderFloatControlsIndependence {
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_32_BIT_ONLY = 0,
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_ALL = 1,
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_NONE = 2,
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_32_BIT_ONLY_KHR = VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_32_BIT_ONLY,
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_ALL_KHR = VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_ALL,
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_NONE_KHR = VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_NONE,
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_BEGIN_RANGE = VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_32_BIT_ONLY,
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_END_RANGE = VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_NONE,
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_RANGE_SIZE = (VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_NONE - VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_32_BIT_ONLY + 1),
    VK_SHADER_FLOAT_CONTROLS_INDEPENDENCE_MAX_ENUM = 0x7FFFFFFF
} VkShaderFloatControlsIndependence;

typedef enum VkSamplerReductionMode {
    VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE = 0,
    VK_SAMPLER_REDUCTION_MODE_MIN = 1,
    VK_SAMPLER_REDUCTION_MODE_MAX = 2,
    VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE_EXT = VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE,
    VK_SAMPLER_REDUCTION_MODE_MIN_EXT = VK_SAMPLER_REDUCTION_MODE_MIN,
    VK_SAMPLER_REDUCTION_MODE_MAX_EXT = VK_SAMPLER_REDUCTION_MODE_MAX,
    VK_SAMPLER_REDUCTION_MODE_BEGIN_RANGE = VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE,
    VK_SAMPLER_REDUCTION_MODE_END_RANGE = VK_SAMPLER_REDUCTION_MODE_MAX,
    VK_SAMPLER_REDUCTION_MODE_RANGE_SIZE = (VK_SAMPLER_REDUCTION_MODE_MAX - VK_SAMPLER_REDUCTION_MODE_WEIGHTED_AVERAGE + 1),
    VK_SAMPLER_REDUCTION_MODE_MAX_ENUM = 0x7FFFFFFF
} VkSamplerReductionMode;

typedef enum VkSemaphoreType {
    VK_SEMAPHORE_TYPE_BINARY = 0,
    VK_SEMAPHORE_TYPE_TIMELINE = 1,
    VK_SEMAPHORE_TYPE_BINARY_KHR = VK_SEMAPHORE_TYPE_BINARY,
    VK_SEMAPHORE_TYPE_TIMELINE_KHR = VK_SEMAPHORE_TYPE_TIMELINE,
    VK_SEMAPHORE_TYPE_BEGIN_RANGE = VK_SEMAPHORE_TYPE_BINARY,
    VK_SEMAPHORE_TYPE_END_RANGE = VK_SEMAPHORE_TYPE_TIMELINE,
    VK_SEMAPHORE_TYPE_RANGE_SIZE = (VK_SEMAPHORE_TYPE_TIMELINE - VK_SEMAPHORE_TYPE_BINARY + 1),
    VK_SEMAPHORE_TYPE_MAX_ENUM = 0x7FFFFFFF
} VkSemaphoreType;

typedef enum VkResolveModeFlagBits {
    VK_RESOLVE_MODE_NONE = 0,
    VK_RESOLVE_MODE_SAMPLE_ZERO_BIT = 0x00000001,
    VK_RESOLVE_MODE_AVERAGE_BIT = 0x00000002,
    VK_RESOLVE_MODE_MIN_BIT = 0x00000004,
    VK_RESOLVE_MODE_MAX_BIT = 0x00000008,
    VK_RESOLVE_MODE_NONE_KHR = VK_RESOLVE_MODE_NONE,
    VK_RESOLVE_MODE_SAMPLE_ZERO_BIT_KHR = VK_RESOLVE_MODE_SAMPLE_ZERO_BIT,
    VK_RESOLVE_MODE_AVERAGE_BIT_KHR = VK_RESOLVE_MODE_AVERAGE_BIT,
    VK_RESOLVE_MODE_MIN_BIT_KHR = VK_RESOLVE_MODE_MIN_BIT,
    VK_RESOLVE_MODE_MAX_BIT_KHR = VK_RESOLVE_MODE_MAX_BIT,
    VK_RESOLVE_MODE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF
} VkResolveModeFlagBits;
typedef VkFlags VkResolveModeFlags;

typedef enum VkDescriptorBindingFlagBits {
    VK_DESCRIPTOR_BINDING_UPDATE_AFTER_BIND_BIT = 0x00000001,
    VK_DESCRIPTOR_BINDING_UPDATE_UNUSED_WHILE_PENDING_BIT = 0x00000002,
    VK_DESCRIPTOR_BINDING_PARTIALLY_BOUND_BIT = 0x00000004,
    VK_DESCRIPTOR_BINDING_VARIABLE_DESCRIPTOR_COUNT_BIT = 0x00000008,
    VK_DESCRIPTOR_BINDING_UPDATE_AFTER_BIND_BIT_EXT = VK_DESCRIPTOR_BINDING_UPDATE_AFTER_BIND_BIT,
    VK_DESCRIPTOR_BINDING_UPDATE_UNUSED_WHILE_PENDING_BIT_EXT = VK_DESCRIPTOR_BINDING_UPDATE_UNUSED_WHILE_PENDING_BIT,
    VK_DESCRIPTOR_BINDING_PARTIALLY_BOUND_BIT_EXT = VK_DESCRIPTOR_BINDING_PARTIALLY_BOUND_BIT,
    VK_DESCRIPTOR_BINDING_VARIABLE_DESCRIPTOR_COUNT_BIT_EXT = VK_DESCRIPTOR_BINDING_VARIABLE_DESCRIPTOR_COUNT_BIT,
    VK_DESCRIPTOR_BINDING_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF
} VkDescriptorBindingFlagBits;
typedef VkFlags VkDescriptorBindingFlags;

typedef enum VkSemaphoreWaitFlagBits {
    VK_SEMAPHORE_WAIT_ANY_BIT = 0x00000001,
    VK_SEMAPHORE_WAIT_ANY_BIT_KHR = VK_SEMAPHORE_WAIT_ANY_BIT,
    VK_SEMAPHORE_WAIT_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF
} VkSemaphoreWaitFlagBits;
typedef VkFlags VkSemaphoreWaitFlags;
typedef struct VkPhysicalDeviceVulkan11Features {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           storageBuffer16BitAccess;
    VkBool32           uniformAndStorageBuffer16BitAccess;
    VkBool32           storagePushConstant16;
    VkBool32           storageInputOutput16;
    VkBool32           multiview;
    VkBool32           multiviewGeometryShader;
    VkBool32           multiviewTessellationShader;
    VkBool32           variablePointersStorageBuffer;
    VkBool32           variablePointers;
    VkBool32           protectedMemory;
    VkBool32           samplerYcbcrConversion;
    VkBool32           shaderDrawParameters;
} VkPhysicalDeviceVulkan11Features;

typedef struct VkPhysicalDeviceVulkan11Properties {
    VkStructureType            sType;
    void*                      pNext;
    uint8_t                    deviceUUID[VK_UUID_SIZE];
    uint8_t                    driverUUID[VK_UUID_SIZE];
    uint8_t                    deviceLUID[VK_LUID_SIZE];
    uint32_t                   deviceNodeMask;
    VkBool32                   deviceLUIDValid;
    uint32_t                   subgroupSize;
    VkShaderStageFlags         subgroupSupportedStages;
    VkSubgroupFeatureFlags     subgroupSupportedOperations;
    VkBool32                   subgroupQuadOperationsInAllStages;
    VkPointClippingBehavior    pointClippingBehavior;
    uint32_t                   maxMultiviewViewCount;
    uint32_t                   maxMultiviewInstanceIndex;
    VkBool32                   protectedNoFault;
    uint32_t                   maxPerSetDescriptors;
    VkDeviceSize               maxMemoryAllocationSize;
} VkPhysicalDeviceVulkan11Properties;

typedef struct VkPhysicalDeviceVulkan12Features {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           samplerMirrorClampToEdge;
    VkBool32           drawIndirectCount;
    VkBool32           storageBuffer8BitAccess;
    VkBool32           uniformAndStorageBuffer8BitAccess;
    VkBool32           storagePushConstant8;
    VkBool32           shaderBufferInt64Atomics;
    VkBool32           shaderSharedInt64Atomics;
    VkBool32           shaderFloat16;
    VkBool32           shaderInt8;
    VkBool32           descriptorIndexing;
    VkBool32           shaderInputAttachmentArrayDynamicIndexing;
    VkBool32           shaderUniformTexelBufferArrayDynamicIndexing;
    VkBool32           shaderStorageTexelBufferArrayDynamicIndexing;
    VkBool32           shaderUniformBufferArrayNonUniformIndexing;
    VkBool32           shaderSampledImageArrayNonUniformIndexing;
    VkBool32           shaderStorageBufferArrayNonUniformIndexing;
    VkBool32           shaderStorageImageArrayNonUniformIndexing;
    VkBool32           shaderInputAttachmentArrayNonUniformIndexing;
    VkBool32           shaderUniformTexelBufferArrayNonUniformIndexing;
    VkBool32           shaderStorageTexelBufferArrayNonUniformIndexing;
    VkBool32           descriptorBindingUniformBufferUpdateAfterBind;
    VkBool32           descriptorBindingSampledImageUpdateAfterBind;
    VkBool32           descriptorBindingStorageImageUpdateAfterBind;
    VkBool32           descriptorBindingStorageBufferUpdateAfterBind;
    VkBool32           descriptorBindingUniformTexelBufferUpdateAfterBind;
    VkBool32           descriptorBindingStorageTexelBufferUpdateAfterBind;
    VkBool32           descriptorBindingUpdateUnusedWhilePending;
    VkBool32           descriptorBindingPartiallyBound;
    VkBool32           descriptorBindingVariableDescriptorCount;
    VkBool32           runtimeDescriptorArray;
    VkBool32           samplerFilterMinmax;
    VkBool32           scalarBlockLayout;
    VkBool32           imagelessFramebuffer;
    VkBool32           uniformBufferStandardLayout;
    VkBool32           shaderSubgroupExtendedTypes;
    VkBool32           separateDepthStencilLayouts;
    VkBool32           hostQueryReset;
    VkBool32           timelineSemaphore;
    VkBool32           bufferDeviceAddress;
    VkBool32           bufferDeviceAddressCaptureReplay;
    VkBool32           bufferDeviceAddressMultiDevice;
    VkBool32           vulkanMemoryModel;
    VkBool32           vulkanMemoryModelDeviceScope;
    VkBool32           vulkanMemoryModelAvailabilityVisibilityChains;
    VkBool32           shaderOutputViewportIndex;
    VkBool32           shaderOutputLayer;
    VkBool32           subgroupBroadcastDynamicId;
} VkPhysicalDeviceVulkan12Features;

typedef struct VkConformanceVersion {
    uint8_t    major;
    uint8_t    minor;
    uint8_t    subminor;
    uint8_t    patch;
} VkConformanceVersion;

typedef struct VkPhysicalDeviceVulkan12Properties {
    VkStructureType                      sType;
    void*                                pNext;
    VkDriverId                           driverID;
    char                                 driverName[VK_MAX_DRIVER_NAME_SIZE];
    char                                 driverInfo[VK_MAX_DRIVER_INFO_SIZE];
    VkConformanceVersion                 conformanceVersion;
    VkShaderFloatControlsIndependence    denormBehaviorIndependence;
    VkShaderFloatControlsIndependence    roundingModeIndependence;
    VkBool32                             shaderSignedZeroInfNanPreserveFloat16;
    VkBool32                             shaderSignedZeroInfNanPreserveFloat32;
    VkBool32                             shaderSignedZeroInfNanPreserveFloat64;
    VkBool32                             shaderDenormPreserveFloat16;
    VkBool32                             shaderDenormPreserveFloat32;
    VkBool32                             shaderDenormPreserveFloat64;
    VkBool32                             shaderDenormFlushToZeroFloat16;
    VkBool32                             shaderDenormFlushToZeroFloat32;
    VkBool32                             shaderDenormFlushToZeroFloat64;
    VkBool32                             shaderRoundingModeRTEFloat16;
    VkBool32                             shaderRoundingModeRTEFloat32;
    VkBool32                             shaderRoundingModeRTEFloat64;
    VkBool32                             shaderRoundingModeRTZFloat16;
    VkBool32                             shaderRoundingModeRTZFloat32;
    VkBool32                             shaderRoundingModeRTZFloat64;
    uint32_t                             maxUpdateAfterBindDescriptorsInAllPools;
    VkBool32                             shaderUniformBufferArrayNonUniformIndexingNative;
    VkBool32                             shaderSampledImageArrayNonUniformIndexingNative;
    VkBool32                             shaderStorageBufferArrayNonUniformIndexingNative;
    VkBool32                             shaderStorageImageArrayNonUniformIndexingNative;
    VkBool32                             shaderInputAttachmentArrayNonUniformIndexingNative;
    VkBool32                             robustBufferAccessUpdateAfterBind;
    VkBool32                             quadDivergentImplicitLod;
    uint32_t                             maxPerStageDescriptorUpdateAfterBindSamplers;
    uint32_t                             maxPerStageDescriptorUpdateAfterBindUniformBuffers;
    uint32_t                             maxPerStageDescriptorUpdateAfterBindStorageBuffers;
    uint32_t                             maxPerStageDescriptorUpdateAfterBindSampledImages;
    uint32_t                             maxPerStageDescriptorUpdateAfterBindStorageImages;
    uint32_t                             maxPerStageDescriptorUpdateAfterBindInputAttachments;
    uint32_t                             maxPerStageUpdateAfterBindResources;
    uint32_t                             maxDescriptorSetUpdateAfterBindSamplers;
    uint32_t                             maxDescriptorSetUpdateAfterBindUniformBuffers;
    uint32_t                             maxDescriptorSetUpdateAfterBindUniformBuffersDynamic;
    uint32_t                             maxDescriptorSetUpdateAfterBindStorageBuffers;
    uint32_t                             maxDescriptorSetUpdateAfterBindStorageBuffersDynamic;
    uint32_t                             maxDescriptorSetUpdateAfterBindSampledImages;
    uint32_t                             maxDescriptorSetUpdateAfterBindStorageImages;
    uint32_t                             maxDescriptorSetUpdateAfterBindInputAttachments;
    VkResolveModeFlags                   supportedDepthResolveModes;
    VkResolveModeFlags                   supportedStencilResolveModes;
    VkBool32                             independentResolveNone;
    VkBool32                             independentResolve;
    VkBool32                             filterMinmaxSingleComponentFormats;
    VkBool32                             filterMinmaxImageComponentMapping;
    uint64_t                             maxTimelineSemaphoreValueDifference;
    VkSampleCountFlags                   framebufferIntegerColorSampleCounts;
} VkPhysicalDeviceVulkan12Properties;

typedef struct VkImageFormatListCreateInfo {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           viewFormatCount;
    const VkFormat*    pViewFormats;
} VkImageFormatListCreateInfo;

typedef struct VkAttachmentDescription2 {
    VkStructureType                 sType;
    const void*                     pNext;
    VkAttachmentDescriptionFlags    flags;
    VkFormat                        format;
    VkSampleCountFlagBits           samples;
    VkAttachmentLoadOp              loadOp;
    VkAttachmentStoreOp             storeOp;
    VkAttachmentLoadOp              stencilLoadOp;
    VkAttachmentStoreOp             stencilStoreOp;
    VkImageLayout                   initialLayout;
    VkImageLayout                   finalLayout;
} VkAttachmentDescription2;

typedef struct VkAttachmentReference2 {
    VkStructureType       sType;
    const void*           pNext;
    uint32_t              attachment;
    VkImageLayout         layout;
    VkImageAspectFlags    aspectMask;
} VkAttachmentReference2;

typedef struct VkSubpassDescription2 {
    VkStructureType                  sType;
    const void*                      pNext;
    VkSubpassDescriptionFlags        flags;
    VkPipelineBindPoint              pipelineBindPoint;
    uint32_t                         viewMask;
    uint32_t                         inputAttachmentCount;
    const VkAttachmentReference2*    pInputAttachments;
    uint32_t                         colorAttachmentCount;
    const VkAttachmentReference2*    pColorAttachments;
    const VkAttachmentReference2*    pResolveAttachments;
    const VkAttachmentReference2*    pDepthStencilAttachment;
    uint32_t                         preserveAttachmentCount;
    const uint32_t*                  pPreserveAttachments;
} VkSubpassDescription2;

typedef struct VkSubpassDependency2 {
    VkStructureType         sType;
    const void*             pNext;
    uint32_t                srcSubpass;
    uint32_t                dstSubpass;
    VkPipelineStageFlags    srcStageMask;
    VkPipelineStageFlags    dstStageMask;
    VkAccessFlags           srcAccessMask;
    VkAccessFlags           dstAccessMask;
    VkDependencyFlags       dependencyFlags;
    int32_t                 viewOffset;
} VkSubpassDependency2;

typedef struct VkRenderPassCreateInfo2 {
    VkStructureType                    sType;
    const void*                        pNext;
    VkRenderPassCreateFlags            flags;
    uint32_t                           attachmentCount;
    const VkAttachmentDescription2*    pAttachments;
    uint32_t                           subpassCount;
    const VkSubpassDescription2*       pSubpasses;
    uint32_t                           dependencyCount;
    const VkSubpassDependency2*        pDependencies;
    uint32_t                           correlatedViewMaskCount;
    const uint32_t*                    pCorrelatedViewMasks;
} VkRenderPassCreateInfo2;

typedef struct VkSubpassBeginInfo {
    VkStructureType      sType;
    const void*          pNext;
    VkSubpassContents    contents;
} VkSubpassBeginInfo;

typedef struct VkSubpassEndInfo {
    VkStructureType    sType;
    const void*        pNext;
} VkSubpassEndInfo;

typedef struct VkPhysicalDevice8BitStorageFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           storageBuffer8BitAccess;
    VkBool32           uniformAndStorageBuffer8BitAccess;
    VkBool32           storagePushConstant8;
} VkPhysicalDevice8BitStorageFeatures;

typedef struct VkPhysicalDeviceDriverProperties {
    VkStructureType         sType;
    void*                   pNext;
    VkDriverId              driverID;
    char                    driverName[VK_MAX_DRIVER_NAME_SIZE];
    char                    driverInfo[VK_MAX_DRIVER_INFO_SIZE];
    VkConformanceVersion    conformanceVersion;
} VkPhysicalDeviceDriverProperties;

typedef struct VkPhysicalDeviceShaderAtomicInt64Features {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           shaderBufferInt64Atomics;
    VkBool32           shaderSharedInt64Atomics;
} VkPhysicalDeviceShaderAtomicInt64Features;

typedef struct VkPhysicalDeviceShaderFloat16Int8Features {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           shaderFloat16;
    VkBool32           shaderInt8;
} VkPhysicalDeviceShaderFloat16Int8Features;

typedef struct VkPhysicalDeviceFloatControlsProperties {
    VkStructureType                      sType;
    void*                                pNext;
    VkShaderFloatControlsIndependence    denormBehaviorIndependence;
    VkShaderFloatControlsIndependence    roundingModeIndependence;
    VkBool32                             shaderSignedZeroInfNanPreserveFloat16;
    VkBool32                             shaderSignedZeroInfNanPreserveFloat32;
    VkBool32                             shaderSignedZeroInfNanPreserveFloat64;
    VkBool32                             shaderDenormPreserveFloat16;
    VkBool32                             shaderDenormPreserveFloat32;
    VkBool32                             shaderDenormPreserveFloat64;
    VkBool32                             shaderDenormFlushToZeroFloat16;
    VkBool32                             shaderDenormFlushToZeroFloat32;
    VkBool32                             shaderDenormFlushToZeroFloat64;
    VkBool32                             shaderRoundingModeRTEFloat16;
    VkBool32                             shaderRoundingModeRTEFloat32;
    VkBool32                             shaderRoundingModeRTEFloat64;
    VkBool32                             shaderRoundingModeRTZFloat16;
    VkBool32                             shaderRoundingModeRTZFloat32;
    VkBool32                             shaderRoundingModeRTZFloat64;
} VkPhysicalDeviceFloatControlsProperties;

typedef struct VkDescriptorSetLayoutBindingFlagsCreateInfo {
    VkStructureType                    sType;
    const void*                        pNext;
    uint32_t                           bindingCount;
    const VkDescriptorBindingFlags*    pBindingFlags;
} VkDescriptorSetLayoutBindingFlagsCreateInfo;

typedef struct VkPhysicalDeviceDescriptorIndexingFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           shaderInputAttachmentArrayDynamicIndexing;
    VkBool32           shaderUniformTexelBufferArrayDynamicIndexing;
    VkBool32           shaderStorageTexelBufferArrayDynamicIndexing;
    VkBool32           shaderUniformBufferArrayNonUniformIndexing;
    VkBool32           shaderSampledImageArrayNonUniformIndexing;
    VkBool32           shaderStorageBufferArrayNonUniformIndexing;
    VkBool32           shaderStorageImageArrayNonUniformIndexing;
    VkBool32           shaderInputAttachmentArrayNonUniformIndexing;
    VkBool32           shaderUniformTexelBufferArrayNonUniformIndexing;
    VkBool32           shaderStorageTexelBufferArrayNonUniformIndexing;
    VkBool32           descriptorBindingUniformBufferUpdateAfterBind;
    VkBool32           descriptorBindingSampledImageUpdateAfterBind;
    VkBool32           descriptorBindingStorageImageUpdateAfterBind;
    VkBool32           descriptorBindingStorageBufferUpdateAfterBind;
    VkBool32           descriptorBindingUniformTexelBufferUpdateAfterBind;
    VkBool32           descriptorBindingStorageTexelBufferUpdateAfterBind;
    VkBool32           descriptorBindingUpdateUnusedWhilePending;
    VkBool32           descriptorBindingPartiallyBound;
    VkBool32           descriptorBindingVariableDescriptorCount;
    VkBool32           runtimeDescriptorArray;
} VkPhysicalDeviceDescriptorIndexingFeatures;

typedef struct VkPhysicalDeviceDescriptorIndexingProperties {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           maxUpdateAfterBindDescriptorsInAllPools;
    VkBool32           shaderUniformBufferArrayNonUniformIndexingNative;
    VkBool32           shaderSampledImageArrayNonUniformIndexingNative;
    VkBool32           shaderStorageBufferArrayNonUniformIndexingNative;
    VkBool32           shaderStorageImageArrayNonUniformIndexingNative;
    VkBool32           shaderInputAttachmentArrayNonUniformIndexingNative;
    VkBool32           robustBufferAccessUpdateAfterBind;
    VkBool32           quadDivergentImplicitLod;
    uint32_t           maxPerStageDescriptorUpdateAfterBindSamplers;
    uint32_t           maxPerStageDescriptorUpdateAfterBindUniformBuffers;
    uint32_t           maxPerStageDescriptorUpdateAfterBindStorageBuffers;
    uint32_t           maxPerStageDescriptorUpdateAfterBindSampledImages;
    uint32_t           maxPerStageDescriptorUpdateAfterBindStorageImages;
    uint32_t           maxPerStageDescriptorUpdateAfterBindInputAttachments;
    uint32_t           maxPerStageUpdateAfterBindResources;
    uint32_t           maxDescriptorSetUpdateAfterBindSamplers;
    uint32_t           maxDescriptorSetUpdateAfterBindUniformBuffers;
    uint32_t           maxDescriptorSetUpdateAfterBindUniformBuffersDynamic;
    uint32_t           maxDescriptorSetUpdateAfterBindStorageBuffers;
    uint32_t           maxDescriptorSetUpdateAfterBindStorageBuffersDynamic;
    uint32_t           maxDescriptorSetUpdateAfterBindSampledImages;
    uint32_t           maxDescriptorSetUpdateAfterBindStorageImages;
    uint32_t           maxDescriptorSetUpdateAfterBindInputAttachments;
} VkPhysicalDeviceDescriptorIndexingProperties;

typedef struct VkDescriptorSetVariableDescriptorCountAllocateInfo {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           descriptorSetCount;
    const uint32_t*    pDescriptorCounts;
} VkDescriptorSetVariableDescriptorCountAllocateInfo;

typedef struct VkDescriptorSetVariableDescriptorCountLayoutSupport {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           maxVariableDescriptorCount;
} VkDescriptorSetVariableDescriptorCountLayoutSupport;

typedef struct VkSubpassDescriptionDepthStencilResolve {
    VkStructureType                  sType;
    const void*                      pNext;
    VkResolveModeFlagBits            depthResolveMode;
    VkResolveModeFlagBits            stencilResolveMode;
    const VkAttachmentReference2*    pDepthStencilResolveAttachment;
} VkSubpassDescriptionDepthStencilResolve;

typedef struct VkPhysicalDeviceDepthStencilResolveProperties {
    VkStructureType       sType;
    void*                 pNext;
    VkResolveModeFlags    supportedDepthResolveModes;
    VkResolveModeFlags    supportedStencilResolveModes;
    VkBool32              independentResolveNone;
    VkBool32              independentResolve;
} VkPhysicalDeviceDepthStencilResolveProperties;

typedef struct VkPhysicalDeviceScalarBlockLayoutFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           scalarBlockLayout;
} VkPhysicalDeviceScalarBlockLayoutFeatures;

typedef struct VkImageStencilUsageCreateInfo {
    VkStructureType      sType;
    const void*          pNext;
    VkImageUsageFlags    stencilUsage;
} VkImageStencilUsageCreateInfo;

typedef struct VkSamplerReductionModeCreateInfo {
    VkStructureType           sType;
    const void*               pNext;
    VkSamplerReductionMode    reductionMode;
} VkSamplerReductionModeCreateInfo;

typedef struct VkPhysicalDeviceSamplerFilterMinmaxProperties {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           filterMinmaxSingleComponentFormats;
    VkBool32           filterMinmaxImageComponentMapping;
} VkPhysicalDeviceSamplerFilterMinmaxProperties;

typedef struct VkPhysicalDeviceVulkanMemoryModelFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           vulkanMemoryModel;
    VkBool32           vulkanMemoryModelDeviceScope;
    VkBool32           vulkanMemoryModelAvailabilityVisibilityChains;
} VkPhysicalDeviceVulkanMemoryModelFeatures;

typedef struct VkPhysicalDeviceImagelessFramebufferFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           imagelessFramebuffer;
} VkPhysicalDeviceImagelessFramebufferFeatures;

typedef struct VkFramebufferAttachmentImageInfo {
    VkStructureType       sType;
    const void*           pNext;
    VkImageCreateFlags    flags;
    VkImageUsageFlags     usage;
    uint32_t              width;
    uint32_t              height;
    uint32_t              layerCount;
    uint32_t              viewFormatCount;
    const VkFormat*       pViewFormats;
} VkFramebufferAttachmentImageInfo;

typedef struct VkFramebufferAttachmentsCreateInfo {
    VkStructureType                            sType;
    const void*                                pNext;
    uint32_t                                   attachmentImageInfoCount;
    const VkFramebufferAttachmentImageInfo*    pAttachmentImageInfos;
} VkFramebufferAttachmentsCreateInfo;

typedef struct VkRenderPassAttachmentBeginInfo {
    VkStructureType       sType;
    const void*           pNext;
    uint32_t              attachmentCount;
    const VkImageView*    pAttachments;
} VkRenderPassAttachmentBeginInfo;

typedef struct VkPhysicalDeviceUniformBufferStandardLayoutFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           uniformBufferStandardLayout;
} VkPhysicalDeviceUniformBufferStandardLayoutFeatures;

typedef struct VkPhysicalDeviceShaderSubgroupExtendedTypesFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           shaderSubgroupExtendedTypes;
} VkPhysicalDeviceShaderSubgroupExtendedTypesFeatures;

typedef struct VkPhysicalDeviceSeparateDepthStencilLayoutsFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           separateDepthStencilLayouts;
} VkPhysicalDeviceSeparateDepthStencilLayoutsFeatures;

typedef struct VkAttachmentReferenceStencilLayout {
    VkStructureType    sType;
    void*              pNext;
    VkImageLayout      stencilLayout;
} VkAttachmentReferenceStencilLayout;

typedef struct VkAttachmentDescriptionStencilLayout {
    VkStructureType    sType;
    void*              pNext;
    VkImageLayout      stencilInitialLayout;
    VkImageLayout      stencilFinalLayout;
} VkAttachmentDescriptionStencilLayout;

typedef struct VkPhysicalDeviceHostQueryResetFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           hostQueryReset;
} VkPhysicalDeviceHostQueryResetFeatures;

typedef struct VkPhysicalDeviceTimelineSemaphoreFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           timelineSemaphore;
} VkPhysicalDeviceTimelineSemaphoreFeatures;

typedef struct VkPhysicalDeviceTimelineSemaphoreProperties {
    VkStructureType    sType;
    void*              pNext;
    uint64_t           maxTimelineSemaphoreValueDifference;
} VkPhysicalDeviceTimelineSemaphoreProperties;

typedef struct VkSemaphoreTypeCreateInfo {
    VkStructureType    sType;
    const void*        pNext;
    VkSemaphoreType    semaphoreType;
    uint64_t           initialValue;
} VkSemaphoreTypeCreateInfo;

typedef struct VkTimelineSemaphoreSubmitInfo {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           waitSemaphoreValueCount;
    const uint64_t*    pWaitSemaphoreValues;
    uint32_t           signalSemaphoreValueCount;
    const uint64_t*    pSignalSemaphoreValues;
} VkTimelineSemaphoreSubmitInfo;

typedef struct VkSemaphoreWaitInfo {
    VkStructureType         sType;
    const void*             pNext;
    VkSemaphoreWaitFlags    flags;
    uint32_t                semaphoreCount;
    const VkSemaphore*      pSemaphores;
    const uint64_t*         pValues;
} VkSemaphoreWaitInfo;

typedef struct VkSemaphoreSignalInfo {
    VkStructureType    sType;
    const void*        pNext;
    VkSemaphore        semaphore;
    uint64_t           value;
} VkSemaphoreSignalInfo;

typedef struct VkPhysicalDeviceBufferDeviceAddressFeatures {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           bufferDeviceAddress;
    VkBool32           bufferDeviceAddressCaptureReplay;
    VkBool32           bufferDeviceAddressMultiDevice;
} VkPhysicalDeviceBufferDeviceAddressFeatures;

typedef struct VkBufferDeviceAddressInfo {
    VkStructureType    sType;
    const void*        pNext;
    VkBuffer           buffer;
} VkBufferDeviceAddressInfo;

typedef struct VkBufferOpaqueCaptureAddressCreateInfo {
    VkStructureType    sType;
    const void*        pNext;
    uint64_t           opaqueCaptureAddress;
} VkBufferOpaqueCaptureAddressCreateInfo;

typedef struct VkMemoryOpaqueCaptureAddressAllocateInfo {
    VkStructureType    sType;
    const void*        pNext;
    uint64_t           opaqueCaptureAddress;
} VkMemoryOpaqueCaptureAddressAllocateInfo;

typedef struct VkDeviceMemoryOpaqueCaptureAddressInfo {
    VkStructureType    sType;
    const void*        pNext;
    VkDeviceMemory     memory;
} VkDeviceMemoryOpaqueCaptureAddressInfo;
