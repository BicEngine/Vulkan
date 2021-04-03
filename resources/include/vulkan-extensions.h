
#define VK_KHR_surface 1
typedef struct VkSurfaceKHR_T* VkSurfaceKHR;
#define VK_KHR_SURFACE_SPEC_VERSION       25
#define VK_KHR_SURFACE_EXTENSION_NAME     "VK_KHR_surface"

typedef enum VkColorSpaceKHR {
    VK_COLOR_SPACE_SRGB_NONLINEAR_KHR = 0,
    VK_COLOR_SPACE_DISPLAY_P3_NONLINEAR_EXT = 1000104001,
    VK_COLOR_SPACE_EXTENDED_SRGB_LINEAR_EXT = 1000104002,
    VK_COLOR_SPACE_DISPLAY_P3_LINEAR_EXT = 1000104003,
    VK_COLOR_SPACE_DCI_P3_NONLINEAR_EXT = 1000104004,
    VK_COLOR_SPACE_BT709_LINEAR_EXT = 1000104005,
    VK_COLOR_SPACE_BT709_NONLINEAR_EXT = 1000104006,
    VK_COLOR_SPACE_BT2020_LINEAR_EXT = 1000104007,
    VK_COLOR_SPACE_HDR10_ST2084_EXT = 1000104008,
    VK_COLOR_SPACE_DOLBYVISION_EXT = 1000104009,
    VK_COLOR_SPACE_HDR10_HLG_EXT = 1000104010,
    VK_COLOR_SPACE_ADOBERGB_LINEAR_EXT = 1000104011,
    VK_COLOR_SPACE_ADOBERGB_NONLINEAR_EXT = 1000104012,
    VK_COLOR_SPACE_PASS_THROUGH_EXT = 1000104013,
    VK_COLOR_SPACE_EXTENDED_SRGB_NONLINEAR_EXT = 1000104014,
    VK_COLOR_SPACE_DISPLAY_NATIVE_AMD = 1000213000,
    VK_COLORSPACE_SRGB_NONLINEAR_KHR = VK_COLOR_SPACE_SRGB_NONLINEAR_KHR,
    VK_COLOR_SPACE_DCI_P3_LINEAR_EXT = VK_COLOR_SPACE_DISPLAY_P3_LINEAR_EXT,
    VK_COLOR_SPACE_BEGIN_RANGE_KHR = VK_COLOR_SPACE_SRGB_NONLINEAR_KHR,
    VK_COLOR_SPACE_END_RANGE_KHR = VK_COLOR_SPACE_SRGB_NONLINEAR_KHR,
    VK_COLOR_SPACE_RANGE_SIZE_KHR = (VK_COLOR_SPACE_SRGB_NONLINEAR_KHR - VK_COLOR_SPACE_SRGB_NONLINEAR_KHR + 1),
    VK_COLOR_SPACE_MAX_ENUM_KHR = 0x7FFFFFFF
} VkColorSpaceKHR;

typedef enum VkPresentModeKHR {
    VK_PRESENT_MODE_IMMEDIATE_KHR = 0,
    VK_PRESENT_MODE_MAILBOX_KHR = 1,
    VK_PRESENT_MODE_FIFO_KHR = 2,
    VK_PRESENT_MODE_FIFO_RELAXED_KHR = 3,
    VK_PRESENT_MODE_SHARED_DEMAND_REFRESH_KHR = 1000111000,
    VK_PRESENT_MODE_SHARED_CONTINUOUS_REFRESH_KHR = 1000111001,
    VK_PRESENT_MODE_BEGIN_RANGE_KHR = VK_PRESENT_MODE_IMMEDIATE_KHR,
    VK_PRESENT_MODE_END_RANGE_KHR = VK_PRESENT_MODE_FIFO_RELAXED_KHR,
    VK_PRESENT_MODE_RANGE_SIZE_KHR = (VK_PRESENT_MODE_FIFO_RELAXED_KHR - VK_PRESENT_MODE_IMMEDIATE_KHR + 1),
    VK_PRESENT_MODE_MAX_ENUM_KHR = 0x7FFFFFFF
} VkPresentModeKHR;

typedef enum VkSurfaceTransformFlagBitsKHR {
    VK_SURFACE_TRANSFORM_IDENTITY_BIT_KHR = 0x00000001,
    VK_SURFACE_TRANSFORM_ROTATE_90_BIT_KHR = 0x00000002,
    VK_SURFACE_TRANSFORM_ROTATE_180_BIT_KHR = 0x00000004,
    VK_SURFACE_TRANSFORM_ROTATE_270_BIT_KHR = 0x00000008,
    VK_SURFACE_TRANSFORM_HORIZONTAL_MIRROR_BIT_KHR = 0x00000010,
    VK_SURFACE_TRANSFORM_HORIZONTAL_MIRROR_ROTATE_90_BIT_KHR = 0x00000020,
    VK_SURFACE_TRANSFORM_HORIZONTAL_MIRROR_ROTATE_180_BIT_KHR = 0x00000040,
    VK_SURFACE_TRANSFORM_HORIZONTAL_MIRROR_ROTATE_270_BIT_KHR = 0x00000080,
    VK_SURFACE_TRANSFORM_INHERIT_BIT_KHR = 0x00000100,
    VK_SURFACE_TRANSFORM_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkSurfaceTransformFlagBitsKHR;
typedef VkFlags VkSurfaceTransformFlagsKHR;

typedef enum VkCompositeAlphaFlagBitsKHR {
    VK_COMPOSITE_ALPHA_OPAQUE_BIT_KHR = 0x00000001,
    VK_COMPOSITE_ALPHA_PRE_MULTIPLIED_BIT_KHR = 0x00000002,
    VK_COMPOSITE_ALPHA_POST_MULTIPLIED_BIT_KHR = 0x00000004,
    VK_COMPOSITE_ALPHA_INHERIT_BIT_KHR = 0x00000008,
    VK_COMPOSITE_ALPHA_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkCompositeAlphaFlagBitsKHR;
typedef VkFlags VkCompositeAlphaFlagsKHR;
typedef struct VkSurfaceCapabilitiesKHR {
    uint32_t                         minImageCount;
    uint32_t                         maxImageCount;
    VkExtent2D                       currentExtent;
    VkExtent2D                       minImageExtent;
    VkExtent2D                       maxImageExtent;
    uint32_t                         maxImageArrayLayers;
    VkSurfaceTransformFlagsKHR       supportedTransforms;
    VkSurfaceTransformFlagBitsKHR    currentTransform;
    VkCompositeAlphaFlagsKHR         supportedCompositeAlpha;
    VkImageUsageFlags                supportedUsageFlags;
} VkSurfaceCapabilitiesKHR;

typedef struct VkSurfaceFormatKHR {
    VkFormat           format;
    VkColorSpaceKHR    colorSpace;
} VkSurfaceFormatKHR;

typedef void (VKAPI_PTR *PFN_vkDestroySurfaceKHR)(VkInstance instance, VkSurfaceKHR surface, const VkAllocationCallbacks* pAllocator);
typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceSurfaceSupportKHR)(VkPhysicalDevice physicalDevice, uint32_t queueFamilyIndex, VkSurfaceKHR surface, VkBool32* pSupported);
typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceSurfaceCapabilitiesKHR)(VkPhysicalDevice physicalDevice, VkSurfaceKHR surface, VkSurfaceCapabilitiesKHR* pSurfaceCapabilities);
typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceSurfaceFormatsKHR)(VkPhysicalDevice physicalDevice, VkSurfaceKHR surface, uint32_t* pSurfaceFormatCount, VkSurfaceFormatKHR* pSurfaceFormats);
typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceSurfacePresentModesKHR)(VkPhysicalDevice physicalDevice, VkSurfaceKHR surface, uint32_t* pPresentModeCount, VkPresentModeKHR* pPresentModes);



#define VK_KHR_swapchain 1
typedef struct VkSwapchainKHR_T* VkSwapchainKHR;
#define VK_KHR_SWAPCHAIN_SPEC_VERSION     70
#define VK_KHR_SWAPCHAIN_EXTENSION_NAME   "VK_KHR_swapchain"

typedef enum VkSwapchainCreateFlagBitsKHR {
    VK_SWAPCHAIN_CREATE_SPLIT_INSTANCE_BIND_REGIONS_BIT_KHR = 0x00000001,
    VK_SWAPCHAIN_CREATE_PROTECTED_BIT_KHR = 0x00000002,
    VK_SWAPCHAIN_CREATE_MUTABLE_FORMAT_BIT_KHR = 0x00000004,
    VK_SWAPCHAIN_CREATE_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkSwapchainCreateFlagBitsKHR;
typedef VkFlags VkSwapchainCreateFlagsKHR;

typedef enum VkDeviceGroupPresentModeFlagBitsKHR {
    VK_DEVICE_GROUP_PRESENT_MODE_LOCAL_BIT_KHR = 0x00000001,
    VK_DEVICE_GROUP_PRESENT_MODE_REMOTE_BIT_KHR = 0x00000002,
    VK_DEVICE_GROUP_PRESENT_MODE_SUM_BIT_KHR = 0x00000004,
    VK_DEVICE_GROUP_PRESENT_MODE_LOCAL_MULTI_DEVICE_BIT_KHR = 0x00000008,
    VK_DEVICE_GROUP_PRESENT_MODE_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkDeviceGroupPresentModeFlagBitsKHR;
typedef VkFlags VkDeviceGroupPresentModeFlagsKHR;
typedef struct VkSwapchainCreateInfoKHR {
    VkStructureType                  sType;
    const void*                      pNext;
    VkSwapchainCreateFlagsKHR        flags;
    VkSurfaceKHR                     surface;
    uint32_t                         minImageCount;
    VkFormat                         imageFormat;
    VkColorSpaceKHR                  imageColorSpace;
    VkExtent2D                       imageExtent;
    uint32_t                         imageArrayLayers;
    VkImageUsageFlags                imageUsage;
    VkSharingMode                    imageSharingMode;
    uint32_t                         queueFamilyIndexCount;
    const uint32_t*                  pQueueFamilyIndices;
    VkSurfaceTransformFlagBitsKHR    preTransform;
    VkCompositeAlphaFlagBitsKHR      compositeAlpha;
    VkPresentModeKHR                 presentMode;
    VkBool32                         clipped;
    VkSwapchainKHR                   oldSwapchain;
} VkSwapchainCreateInfoKHR;

typedef struct VkPresentInfoKHR {
    VkStructureType          sType;
    const void*              pNext;
    uint32_t                 waitSemaphoreCount;
    const VkSemaphore*       pWaitSemaphores;
    uint32_t                 swapchainCount;
    const VkSwapchainKHR*    pSwapchains;
    const uint32_t*          pImageIndices;
    VkResult*                pResults;
} VkPresentInfoKHR;

typedef struct VkImageSwapchainCreateInfoKHR {
    VkStructureType    sType;
    const void*        pNext;
    VkSwapchainKHR     swapchain;
} VkImageSwapchainCreateInfoKHR;

typedef struct VkBindImageMemorySwapchainInfoKHR {
    VkStructureType    sType;
    const void*        pNext;
    VkSwapchainKHR     swapchain;
    uint32_t           imageIndex;
} VkBindImageMemorySwapchainInfoKHR;

typedef struct VkAcquireNextImageInfoKHR {
    VkStructureType    sType;
    const void*        pNext;
    VkSwapchainKHR     swapchain;
    uint64_t           timeout;
    VkSemaphore        semaphore;
    VkFence            fence;
    uint32_t           deviceMask;
} VkAcquireNextImageInfoKHR;

typedef struct VkDeviceGroupPresentCapabilitiesKHR {
    VkStructureType                     sType;
    const void*                         pNext;
    uint32_t                            presentMask[VK_MAX_DEVICE_GROUP_SIZE];
    VkDeviceGroupPresentModeFlagsKHR    modes;
} VkDeviceGroupPresentCapabilitiesKHR;

typedef struct VkDeviceGroupPresentInfoKHR {
    VkStructureType                        sType;
    const void*                            pNext;
    uint32_t                               swapchainCount;
    const uint32_t*                        pDeviceMasks;
    VkDeviceGroupPresentModeFlagBitsKHR    mode;
} VkDeviceGroupPresentInfoKHR;

typedef struct VkDeviceGroupSwapchainCreateInfoKHR {
    VkStructureType                     sType;
    const void*                         pNext;
    VkDeviceGroupPresentModeFlagsKHR    modes;
} VkDeviceGroupSwapchainCreateInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkCreateSwapchainKHR)(VkDevice device, const VkSwapchainCreateInfoKHR* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkSwapchainKHR* pSwapchain);
typedef void (VKAPI_PTR *PFN_vkDestroySwapchainKHR)(VkDevice device, VkSwapchainKHR swapchain, const VkAllocationCallbacks* pAllocator);
typedef VkResult (VKAPI_PTR *PFN_vkGetSwapchainImagesKHR)(VkDevice device, VkSwapchainKHR swapchain, uint32_t* pSwapchainImageCount, VkImage* pSwapchainImages);
typedef VkResult (VKAPI_PTR *PFN_vkAcquireNextImageKHR)(VkDevice device, VkSwapchainKHR swapchain, uint64_t timeout, VkSemaphore semaphore, VkFence fence, uint32_t* pImageIndex);
typedef VkResult (VKAPI_PTR *PFN_vkQueuePresentKHR)(VkQueue queue, const VkPresentInfoKHR* pPresentInfo);
typedef VkResult (VKAPI_PTR *PFN_vkGetDeviceGroupPresentCapabilitiesKHR)(VkDevice device, VkDeviceGroupPresentCapabilitiesKHR* pDeviceGroupPresentCapabilities);
typedef VkResult (VKAPI_PTR *PFN_vkGetDeviceGroupSurfacePresentModesKHR)(VkDevice device, VkSurfaceKHR surface, VkDeviceGroupPresentModeFlagsKHR* pModes);
typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDevicePresentRectanglesKHR)(VkPhysicalDevice physicalDevice, VkSurfaceKHR surface, uint32_t* pRectCount, VkRect2D* pRects);
typedef VkResult (VKAPI_PTR *PFN_vkAcquireNextImage2KHR)(VkDevice device, const VkAcquireNextImageInfoKHR* pAcquireInfo, uint32_t* pImageIndex);



#define VK_KHR_display 1
typedef struct VkDisplayKHR_T* VkDisplayKHR;
typedef struct VkDisplayModeKHR_T* VkDisplayModeKHR;
#define VK_KHR_DISPLAY_SPEC_VERSION       23
#define VK_KHR_DISPLAY_EXTENSION_NAME     "VK_KHR_display"

typedef enum VkDisplayPlaneAlphaFlagBitsKHR {
    VK_DISPLAY_PLANE_ALPHA_OPAQUE_BIT_KHR = 0x00000001,
    VK_DISPLAY_PLANE_ALPHA_GLOBAL_BIT_KHR = 0x00000002,
    VK_DISPLAY_PLANE_ALPHA_PER_PIXEL_BIT_KHR = 0x00000004,
    VK_DISPLAY_PLANE_ALPHA_PER_PIXEL_PREMULTIPLIED_BIT_KHR = 0x00000008,
    VK_DISPLAY_PLANE_ALPHA_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkDisplayPlaneAlphaFlagBitsKHR;
typedef VkFlags VkDisplayPlaneAlphaFlagsKHR;
typedef VkFlags VkDisplayModeCreateFlagsKHR;
typedef VkFlags VkDisplaySurfaceCreateFlagsKHR;
typedef struct VkDisplayPropertiesKHR {
    VkDisplayKHR                  display;
    const char*                   displayName;
    VkExtent2D                    physicalDimensions;
    VkExtent2D                    physicalResolution;
    VkSurfaceTransformFlagsKHR    supportedTransforms;
    VkBool32                      planeReorderPossible;
    VkBool32                      persistentContent;
} VkDisplayPropertiesKHR;

typedef struct VkDisplayModeParametersKHR {
    VkExtent2D    visibleRegion;
    uint32_t      refreshRate;
} VkDisplayModeParametersKHR;

typedef struct VkDisplayModePropertiesKHR {
    VkDisplayModeKHR              displayMode;
    VkDisplayModeParametersKHR    parameters;
} VkDisplayModePropertiesKHR;

typedef struct VkDisplayModeCreateInfoKHR {
    VkStructureType                sType;
    const void*                    pNext;
    VkDisplayModeCreateFlagsKHR    flags;
    VkDisplayModeParametersKHR     parameters;
} VkDisplayModeCreateInfoKHR;

typedef struct VkDisplayPlaneCapabilitiesKHR {
    VkDisplayPlaneAlphaFlagsKHR    supportedAlpha;
    VkOffset2D                     minSrcPosition;
    VkOffset2D                     maxSrcPosition;
    VkExtent2D                     minSrcExtent;
    VkExtent2D                     maxSrcExtent;
    VkOffset2D                     minDstPosition;
    VkOffset2D                     maxDstPosition;
    VkExtent2D                     minDstExtent;
    VkExtent2D                     maxDstExtent;
} VkDisplayPlaneCapabilitiesKHR;

typedef struct VkDisplayPlanePropertiesKHR {
    VkDisplayKHR    currentDisplay;
    uint32_t        currentStackIndex;
} VkDisplayPlanePropertiesKHR;

typedef struct VkDisplaySurfaceCreateInfoKHR {
    VkStructureType                   sType;
    const void*                       pNext;
    VkDisplaySurfaceCreateFlagsKHR    flags;
    VkDisplayModeKHR                  displayMode;
    uint32_t                          planeIndex;
    uint32_t                          planeStackIndex;
    VkSurfaceTransformFlagBitsKHR     transform;
    float                             globalAlpha;
    VkDisplayPlaneAlphaFlagBitsKHR    alphaMode;
    VkExtent2D                        imageExtent;
} VkDisplaySurfaceCreateInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceDisplayPropertiesKHR)(VkPhysicalDevice physicalDevice, uint32_t* pPropertyCount, VkDisplayPropertiesKHR* pProperties);
typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceDisplayPlanePropertiesKHR)(VkPhysicalDevice physicalDevice, uint32_t* pPropertyCount, VkDisplayPlanePropertiesKHR* pProperties);
typedef VkResult (VKAPI_PTR *PFN_vkGetDisplayPlaneSupportedDisplaysKHR)(VkPhysicalDevice physicalDevice, uint32_t planeIndex, uint32_t* pDisplayCount, VkDisplayKHR* pDisplays);
typedef VkResult (VKAPI_PTR *PFN_vkGetDisplayModePropertiesKHR)(VkPhysicalDevice physicalDevice, VkDisplayKHR display, uint32_t* pPropertyCount, VkDisplayModePropertiesKHR* pProperties);
typedef VkResult (VKAPI_PTR *PFN_vkCreateDisplayModeKHR)(VkPhysicalDevice physicalDevice, VkDisplayKHR display, const VkDisplayModeCreateInfoKHR* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkDisplayModeKHR* pMode);
typedef VkResult (VKAPI_PTR *PFN_vkGetDisplayPlaneCapabilitiesKHR)(VkPhysicalDevice physicalDevice, VkDisplayModeKHR mode, uint32_t planeIndex, VkDisplayPlaneCapabilitiesKHR* pCapabilities);
typedef VkResult (VKAPI_PTR *PFN_vkCreateDisplayPlaneSurfaceKHR)(VkInstance instance, const VkDisplaySurfaceCreateInfoKHR* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkSurfaceKHR* pSurface);



#define VK_KHR_display_swapchain 1
#define VK_KHR_DISPLAY_SWAPCHAIN_SPEC_VERSION 10
#define VK_KHR_DISPLAY_SWAPCHAIN_EXTENSION_NAME "VK_KHR_display_swapchain"
typedef struct VkDisplayPresentInfoKHR {
    VkStructureType    sType;
    const void*        pNext;
    VkRect2D           srcRect;
    VkRect2D           dstRect;
    VkBool32           persistent;
} VkDisplayPresentInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkCreateSharedSwapchainsKHR)(VkDevice device, uint32_t swapchainCount, const VkSwapchainCreateInfoKHR* pCreateInfos, const VkAllocationCallbacks* pAllocator, VkSwapchainKHR* pSwapchains);


#define VK_KHR_sampler_mirror_clamp_to_edge 1
#define VK_KHR_SAMPLER_MIRROR_CLAMP_TO_EDGE_SPEC_VERSION 3
#define VK_KHR_SAMPLER_MIRROR_CLAMP_TO_EDGE_EXTENSION_NAME "VK_KHR_sampler_mirror_clamp_to_edge"


#define VK_KHR_multiview 1
#define VK_KHR_MULTIVIEW_SPEC_VERSION     1
#define VK_KHR_MULTIVIEW_EXTENSION_NAME   "VK_KHR_multiview"
typedef VkRenderPassMultiviewCreateInfo VkRenderPassMultiviewCreateInfoKHR;

typedef VkPhysicalDeviceMultiviewFeatures VkPhysicalDeviceMultiviewFeaturesKHR;

typedef VkPhysicalDeviceMultiviewProperties VkPhysicalDeviceMultiviewPropertiesKHR;



#define VK_KHR_get_physical_device_properties2 1
#define VK_KHR_GET_PHYSICAL_DEVICE_PROPERTIES_2_SPEC_VERSION 2
#define VK_KHR_GET_PHYSICAL_DEVICE_PROPERTIES_2_EXTENSION_NAME "VK_KHR_get_physical_device_properties2"
typedef VkPhysicalDeviceFeatures2 VkPhysicalDeviceFeatures2KHR;

typedef VkPhysicalDeviceProperties2 VkPhysicalDeviceProperties2KHR;

typedef VkFormatProperties2 VkFormatProperties2KHR;

typedef VkImageFormatProperties2 VkImageFormatProperties2KHR;

typedef VkPhysicalDeviceImageFormatInfo2 VkPhysicalDeviceImageFormatInfo2KHR;

typedef VkQueueFamilyProperties2 VkQueueFamilyProperties2KHR;

typedef VkPhysicalDeviceMemoryProperties2 VkPhysicalDeviceMemoryProperties2KHR;

typedef VkSparseImageFormatProperties2 VkSparseImageFormatProperties2KHR;

typedef VkPhysicalDeviceSparseImageFormatInfo2 VkPhysicalDeviceSparseImageFormatInfo2KHR;

typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceFeatures2KHR)(VkPhysicalDevice physicalDevice, VkPhysicalDeviceFeatures2* pFeatures);
typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceProperties2KHR)(VkPhysicalDevice physicalDevice, VkPhysicalDeviceProperties2* pProperties);
typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceFormatProperties2KHR)(VkPhysicalDevice physicalDevice, VkFormat format, VkFormatProperties2* pFormatProperties);
typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceImageFormatProperties2KHR)(VkPhysicalDevice physicalDevice, const VkPhysicalDeviceImageFormatInfo2* pImageFormatInfo, VkImageFormatProperties2* pImageFormatProperties);
typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceQueueFamilyProperties2KHR)(VkPhysicalDevice physicalDevice, uint32_t* pQueueFamilyPropertyCount, VkQueueFamilyProperties2* pQueueFamilyProperties);
typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceMemoryProperties2KHR)(VkPhysicalDevice physicalDevice, VkPhysicalDeviceMemoryProperties2* pMemoryProperties);
typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceSparseImageFormatProperties2KHR)(VkPhysicalDevice physicalDevice, const VkPhysicalDeviceSparseImageFormatInfo2* pFormatInfo, uint32_t* pPropertyCount, VkSparseImageFormatProperties2* pProperties);



#define VK_KHR_device_group 1
#define VK_KHR_DEVICE_GROUP_SPEC_VERSION  4
#define VK_KHR_DEVICE_GROUP_EXTENSION_NAME "VK_KHR_device_group"
typedef VkPeerMemoryFeatureFlags VkPeerMemoryFeatureFlagsKHR;

typedef VkPeerMemoryFeatureFlagBits VkPeerMemoryFeatureFlagBitsKHR;

typedef VkMemoryAllocateFlags VkMemoryAllocateFlagsKHR;

typedef VkMemoryAllocateFlagBits VkMemoryAllocateFlagBitsKHR;

typedef VkMemoryAllocateFlagsInfo VkMemoryAllocateFlagsInfoKHR;

typedef VkDeviceGroupRenderPassBeginInfo VkDeviceGroupRenderPassBeginInfoKHR;

typedef VkDeviceGroupCommandBufferBeginInfo VkDeviceGroupCommandBufferBeginInfoKHR;

typedef VkDeviceGroupSubmitInfo VkDeviceGroupSubmitInfoKHR;

typedef VkDeviceGroupBindSparseInfo VkDeviceGroupBindSparseInfoKHR;

typedef VkBindBufferMemoryDeviceGroupInfo VkBindBufferMemoryDeviceGroupInfoKHR;

typedef VkBindImageMemoryDeviceGroupInfo VkBindImageMemoryDeviceGroupInfoKHR;

typedef void (VKAPI_PTR *PFN_vkGetDeviceGroupPeerMemoryFeaturesKHR)(VkDevice device, uint32_t heapIndex, uint32_t localDeviceIndex, uint32_t remoteDeviceIndex, VkPeerMemoryFeatureFlags* pPeerMemoryFeatures);
typedef void (VKAPI_PTR *PFN_vkCmdSetDeviceMaskKHR)(VkCommandBuffer commandBuffer, uint32_t deviceMask);
typedef void (VKAPI_PTR *PFN_vkCmdDispatchBaseKHR)(VkCommandBuffer commandBuffer, uint32_t baseGroupX, uint32_t baseGroupY, uint32_t baseGroupZ, uint32_t groupCountX, uint32_t groupCountY, uint32_t groupCountZ);



#define VK_KHR_shader_draw_parameters 1
#define VK_KHR_SHADER_DRAW_PARAMETERS_SPEC_VERSION 1
#define VK_KHR_SHADER_DRAW_PARAMETERS_EXTENSION_NAME "VK_KHR_shader_draw_parameters"


#define VK_KHR_maintenance1 1
#define VK_KHR_MAINTENANCE1_SPEC_VERSION  2
#define VK_KHR_MAINTENANCE1_EXTENSION_NAME "VK_KHR_maintenance1"
typedef VkCommandPoolTrimFlags VkCommandPoolTrimFlagsKHR;

typedef void (VKAPI_PTR *PFN_vkTrimCommandPoolKHR)(VkDevice device, VkCommandPool commandPool, VkCommandPoolTrimFlags flags);


#define VK_KHR_device_group_creation 1
#define VK_KHR_DEVICE_GROUP_CREATION_SPEC_VERSION 1
#define VK_KHR_DEVICE_GROUP_CREATION_EXTENSION_NAME "VK_KHR_device_group_creation"
#define VK_MAX_DEVICE_GROUP_SIZE_KHR      VK_MAX_DEVICE_GROUP_SIZE
typedef VkPhysicalDeviceGroupProperties VkPhysicalDeviceGroupPropertiesKHR;

typedef VkDeviceGroupDeviceCreateInfo VkDeviceGroupDeviceCreateInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkEnumeratePhysicalDeviceGroupsKHR)(VkInstance instance, uint32_t* pPhysicalDeviceGroupCount, VkPhysicalDeviceGroupProperties* pPhysicalDeviceGroupProperties);


#define VK_KHR_external_memory_capabilities 1
#define VK_KHR_EXTERNAL_MEMORY_CAPABILITIES_SPEC_VERSION 1
#define VK_KHR_EXTERNAL_MEMORY_CAPABILITIES_EXTENSION_NAME "VK_KHR_external_memory_capabilities"
#define VK_LUID_SIZE_KHR                  VK_LUID_SIZE
typedef VkExternalMemoryHandleTypeFlags VkExternalMemoryHandleTypeFlagsKHR;

typedef VkExternalMemoryHandleTypeFlagBits VkExternalMemoryHandleTypeFlagBitsKHR;

typedef VkExternalMemoryFeatureFlags VkExternalMemoryFeatureFlagsKHR;

typedef VkExternalMemoryFeatureFlagBits VkExternalMemoryFeatureFlagBitsKHR;

typedef VkExternalMemoryProperties VkExternalMemoryPropertiesKHR;

typedef VkPhysicalDeviceExternalImageFormatInfo VkPhysicalDeviceExternalImageFormatInfoKHR;

typedef VkExternalImageFormatProperties VkExternalImageFormatPropertiesKHR;

typedef VkPhysicalDeviceExternalBufferInfo VkPhysicalDeviceExternalBufferInfoKHR;

typedef VkExternalBufferProperties VkExternalBufferPropertiesKHR;

typedef VkPhysicalDeviceIDProperties VkPhysicalDeviceIDPropertiesKHR;

typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceExternalBufferPropertiesKHR)(VkPhysicalDevice physicalDevice, const VkPhysicalDeviceExternalBufferInfo* pExternalBufferInfo, VkExternalBufferProperties* pExternalBufferProperties);



#define VK_KHR_external_memory 1
#define VK_KHR_EXTERNAL_MEMORY_SPEC_VERSION 1
#define VK_KHR_EXTERNAL_MEMORY_EXTENSION_NAME "VK_KHR_external_memory"
#define VK_QUEUE_FAMILY_EXTERNAL_KHR      VK_QUEUE_FAMILY_EXTERNAL
typedef VkExternalMemoryImageCreateInfo VkExternalMemoryImageCreateInfoKHR;

typedef VkExternalMemoryBufferCreateInfo VkExternalMemoryBufferCreateInfoKHR;

typedef VkExportMemoryAllocateInfo VkExportMemoryAllocateInfoKHR;



#define VK_KHR_external_memory_fd 1
#define VK_KHR_EXTERNAL_MEMORY_FD_SPEC_VERSION 1
#define VK_KHR_EXTERNAL_MEMORY_FD_EXTENSION_NAME "VK_KHR_external_memory_fd"
typedef struct VkImportMemoryFdInfoKHR {
    VkStructureType                       sType;
    const void*                           pNext;
    VkExternalMemoryHandleTypeFlagBits    handleType;
    int                                   fd;
} VkImportMemoryFdInfoKHR;

typedef struct VkMemoryFdPropertiesKHR {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           memoryTypeBits;
} VkMemoryFdPropertiesKHR;

typedef struct VkMemoryGetFdInfoKHR {
    VkStructureType                       sType;
    const void*                           pNext;
    VkDeviceMemory                        memory;
    VkExternalMemoryHandleTypeFlagBits    handleType;
} VkMemoryGetFdInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkGetMemoryFdKHR)(VkDevice device, const VkMemoryGetFdInfoKHR* pGetFdInfo, int* pFd);
typedef VkResult (VKAPI_PTR *PFN_vkGetMemoryFdPropertiesKHR)(VkDevice device, VkExternalMemoryHandleTypeFlagBits handleType, int fd, VkMemoryFdPropertiesKHR* pMemoryFdProperties);



#define VK_KHR_external_semaphore_capabilities 1
#define VK_KHR_EXTERNAL_SEMAPHORE_CAPABILITIES_SPEC_VERSION 1
#define VK_KHR_EXTERNAL_SEMAPHORE_CAPABILITIES_EXTENSION_NAME "VK_KHR_external_semaphore_capabilities"
typedef VkExternalSemaphoreHandleTypeFlags VkExternalSemaphoreHandleTypeFlagsKHR;

typedef VkExternalSemaphoreHandleTypeFlagBits VkExternalSemaphoreHandleTypeFlagBitsKHR;

typedef VkExternalSemaphoreFeatureFlags VkExternalSemaphoreFeatureFlagsKHR;

typedef VkExternalSemaphoreFeatureFlagBits VkExternalSemaphoreFeatureFlagBitsKHR;

typedef VkPhysicalDeviceExternalSemaphoreInfo VkPhysicalDeviceExternalSemaphoreInfoKHR;

typedef VkExternalSemaphoreProperties VkExternalSemaphorePropertiesKHR;

typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceExternalSemaphorePropertiesKHR)(VkPhysicalDevice physicalDevice, const VkPhysicalDeviceExternalSemaphoreInfo* pExternalSemaphoreInfo, VkExternalSemaphoreProperties* pExternalSemaphoreProperties);



#define VK_KHR_external_semaphore 1
#define VK_KHR_EXTERNAL_SEMAPHORE_SPEC_VERSION 1
#define VK_KHR_EXTERNAL_SEMAPHORE_EXTENSION_NAME "VK_KHR_external_semaphore"
typedef VkSemaphoreImportFlags VkSemaphoreImportFlagsKHR;

typedef VkSemaphoreImportFlagBits VkSemaphoreImportFlagBitsKHR;

typedef VkExportSemaphoreCreateInfo VkExportSemaphoreCreateInfoKHR;



#define VK_KHR_external_semaphore_fd 1
#define VK_KHR_EXTERNAL_SEMAPHORE_FD_SPEC_VERSION 1
#define VK_KHR_EXTERNAL_SEMAPHORE_FD_EXTENSION_NAME "VK_KHR_external_semaphore_fd"
typedef struct VkImportSemaphoreFdInfoKHR {
    VkStructureType                          sType;
    const void*                              pNext;
    VkSemaphore                              semaphore;
    VkSemaphoreImportFlags                   flags;
    VkExternalSemaphoreHandleTypeFlagBits    handleType;
    int                                      fd;
} VkImportSemaphoreFdInfoKHR;

typedef struct VkSemaphoreGetFdInfoKHR {
    VkStructureType                          sType;
    const void*                              pNext;
    VkSemaphore                              semaphore;
    VkExternalSemaphoreHandleTypeFlagBits    handleType;
} VkSemaphoreGetFdInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkImportSemaphoreFdKHR)(VkDevice device, const VkImportSemaphoreFdInfoKHR* pImportSemaphoreFdInfo);
typedef VkResult (VKAPI_PTR *PFN_vkGetSemaphoreFdKHR)(VkDevice device, const VkSemaphoreGetFdInfoKHR* pGetFdInfo, int* pFd);



#define VK_KHR_push_descriptor 1
#define VK_KHR_PUSH_DESCRIPTOR_SPEC_VERSION 2
#define VK_KHR_PUSH_DESCRIPTOR_EXTENSION_NAME "VK_KHR_push_descriptor"
typedef struct VkPhysicalDevicePushDescriptorPropertiesKHR {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           maxPushDescriptors;
} VkPhysicalDevicePushDescriptorPropertiesKHR;

typedef void (VKAPI_PTR *PFN_vkCmdPushDescriptorSetKHR)(VkCommandBuffer commandBuffer, VkPipelineBindPoint pipelineBindPoint, VkPipelineLayout layout, uint32_t set, uint32_t descriptorWriteCount, const VkWriteDescriptorSet* pDescriptorWrites);
typedef void (VKAPI_PTR *PFN_vkCmdPushDescriptorSetWithTemplateKHR)(VkCommandBuffer commandBuffer, VkDescriptorUpdateTemplate descriptorUpdateTemplate, VkPipelineLayout layout, uint32_t set, const void* pData);



#define VK_KHR_shader_float16_int8 1
#define VK_KHR_SHADER_FLOAT16_INT8_SPEC_VERSION 1
#define VK_KHR_SHADER_FLOAT16_INT8_EXTENSION_NAME "VK_KHR_shader_float16_int8"
typedef VkPhysicalDeviceShaderFloat16Int8Features VkPhysicalDeviceShaderFloat16Int8FeaturesKHR;

typedef VkPhysicalDeviceShaderFloat16Int8Features VkPhysicalDeviceFloat16Int8FeaturesKHR;



#define VK_KHR_16bit_storage 1
#define VK_KHR_16BIT_STORAGE_SPEC_VERSION 1
#define VK_KHR_16BIT_STORAGE_EXTENSION_NAME "VK_KHR_16bit_storage"
typedef VkPhysicalDevice16BitStorageFeatures VkPhysicalDevice16BitStorageFeaturesKHR;



#define VK_KHR_incremental_present 1
#define VK_KHR_INCREMENTAL_PRESENT_SPEC_VERSION 1
#define VK_KHR_INCREMENTAL_PRESENT_EXTENSION_NAME "VK_KHR_incremental_present"
typedef struct VkRectLayerKHR {
    VkOffset2D    offset;
    VkExtent2D    extent;
    uint32_t      layer;
} VkRectLayerKHR;

typedef struct VkPresentRegionKHR {
    uint32_t                 rectangleCount;
    const VkRectLayerKHR*    pRectangles;
} VkPresentRegionKHR;

typedef struct VkPresentRegionsKHR {
    VkStructureType              sType;
    const void*                  pNext;
    uint32_t                     swapchainCount;
    const VkPresentRegionKHR*    pRegions;
} VkPresentRegionsKHR;



#define VK_KHR_descriptor_update_template 1
typedef VkDescriptorUpdateTemplate VkDescriptorUpdateTemplateKHR;

#define VK_KHR_DESCRIPTOR_UPDATE_TEMPLATE_SPEC_VERSION 1
#define VK_KHR_DESCRIPTOR_UPDATE_TEMPLATE_EXTENSION_NAME "VK_KHR_descriptor_update_template"
typedef VkDescriptorUpdateTemplateType VkDescriptorUpdateTemplateTypeKHR;

typedef VkDescriptorUpdateTemplateCreateFlags VkDescriptorUpdateTemplateCreateFlagsKHR;

typedef VkDescriptorUpdateTemplateEntry VkDescriptorUpdateTemplateEntryKHR;

typedef VkDescriptorUpdateTemplateCreateInfo VkDescriptorUpdateTemplateCreateInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkCreateDescriptorUpdateTemplateKHR)(VkDevice device, const VkDescriptorUpdateTemplateCreateInfo* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkDescriptorUpdateTemplate* pDescriptorUpdateTemplate);
typedef void (VKAPI_PTR *PFN_vkDestroyDescriptorUpdateTemplateKHR)(VkDevice device, VkDescriptorUpdateTemplate descriptorUpdateTemplate, const VkAllocationCallbacks* pAllocator);
typedef void (VKAPI_PTR *PFN_vkUpdateDescriptorSetWithTemplateKHR)(VkDevice device, VkDescriptorSet descriptorSet, VkDescriptorUpdateTemplate descriptorUpdateTemplate, const void* pData);



#define VK_KHR_imageless_framebuffer 1
#define VK_KHR_IMAGELESS_FRAMEBUFFER_SPEC_VERSION 1
#define VK_KHR_IMAGELESS_FRAMEBUFFER_EXTENSION_NAME "VK_KHR_imageless_framebuffer"
typedef VkPhysicalDeviceImagelessFramebufferFeatures VkPhysicalDeviceImagelessFramebufferFeaturesKHR;

typedef VkFramebufferAttachmentsCreateInfo VkFramebufferAttachmentsCreateInfoKHR;

typedef VkFramebufferAttachmentImageInfo VkFramebufferAttachmentImageInfoKHR;

typedef VkRenderPassAttachmentBeginInfo VkRenderPassAttachmentBeginInfoKHR;



#define VK_KHR_create_renderpass2 1
#define VK_KHR_CREATE_RENDERPASS_2_SPEC_VERSION 1
#define VK_KHR_CREATE_RENDERPASS_2_EXTENSION_NAME "VK_KHR_create_renderpass2"
typedef VkRenderPassCreateInfo2 VkRenderPassCreateInfo2KHR;

typedef VkAttachmentDescription2 VkAttachmentDescription2KHR;

typedef VkAttachmentReference2 VkAttachmentReference2KHR;

typedef VkSubpassDescription2 VkSubpassDescription2KHR;

typedef VkSubpassDependency2 VkSubpassDependency2KHR;

typedef VkSubpassBeginInfo VkSubpassBeginInfoKHR;

typedef VkSubpassEndInfo VkSubpassEndInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkCreateRenderPass2KHR)(VkDevice device, const VkRenderPassCreateInfo2* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkRenderPass* pRenderPass);
typedef void (VKAPI_PTR *PFN_vkCmdBeginRenderPass2KHR)(VkCommandBuffer commandBuffer, const VkRenderPassBeginInfo*      pRenderPassBegin, const VkSubpassBeginInfo*      pSubpassBeginInfo);
typedef void (VKAPI_PTR *PFN_vkCmdNextSubpass2KHR)(VkCommandBuffer commandBuffer, const VkSubpassBeginInfo*      pSubpassBeginInfo, const VkSubpassEndInfo*        pSubpassEndInfo);
typedef void (VKAPI_PTR *PFN_vkCmdEndRenderPass2KHR)(VkCommandBuffer commandBuffer, const VkSubpassEndInfo*        pSubpassEndInfo);


#define VK_KHR_shared_presentable_image 1
#define VK_KHR_SHARED_PRESENTABLE_IMAGE_SPEC_VERSION 1
#define VK_KHR_SHARED_PRESENTABLE_IMAGE_EXTENSION_NAME "VK_KHR_shared_presentable_image"
typedef struct VkSharedPresentSurfaceCapabilitiesKHR {
    VkStructureType      sType;
    void*                pNext;
    VkImageUsageFlags    sharedPresentSupportedUsageFlags;
} VkSharedPresentSurfaceCapabilitiesKHR;

typedef VkResult (VKAPI_PTR *PFN_vkGetSwapchainStatusKHR)(VkDevice device, VkSwapchainKHR swapchain);




#define VK_KHR_external_fence_capabilities 1
#define VK_KHR_EXTERNAL_FENCE_CAPABILITIES_SPEC_VERSION 1
#define VK_KHR_EXTERNAL_FENCE_CAPABILITIES_EXTENSION_NAME "VK_KHR_external_fence_capabilities"
typedef VkExternalFenceHandleTypeFlags VkExternalFenceHandleTypeFlagsKHR;

typedef VkExternalFenceHandleTypeFlagBits VkExternalFenceHandleTypeFlagBitsKHR;

typedef VkExternalFenceFeatureFlags VkExternalFenceFeatureFlagsKHR;

typedef VkExternalFenceFeatureFlagBits VkExternalFenceFeatureFlagBitsKHR;

typedef VkPhysicalDeviceExternalFenceInfo VkPhysicalDeviceExternalFenceInfoKHR;

typedef VkExternalFenceProperties VkExternalFencePropertiesKHR;

typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceExternalFencePropertiesKHR)(VkPhysicalDevice physicalDevice, const VkPhysicalDeviceExternalFenceInfo* pExternalFenceInfo, VkExternalFenceProperties* pExternalFenceProperties);




#define VK_KHR_external_fence 1
#define VK_KHR_EXTERNAL_FENCE_SPEC_VERSION 1
#define VK_KHR_EXTERNAL_FENCE_EXTENSION_NAME "VK_KHR_external_fence"
typedef VkFenceImportFlags VkFenceImportFlagsKHR;

typedef VkFenceImportFlagBits VkFenceImportFlagBitsKHR;

typedef VkExportFenceCreateInfo VkExportFenceCreateInfoKHR;



#define VK_KHR_external_fence_fd 1
#define VK_KHR_EXTERNAL_FENCE_FD_SPEC_VERSION 1
#define VK_KHR_EXTERNAL_FENCE_FD_EXTENSION_NAME "VK_KHR_external_fence_fd"
typedef struct VkImportFenceFdInfoKHR {
    VkStructureType                      sType;
    const void*                          pNext;
    VkFence                              fence;
    VkFenceImportFlags                   flags;
    VkExternalFenceHandleTypeFlagBits    handleType;
    int                                  fd;
} VkImportFenceFdInfoKHR;

typedef struct VkFenceGetFdInfoKHR {
    VkStructureType                      sType;
    const void*                          pNext;
    VkFence                              fence;
    VkExternalFenceHandleTypeFlagBits    handleType;
} VkFenceGetFdInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkImportFenceFdKHR)(VkDevice device, const VkImportFenceFdInfoKHR* pImportFenceFdInfo);
typedef VkResult (VKAPI_PTR *PFN_vkGetFenceFdKHR)(VkDevice device, const VkFenceGetFdInfoKHR* pGetFdInfo, int* pFd);



#define VK_KHR_performance_query 1
#define VK_KHR_PERFORMANCE_QUERY_SPEC_VERSION 1
#define VK_KHR_PERFORMANCE_QUERY_EXTENSION_NAME "VK_KHR_performance_query"

typedef enum VkPerformanceCounterUnitKHR {
    VK_PERFORMANCE_COUNTER_UNIT_GENERIC_KHR = 0,
    VK_PERFORMANCE_COUNTER_UNIT_PERCENTAGE_KHR = 1,
    VK_PERFORMANCE_COUNTER_UNIT_NANOSECONDS_KHR = 2,
    VK_PERFORMANCE_COUNTER_UNIT_BYTES_KHR = 3,
    VK_PERFORMANCE_COUNTER_UNIT_BYTES_PER_SECOND_KHR = 4,
    VK_PERFORMANCE_COUNTER_UNIT_KELVIN_KHR = 5,
    VK_PERFORMANCE_COUNTER_UNIT_WATTS_KHR = 6,
    VK_PERFORMANCE_COUNTER_UNIT_VOLTS_KHR = 7,
    VK_PERFORMANCE_COUNTER_UNIT_AMPS_KHR = 8,
    VK_PERFORMANCE_COUNTER_UNIT_HERTZ_KHR = 9,
    VK_PERFORMANCE_COUNTER_UNIT_CYCLES_KHR = 10,
    VK_PERFORMANCE_COUNTER_UNIT_BEGIN_RANGE_KHR = VK_PERFORMANCE_COUNTER_UNIT_GENERIC_KHR,
    VK_PERFORMANCE_COUNTER_UNIT_END_RANGE_KHR = VK_PERFORMANCE_COUNTER_UNIT_CYCLES_KHR,
    VK_PERFORMANCE_COUNTER_UNIT_RANGE_SIZE_KHR = (VK_PERFORMANCE_COUNTER_UNIT_CYCLES_KHR - VK_PERFORMANCE_COUNTER_UNIT_GENERIC_KHR + 1),
    VK_PERFORMANCE_COUNTER_UNIT_MAX_ENUM_KHR = 0x7FFFFFFF
} VkPerformanceCounterUnitKHR;

typedef enum VkPerformanceCounterScopeKHR {
    VK_PERFORMANCE_COUNTER_SCOPE_COMMAND_BUFFER_KHR = 0,
    VK_PERFORMANCE_COUNTER_SCOPE_RENDER_PASS_KHR = 1,
    VK_PERFORMANCE_COUNTER_SCOPE_COMMAND_KHR = 2,
    VK_QUERY_SCOPE_COMMAND_BUFFER_KHR = VK_PERFORMANCE_COUNTER_SCOPE_COMMAND_BUFFER_KHR,
    VK_QUERY_SCOPE_RENDER_PASS_KHR = VK_PERFORMANCE_COUNTER_SCOPE_RENDER_PASS_KHR,
    VK_QUERY_SCOPE_COMMAND_KHR = VK_PERFORMANCE_COUNTER_SCOPE_COMMAND_KHR,
    VK_PERFORMANCE_COUNTER_SCOPE_BEGIN_RANGE_KHR = VK_PERFORMANCE_COUNTER_SCOPE_COMMAND_BUFFER_KHR,
    VK_PERFORMANCE_COUNTER_SCOPE_END_RANGE_KHR = VK_PERFORMANCE_COUNTER_SCOPE_COMMAND_KHR,
    VK_PERFORMANCE_COUNTER_SCOPE_RANGE_SIZE_KHR = (VK_PERFORMANCE_COUNTER_SCOPE_COMMAND_KHR - VK_PERFORMANCE_COUNTER_SCOPE_COMMAND_BUFFER_KHR + 1),
    VK_PERFORMANCE_COUNTER_SCOPE_MAX_ENUM_KHR = 0x7FFFFFFF
} VkPerformanceCounterScopeKHR;

typedef enum VkPerformanceCounterStorageKHR {
    VK_PERFORMANCE_COUNTER_STORAGE_INT32_KHR = 0,
    VK_PERFORMANCE_COUNTER_STORAGE_INT64_KHR = 1,
    VK_PERFORMANCE_COUNTER_STORAGE_UINT32_KHR = 2,
    VK_PERFORMANCE_COUNTER_STORAGE_UINT64_KHR = 3,
    VK_PERFORMANCE_COUNTER_STORAGE_FLOAT32_KHR = 4,
    VK_PERFORMANCE_COUNTER_STORAGE_FLOAT64_KHR = 5,
    VK_PERFORMANCE_COUNTER_STORAGE_BEGIN_RANGE_KHR = VK_PERFORMANCE_COUNTER_STORAGE_INT32_KHR,
    VK_PERFORMANCE_COUNTER_STORAGE_END_RANGE_KHR = VK_PERFORMANCE_COUNTER_STORAGE_FLOAT64_KHR,
    VK_PERFORMANCE_COUNTER_STORAGE_RANGE_SIZE_KHR = (VK_PERFORMANCE_COUNTER_STORAGE_FLOAT64_KHR - VK_PERFORMANCE_COUNTER_STORAGE_INT32_KHR + 1),
    VK_PERFORMANCE_COUNTER_STORAGE_MAX_ENUM_KHR = 0x7FFFFFFF
} VkPerformanceCounterStorageKHR;

typedef enum VkPerformanceCounterDescriptionFlagBitsKHR {
    VK_PERFORMANCE_COUNTER_DESCRIPTION_PERFORMANCE_IMPACTING_KHR = 0x00000001,
    VK_PERFORMANCE_COUNTER_DESCRIPTION_CONCURRENTLY_IMPACTED_KHR = 0x00000002,
    VK_PERFORMANCE_COUNTER_DESCRIPTION_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkPerformanceCounterDescriptionFlagBitsKHR;
typedef VkFlags VkPerformanceCounterDescriptionFlagsKHR;

typedef enum VkAcquireProfilingLockFlagBitsKHR {
    VK_ACQUIRE_PROFILING_LOCK_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkAcquireProfilingLockFlagBitsKHR;
typedef VkFlags VkAcquireProfilingLockFlagsKHR;
typedef struct VkPhysicalDevicePerformanceQueryFeaturesKHR {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           performanceCounterQueryPools;
    VkBool32           performanceCounterMultipleQueryPools;
} VkPhysicalDevicePerformanceQueryFeaturesKHR;

typedef struct VkPhysicalDevicePerformanceQueryPropertiesKHR {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           allowCommandBufferQueryCopies;
} VkPhysicalDevicePerformanceQueryPropertiesKHR;

typedef struct VkPerformanceCounterKHR {
    VkStructureType                   sType;
    const void*                       pNext;
    VkPerformanceCounterUnitKHR       unit;
    VkPerformanceCounterScopeKHR      scope;
    VkPerformanceCounterStorageKHR    storage;
    uint8_t                           uuid[VK_UUID_SIZE];
} VkPerformanceCounterKHR;

typedef struct VkPerformanceCounterDescriptionKHR {
    VkStructureType                            sType;
    const void*                                pNext;
    VkPerformanceCounterDescriptionFlagsKHR    flags;
    char                                       name[VK_MAX_DESCRIPTION_SIZE];
    char                                       category[VK_MAX_DESCRIPTION_SIZE];
    char                                       description[VK_MAX_DESCRIPTION_SIZE];
} VkPerformanceCounterDescriptionKHR;

typedef struct VkQueryPoolPerformanceCreateInfoKHR {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           queueFamilyIndex;
    uint32_t           counterIndexCount;
    const uint32_t*    pCounterIndices;
} VkQueryPoolPerformanceCreateInfoKHR;

typedef union VkPerformanceCounterResultKHR {
    int32_t     int32;
    int64_t     int64;
    uint32_t    uint32;
    uint64_t    uint64;
    float       float32;
    double      float64;
} VkPerformanceCounterResultKHR;

typedef struct VkAcquireProfilingLockInfoKHR {
    VkStructureType                   sType;
    const void*                       pNext;
    VkAcquireProfilingLockFlagsKHR    flags;
    uint64_t                          timeout;
} VkAcquireProfilingLockInfoKHR;

typedef struct VkPerformanceQuerySubmitInfoKHR {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           counterPassIndex;
} VkPerformanceQuerySubmitInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkEnumeratePhysicalDeviceQueueFamilyPerformanceQueryCountersKHR)(VkPhysicalDevice physicalDevice, uint32_t queueFamilyIndex, uint32_t* pCounterCount, VkPerformanceCounterKHR* pCounters, VkPerformanceCounterDescriptionKHR* pCounterDescriptions);
typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceQueueFamilyPerformanceQueryPassesKHR)(VkPhysicalDevice physicalDevice, const VkQueryPoolPerformanceCreateInfoKHR* pPerformanceQueryCreateInfo, uint32_t* pNumPasses);
typedef VkResult (VKAPI_PTR *PFN_vkAcquireProfilingLockKHR)(VkDevice device, const VkAcquireProfilingLockInfoKHR* pInfo);
typedef void (VKAPI_PTR *PFN_vkReleaseProfilingLockKHR)(VkDevice device);


#define VK_KHR_maintenance2 1
#define VK_KHR_MAINTENANCE2_SPEC_VERSION  1
#define VK_KHR_MAINTENANCE2_EXTENSION_NAME "VK_KHR_maintenance2"
typedef VkPointClippingBehavior VkPointClippingBehaviorKHR;

typedef VkTessellationDomainOrigin VkTessellationDomainOriginKHR;

typedef VkPhysicalDevicePointClippingProperties VkPhysicalDevicePointClippingPropertiesKHR;

typedef VkRenderPassInputAttachmentAspectCreateInfo VkRenderPassInputAttachmentAspectCreateInfoKHR;

typedef VkInputAttachmentAspectReference VkInputAttachmentAspectReferenceKHR;

typedef VkImageViewUsageCreateInfo VkImageViewUsageCreateInfoKHR;

typedef VkPipelineTessellationDomainOriginStateCreateInfo VkPipelineTessellationDomainOriginStateCreateInfoKHR;



#define VK_KHR_get_surface_capabilities2 1
#define VK_KHR_GET_SURFACE_CAPABILITIES_2_SPEC_VERSION 1
#define VK_KHR_GET_SURFACE_CAPABILITIES_2_EXTENSION_NAME "VK_KHR_get_surface_capabilities2"
typedef struct VkPhysicalDeviceSurfaceInfo2KHR {
    VkStructureType    sType;
    const void*        pNext;
    VkSurfaceKHR       surface;
} VkPhysicalDeviceSurfaceInfo2KHR;

typedef struct VkSurfaceCapabilities2KHR {
    VkStructureType             sType;
    void*                       pNext;
    VkSurfaceCapabilitiesKHR    surfaceCapabilities;
} VkSurfaceCapabilities2KHR;

typedef struct VkSurfaceFormat2KHR {
    VkStructureType       sType;
    void*                 pNext;
    VkSurfaceFormatKHR    surfaceFormat;
} VkSurfaceFormat2KHR;

typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceSurfaceCapabilities2KHR)(VkPhysicalDevice physicalDevice, const VkPhysicalDeviceSurfaceInfo2KHR* pSurfaceInfo, VkSurfaceCapabilities2KHR* pSurfaceCapabilities);
typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceSurfaceFormats2KHR)(VkPhysicalDevice physicalDevice, const VkPhysicalDeviceSurfaceInfo2KHR* pSurfaceInfo, uint32_t* pSurfaceFormatCount, VkSurfaceFormat2KHR* pSurfaceFormats);



#define VK_KHR_variable_pointers 1
#define VK_KHR_VARIABLE_POINTERS_SPEC_VERSION 1
#define VK_KHR_VARIABLE_POINTERS_EXTENSION_NAME "VK_KHR_variable_pointers"
typedef VkPhysicalDeviceVariablePointersFeatures VkPhysicalDeviceVariablePointerFeaturesKHR;

typedef VkPhysicalDeviceVariablePointersFeatures VkPhysicalDeviceVariablePointersFeaturesKHR;



#define VK_KHR_get_display_properties2 1
#define VK_KHR_GET_DISPLAY_PROPERTIES_2_SPEC_VERSION 1
#define VK_KHR_GET_DISPLAY_PROPERTIES_2_EXTENSION_NAME "VK_KHR_get_display_properties2"
typedef struct VkDisplayProperties2KHR {
    VkStructureType           sType;
    void*                     pNext;
    VkDisplayPropertiesKHR    displayProperties;
} VkDisplayProperties2KHR;

typedef struct VkDisplayPlaneProperties2KHR {
    VkStructureType                sType;
    void*                          pNext;
    VkDisplayPlanePropertiesKHR    displayPlaneProperties;
} VkDisplayPlaneProperties2KHR;

typedef struct VkDisplayModeProperties2KHR {
    VkStructureType               sType;
    void*                         pNext;
    VkDisplayModePropertiesKHR    displayModeProperties;
} VkDisplayModeProperties2KHR;

typedef struct VkDisplayPlaneInfo2KHR {
    VkStructureType     sType;
    const void*         pNext;
    VkDisplayModeKHR    mode;
    uint32_t            planeIndex;
} VkDisplayPlaneInfo2KHR;

typedef struct VkDisplayPlaneCapabilities2KHR {
    VkStructureType                  sType;
    void*                            pNext;
    VkDisplayPlaneCapabilitiesKHR    capabilities;
} VkDisplayPlaneCapabilities2KHR;

typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceDisplayProperties2KHR)(VkPhysicalDevice physicalDevice, uint32_t* pPropertyCount, VkDisplayProperties2KHR* pProperties);
typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceDisplayPlaneProperties2KHR)(VkPhysicalDevice physicalDevice, uint32_t* pPropertyCount, VkDisplayPlaneProperties2KHR* pProperties);
typedef VkResult (VKAPI_PTR *PFN_vkGetDisplayModeProperties2KHR)(VkPhysicalDevice physicalDevice, VkDisplayKHR display, uint32_t* pPropertyCount, VkDisplayModeProperties2KHR* pProperties);
typedef VkResult (VKAPI_PTR *PFN_vkGetDisplayPlaneCapabilities2KHR)(VkPhysicalDevice physicalDevice, const VkDisplayPlaneInfo2KHR* pDisplayPlaneInfo, VkDisplayPlaneCapabilities2KHR* pCapabilities);


#define VK_KHR_dedicated_allocation 1
#define VK_KHR_DEDICATED_ALLOCATION_SPEC_VERSION 3
#define VK_KHR_DEDICATED_ALLOCATION_EXTENSION_NAME "VK_KHR_dedicated_allocation"
typedef VkMemoryDedicatedRequirements VkMemoryDedicatedRequirementsKHR;

typedef VkMemoryDedicatedAllocateInfo VkMemoryDedicatedAllocateInfoKHR;



#define VK_KHR_storage_buffer_storage_class 1
#define VK_KHR_STORAGE_BUFFER_STORAGE_CLASS_SPEC_VERSION 1
#define VK_KHR_STORAGE_BUFFER_STORAGE_CLASS_EXTENSION_NAME "VK_KHR_storage_buffer_storage_class"


#define VK_KHR_relaxed_block_layout 1
#define VK_KHR_RELAXED_BLOCK_LAYOUT_SPEC_VERSION 1
#define VK_KHR_RELAXED_BLOCK_LAYOUT_EXTENSION_NAME "VK_KHR_relaxed_block_layout"


#define VK_KHR_get_memory_requirements2 1
#define VK_KHR_GET_MEMORY_REQUIREMENTS_2_SPEC_VERSION 1
#define VK_KHR_GET_MEMORY_REQUIREMENTS_2_EXTENSION_NAME "VK_KHR_get_memory_requirements2"
typedef VkBufferMemoryRequirementsInfo2 VkBufferMemoryRequirementsInfo2KHR;

typedef VkImageMemoryRequirementsInfo2 VkImageMemoryRequirementsInfo2KHR;

typedef VkImageSparseMemoryRequirementsInfo2 VkImageSparseMemoryRequirementsInfo2KHR;

typedef VkSparseImageMemoryRequirements2 VkSparseImageMemoryRequirements2KHR;

typedef void (VKAPI_PTR *PFN_vkGetImageMemoryRequirements2KHR)(VkDevice device, const VkImageMemoryRequirementsInfo2* pInfo, VkMemoryRequirements2* pMemoryRequirements);
typedef void (VKAPI_PTR *PFN_vkGetBufferMemoryRequirements2KHR)(VkDevice device, const VkBufferMemoryRequirementsInfo2* pInfo, VkMemoryRequirements2* pMemoryRequirements);
typedef void (VKAPI_PTR *PFN_vkGetImageSparseMemoryRequirements2KHR)(VkDevice device, const VkImageSparseMemoryRequirementsInfo2* pInfo, uint32_t* pSparseMemoryRequirementCount, VkSparseImageMemoryRequirements2* pSparseMemoryRequirements);



#define VK_KHR_image_format_list 1
#define VK_KHR_IMAGE_FORMAT_LIST_SPEC_VERSION 1
#define VK_KHR_IMAGE_FORMAT_LIST_EXTENSION_NAME "VK_KHR_image_format_list"
typedef VkImageFormatListCreateInfo VkImageFormatListCreateInfoKHR;



#define VK_KHR_sampler_ycbcr_conversion 1
typedef VkSamplerYcbcrConversion VkSamplerYcbcrConversionKHR;

#define VK_KHR_SAMPLER_YCBCR_CONVERSION_SPEC_VERSION 14
#define VK_KHR_SAMPLER_YCBCR_CONVERSION_EXTENSION_NAME "VK_KHR_sampler_ycbcr_conversion"
typedef VkSamplerYcbcrModelConversion VkSamplerYcbcrModelConversionKHR;

typedef VkSamplerYcbcrRange VkSamplerYcbcrRangeKHR;

typedef VkChromaLocation VkChromaLocationKHR;

typedef VkSamplerYcbcrConversionCreateInfo VkSamplerYcbcrConversionCreateInfoKHR;

typedef VkSamplerYcbcrConversionInfo VkSamplerYcbcrConversionInfoKHR;

typedef VkBindImagePlaneMemoryInfo VkBindImagePlaneMemoryInfoKHR;

typedef VkImagePlaneMemoryRequirementsInfo VkImagePlaneMemoryRequirementsInfoKHR;

typedef VkPhysicalDeviceSamplerYcbcrConversionFeatures VkPhysicalDeviceSamplerYcbcrConversionFeaturesKHR;

typedef VkSamplerYcbcrConversionImageFormatProperties VkSamplerYcbcrConversionImageFormatPropertiesKHR;

typedef VkResult (VKAPI_PTR *PFN_vkCreateSamplerYcbcrConversionKHR)(VkDevice device, const VkSamplerYcbcrConversionCreateInfo* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkSamplerYcbcrConversion* pYcbcrConversion);
typedef void (VKAPI_PTR *PFN_vkDestroySamplerYcbcrConversionKHR)(VkDevice device, VkSamplerYcbcrConversion ycbcrConversion, const VkAllocationCallbacks* pAllocator);



#define VK_KHR_bind_memory2 1
#define VK_KHR_BIND_MEMORY_2_SPEC_VERSION 1
#define VK_KHR_BIND_MEMORY_2_EXTENSION_NAME "VK_KHR_bind_memory2"
typedef VkBindBufferMemoryInfo VkBindBufferMemoryInfoKHR;

typedef VkBindImageMemoryInfo VkBindImageMemoryInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkBindBufferMemory2KHR)(VkDevice device, uint32_t bindInfoCount, const VkBindBufferMemoryInfo* pBindInfos);
typedef VkResult (VKAPI_PTR *PFN_vkBindImageMemory2KHR)(VkDevice device, uint32_t bindInfoCount, const VkBindImageMemoryInfo* pBindInfos);



#define VK_KHR_maintenance3 1
#define VK_KHR_MAINTENANCE3_SPEC_VERSION  1
#define VK_KHR_MAINTENANCE3_EXTENSION_NAME "VK_KHR_maintenance3"
typedef VkPhysicalDeviceMaintenance3Properties VkPhysicalDeviceMaintenance3PropertiesKHR;

typedef VkDescriptorSetLayoutSupport VkDescriptorSetLayoutSupportKHR;

typedef void (VKAPI_PTR *PFN_vkGetDescriptorSetLayoutSupportKHR)(VkDevice device, const VkDescriptorSetLayoutCreateInfo* pCreateInfo, VkDescriptorSetLayoutSupport* pSupport);




#define VK_KHR_draw_indirect_count 1
#define VK_KHR_DRAW_INDIRECT_COUNT_SPEC_VERSION 1
#define VK_KHR_DRAW_INDIRECT_COUNT_EXTENSION_NAME "VK_KHR_draw_indirect_count"
typedef void (VKAPI_PTR *PFN_vkCmdDrawIndirectCountKHR)(VkCommandBuffer commandBuffer, VkBuffer buffer, VkDeviceSize offset, VkBuffer countBuffer, VkDeviceSize countBufferOffset, uint32_t maxDrawCount, uint32_t stride);
typedef void (VKAPI_PTR *PFN_vkCmdDrawIndexedIndirectCountKHR)(VkCommandBuffer commandBuffer, VkBuffer buffer, VkDeviceSize offset, VkBuffer countBuffer, VkDeviceSize countBufferOffset, uint32_t maxDrawCount, uint32_t stride);


#define VK_KHR_shader_subgroup_extended_types 1
#define VK_KHR_SHADER_SUBGROUP_EXTENDED_TYPES_SPEC_VERSION 1
#define VK_KHR_SHADER_SUBGROUP_EXTENDED_TYPES_EXTENSION_NAME "VK_KHR_shader_subgroup_extended_types"
typedef VkPhysicalDeviceShaderSubgroupExtendedTypesFeatures VkPhysicalDeviceShaderSubgroupExtendedTypesFeaturesKHR;



#define VK_KHR_8bit_storage 1
#define VK_KHR_8BIT_STORAGE_SPEC_VERSION  1
#define VK_KHR_8BIT_STORAGE_EXTENSION_NAME "VK_KHR_8bit_storage"
typedef VkPhysicalDevice8BitStorageFeatures VkPhysicalDevice8BitStorageFeaturesKHR;



#define VK_KHR_shader_atomic_int64 1
#define VK_KHR_SHADER_ATOMIC_INT64_SPEC_VERSION 1
#define VK_KHR_SHADER_ATOMIC_INT64_EXTENSION_NAME "VK_KHR_shader_atomic_int64"
typedef VkPhysicalDeviceShaderAtomicInt64Features VkPhysicalDeviceShaderAtomicInt64FeaturesKHR;



#define VK_KHR_shader_clock 1
#define VK_KHR_SHADER_CLOCK_SPEC_VERSION  1
#define VK_KHR_SHADER_CLOCK_EXTENSION_NAME "VK_KHR_shader_clock"
typedef struct VkPhysicalDeviceShaderClockFeaturesKHR {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           shaderSubgroupClock;
    VkBool32           shaderDeviceClock;
} VkPhysicalDeviceShaderClockFeaturesKHR;



#define VK_KHR_driver_properties 1
#define VK_KHR_DRIVER_PROPERTIES_SPEC_VERSION 1
#define VK_KHR_DRIVER_PROPERTIES_EXTENSION_NAME "VK_KHR_driver_properties"
#define VK_MAX_DRIVER_NAME_SIZE_KHR       VK_MAX_DRIVER_NAME_SIZE
#define VK_MAX_DRIVER_INFO_SIZE_KHR       VK_MAX_DRIVER_INFO_SIZE
typedef VkDriverId VkDriverIdKHR;

typedef VkConformanceVersion VkConformanceVersionKHR;

typedef VkPhysicalDeviceDriverProperties VkPhysicalDeviceDriverPropertiesKHR;



#define VK_KHR_shader_float_controls 1
#define VK_KHR_SHADER_FLOAT_CONTROLS_SPEC_VERSION 4
#define VK_KHR_SHADER_FLOAT_CONTROLS_EXTENSION_NAME "VK_KHR_shader_float_controls"
typedef VkShaderFloatControlsIndependence VkShaderFloatControlsIndependenceKHR;

typedef VkPhysicalDeviceFloatControlsProperties VkPhysicalDeviceFloatControlsPropertiesKHR;



#define VK_KHR_depth_stencil_resolve 1
#define VK_KHR_DEPTH_STENCIL_RESOLVE_SPEC_VERSION 1
#define VK_KHR_DEPTH_STENCIL_RESOLVE_EXTENSION_NAME "VK_KHR_depth_stencil_resolve"
typedef VkResolveModeFlagBits VkResolveModeFlagBitsKHR;

typedef VkResolveModeFlags VkResolveModeFlagsKHR;

typedef VkSubpassDescriptionDepthStencilResolve VkSubpassDescriptionDepthStencilResolveKHR;

typedef VkPhysicalDeviceDepthStencilResolveProperties VkPhysicalDeviceDepthStencilResolvePropertiesKHR;



#define VK_KHR_swapchain_mutable_format 1
#define VK_KHR_SWAPCHAIN_MUTABLE_FORMAT_SPEC_VERSION 1
#define VK_KHR_SWAPCHAIN_MUTABLE_FORMAT_EXTENSION_NAME "VK_KHR_swapchain_mutable_format"


#define VK_KHR_timeline_semaphore 1
#define VK_KHR_TIMELINE_SEMAPHORE_SPEC_VERSION 2
#define VK_KHR_TIMELINE_SEMAPHORE_EXTENSION_NAME "VK_KHR_timeline_semaphore"
typedef VkSemaphoreType VkSemaphoreTypeKHR;

typedef VkSemaphoreWaitFlagBits VkSemaphoreWaitFlagBitsKHR;

typedef VkSemaphoreWaitFlags VkSemaphoreWaitFlagsKHR;

typedef VkPhysicalDeviceTimelineSemaphoreFeatures VkPhysicalDeviceTimelineSemaphoreFeaturesKHR;

typedef VkPhysicalDeviceTimelineSemaphoreProperties VkPhysicalDeviceTimelineSemaphorePropertiesKHR;

typedef VkSemaphoreTypeCreateInfo VkSemaphoreTypeCreateInfoKHR;

typedef VkTimelineSemaphoreSubmitInfo VkTimelineSemaphoreSubmitInfoKHR;

typedef VkSemaphoreWaitInfo VkSemaphoreWaitInfoKHR;

typedef VkSemaphoreSignalInfo VkSemaphoreSignalInfoKHR;

typedef VkResult (VKAPI_PTR *PFN_vkGetSemaphoreCounterValueKHR)(VkDevice device, VkSemaphore semaphore, uint64_t* pValue);
typedef VkResult (VKAPI_PTR *PFN_vkWaitSemaphoresKHR)(VkDevice device, const VkSemaphoreWaitInfo* pWaitInfo, uint64_t timeout);
typedef VkResult (VKAPI_PTR *PFN_vkSignalSemaphoreKHR)(VkDevice device, const VkSemaphoreSignalInfo* pSignalInfo);



#define VK_KHR_vulkan_memory_model 1
#define VK_KHR_VULKAN_MEMORY_MODEL_SPEC_VERSION 3
#define VK_KHR_VULKAN_MEMORY_MODEL_EXTENSION_NAME "VK_KHR_vulkan_memory_model"
typedef VkPhysicalDeviceVulkanMemoryModelFeatures VkPhysicalDeviceVulkanMemoryModelFeaturesKHR;



#define VK_KHR_spirv_1_4 1
#define VK_KHR_SPIRV_1_4_SPEC_VERSION     1
#define VK_KHR_SPIRV_1_4_EXTENSION_NAME   "VK_KHR_spirv_1_4"


#define VK_KHR_surface_protected_capabilities 1
#define VK_KHR_SURFACE_PROTECTED_CAPABILITIES_SPEC_VERSION 1
#define VK_KHR_SURFACE_PROTECTED_CAPABILITIES_EXTENSION_NAME "VK_KHR_surface_protected_capabilities"
typedef struct VkSurfaceProtectedCapabilitiesKHR {
    VkStructureType    sType;
    const void*        pNext;
    VkBool32           supportsProtected;
} VkSurfaceProtectedCapabilitiesKHR;



#define VK_KHR_separate_depth_stencil_layouts 1
#define VK_KHR_SEPARATE_DEPTH_STENCIL_LAYOUTS_SPEC_VERSION 1
#define VK_KHR_SEPARATE_DEPTH_STENCIL_LAYOUTS_EXTENSION_NAME "VK_KHR_separate_depth_stencil_layouts"
typedef VkPhysicalDeviceSeparateDepthStencilLayoutsFeatures VkPhysicalDeviceSeparateDepthStencilLayoutsFeaturesKHR;

typedef VkAttachmentReferenceStencilLayout VkAttachmentReferenceStencilLayoutKHR;

typedef VkAttachmentDescriptionStencilLayout VkAttachmentDescriptionStencilLayoutKHR;



#define VK_KHR_uniform_buffer_standard_layout 1
#define VK_KHR_UNIFORM_BUFFER_STANDARD_LAYOUT_SPEC_VERSION 1
#define VK_KHR_UNIFORM_BUFFER_STANDARD_LAYOUT_EXTENSION_NAME "VK_KHR_uniform_buffer_standard_layout"
typedef VkPhysicalDeviceUniformBufferStandardLayoutFeatures VkPhysicalDeviceUniformBufferStandardLayoutFeaturesKHR;



#define VK_KHR_buffer_device_address 1
#define VK_KHR_BUFFER_DEVICE_ADDRESS_SPEC_VERSION 1
#define VK_KHR_BUFFER_DEVICE_ADDRESS_EXTENSION_NAME "VK_KHR_buffer_device_address"
typedef VkPhysicalDeviceBufferDeviceAddressFeatures VkPhysicalDeviceBufferDeviceAddressFeaturesKHR;

typedef VkBufferDeviceAddressInfo VkBufferDeviceAddressInfoKHR;

typedef VkBufferOpaqueCaptureAddressCreateInfo VkBufferOpaqueCaptureAddressCreateInfoKHR;

typedef VkMemoryOpaqueCaptureAddressAllocateInfo VkMemoryOpaqueCaptureAddressAllocateInfoKHR;

typedef VkDeviceMemoryOpaqueCaptureAddressInfo VkDeviceMemoryOpaqueCaptureAddressInfoKHR;

typedef VkDeviceAddress (VKAPI_PTR *PFN_vkGetBufferDeviceAddressKHR)(VkDevice device, const VkBufferDeviceAddressInfo* pInfo);
typedef uint64_t (VKAPI_PTR *PFN_vkGetBufferOpaqueCaptureAddressKHR)(VkDevice device, const VkBufferDeviceAddressInfo* pInfo);
typedef uint64_t (VKAPI_PTR *PFN_vkGetDeviceMemoryOpaqueCaptureAddressKHR)(VkDevice device, const VkDeviceMemoryOpaqueCaptureAddressInfo* pInfo);



#define VK_KHR_pipeline_executable_properties 1
#define VK_KHR_PIPELINE_EXECUTABLE_PROPERTIES_SPEC_VERSION 1
#define VK_KHR_PIPELINE_EXECUTABLE_PROPERTIES_EXTENSION_NAME "VK_KHR_pipeline_executable_properties"

typedef enum VkPipelineExecutableStatisticFormatKHR {
    VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_BOOL32_KHR = 0,
    VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_INT64_KHR = 1,
    VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_UINT64_KHR = 2,
    VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_FLOAT64_KHR = 3,
    VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_BEGIN_RANGE_KHR = VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_BOOL32_KHR,
    VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_END_RANGE_KHR = VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_FLOAT64_KHR,
    VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_RANGE_SIZE_KHR = (VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_FLOAT64_KHR - VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_BOOL32_KHR + 1),
    VK_PIPELINE_EXECUTABLE_STATISTIC_FORMAT_MAX_ENUM_KHR = 0x7FFFFFFF
} VkPipelineExecutableStatisticFormatKHR;
typedef struct VkPhysicalDevicePipelineExecutablePropertiesFeaturesKHR {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           pipelineExecutableInfo;
} VkPhysicalDevicePipelineExecutablePropertiesFeaturesKHR;

typedef struct VkPipelineInfoKHR {
    VkStructureType    sType;
    const void*        pNext;
    VkPipeline         pipeline;
} VkPipelineInfoKHR;

typedef struct VkPipelineExecutablePropertiesKHR {
    VkStructureType       sType;
    void*                 pNext;
    VkShaderStageFlags    stages;
    char                  name[VK_MAX_DESCRIPTION_SIZE];
    char                  description[VK_MAX_DESCRIPTION_SIZE];
    uint32_t              subgroupSize;
} VkPipelineExecutablePropertiesKHR;

typedef struct VkPipelineExecutableInfoKHR {
    VkStructureType    sType;
    const void*        pNext;
    VkPipeline         pipeline;
    uint32_t           executableIndex;
} VkPipelineExecutableInfoKHR;

typedef union VkPipelineExecutableStatisticValueKHR {
    VkBool32    b32;
    int64_t     i64;
    uint64_t    u64;
    double      f64;
} VkPipelineExecutableStatisticValueKHR;

typedef struct VkPipelineExecutableStatisticKHR {
    VkStructureType                           sType;
    void*                                     pNext;
    char                                      name[VK_MAX_DESCRIPTION_SIZE];
    char                                      description[VK_MAX_DESCRIPTION_SIZE];
    VkPipelineExecutableStatisticFormatKHR    format;
    VkPipelineExecutableStatisticValueKHR     value;
} VkPipelineExecutableStatisticKHR;

typedef struct VkPipelineExecutableInternalRepresentationKHR {
    VkStructureType    sType;
    void*              pNext;
    char               name[VK_MAX_DESCRIPTION_SIZE];
    char               description[VK_MAX_DESCRIPTION_SIZE];
    VkBool32           isText;
    size_t             dataSize;
    void*              pData;
} VkPipelineExecutableInternalRepresentationKHR;

typedef VkResult (VKAPI_PTR *PFN_vkGetPipelineExecutablePropertiesKHR)(VkDevice                        device, const VkPipelineInfoKHR*        pPipelineInfo, uint32_t* pExecutableCount, VkPipelineExecutablePropertiesKHR* pProperties);
typedef VkResult (VKAPI_PTR *PFN_vkGetPipelineExecutableStatisticsKHR)(VkDevice                        device, const VkPipelineExecutableInfoKHR*  pExecutableInfo, uint32_t* pStatisticCount, VkPipelineExecutableStatisticKHR* pStatistics);
typedef VkResult (VKAPI_PTR *PFN_vkGetPipelineExecutableInternalRepresentationsKHR)(VkDevice                        device, const VkPipelineExecutableInfoKHR*  pExecutableInfo, uint32_t* pInternalRepresentationCount, VkPipelineExecutableInternalRepresentationKHR* pInternalRepresentations);



#define VK_KHR_shader_non_semantic_info 1
#define VK_KHR_SHADER_NON_SEMANTIC_INFO_SPEC_VERSION 1
#define VK_KHR_SHADER_NON_SEMANTIC_INFO_EXTENSION_NAME "VK_KHR_shader_non_semantic_info"


#define VK_EXT_debug_report 1
typedef struct VkDebugReportCallbackEXT_T* VkDebugReportCallbackEXT;
#define VK_EXT_DEBUG_REPORT_SPEC_VERSION  9
#define VK_EXT_DEBUG_REPORT_EXTENSION_NAME "VK_EXT_debug_report"

typedef enum VkDebugReportObjectTypeEXT {
    VK_DEBUG_REPORT_OBJECT_TYPE_UNKNOWN_EXT = 0,
    VK_DEBUG_REPORT_OBJECT_TYPE_INSTANCE_EXT = 1,
    VK_DEBUG_REPORT_OBJECT_TYPE_PHYSICAL_DEVICE_EXT = 2,
    VK_DEBUG_REPORT_OBJECT_TYPE_DEVICE_EXT = 3,
    VK_DEBUG_REPORT_OBJECT_TYPE_QUEUE_EXT = 4,
    VK_DEBUG_REPORT_OBJECT_TYPE_SEMAPHORE_EXT = 5,
    VK_DEBUG_REPORT_OBJECT_TYPE_COMMAND_BUFFER_EXT = 6,
    VK_DEBUG_REPORT_OBJECT_TYPE_FENCE_EXT = 7,
    VK_DEBUG_REPORT_OBJECT_TYPE_DEVICE_MEMORY_EXT = 8,
    VK_DEBUG_REPORT_OBJECT_TYPE_BUFFER_EXT = 9,
    VK_DEBUG_REPORT_OBJECT_TYPE_IMAGE_EXT = 10,
    VK_DEBUG_REPORT_OBJECT_TYPE_EVENT_EXT = 11,
    VK_DEBUG_REPORT_OBJECT_TYPE_QUERY_POOL_EXT = 12,
    VK_DEBUG_REPORT_OBJECT_TYPE_BUFFER_VIEW_EXT = 13,
    VK_DEBUG_REPORT_OBJECT_TYPE_IMAGE_VIEW_EXT = 14,
    VK_DEBUG_REPORT_OBJECT_TYPE_SHADER_MODULE_EXT = 15,
    VK_DEBUG_REPORT_OBJECT_TYPE_PIPELINE_CACHE_EXT = 16,
    VK_DEBUG_REPORT_OBJECT_TYPE_PIPELINE_LAYOUT_EXT = 17,
    VK_DEBUG_REPORT_OBJECT_TYPE_RENDER_PASS_EXT = 18,
    VK_DEBUG_REPORT_OBJECT_TYPE_PIPELINE_EXT = 19,
    VK_DEBUG_REPORT_OBJECT_TYPE_DESCRIPTOR_SET_LAYOUT_EXT = 20,
    VK_DEBUG_REPORT_OBJECT_TYPE_SAMPLER_EXT = 21,
    VK_DEBUG_REPORT_OBJECT_TYPE_DESCRIPTOR_POOL_EXT = 22,
    VK_DEBUG_REPORT_OBJECT_TYPE_DESCRIPTOR_SET_EXT = 23,
    VK_DEBUG_REPORT_OBJECT_TYPE_FRAMEBUFFER_EXT = 24,
    VK_DEBUG_REPORT_OBJECT_TYPE_COMMAND_POOL_EXT = 25,
    VK_DEBUG_REPORT_OBJECT_TYPE_SURFACE_KHR_EXT = 26,
    VK_DEBUG_REPORT_OBJECT_TYPE_SWAPCHAIN_KHR_EXT = 27,
    VK_DEBUG_REPORT_OBJECT_TYPE_DEBUG_REPORT_CALLBACK_EXT_EXT = 28,
    VK_DEBUG_REPORT_OBJECT_TYPE_DISPLAY_KHR_EXT = 29,
    VK_DEBUG_REPORT_OBJECT_TYPE_DISPLAY_MODE_KHR_EXT = 30,
    VK_DEBUG_REPORT_OBJECT_TYPE_VALIDATION_CACHE_EXT_EXT = 33,
    VK_DEBUG_REPORT_OBJECT_TYPE_SAMPLER_YCBCR_CONVERSION_EXT = 1000156000,
    VK_DEBUG_REPORT_OBJECT_TYPE_DESCRIPTOR_UPDATE_TEMPLATE_EXT = 1000085000,
    VK_DEBUG_REPORT_OBJECT_TYPE_ACCELERATION_STRUCTURE_KHR_EXT = 1000165000,
    VK_DEBUG_REPORT_OBJECT_TYPE_DEBUG_REPORT_EXT = VK_DEBUG_REPORT_OBJECT_TYPE_DEBUG_REPORT_CALLBACK_EXT_EXT,
    VK_DEBUG_REPORT_OBJECT_TYPE_VALIDATION_CACHE_EXT = VK_DEBUG_REPORT_OBJECT_TYPE_VALIDATION_CACHE_EXT_EXT,
    VK_DEBUG_REPORT_OBJECT_TYPE_DESCRIPTOR_UPDATE_TEMPLATE_KHR_EXT = VK_DEBUG_REPORT_OBJECT_TYPE_DESCRIPTOR_UPDATE_TEMPLATE_EXT,
    VK_DEBUG_REPORT_OBJECT_TYPE_SAMPLER_YCBCR_CONVERSION_KHR_EXT = VK_DEBUG_REPORT_OBJECT_TYPE_SAMPLER_YCBCR_CONVERSION_EXT,
    VK_DEBUG_REPORT_OBJECT_TYPE_ACCELERATION_STRUCTURE_NV_EXT = VK_DEBUG_REPORT_OBJECT_TYPE_ACCELERATION_STRUCTURE_KHR_EXT,
    VK_DEBUG_REPORT_OBJECT_TYPE_BEGIN_RANGE_EXT = VK_DEBUG_REPORT_OBJECT_TYPE_UNKNOWN_EXT,
    VK_DEBUG_REPORT_OBJECT_TYPE_END_RANGE_EXT = VK_DEBUG_REPORT_OBJECT_TYPE_VALIDATION_CACHE_EXT_EXT,
    VK_DEBUG_REPORT_OBJECT_TYPE_RANGE_SIZE_EXT = (VK_DEBUG_REPORT_OBJECT_TYPE_VALIDATION_CACHE_EXT_EXT - VK_DEBUG_REPORT_OBJECT_TYPE_UNKNOWN_EXT + 1),
    VK_DEBUG_REPORT_OBJECT_TYPE_MAX_ENUM_EXT = 0x7FFFFFFF
} VkDebugReportObjectTypeEXT;

typedef enum VkDebugReportFlagBitsEXT {
    VK_DEBUG_REPORT_INFORMATION_BIT_EXT = 0x00000001,
    VK_DEBUG_REPORT_WARNING_BIT_EXT = 0x00000002,
    VK_DEBUG_REPORT_PERFORMANCE_WARNING_BIT_EXT = 0x00000004,
    VK_DEBUG_REPORT_ERROR_BIT_EXT = 0x00000008,
    VK_DEBUG_REPORT_DEBUG_BIT_EXT = 0x00000010,
    VK_DEBUG_REPORT_FLAG_BITS_MAX_ENUM_EXT = 0x7FFFFFFF
} VkDebugReportFlagBitsEXT;
typedef VkFlags VkDebugReportFlagsEXT;
typedef VkBool32 (VKAPI_PTR *PFN_vkDebugReportCallbackEXT)(
    VkDebugReportFlagsEXT                       flags,
    VkDebugReportObjectTypeEXT                  objectType,
    uint64_t                                    object,
    size_t                                      location,
    int32_t                                     messageCode,
    const char*                                 pLayerPrefix,
    const char*                                 pMessage,
    void*                                       pUserData);

typedef struct VkDebugReportCallbackCreateInfoEXT {
    VkStructureType                 sType;
    const void*                     pNext;
    VkDebugReportFlagsEXT           flags;
    PFN_vkDebugReportCallbackEXT    pfnCallback;
    void*                           pUserData;
} VkDebugReportCallbackCreateInfoEXT;

typedef VkResult (VKAPI_PTR *PFN_vkCreateDebugReportCallbackEXT)(VkInstance instance, const VkDebugReportCallbackCreateInfoEXT* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkDebugReportCallbackEXT* pCallback);
typedef void (VKAPI_PTR *PFN_vkDestroyDebugReportCallbackEXT)(VkInstance instance, VkDebugReportCallbackEXT callback, const VkAllocationCallbacks* pAllocator);
typedef void (VKAPI_PTR *PFN_vkDebugReportMessageEXT)(VkInstance instance, VkDebugReportFlagsEXT flags, VkDebugReportObjectTypeEXT objectType, uint64_t object, size_t location, int32_t messageCode, const char* pLayerPrefix, const char* pMessage);



#define VK_NV_glsl_shader 1
#define VK_NV_GLSL_SHADER_SPEC_VERSION    1
#define VK_NV_GLSL_SHADER_EXTENSION_NAME  "VK_NV_glsl_shader"


#define VK_EXT_depth_range_unrestricted 1
#define VK_EXT_DEPTH_RANGE_UNRESTRICTED_SPEC_VERSION 1
#define VK_EXT_DEPTH_RANGE_UNRESTRICTED_EXTENSION_NAME "VK_EXT_depth_range_unrestricted"


#define VK_IMG_filter_cubic 1
#define VK_IMG_FILTER_CUBIC_SPEC_VERSION  1
#define VK_IMG_FILTER_CUBIC_EXTENSION_NAME "VK_IMG_filter_cubic"


#define VK_AMD_rasterization_order 1
#define VK_AMD_RASTERIZATION_ORDER_SPEC_VERSION 1
#define VK_AMD_RASTERIZATION_ORDER_EXTENSION_NAME "VK_AMD_rasterization_order"

typedef enum VkRasterizationOrderAMD {
    VK_RASTERIZATION_ORDER_STRICT_AMD = 0,
    VK_RASTERIZATION_ORDER_RELAXED_AMD = 1,
    VK_RASTERIZATION_ORDER_BEGIN_RANGE_AMD = VK_RASTERIZATION_ORDER_STRICT_AMD,
    VK_RASTERIZATION_ORDER_END_RANGE_AMD = VK_RASTERIZATION_ORDER_RELAXED_AMD,
    VK_RASTERIZATION_ORDER_RANGE_SIZE_AMD = (VK_RASTERIZATION_ORDER_RELAXED_AMD - VK_RASTERIZATION_ORDER_STRICT_AMD + 1),
    VK_RASTERIZATION_ORDER_MAX_ENUM_AMD = 0x7FFFFFFF
} VkRasterizationOrderAMD;
typedef struct VkPipelineRasterizationStateRasterizationOrderAMD {
    VkStructureType            sType;
    const void*                pNext;
    VkRasterizationOrderAMD    rasterizationOrder;
} VkPipelineRasterizationStateRasterizationOrderAMD;



#define VK_AMD_shader_trinary_minmax 1
#define VK_AMD_SHADER_TRINARY_MINMAX_SPEC_VERSION 1
#define VK_AMD_SHADER_TRINARY_MINMAX_EXTENSION_NAME "VK_AMD_shader_trinary_minmax"


#define VK_AMD_shader_explicit_vertex_parameter 1
#define VK_AMD_SHADER_EXPLICIT_VERTEX_PARAMETER_SPEC_VERSION 1
#define VK_AMD_SHADER_EXPLICIT_VERTEX_PARAMETER_EXTENSION_NAME "VK_AMD_shader_explicit_vertex_parameter"


#define VK_EXT_debug_marker 1
#define VK_EXT_DEBUG_MARKER_SPEC_VERSION  4
#define VK_EXT_DEBUG_MARKER_EXTENSION_NAME "VK_EXT_debug_marker"
typedef struct VkDebugMarkerObjectNameInfoEXT {
    VkStructureType               sType;
    const void*                   pNext;
    VkDebugReportObjectTypeEXT    objectType;
    uint64_t                      object;
    const char*                   pObjectName;
} VkDebugMarkerObjectNameInfoEXT;

typedef struct VkDebugMarkerObjectTagInfoEXT {
    VkStructureType               sType;
    const void*                   pNext;
    VkDebugReportObjectTypeEXT    objectType;
    uint64_t                      object;
    uint64_t                      tagName;
    size_t                        tagSize;
    const void*                   pTag;
} VkDebugMarkerObjectTagInfoEXT;

typedef struct VkDebugMarkerMarkerInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    const char*        pMarkerName;
    float              color[4];
} VkDebugMarkerMarkerInfoEXT;

typedef VkResult (VKAPI_PTR *PFN_vkDebugMarkerSetObjectTagEXT)(VkDevice device, const VkDebugMarkerObjectTagInfoEXT* pTagInfo);
typedef VkResult (VKAPI_PTR *PFN_vkDebugMarkerSetObjectNameEXT)(VkDevice device, const VkDebugMarkerObjectNameInfoEXT* pNameInfo);
typedef void (VKAPI_PTR *PFN_vkCmdDebugMarkerBeginEXT)(VkCommandBuffer commandBuffer, const VkDebugMarkerMarkerInfoEXT* pMarkerInfo);
typedef void (VKAPI_PTR *PFN_vkCmdDebugMarkerEndEXT)(VkCommandBuffer commandBuffer);
typedef void (VKAPI_PTR *PFN_vkCmdDebugMarkerInsertEXT)(VkCommandBuffer commandBuffer, const VkDebugMarkerMarkerInfoEXT* pMarkerInfo);



#define VK_AMD_gcn_shader 1
#define VK_AMD_GCN_SHADER_SPEC_VERSION    1
#define VK_AMD_GCN_SHADER_EXTENSION_NAME  "VK_AMD_gcn_shader"


#define VK_NV_dedicated_allocation 1
#define VK_NV_DEDICATED_ALLOCATION_SPEC_VERSION 1
#define VK_NV_DEDICATED_ALLOCATION_EXTENSION_NAME "VK_NV_dedicated_allocation"
typedef struct VkDedicatedAllocationImageCreateInfoNV {
    VkStructureType    sType;
    const void*        pNext;
    VkBool32           dedicatedAllocation;
} VkDedicatedAllocationImageCreateInfoNV;

typedef struct VkDedicatedAllocationBufferCreateInfoNV {
    VkStructureType    sType;
    const void*        pNext;
    VkBool32           dedicatedAllocation;
} VkDedicatedAllocationBufferCreateInfoNV;

typedef struct VkDedicatedAllocationMemoryAllocateInfoNV {
    VkStructureType    sType;
    const void*        pNext;
    VkImage            image;
    VkBuffer           buffer;
} VkDedicatedAllocationMemoryAllocateInfoNV;



#define VK_EXT_transform_feedback 1
#define VK_EXT_TRANSFORM_FEEDBACK_SPEC_VERSION 1
#define VK_EXT_TRANSFORM_FEEDBACK_EXTENSION_NAME "VK_EXT_transform_feedback"
typedef VkFlags VkPipelineRasterizationStateStreamCreateFlagsEXT;
typedef struct VkPhysicalDeviceTransformFeedbackFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           transformFeedback;
    VkBool32           geometryStreams;
} VkPhysicalDeviceTransformFeedbackFeaturesEXT;

typedef struct VkPhysicalDeviceTransformFeedbackPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           maxTransformFeedbackStreams;
    uint32_t           maxTransformFeedbackBuffers;
    VkDeviceSize       maxTransformFeedbackBufferSize;
    uint32_t           maxTransformFeedbackStreamDataSize;
    uint32_t           maxTransformFeedbackBufferDataSize;
    uint32_t           maxTransformFeedbackBufferDataStride;
    VkBool32           transformFeedbackQueries;
    VkBool32           transformFeedbackStreamsLinesTriangles;
    VkBool32           transformFeedbackRasterizationStreamSelect;
    VkBool32           transformFeedbackDraw;
} VkPhysicalDeviceTransformFeedbackPropertiesEXT;

typedef struct VkPipelineRasterizationStateStreamCreateInfoEXT {
    VkStructureType                                     sType;
    const void*                                         pNext;
    VkPipelineRasterizationStateStreamCreateFlagsEXT    flags;
    uint32_t                                            rasterizationStream;
} VkPipelineRasterizationStateStreamCreateInfoEXT;

typedef void (VKAPI_PTR *PFN_vkCmdBindTransformFeedbackBuffersEXT)(VkCommandBuffer commandBuffer, uint32_t firstBinding, uint32_t bindingCount, const VkBuffer* pBuffers, const VkDeviceSize* pOffsets, const VkDeviceSize* pSizes);
typedef void (VKAPI_PTR *PFN_vkCmdBeginTransformFeedbackEXT)(VkCommandBuffer commandBuffer, uint32_t firstCounterBuffer, uint32_t counterBufferCount, const VkBuffer* pCounterBuffers, const VkDeviceSize* pCounterBufferOffsets);
typedef void (VKAPI_PTR *PFN_vkCmdEndTransformFeedbackEXT)(VkCommandBuffer commandBuffer, uint32_t firstCounterBuffer, uint32_t counterBufferCount, const VkBuffer* pCounterBuffers, const VkDeviceSize* pCounterBufferOffsets);
typedef void (VKAPI_PTR *PFN_vkCmdBeginQueryIndexedEXT)(VkCommandBuffer commandBuffer, VkQueryPool queryPool, uint32_t query, VkQueryControlFlags flags, uint32_t index);
typedef void (VKAPI_PTR *PFN_vkCmdEndQueryIndexedEXT)(VkCommandBuffer commandBuffer, VkQueryPool queryPool, uint32_t query, uint32_t index);
typedef void (VKAPI_PTR *PFN_vkCmdDrawIndirectByteCountEXT)(VkCommandBuffer commandBuffer, uint32_t instanceCount, uint32_t firstInstance, VkBuffer counterBuffer, VkDeviceSize counterBufferOffset, uint32_t counterOffset, uint32_t vertexStride);



#define VK_NVX_image_view_handle 1
#define VK_NVX_IMAGE_VIEW_HANDLE_SPEC_VERSION 1
#define VK_NVX_IMAGE_VIEW_HANDLE_EXTENSION_NAME "VK_NVX_image_view_handle"
typedef struct VkImageViewHandleInfoNVX {
    VkStructureType     sType;
    const void*         pNext;
    VkImageView         imageView;
    VkDescriptorType    descriptorType;
    VkSampler           sampler;
} VkImageViewHandleInfoNVX;

typedef uint32_t (VKAPI_PTR *PFN_vkGetImageViewHandleNVX)(VkDevice device, const VkImageViewHandleInfoNVX* pInfo);




#define VK_AMD_draw_indirect_count 1
#define VK_AMD_DRAW_INDIRECT_COUNT_SPEC_VERSION 2
#define VK_AMD_DRAW_INDIRECT_COUNT_EXTENSION_NAME "VK_AMD_draw_indirect_count"
typedef void (VKAPI_PTR *PFN_vkCmdDrawIndirectCountAMD)(VkCommandBuffer commandBuffer, VkBuffer buffer, VkDeviceSize offset, VkBuffer countBuffer, VkDeviceSize countBufferOffset, uint32_t maxDrawCount, uint32_t stride);
typedef void (VKAPI_PTR *PFN_vkCmdDrawIndexedIndirectCountAMD)(VkCommandBuffer commandBuffer, VkBuffer buffer, VkDeviceSize offset, VkBuffer countBuffer, VkDeviceSize countBufferOffset, uint32_t maxDrawCount, uint32_t stride);



#define VK_AMD_negative_viewport_height 1
#define VK_AMD_NEGATIVE_VIEWPORT_HEIGHT_SPEC_VERSION 1
#define VK_AMD_NEGATIVE_VIEWPORT_HEIGHT_EXTENSION_NAME "VK_AMD_negative_viewport_height"


#define VK_AMD_gpu_shader_half_float 1
#define VK_AMD_GPU_SHADER_HALF_FLOAT_SPEC_VERSION 2
#define VK_AMD_GPU_SHADER_HALF_FLOAT_EXTENSION_NAME "VK_AMD_gpu_shader_half_float"


#define VK_AMD_shader_ballot 1
#define VK_AMD_SHADER_BALLOT_SPEC_VERSION 1
#define VK_AMD_SHADER_BALLOT_EXTENSION_NAME "VK_AMD_shader_ballot"


#define VK_AMD_texture_gather_bias_lod 1
#define VK_AMD_TEXTURE_GATHER_BIAS_LOD_SPEC_VERSION 1
#define VK_AMD_TEXTURE_GATHER_BIAS_LOD_EXTENSION_NAME "VK_AMD_texture_gather_bias_lod"
typedef struct VkTextureLODGatherFormatPropertiesAMD {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           supportsTextureGatherLODBiasAMD;
} VkTextureLODGatherFormatPropertiesAMD;



#define VK_AMD_shader_info 1
#define VK_AMD_SHADER_INFO_SPEC_VERSION   1
#define VK_AMD_SHADER_INFO_EXTENSION_NAME "VK_AMD_shader_info"

typedef enum VkShaderInfoTypeAMD {
    VK_SHADER_INFO_TYPE_STATISTICS_AMD = 0,
    VK_SHADER_INFO_TYPE_BINARY_AMD = 1,
    VK_SHADER_INFO_TYPE_DISASSEMBLY_AMD = 2,
    VK_SHADER_INFO_TYPE_BEGIN_RANGE_AMD = VK_SHADER_INFO_TYPE_STATISTICS_AMD,
    VK_SHADER_INFO_TYPE_END_RANGE_AMD = VK_SHADER_INFO_TYPE_DISASSEMBLY_AMD,
    VK_SHADER_INFO_TYPE_RANGE_SIZE_AMD = (VK_SHADER_INFO_TYPE_DISASSEMBLY_AMD - VK_SHADER_INFO_TYPE_STATISTICS_AMD + 1),
    VK_SHADER_INFO_TYPE_MAX_ENUM_AMD = 0x7FFFFFFF
} VkShaderInfoTypeAMD;
typedef struct VkShaderResourceUsageAMD {
    uint32_t    numUsedVgprs;
    uint32_t    numUsedSgprs;
    uint32_t    ldsSizePerLocalWorkGroup;
    size_t      ldsUsageSizeInBytes;
    size_t      scratchMemUsageInBytes;
} VkShaderResourceUsageAMD;

typedef struct VkShaderStatisticsInfoAMD {
    VkShaderStageFlags          shaderStageMask;
    VkShaderResourceUsageAMD    resourceUsage;
    uint32_t                    numPhysicalVgprs;
    uint32_t                    numPhysicalSgprs;
    uint32_t                    numAvailableVgprs;
    uint32_t                    numAvailableSgprs;
    uint32_t                    computeWorkGroupSize[3];
} VkShaderStatisticsInfoAMD;

typedef VkResult (VKAPI_PTR *PFN_vkGetShaderInfoAMD)(VkDevice device, VkPipeline pipeline, VkShaderStageFlagBits shaderStage, VkShaderInfoTypeAMD infoType, size_t* pInfoSize, void* pInfo);




#define VK_AMD_shader_image_load_store_lod 1
#define VK_AMD_SHADER_IMAGE_LOAD_STORE_LOD_SPEC_VERSION 1
#define VK_AMD_SHADER_IMAGE_LOAD_STORE_LOD_EXTENSION_NAME "VK_AMD_shader_image_load_store_lod"


#define VK_NV_corner_sampled_image 1
#define VK_NV_CORNER_SAMPLED_IMAGE_SPEC_VERSION 2
#define VK_NV_CORNER_SAMPLED_IMAGE_EXTENSION_NAME "VK_NV_corner_sampled_image"
typedef struct VkPhysicalDeviceCornerSampledImageFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           cornerSampledImage;
} VkPhysicalDeviceCornerSampledImageFeaturesNV;



#define VK_IMG_format_pvrtc 1
#define VK_IMG_FORMAT_PVRTC_SPEC_VERSION  1
#define VK_IMG_FORMAT_PVRTC_EXTENSION_NAME "VK_IMG_format_pvrtc"


#define VK_NV_external_memory_capabilities 1
#define VK_NV_EXTERNAL_MEMORY_CAPABILITIES_SPEC_VERSION 1
#define VK_NV_EXTERNAL_MEMORY_CAPABILITIES_EXTENSION_NAME "VK_NV_external_memory_capabilities"

typedef enum VkExternalMemoryHandleTypeFlagBitsNV {
    VK_EXTERNAL_MEMORY_HANDLE_TYPE_OPAQUE_WIN32_BIT_NV = 0x00000001,
    VK_EXTERNAL_MEMORY_HANDLE_TYPE_OPAQUE_WIN32_KMT_BIT_NV = 0x00000002,
    VK_EXTERNAL_MEMORY_HANDLE_TYPE_D3D11_IMAGE_BIT_NV = 0x00000004,
    VK_EXTERNAL_MEMORY_HANDLE_TYPE_D3D11_IMAGE_KMT_BIT_NV = 0x00000008,
    VK_EXTERNAL_MEMORY_HANDLE_TYPE_FLAG_BITS_MAX_ENUM_NV = 0x7FFFFFFF
} VkExternalMemoryHandleTypeFlagBitsNV;
typedef VkFlags VkExternalMemoryHandleTypeFlagsNV;

typedef enum VkExternalMemoryFeatureFlagBitsNV {
    VK_EXTERNAL_MEMORY_FEATURE_DEDICATED_ONLY_BIT_NV = 0x00000001,
    VK_EXTERNAL_MEMORY_FEATURE_EXPORTABLE_BIT_NV = 0x00000002,
    VK_EXTERNAL_MEMORY_FEATURE_IMPORTABLE_BIT_NV = 0x00000004,
    VK_EXTERNAL_MEMORY_FEATURE_FLAG_BITS_MAX_ENUM_NV = 0x7FFFFFFF
} VkExternalMemoryFeatureFlagBitsNV;
typedef VkFlags VkExternalMemoryFeatureFlagsNV;
typedef struct VkExternalImageFormatPropertiesNV {
    VkImageFormatProperties              imageFormatProperties;
    VkExternalMemoryFeatureFlagsNV       externalMemoryFeatures;
    VkExternalMemoryHandleTypeFlagsNV    exportFromImportedHandleTypes;
    VkExternalMemoryHandleTypeFlagsNV    compatibleHandleTypes;
} VkExternalImageFormatPropertiesNV;

typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceExternalImageFormatPropertiesNV)(VkPhysicalDevice physicalDevice, VkFormat format, VkImageType type, VkImageTiling tiling, VkImageUsageFlags usage, VkImageCreateFlags flags, VkExternalMemoryHandleTypeFlagsNV externalHandleType, VkExternalImageFormatPropertiesNV* pExternalImageFormatProperties);




#define VK_NV_external_memory 1
#define VK_NV_EXTERNAL_MEMORY_SPEC_VERSION 1
#define VK_NV_EXTERNAL_MEMORY_EXTENSION_NAME "VK_NV_external_memory"
typedef struct VkExternalMemoryImageCreateInfoNV {
    VkStructureType                      sType;
    const void*                          pNext;
    VkExternalMemoryHandleTypeFlagsNV    handleTypes;
} VkExternalMemoryImageCreateInfoNV;

typedef struct VkExportMemoryAllocateInfoNV {
    VkStructureType                      sType;
    const void*                          pNext;
    VkExternalMemoryHandleTypeFlagsNV    handleTypes;
} VkExportMemoryAllocateInfoNV;



#define VK_EXT_validation_flags 1
#define VK_EXT_VALIDATION_FLAGS_SPEC_VERSION 2
#define VK_EXT_VALIDATION_FLAGS_EXTENSION_NAME "VK_EXT_validation_flags"

typedef enum VkValidationCheckEXT {
    VK_VALIDATION_CHECK_ALL_EXT = 0,
    VK_VALIDATION_CHECK_SHADERS_EXT = 1,
    VK_VALIDATION_CHECK_BEGIN_RANGE_EXT = VK_VALIDATION_CHECK_ALL_EXT,
    VK_VALIDATION_CHECK_END_RANGE_EXT = VK_VALIDATION_CHECK_SHADERS_EXT,
    VK_VALIDATION_CHECK_RANGE_SIZE_EXT = (VK_VALIDATION_CHECK_SHADERS_EXT - VK_VALIDATION_CHECK_ALL_EXT + 1),
    VK_VALIDATION_CHECK_MAX_ENUM_EXT = 0x7FFFFFFF
} VkValidationCheckEXT;
typedef struct VkValidationFlagsEXT {
    VkStructureType                sType;
    const void*                    pNext;
    uint32_t                       disabledValidationCheckCount;
    const VkValidationCheckEXT*    pDisabledValidationChecks;
} VkValidationFlagsEXT;



#define VK_EXT_shader_subgroup_ballot 1
#define VK_EXT_SHADER_SUBGROUP_BALLOT_SPEC_VERSION 1
#define VK_EXT_SHADER_SUBGROUP_BALLOT_EXTENSION_NAME "VK_EXT_shader_subgroup_ballot"


#define VK_EXT_shader_subgroup_vote 1
#define VK_EXT_SHADER_SUBGROUP_VOTE_SPEC_VERSION 1
#define VK_EXT_SHADER_SUBGROUP_VOTE_EXTENSION_NAME "VK_EXT_shader_subgroup_vote"


#define VK_EXT_texture_compression_astc_hdr 1
#define VK_EXT_TEXTURE_COMPRESSION_ASTC_HDR_SPEC_VERSION 1
#define VK_EXT_TEXTURE_COMPRESSION_ASTC_HDR_EXTENSION_NAME "VK_EXT_texture_compression_astc_hdr"
typedef struct VkPhysicalDeviceTextureCompressionASTCHDRFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           textureCompressionASTC_HDR;
} VkPhysicalDeviceTextureCompressionASTCHDRFeaturesEXT;



#define VK_EXT_astc_decode_mode 1
#define VK_EXT_ASTC_DECODE_MODE_SPEC_VERSION 1
#define VK_EXT_ASTC_DECODE_MODE_EXTENSION_NAME "VK_EXT_astc_decode_mode"
typedef struct VkImageViewASTCDecodeModeEXT {
    VkStructureType    sType;
    const void*        pNext;
    VkFormat           decodeMode;
} VkImageViewASTCDecodeModeEXT;

typedef struct VkPhysicalDeviceASTCDecodeFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           decodeModeSharedExponent;
} VkPhysicalDeviceASTCDecodeFeaturesEXT;



#define VK_EXT_conditional_rendering 1
#define VK_EXT_CONDITIONAL_RENDERING_SPEC_VERSION 2
#define VK_EXT_CONDITIONAL_RENDERING_EXTENSION_NAME "VK_EXT_conditional_rendering"

typedef enum VkConditionalRenderingFlagBitsEXT {
    VK_CONDITIONAL_RENDERING_INVERTED_BIT_EXT = 0x00000001,
    VK_CONDITIONAL_RENDERING_FLAG_BITS_MAX_ENUM_EXT = 0x7FFFFFFF
} VkConditionalRenderingFlagBitsEXT;
typedef VkFlags VkConditionalRenderingFlagsEXT;
typedef struct VkConditionalRenderingBeginInfoEXT {
    VkStructureType                   sType;
    const void*                       pNext;
    VkBuffer                          buffer;
    VkDeviceSize                      offset;
    VkConditionalRenderingFlagsEXT    flags;
} VkConditionalRenderingBeginInfoEXT;

typedef struct VkPhysicalDeviceConditionalRenderingFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           conditionalRendering;
    VkBool32           inheritedConditionalRendering;
} VkPhysicalDeviceConditionalRenderingFeaturesEXT;

typedef struct VkCommandBufferInheritanceConditionalRenderingInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    VkBool32           conditionalRenderingEnable;
} VkCommandBufferInheritanceConditionalRenderingInfoEXT;

typedef void (VKAPI_PTR *PFN_vkCmdBeginConditionalRenderingEXT)(VkCommandBuffer commandBuffer, const VkConditionalRenderingBeginInfoEXT* pConditionalRenderingBegin);
typedef void (VKAPI_PTR *PFN_vkCmdEndConditionalRenderingEXT)(VkCommandBuffer commandBuffer);



#define VK_NV_clip_space_w_scaling 1
#define VK_NV_CLIP_SPACE_W_SCALING_SPEC_VERSION 1
#define VK_NV_CLIP_SPACE_W_SCALING_EXTENSION_NAME "VK_NV_clip_space_w_scaling"
typedef struct VkViewportWScalingNV {
    float    xcoeff;
    float    ycoeff;
} VkViewportWScalingNV;

typedef struct VkPipelineViewportWScalingStateCreateInfoNV {
    VkStructureType                sType;
    const void*                    pNext;
    VkBool32                       viewportWScalingEnable;
    uint32_t                       viewportCount;
    const VkViewportWScalingNV*    pViewportWScalings;
} VkPipelineViewportWScalingStateCreateInfoNV;

typedef void (VKAPI_PTR *PFN_vkCmdSetViewportWScalingNV)(VkCommandBuffer commandBuffer, uint32_t firstViewport, uint32_t viewportCount, const VkViewportWScalingNV* pViewportWScalings);




#define VK_EXT_direct_mode_display 1
#define VK_EXT_DIRECT_MODE_DISPLAY_SPEC_VERSION 1
#define VK_EXT_DIRECT_MODE_DISPLAY_EXTENSION_NAME "VK_EXT_direct_mode_display"
typedef VkResult (VKAPI_PTR *PFN_vkReleaseDisplayEXT)(VkPhysicalDevice physicalDevice, VkDisplayKHR display);




#define VK_EXT_display_surface_counter 1
#define VK_EXT_DISPLAY_SURFACE_COUNTER_SPEC_VERSION 1
#define VK_EXT_DISPLAY_SURFACE_COUNTER_EXTENSION_NAME "VK_EXT_display_surface_counter"

typedef enum VkSurfaceCounterFlagBitsEXT {
    VK_SURFACE_COUNTER_VBLANK_EXT = 0x00000001,
    VK_SURFACE_COUNTER_FLAG_BITS_MAX_ENUM_EXT = 0x7FFFFFFF
} VkSurfaceCounterFlagBitsEXT;
typedef VkFlags VkSurfaceCounterFlagsEXT;
typedef struct VkSurfaceCapabilities2EXT {
    VkStructureType                  sType;
    void*                            pNext;
    uint32_t                         minImageCount;
    uint32_t                         maxImageCount;
    VkExtent2D                       currentExtent;
    VkExtent2D                       minImageExtent;
    VkExtent2D                       maxImageExtent;
    uint32_t                         maxImageArrayLayers;
    VkSurfaceTransformFlagsKHR       supportedTransforms;
    VkSurfaceTransformFlagBitsKHR    currentTransform;
    VkCompositeAlphaFlagsKHR         supportedCompositeAlpha;
    VkImageUsageFlags                supportedUsageFlags;
    VkSurfaceCounterFlagsEXT         supportedSurfaceCounters;
} VkSurfaceCapabilities2EXT;

typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceSurfaceCapabilities2EXT)(VkPhysicalDevice physicalDevice, VkSurfaceKHR surface, VkSurfaceCapabilities2EXT* pSurfaceCapabilities);




#define VK_EXT_display_control 1
#define VK_EXT_DISPLAY_CONTROL_SPEC_VERSION 1
#define VK_EXT_DISPLAY_CONTROL_EXTENSION_NAME "VK_EXT_display_control"

typedef enum VkDisplayPowerStateEXT {
    VK_DISPLAY_POWER_STATE_OFF_EXT = 0,
    VK_DISPLAY_POWER_STATE_SUSPEND_EXT = 1,
    VK_DISPLAY_POWER_STATE_ON_EXT = 2,
    VK_DISPLAY_POWER_STATE_BEGIN_RANGE_EXT = VK_DISPLAY_POWER_STATE_OFF_EXT,
    VK_DISPLAY_POWER_STATE_END_RANGE_EXT = VK_DISPLAY_POWER_STATE_ON_EXT,
    VK_DISPLAY_POWER_STATE_RANGE_SIZE_EXT = (VK_DISPLAY_POWER_STATE_ON_EXT - VK_DISPLAY_POWER_STATE_OFF_EXT + 1),
    VK_DISPLAY_POWER_STATE_MAX_ENUM_EXT = 0x7FFFFFFF
} VkDisplayPowerStateEXT;

typedef enum VkDeviceEventTypeEXT {
    VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT = 0,
    VK_DEVICE_EVENT_TYPE_BEGIN_RANGE_EXT = VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT,
    VK_DEVICE_EVENT_TYPE_END_RANGE_EXT = VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT,
    VK_DEVICE_EVENT_TYPE_RANGE_SIZE_EXT = (VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT - VK_DEVICE_EVENT_TYPE_DISPLAY_HOTPLUG_EXT + 1),
    VK_DEVICE_EVENT_TYPE_MAX_ENUM_EXT = 0x7FFFFFFF
} VkDeviceEventTypeEXT;

typedef enum VkDisplayEventTypeEXT {
    VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT = 0,
    VK_DISPLAY_EVENT_TYPE_BEGIN_RANGE_EXT = VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT,
    VK_DISPLAY_EVENT_TYPE_END_RANGE_EXT = VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT,
    VK_DISPLAY_EVENT_TYPE_RANGE_SIZE_EXT = (VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT - VK_DISPLAY_EVENT_TYPE_FIRST_PIXEL_OUT_EXT + 1),
    VK_DISPLAY_EVENT_TYPE_MAX_ENUM_EXT = 0x7FFFFFFF
} VkDisplayEventTypeEXT;
typedef struct VkDisplayPowerInfoEXT {
    VkStructureType           sType;
    const void*               pNext;
    VkDisplayPowerStateEXT    powerState;
} VkDisplayPowerInfoEXT;

typedef struct VkDeviceEventInfoEXT {
    VkStructureType         sType;
    const void*             pNext;
    VkDeviceEventTypeEXT    deviceEvent;
} VkDeviceEventInfoEXT;

typedef struct VkDisplayEventInfoEXT {
    VkStructureType          sType;
    const void*              pNext;
    VkDisplayEventTypeEXT    displayEvent;
} VkDisplayEventInfoEXT;

typedef struct VkSwapchainCounterCreateInfoEXT {
    VkStructureType             sType;
    const void*                 pNext;
    VkSurfaceCounterFlagsEXT    surfaceCounters;
} VkSwapchainCounterCreateInfoEXT;

typedef VkResult (VKAPI_PTR *PFN_vkDisplayPowerControlEXT)(VkDevice device, VkDisplayKHR display, const VkDisplayPowerInfoEXT* pDisplayPowerInfo);
typedef VkResult (VKAPI_PTR *PFN_vkRegisterDeviceEventEXT)(VkDevice device, const VkDeviceEventInfoEXT* pDeviceEventInfo, const VkAllocationCallbacks* pAllocator, VkFence* pFence);
typedef VkResult (VKAPI_PTR *PFN_vkRegisterDisplayEventEXT)(VkDevice device, VkDisplayKHR display, const VkDisplayEventInfoEXT* pDisplayEventInfo, const VkAllocationCallbacks* pAllocator, VkFence* pFence);
typedef VkResult (VKAPI_PTR *PFN_vkGetSwapchainCounterEXT)(VkDevice device, VkSwapchainKHR swapchain, VkSurfaceCounterFlagBitsEXT counter, uint64_t* pCounterValue);



#define VK_GOOGLE_display_timing 1
#define VK_GOOGLE_DISPLAY_TIMING_SPEC_VERSION 1
#define VK_GOOGLE_DISPLAY_TIMING_EXTENSION_NAME "VK_GOOGLE_display_timing"
typedef struct VkRefreshCycleDurationGOOGLE {
    uint64_t    refreshDuration;
} VkRefreshCycleDurationGOOGLE;

typedef struct VkPastPresentationTimingGOOGLE {
    uint32_t    presentID;
    uint64_t    desiredPresentTime;
    uint64_t    actualPresentTime;
    uint64_t    earliestPresentTime;
    uint64_t    presentMargin;
} VkPastPresentationTimingGOOGLE;

typedef struct VkPresentTimeGOOGLE {
    uint32_t    presentID;
    uint64_t    desiredPresentTime;
} VkPresentTimeGOOGLE;

typedef struct VkPresentTimesInfoGOOGLE {
    VkStructureType               sType;
    const void*                   pNext;
    uint32_t                      swapchainCount;
    const VkPresentTimeGOOGLE*    pTimes;
} VkPresentTimesInfoGOOGLE;

typedef VkResult (VKAPI_PTR *PFN_vkGetRefreshCycleDurationGOOGLE)(VkDevice device, VkSwapchainKHR swapchain, VkRefreshCycleDurationGOOGLE* pDisplayTimingProperties);
typedef VkResult (VKAPI_PTR *PFN_vkGetPastPresentationTimingGOOGLE)(VkDevice device, VkSwapchainKHR swapchain, uint32_t* pPresentationTimingCount, VkPastPresentationTimingGOOGLE* pPresentationTimings);



#define VK_NV_sample_mask_override_coverage 1
#define VK_NV_SAMPLE_MASK_OVERRIDE_COVERAGE_SPEC_VERSION 1
#define VK_NV_SAMPLE_MASK_OVERRIDE_COVERAGE_EXTENSION_NAME "VK_NV_sample_mask_override_coverage"


#define VK_NV_geometry_shader_passthrough 1
#define VK_NV_GEOMETRY_SHADER_PASSTHROUGH_SPEC_VERSION 1
#define VK_NV_GEOMETRY_SHADER_PASSTHROUGH_EXTENSION_NAME "VK_NV_geometry_shader_passthrough"


#define VK_NV_viewport_array2 1
#define VK_NV_VIEWPORT_ARRAY2_SPEC_VERSION 1
#define VK_NV_VIEWPORT_ARRAY2_EXTENSION_NAME "VK_NV_viewport_array2"


#define VK_NVX_multiview_per_view_attributes 1
#define VK_NVX_MULTIVIEW_PER_VIEW_ATTRIBUTES_SPEC_VERSION 1
#define VK_NVX_MULTIVIEW_PER_VIEW_ATTRIBUTES_EXTENSION_NAME "VK_NVX_multiview_per_view_attributes"
typedef struct VkPhysicalDeviceMultiviewPerViewAttributesPropertiesNVX {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           perViewPositionAllComponents;
} VkPhysicalDeviceMultiviewPerViewAttributesPropertiesNVX;



#define VK_NV_viewport_swizzle 1
#define VK_NV_VIEWPORT_SWIZZLE_SPEC_VERSION 1
#define VK_NV_VIEWPORT_SWIZZLE_EXTENSION_NAME "VK_NV_viewport_swizzle"

typedef enum VkViewportCoordinateSwizzleNV {
    VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_X_NV = 0,
    VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_X_NV = 1,
    VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_Y_NV = 2,
    VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_Y_NV = 3,
    VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_Z_NV = 4,
    VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_Z_NV = 5,
    VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_W_NV = 6,
    VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_W_NV = 7,
    VK_VIEWPORT_COORDINATE_SWIZZLE_BEGIN_RANGE_NV = VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_X_NV,
    VK_VIEWPORT_COORDINATE_SWIZZLE_END_RANGE_NV = VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_W_NV,
    VK_VIEWPORT_COORDINATE_SWIZZLE_RANGE_SIZE_NV = (VK_VIEWPORT_COORDINATE_SWIZZLE_NEGATIVE_W_NV - VK_VIEWPORT_COORDINATE_SWIZZLE_POSITIVE_X_NV + 1),
    VK_VIEWPORT_COORDINATE_SWIZZLE_MAX_ENUM_NV = 0x7FFFFFFF
} VkViewportCoordinateSwizzleNV;
typedef VkFlags VkPipelineViewportSwizzleStateCreateFlagsNV;
typedef struct VkViewportSwizzleNV {
    VkViewportCoordinateSwizzleNV    x;
    VkViewportCoordinateSwizzleNV    y;
    VkViewportCoordinateSwizzleNV    z;
    VkViewportCoordinateSwizzleNV    w;
} VkViewportSwizzleNV;

typedef struct VkPipelineViewportSwizzleStateCreateInfoNV {
    VkStructureType                                sType;
    const void*                                    pNext;
    VkPipelineViewportSwizzleStateCreateFlagsNV    flags;
    uint32_t                                       viewportCount;
    const VkViewportSwizzleNV*                     pViewportSwizzles;
} VkPipelineViewportSwizzleStateCreateInfoNV;



#define VK_EXT_discard_rectangles 1
#define VK_EXT_DISCARD_RECTANGLES_SPEC_VERSION 1
#define VK_EXT_DISCARD_RECTANGLES_EXTENSION_NAME "VK_EXT_discard_rectangles"

typedef enum VkDiscardRectangleModeEXT {
    VK_DISCARD_RECTANGLE_MODE_INCLUSIVE_EXT = 0,
    VK_DISCARD_RECTANGLE_MODE_EXCLUSIVE_EXT = 1,
    VK_DISCARD_RECTANGLE_MODE_BEGIN_RANGE_EXT = VK_DISCARD_RECTANGLE_MODE_INCLUSIVE_EXT,
    VK_DISCARD_RECTANGLE_MODE_END_RANGE_EXT = VK_DISCARD_RECTANGLE_MODE_EXCLUSIVE_EXT,
    VK_DISCARD_RECTANGLE_MODE_RANGE_SIZE_EXT = (VK_DISCARD_RECTANGLE_MODE_EXCLUSIVE_EXT - VK_DISCARD_RECTANGLE_MODE_INCLUSIVE_EXT + 1),
    VK_DISCARD_RECTANGLE_MODE_MAX_ENUM_EXT = 0x7FFFFFFF
} VkDiscardRectangleModeEXT;
typedef VkFlags VkPipelineDiscardRectangleStateCreateFlagsEXT;
typedef struct VkPhysicalDeviceDiscardRectanglePropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           maxDiscardRectangles;
} VkPhysicalDeviceDiscardRectanglePropertiesEXT;

typedef struct VkPipelineDiscardRectangleStateCreateInfoEXT {
    VkStructureType                                  sType;
    const void*                                      pNext;
    VkPipelineDiscardRectangleStateCreateFlagsEXT    flags;
    VkDiscardRectangleModeEXT                        discardRectangleMode;
    uint32_t                                         discardRectangleCount;
    const VkRect2D*                                  pDiscardRectangles;
} VkPipelineDiscardRectangleStateCreateInfoEXT;

typedef void (VKAPI_PTR *PFN_vkCmdSetDiscardRectangleEXT)(VkCommandBuffer commandBuffer, uint32_t firstDiscardRectangle, uint32_t discardRectangleCount, const VkRect2D* pDiscardRectangles);




#define VK_EXT_conservative_rasterization 1
#define VK_EXT_CONSERVATIVE_RASTERIZATION_SPEC_VERSION 1
#define VK_EXT_CONSERVATIVE_RASTERIZATION_EXTENSION_NAME "VK_EXT_conservative_rasterization"

typedef enum VkConservativeRasterizationModeEXT {
    VK_CONSERVATIVE_RASTERIZATION_MODE_DISABLED_EXT = 0,
    VK_CONSERVATIVE_RASTERIZATION_MODE_OVERESTIMATE_EXT = 1,
    VK_CONSERVATIVE_RASTERIZATION_MODE_UNDERESTIMATE_EXT = 2,
    VK_CONSERVATIVE_RASTERIZATION_MODE_BEGIN_RANGE_EXT = VK_CONSERVATIVE_RASTERIZATION_MODE_DISABLED_EXT,
    VK_CONSERVATIVE_RASTERIZATION_MODE_END_RANGE_EXT = VK_CONSERVATIVE_RASTERIZATION_MODE_UNDERESTIMATE_EXT,
    VK_CONSERVATIVE_RASTERIZATION_MODE_RANGE_SIZE_EXT = (VK_CONSERVATIVE_RASTERIZATION_MODE_UNDERESTIMATE_EXT - VK_CONSERVATIVE_RASTERIZATION_MODE_DISABLED_EXT + 1),
    VK_CONSERVATIVE_RASTERIZATION_MODE_MAX_ENUM_EXT = 0x7FFFFFFF
} VkConservativeRasterizationModeEXT;
typedef VkFlags VkPipelineRasterizationConservativeStateCreateFlagsEXT;
typedef struct VkPhysicalDeviceConservativeRasterizationPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    float              primitiveOverestimationSize;
    float              maxExtraPrimitiveOverestimationSize;
    float              extraPrimitiveOverestimationSizeGranularity;
    VkBool32           primitiveUnderestimation;
    VkBool32           conservativePointAndLineRasterization;
    VkBool32           degenerateTrianglesRasterized;
    VkBool32           degenerateLinesRasterized;
    VkBool32           fullyCoveredFragmentShaderInputVariable;
    VkBool32           conservativeRasterizationPostDepthCoverage;
} VkPhysicalDeviceConservativeRasterizationPropertiesEXT;

typedef struct VkPipelineRasterizationConservativeStateCreateInfoEXT {
    VkStructureType                                           sType;
    const void*                                               pNext;
    VkPipelineRasterizationConservativeStateCreateFlagsEXT    flags;
    VkConservativeRasterizationModeEXT                        conservativeRasterizationMode;
    float                                                     extraPrimitiveOverestimationSize;
} VkPipelineRasterizationConservativeStateCreateInfoEXT;



#define VK_EXT_depth_clip_enable 1
#define VK_EXT_DEPTH_CLIP_ENABLE_SPEC_VERSION 1
#define VK_EXT_DEPTH_CLIP_ENABLE_EXTENSION_NAME "VK_EXT_depth_clip_enable"
typedef VkFlags VkPipelineRasterizationDepthClipStateCreateFlagsEXT;
typedef struct VkPhysicalDeviceDepthClipEnableFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           depthClipEnable;
} VkPhysicalDeviceDepthClipEnableFeaturesEXT;

typedef struct VkPipelineRasterizationDepthClipStateCreateInfoEXT {
    VkStructureType                                        sType;
    const void*                                            pNext;
    VkPipelineRasterizationDepthClipStateCreateFlagsEXT    flags;
    VkBool32                                               depthClipEnable;
} VkPipelineRasterizationDepthClipStateCreateInfoEXT;



#define VK_EXT_swapchain_colorspace 1
#define VK_EXT_SWAPCHAIN_COLOR_SPACE_SPEC_VERSION 4
#define VK_EXT_SWAPCHAIN_COLOR_SPACE_EXTENSION_NAME "VK_EXT_swapchain_colorspace"


#define VK_EXT_hdr_metadata 1
#define VK_EXT_HDR_METADATA_SPEC_VERSION  2
#define VK_EXT_HDR_METADATA_EXTENSION_NAME "VK_EXT_hdr_metadata"
typedef struct VkXYColorEXT {
    float    x;
    float    y;
} VkXYColorEXT;

typedef struct VkHdrMetadataEXT {
    VkStructureType    sType;
    const void*        pNext;
    VkXYColorEXT       displayPrimaryRed;
    VkXYColorEXT       displayPrimaryGreen;
    VkXYColorEXT       displayPrimaryBlue;
    VkXYColorEXT       whitePoint;
    float              maxLuminance;
    float              minLuminance;
    float              maxContentLightLevel;
    float              maxFrameAverageLightLevel;
} VkHdrMetadataEXT;

typedef void (VKAPI_PTR *PFN_vkSetHdrMetadataEXT)(VkDevice device, uint32_t swapchainCount, const VkSwapchainKHR* pSwapchains, const VkHdrMetadataEXT* pMetadata);




#define VK_EXT_external_memory_dma_buf 1
#define VK_EXT_EXTERNAL_MEMORY_DMA_BUF_SPEC_VERSION 1
#define VK_EXT_EXTERNAL_MEMORY_DMA_BUF_EXTENSION_NAME "VK_EXT_external_memory_dma_buf"


#define VK_EXT_queue_family_foreign 1
#define VK_EXT_QUEUE_FAMILY_FOREIGN_SPEC_VERSION 1
#define VK_EXT_QUEUE_FAMILY_FOREIGN_EXTENSION_NAME "VK_EXT_queue_family_foreign"
#define VK_QUEUE_FAMILY_FOREIGN_EXT       (~0U-2)


#define VK_EXT_debug_utils 1
typedef struct VkDebugUtilsMessengerEXT_T* VkDebugUtilsMessengerEXT;
#define VK_EXT_DEBUG_UTILS_SPEC_VERSION   1
#define VK_EXT_DEBUG_UTILS_EXTENSION_NAME "VK_EXT_debug_utils"
typedef VkFlags VkDebugUtilsMessengerCallbackDataFlagsEXT;
typedef VkFlags VkDebugUtilsMessengerCreateFlagsEXT;

typedef enum VkDebugUtilsMessageSeverityFlagBitsEXT {
    VK_DEBUG_UTILS_MESSAGE_SEVERITY_VERBOSE_BIT_EXT = 0x00000001,
    VK_DEBUG_UTILS_MESSAGE_SEVERITY_INFO_BIT_EXT = 0x00000010,
    VK_DEBUG_UTILS_MESSAGE_SEVERITY_WARNING_BIT_EXT = 0x00000100,
    VK_DEBUG_UTILS_MESSAGE_SEVERITY_ERROR_BIT_EXT = 0x00001000,
    VK_DEBUG_UTILS_MESSAGE_SEVERITY_FLAG_BITS_MAX_ENUM_EXT = 0x7FFFFFFF
} VkDebugUtilsMessageSeverityFlagBitsEXT;
typedef VkFlags VkDebugUtilsMessageSeverityFlagsEXT;

typedef enum VkDebugUtilsMessageTypeFlagBitsEXT {
    VK_DEBUG_UTILS_MESSAGE_TYPE_GENERAL_BIT_EXT = 0x00000001,
    VK_DEBUG_UTILS_MESSAGE_TYPE_VALIDATION_BIT_EXT = 0x00000002,
    VK_DEBUG_UTILS_MESSAGE_TYPE_PERFORMANCE_BIT_EXT = 0x00000004,
    VK_DEBUG_UTILS_MESSAGE_TYPE_FLAG_BITS_MAX_ENUM_EXT = 0x7FFFFFFF
} VkDebugUtilsMessageTypeFlagBitsEXT;
typedef VkFlags VkDebugUtilsMessageTypeFlagsEXT;
typedef struct VkDebugUtilsObjectNameInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    VkObjectType       objectType;
    uint64_t           objectHandle;
    const char*        pObjectName;
} VkDebugUtilsObjectNameInfoEXT;

typedef struct VkDebugUtilsObjectTagInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    VkObjectType       objectType;
    uint64_t           objectHandle;
    uint64_t           tagName;
    size_t             tagSize;
    const void*        pTag;
} VkDebugUtilsObjectTagInfoEXT;

typedef struct VkDebugUtilsLabelEXT {
    VkStructureType    sType;
    const void*        pNext;
    const char*        pLabelName;
    float              color[4];
} VkDebugUtilsLabelEXT;

typedef struct VkDebugUtilsMessengerCallbackDataEXT {
    VkStructureType                              sType;
    const void*                                  pNext;
    VkDebugUtilsMessengerCallbackDataFlagsEXT    flags;
    const char*                                  pMessageIdName;
    int32_t                                      messageIdNumber;
    const char*                                  pMessage;
    uint32_t                                     queueLabelCount;
    const VkDebugUtilsLabelEXT*                  pQueueLabels;
    uint32_t                                     cmdBufLabelCount;
    const VkDebugUtilsLabelEXT*                  pCmdBufLabels;
    uint32_t                                     objectCount;
    const VkDebugUtilsObjectNameInfoEXT*         pObjects;
} VkDebugUtilsMessengerCallbackDataEXT;

typedef VkBool32 (VKAPI_PTR *PFN_vkDebugUtilsMessengerCallbackEXT)(
    VkDebugUtilsMessageSeverityFlagBitsEXT           messageSeverity,
    VkDebugUtilsMessageTypeFlagsEXT                  messageTypes,
    const VkDebugUtilsMessengerCallbackDataEXT*      pCallbackData,
    void*                                            pUserData);

typedef struct VkDebugUtilsMessengerCreateInfoEXT {
    VkStructureType                         sType;
    const void*                             pNext;
    VkDebugUtilsMessengerCreateFlagsEXT     flags;
    VkDebugUtilsMessageSeverityFlagsEXT     messageSeverity;
    VkDebugUtilsMessageTypeFlagsEXT         messageType;
    PFN_vkDebugUtilsMessengerCallbackEXT    pfnUserCallback;
    void*                                   pUserData;
} VkDebugUtilsMessengerCreateInfoEXT;

typedef VkResult (VKAPI_PTR *PFN_vkSetDebugUtilsObjectNameEXT)(VkDevice device, const VkDebugUtilsObjectNameInfoEXT* pNameInfo);
typedef VkResult (VKAPI_PTR *PFN_vkSetDebugUtilsObjectTagEXT)(VkDevice device, const VkDebugUtilsObjectTagInfoEXT* pTagInfo);
typedef void (VKAPI_PTR *PFN_vkQueueBeginDebugUtilsLabelEXT)(VkQueue queue, const VkDebugUtilsLabelEXT* pLabelInfo);
typedef void (VKAPI_PTR *PFN_vkQueueEndDebugUtilsLabelEXT)(VkQueue queue);
typedef void (VKAPI_PTR *PFN_vkQueueInsertDebugUtilsLabelEXT)(VkQueue queue, const VkDebugUtilsLabelEXT* pLabelInfo);
typedef void (VKAPI_PTR *PFN_vkCmdBeginDebugUtilsLabelEXT)(VkCommandBuffer commandBuffer, const VkDebugUtilsLabelEXT* pLabelInfo);
typedef void (VKAPI_PTR *PFN_vkCmdEndDebugUtilsLabelEXT)(VkCommandBuffer commandBuffer);
typedef void (VKAPI_PTR *PFN_vkCmdInsertDebugUtilsLabelEXT)(VkCommandBuffer commandBuffer, const VkDebugUtilsLabelEXT* pLabelInfo);
typedef VkResult (VKAPI_PTR *PFN_vkCreateDebugUtilsMessengerEXT)(VkInstance instance, const VkDebugUtilsMessengerCreateInfoEXT* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkDebugUtilsMessengerEXT* pMessenger);
typedef void (VKAPI_PTR *PFN_vkDestroyDebugUtilsMessengerEXT)(VkInstance instance, VkDebugUtilsMessengerEXT messenger, const VkAllocationCallbacks* pAllocator);
typedef void (VKAPI_PTR *PFN_vkSubmitDebugUtilsMessageEXT)(VkInstance instance, VkDebugUtilsMessageSeverityFlagBitsEXT messageSeverity, VkDebugUtilsMessageTypeFlagsEXT messageTypes, const VkDebugUtilsMessengerCallbackDataEXT* pCallbackData);



#define VK_EXT_sampler_filter_minmax 1
#define VK_EXT_SAMPLER_FILTER_MINMAX_SPEC_VERSION 2
#define VK_EXT_SAMPLER_FILTER_MINMAX_EXTENSION_NAME "VK_EXT_sampler_filter_minmax"
typedef VkSamplerReductionMode VkSamplerReductionModeEXT;

typedef VkSamplerReductionModeCreateInfo VkSamplerReductionModeCreateInfoEXT;

typedef VkPhysicalDeviceSamplerFilterMinmaxProperties VkPhysicalDeviceSamplerFilterMinmaxPropertiesEXT;



#define VK_AMD_gpu_shader_int16 1
#define VK_AMD_GPU_SHADER_INT16_SPEC_VERSION 2
#define VK_AMD_GPU_SHADER_INT16_EXTENSION_NAME "VK_AMD_gpu_shader_int16"


#define VK_AMD_mixed_attachment_samples 1
#define VK_AMD_MIXED_ATTACHMENT_SAMPLES_SPEC_VERSION 1
#define VK_AMD_MIXED_ATTACHMENT_SAMPLES_EXTENSION_NAME "VK_AMD_mixed_attachment_samples"


#define VK_AMD_shader_fragment_mask 1
#define VK_AMD_SHADER_FRAGMENT_MASK_SPEC_VERSION 1
#define VK_AMD_SHADER_FRAGMENT_MASK_EXTENSION_NAME "VK_AMD_shader_fragment_mask"


#define VK_EXT_inline_uniform_block 1
#define VK_EXT_INLINE_UNIFORM_BLOCK_SPEC_VERSION 1
#define VK_EXT_INLINE_UNIFORM_BLOCK_EXTENSION_NAME "VK_EXT_inline_uniform_block"
typedef struct VkPhysicalDeviceInlineUniformBlockFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           inlineUniformBlock;
    VkBool32           descriptorBindingInlineUniformBlockUpdateAfterBind;
} VkPhysicalDeviceInlineUniformBlockFeaturesEXT;

typedef struct VkPhysicalDeviceInlineUniformBlockPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           maxInlineUniformBlockSize;
    uint32_t           maxPerStageDescriptorInlineUniformBlocks;
    uint32_t           maxPerStageDescriptorUpdateAfterBindInlineUniformBlocks;
    uint32_t           maxDescriptorSetInlineUniformBlocks;
    uint32_t           maxDescriptorSetUpdateAfterBindInlineUniformBlocks;
} VkPhysicalDeviceInlineUniformBlockPropertiesEXT;

typedef struct VkWriteDescriptorSetInlineUniformBlockEXT {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           dataSize;
    const void*        pData;
} VkWriteDescriptorSetInlineUniformBlockEXT;

typedef struct VkDescriptorPoolInlineUniformBlockCreateInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           maxInlineUniformBlockBindings;
} VkDescriptorPoolInlineUniformBlockCreateInfoEXT;



#define VK_EXT_shader_stencil_export 1
#define VK_EXT_SHADER_STENCIL_EXPORT_SPEC_VERSION 1
#define VK_EXT_SHADER_STENCIL_EXPORT_EXTENSION_NAME "VK_EXT_shader_stencil_export"


#define VK_EXT_sample_locations 1
#define VK_EXT_SAMPLE_LOCATIONS_SPEC_VERSION 1
#define VK_EXT_SAMPLE_LOCATIONS_EXTENSION_NAME "VK_EXT_sample_locations"
typedef struct VkSampleLocationEXT {
    float    x;
    float    y;
} VkSampleLocationEXT;

typedef struct VkSampleLocationsInfoEXT {
    VkStructureType               sType;
    const void*                   pNext;
    VkSampleCountFlagBits         sampleLocationsPerPixel;
    VkExtent2D                    sampleLocationGridSize;
    uint32_t                      sampleLocationsCount;
    const VkSampleLocationEXT*    pSampleLocations;
} VkSampleLocationsInfoEXT;

typedef struct VkAttachmentSampleLocationsEXT {
    uint32_t                    attachmentIndex;
    VkSampleLocationsInfoEXT    sampleLocationsInfo;
} VkAttachmentSampleLocationsEXT;

typedef struct VkSubpassSampleLocationsEXT {
    uint32_t                    subpassIndex;
    VkSampleLocationsInfoEXT    sampleLocationsInfo;
} VkSubpassSampleLocationsEXT;

typedef struct VkRenderPassSampleLocationsBeginInfoEXT {
    VkStructureType                          sType;
    const void*                              pNext;
    uint32_t                                 attachmentInitialSampleLocationsCount;
    const VkAttachmentSampleLocationsEXT*    pAttachmentInitialSampleLocations;
    uint32_t                                 postSubpassSampleLocationsCount;
    const VkSubpassSampleLocationsEXT*       pPostSubpassSampleLocations;
} VkRenderPassSampleLocationsBeginInfoEXT;

typedef struct VkPipelineSampleLocationsStateCreateInfoEXT {
    VkStructureType             sType;
    const void*                 pNext;
    VkBool32                    sampleLocationsEnable;
    VkSampleLocationsInfoEXT    sampleLocationsInfo;
} VkPipelineSampleLocationsStateCreateInfoEXT;

typedef struct VkPhysicalDeviceSampleLocationsPropertiesEXT {
    VkStructureType       sType;
    void*                 pNext;
    VkSampleCountFlags    sampleLocationSampleCounts;
    VkExtent2D            maxSampleLocationGridSize;
    float                 sampleLocationCoordinateRange[2];
    uint32_t              sampleLocationSubPixelBits;
    VkBool32              variableSampleLocations;
} VkPhysicalDeviceSampleLocationsPropertiesEXT;

typedef struct VkMultisamplePropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkExtent2D         maxSampleLocationGridSize;
} VkMultisamplePropertiesEXT;

typedef void (VKAPI_PTR *PFN_vkCmdSetSampleLocationsEXT)(VkCommandBuffer commandBuffer, const VkSampleLocationsInfoEXT* pSampleLocationsInfo);
typedef void (VKAPI_PTR *PFN_vkGetPhysicalDeviceMultisamplePropertiesEXT)(VkPhysicalDevice physicalDevice, VkSampleCountFlagBits samples, VkMultisamplePropertiesEXT* pMultisampleProperties);



#define VK_EXT_blend_operation_advanced 1
#define VK_EXT_BLEND_OPERATION_ADVANCED_SPEC_VERSION 2
#define VK_EXT_BLEND_OPERATION_ADVANCED_EXTENSION_NAME "VK_EXT_blend_operation_advanced"

typedef enum VkBlendOverlapEXT {
    VK_BLEND_OVERLAP_UNCORRELATED_EXT = 0,
    VK_BLEND_OVERLAP_DISJOINT_EXT = 1,
    VK_BLEND_OVERLAP_CONJOINT_EXT = 2,
    VK_BLEND_OVERLAP_BEGIN_RANGE_EXT = VK_BLEND_OVERLAP_UNCORRELATED_EXT,
    VK_BLEND_OVERLAP_END_RANGE_EXT = VK_BLEND_OVERLAP_CONJOINT_EXT,
    VK_BLEND_OVERLAP_RANGE_SIZE_EXT = (VK_BLEND_OVERLAP_CONJOINT_EXT - VK_BLEND_OVERLAP_UNCORRELATED_EXT + 1),
    VK_BLEND_OVERLAP_MAX_ENUM_EXT = 0x7FFFFFFF
} VkBlendOverlapEXT;
typedef struct VkPhysicalDeviceBlendOperationAdvancedFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           advancedBlendCoherentOperations;
} VkPhysicalDeviceBlendOperationAdvancedFeaturesEXT;

typedef struct VkPhysicalDeviceBlendOperationAdvancedPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           advancedBlendMaxColorAttachments;
    VkBool32           advancedBlendIndependentBlend;
    VkBool32           advancedBlendNonPremultipliedSrcColor;
    VkBool32           advancedBlendNonPremultipliedDstColor;
    VkBool32           advancedBlendCorrelatedOverlap;
    VkBool32           advancedBlendAllOperations;
} VkPhysicalDeviceBlendOperationAdvancedPropertiesEXT;

typedef struct VkPipelineColorBlendAdvancedStateCreateInfoEXT {
    VkStructureType      sType;
    const void*          pNext;
    VkBool32             srcPremultiplied;
    VkBool32             dstPremultiplied;
    VkBlendOverlapEXT    blendOverlap;
} VkPipelineColorBlendAdvancedStateCreateInfoEXT;



#define VK_NV_fragment_coverage_to_color 1
#define VK_NV_FRAGMENT_COVERAGE_TO_COLOR_SPEC_VERSION 1
#define VK_NV_FRAGMENT_COVERAGE_TO_COLOR_EXTENSION_NAME "VK_NV_fragment_coverage_to_color"
typedef VkFlags VkPipelineCoverageToColorStateCreateFlagsNV;
typedef struct VkPipelineCoverageToColorStateCreateInfoNV {
    VkStructureType                                sType;
    const void*                                    pNext;
    VkPipelineCoverageToColorStateCreateFlagsNV    flags;
    VkBool32                                       coverageToColorEnable;
    uint32_t                                       coverageToColorLocation;
} VkPipelineCoverageToColorStateCreateInfoNV;



#define VK_NV_framebuffer_mixed_samples 1
#define VK_NV_FRAMEBUFFER_MIXED_SAMPLES_SPEC_VERSION 1
#define VK_NV_FRAMEBUFFER_MIXED_SAMPLES_EXTENSION_NAME "VK_NV_framebuffer_mixed_samples"

typedef enum VkCoverageModulationModeNV {
    VK_COVERAGE_MODULATION_MODE_NONE_NV = 0,
    VK_COVERAGE_MODULATION_MODE_RGB_NV = 1,
    VK_COVERAGE_MODULATION_MODE_ALPHA_NV = 2,
    VK_COVERAGE_MODULATION_MODE_RGBA_NV = 3,
    VK_COVERAGE_MODULATION_MODE_BEGIN_RANGE_NV = VK_COVERAGE_MODULATION_MODE_NONE_NV,
    VK_COVERAGE_MODULATION_MODE_END_RANGE_NV = VK_COVERAGE_MODULATION_MODE_RGBA_NV,
    VK_COVERAGE_MODULATION_MODE_RANGE_SIZE_NV = (VK_COVERAGE_MODULATION_MODE_RGBA_NV - VK_COVERAGE_MODULATION_MODE_NONE_NV + 1),
    VK_COVERAGE_MODULATION_MODE_MAX_ENUM_NV = 0x7FFFFFFF
} VkCoverageModulationModeNV;
typedef VkFlags VkPipelineCoverageModulationStateCreateFlagsNV;
typedef struct VkPipelineCoverageModulationStateCreateInfoNV {
    VkStructureType                                   sType;
    const void*                                       pNext;
    VkPipelineCoverageModulationStateCreateFlagsNV    flags;
    VkCoverageModulationModeNV                        coverageModulationMode;
    VkBool32                                          coverageModulationTableEnable;
    uint32_t                                          coverageModulationTableCount;
    const float*                                      pCoverageModulationTable;
} VkPipelineCoverageModulationStateCreateInfoNV;



#define VK_NV_fill_rectangle 1
#define VK_NV_FILL_RECTANGLE_SPEC_VERSION 1
#define VK_NV_FILL_RECTANGLE_EXTENSION_NAME "VK_NV_fill_rectangle"


#define VK_NV_shader_sm_builtins 1
#define VK_NV_SHADER_SM_BUILTINS_SPEC_VERSION 1
#define VK_NV_SHADER_SM_BUILTINS_EXTENSION_NAME "VK_NV_shader_sm_builtins"
typedef struct VkPhysicalDeviceShaderSMBuiltinsPropertiesNV {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           shaderSMCount;
    uint32_t           shaderWarpsPerSM;
} VkPhysicalDeviceShaderSMBuiltinsPropertiesNV;

typedef struct VkPhysicalDeviceShaderSMBuiltinsFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           shaderSMBuiltins;
} VkPhysicalDeviceShaderSMBuiltinsFeaturesNV;



#define VK_EXT_post_depth_coverage 1
#define VK_EXT_POST_DEPTH_COVERAGE_SPEC_VERSION 1
#define VK_EXT_POST_DEPTH_COVERAGE_EXTENSION_NAME "VK_EXT_post_depth_coverage"


#define VK_EXT_image_drm_format_modifier 1
#define VK_EXT_IMAGE_DRM_FORMAT_MODIFIER_SPEC_VERSION 1
#define VK_EXT_IMAGE_DRM_FORMAT_MODIFIER_EXTENSION_NAME "VK_EXT_image_drm_format_modifier"
typedef struct VkDrmFormatModifierPropertiesEXT {
    uint64_t                drmFormatModifier;
    uint32_t                drmFormatModifierPlaneCount;
    VkFormatFeatureFlags    drmFormatModifierTilingFeatures;
} VkDrmFormatModifierPropertiesEXT;

typedef struct VkDrmFormatModifierPropertiesListEXT {
    VkStructureType                      sType;
    void*                                pNext;
    uint32_t                             drmFormatModifierCount;
    VkDrmFormatModifierPropertiesEXT*    pDrmFormatModifierProperties;
} VkDrmFormatModifierPropertiesListEXT;

typedef struct VkPhysicalDeviceImageDrmFormatModifierInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    uint64_t           drmFormatModifier;
    VkSharingMode      sharingMode;
    uint32_t           queueFamilyIndexCount;
    const uint32_t*    pQueueFamilyIndices;
} VkPhysicalDeviceImageDrmFormatModifierInfoEXT;

typedef struct VkImageDrmFormatModifierListCreateInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           drmFormatModifierCount;
    const uint64_t*    pDrmFormatModifiers;
} VkImageDrmFormatModifierListCreateInfoEXT;

typedef struct VkImageDrmFormatModifierExplicitCreateInfoEXT {
    VkStructureType               sType;
    const void*                   pNext;
    uint64_t                      drmFormatModifier;
    uint32_t                      drmFormatModifierPlaneCount;
    const VkSubresourceLayout*    pPlaneLayouts;
} VkImageDrmFormatModifierExplicitCreateInfoEXT;

typedef struct VkImageDrmFormatModifierPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    uint64_t           drmFormatModifier;
} VkImageDrmFormatModifierPropertiesEXT;

typedef VkResult (VKAPI_PTR *PFN_vkGetImageDrmFormatModifierPropertiesEXT)(VkDevice device, VkImage image, VkImageDrmFormatModifierPropertiesEXT* pProperties);




#define VK_EXT_validation_cache 1
typedef struct VkValidationCacheEXT_T* VkValidationCacheEXT;
#define VK_EXT_VALIDATION_CACHE_SPEC_VERSION 1
#define VK_EXT_VALIDATION_CACHE_EXTENSION_NAME "VK_EXT_validation_cache"

typedef enum VkValidationCacheHeaderVersionEXT {
    VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT = 1,
    VK_VALIDATION_CACHE_HEADER_VERSION_BEGIN_RANGE_EXT = VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT,
    VK_VALIDATION_CACHE_HEADER_VERSION_END_RANGE_EXT = VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT,
    VK_VALIDATION_CACHE_HEADER_VERSION_RANGE_SIZE_EXT = (VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT - VK_VALIDATION_CACHE_HEADER_VERSION_ONE_EXT + 1),
    VK_VALIDATION_CACHE_HEADER_VERSION_MAX_ENUM_EXT = 0x7FFFFFFF
} VkValidationCacheHeaderVersionEXT;
typedef VkFlags VkValidationCacheCreateFlagsEXT;
typedef struct VkValidationCacheCreateInfoEXT {
    VkStructureType                    sType;
    const void*                        pNext;
    VkValidationCacheCreateFlagsEXT    flags;
    size_t                             initialDataSize;
    const void*                        pInitialData;
} VkValidationCacheCreateInfoEXT;

typedef struct VkShaderModuleValidationCacheCreateInfoEXT {
    VkStructureType         sType;
    const void*             pNext;
    VkValidationCacheEXT    validationCache;
} VkShaderModuleValidationCacheCreateInfoEXT;

typedef VkResult (VKAPI_PTR *PFN_vkCreateValidationCacheEXT)(VkDevice device, const VkValidationCacheCreateInfoEXT* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkValidationCacheEXT* pValidationCache);
typedef void (VKAPI_PTR *PFN_vkDestroyValidationCacheEXT)(VkDevice device, VkValidationCacheEXT validationCache, const VkAllocationCallbacks* pAllocator);
typedef VkResult (VKAPI_PTR *PFN_vkMergeValidationCachesEXT)(VkDevice device, VkValidationCacheEXT dstCache, uint32_t srcCacheCount, const VkValidationCacheEXT* pSrcCaches);
typedef VkResult (VKAPI_PTR *PFN_vkGetValidationCacheDataEXT)(VkDevice device, VkValidationCacheEXT validationCache, size_t* pDataSize, void* pData);



#define VK_EXT_descriptor_indexing 1
#define VK_EXT_DESCRIPTOR_INDEXING_SPEC_VERSION 2
#define VK_EXT_DESCRIPTOR_INDEXING_EXTENSION_NAME "VK_EXT_descriptor_indexing"
typedef VkDescriptorBindingFlagBits VkDescriptorBindingFlagBitsEXT;

typedef VkDescriptorBindingFlags VkDescriptorBindingFlagsEXT;

typedef VkDescriptorSetLayoutBindingFlagsCreateInfo VkDescriptorSetLayoutBindingFlagsCreateInfoEXT;

typedef VkPhysicalDeviceDescriptorIndexingFeatures VkPhysicalDeviceDescriptorIndexingFeaturesEXT;

typedef VkPhysicalDeviceDescriptorIndexingProperties VkPhysicalDeviceDescriptorIndexingPropertiesEXT;

typedef VkDescriptorSetVariableDescriptorCountAllocateInfo VkDescriptorSetVariableDescriptorCountAllocateInfoEXT;

typedef VkDescriptorSetVariableDescriptorCountLayoutSupport VkDescriptorSetVariableDescriptorCountLayoutSupportEXT;



#define VK_EXT_shader_viewport_index_layer 1
#define VK_EXT_SHADER_VIEWPORT_INDEX_LAYER_SPEC_VERSION 1
#define VK_EXT_SHADER_VIEWPORT_INDEX_LAYER_EXTENSION_NAME "VK_EXT_shader_viewport_index_layer"


#define VK_NV_shading_rate_image 1
#define VK_NV_SHADING_RATE_IMAGE_SPEC_VERSION 3
#define VK_NV_SHADING_RATE_IMAGE_EXTENSION_NAME "VK_NV_shading_rate_image"

typedef enum VkShadingRatePaletteEntryNV {
    VK_SHADING_RATE_PALETTE_ENTRY_NO_INVOCATIONS_NV = 0,
    VK_SHADING_RATE_PALETTE_ENTRY_16_INVOCATIONS_PER_PIXEL_NV = 1,
    VK_SHADING_RATE_PALETTE_ENTRY_8_INVOCATIONS_PER_PIXEL_NV = 2,
    VK_SHADING_RATE_PALETTE_ENTRY_4_INVOCATIONS_PER_PIXEL_NV = 3,
    VK_SHADING_RATE_PALETTE_ENTRY_2_INVOCATIONS_PER_PIXEL_NV = 4,
    VK_SHADING_RATE_PALETTE_ENTRY_1_INVOCATION_PER_PIXEL_NV = 5,
    VK_SHADING_RATE_PALETTE_ENTRY_1_INVOCATION_PER_2X1_PIXELS_NV = 6,
    VK_SHADING_RATE_PALETTE_ENTRY_1_INVOCATION_PER_1X2_PIXELS_NV = 7,
    VK_SHADING_RATE_PALETTE_ENTRY_1_INVOCATION_PER_2X2_PIXELS_NV = 8,
    VK_SHADING_RATE_PALETTE_ENTRY_1_INVOCATION_PER_4X2_PIXELS_NV = 9,
    VK_SHADING_RATE_PALETTE_ENTRY_1_INVOCATION_PER_2X4_PIXELS_NV = 10,
    VK_SHADING_RATE_PALETTE_ENTRY_1_INVOCATION_PER_4X4_PIXELS_NV = 11,
    VK_SHADING_RATE_PALETTE_ENTRY_BEGIN_RANGE_NV = VK_SHADING_RATE_PALETTE_ENTRY_NO_INVOCATIONS_NV,
    VK_SHADING_RATE_PALETTE_ENTRY_END_RANGE_NV = VK_SHADING_RATE_PALETTE_ENTRY_1_INVOCATION_PER_4X4_PIXELS_NV,
    VK_SHADING_RATE_PALETTE_ENTRY_RANGE_SIZE_NV = (VK_SHADING_RATE_PALETTE_ENTRY_1_INVOCATION_PER_4X4_PIXELS_NV - VK_SHADING_RATE_PALETTE_ENTRY_NO_INVOCATIONS_NV + 1),
    VK_SHADING_RATE_PALETTE_ENTRY_MAX_ENUM_NV = 0x7FFFFFFF
} VkShadingRatePaletteEntryNV;

typedef enum VkCoarseSampleOrderTypeNV {
    VK_COARSE_SAMPLE_ORDER_TYPE_DEFAULT_NV = 0,
    VK_COARSE_SAMPLE_ORDER_TYPE_CUSTOM_NV = 1,
    VK_COARSE_SAMPLE_ORDER_TYPE_PIXEL_MAJOR_NV = 2,
    VK_COARSE_SAMPLE_ORDER_TYPE_SAMPLE_MAJOR_NV = 3,
    VK_COARSE_SAMPLE_ORDER_TYPE_BEGIN_RANGE_NV = VK_COARSE_SAMPLE_ORDER_TYPE_DEFAULT_NV,
    VK_COARSE_SAMPLE_ORDER_TYPE_END_RANGE_NV = VK_COARSE_SAMPLE_ORDER_TYPE_SAMPLE_MAJOR_NV,
    VK_COARSE_SAMPLE_ORDER_TYPE_RANGE_SIZE_NV = (VK_COARSE_SAMPLE_ORDER_TYPE_SAMPLE_MAJOR_NV - VK_COARSE_SAMPLE_ORDER_TYPE_DEFAULT_NV + 1),
    VK_COARSE_SAMPLE_ORDER_TYPE_MAX_ENUM_NV = 0x7FFFFFFF
} VkCoarseSampleOrderTypeNV;
typedef struct VkShadingRatePaletteNV {
    uint32_t                              shadingRatePaletteEntryCount;
    const VkShadingRatePaletteEntryNV*    pShadingRatePaletteEntries;
} VkShadingRatePaletteNV;

typedef struct VkPipelineViewportShadingRateImageStateCreateInfoNV {
    VkStructureType                  sType;
    const void*                      pNext;
    VkBool32                         shadingRateImageEnable;
    uint32_t                         viewportCount;
    const VkShadingRatePaletteNV*    pShadingRatePalettes;
} VkPipelineViewportShadingRateImageStateCreateInfoNV;

typedef struct VkPhysicalDeviceShadingRateImageFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           shadingRateImage;
    VkBool32           shadingRateCoarseSampleOrder;
} VkPhysicalDeviceShadingRateImageFeaturesNV;

typedef struct VkPhysicalDeviceShadingRateImagePropertiesNV {
    VkStructureType    sType;
    void*              pNext;
    VkExtent2D         shadingRateTexelSize;
    uint32_t           shadingRatePaletteSize;
    uint32_t           shadingRateMaxCoarseSamples;
} VkPhysicalDeviceShadingRateImagePropertiesNV;

typedef struct VkCoarseSampleLocationNV {
    uint32_t    pixelX;
    uint32_t    pixelY;
    uint32_t    sample;
} VkCoarseSampleLocationNV;

typedef struct VkCoarseSampleOrderCustomNV {
    VkShadingRatePaletteEntryNV        shadingRate;
    uint32_t                           sampleCount;
    uint32_t                           sampleLocationCount;
    const VkCoarseSampleLocationNV*    pSampleLocations;
} VkCoarseSampleOrderCustomNV;

typedef struct VkPipelineViewportCoarseSampleOrderStateCreateInfoNV {
    VkStructureType                       sType;
    const void*                           pNext;
    VkCoarseSampleOrderTypeNV             sampleOrderType;
    uint32_t                              customSampleOrderCount;
    const VkCoarseSampleOrderCustomNV*    pCustomSampleOrders;
} VkPipelineViewportCoarseSampleOrderStateCreateInfoNV;

typedef void (VKAPI_PTR *PFN_vkCmdBindShadingRateImageNV)(VkCommandBuffer commandBuffer, VkImageView imageView, VkImageLayout imageLayout);
typedef void (VKAPI_PTR *PFN_vkCmdSetViewportShadingRatePaletteNV)(VkCommandBuffer commandBuffer, uint32_t firstViewport, uint32_t viewportCount, const VkShadingRatePaletteNV* pShadingRatePalettes);
typedef void (VKAPI_PTR *PFN_vkCmdSetCoarseSampleOrderNV)(VkCommandBuffer commandBuffer, VkCoarseSampleOrderTypeNV sampleOrderType, uint32_t customSampleOrderCount, const VkCoarseSampleOrderCustomNV* pCustomSampleOrders);



#define VK_NV_ray_tracing 1
typedef struct VkAccelerationStructureKHR_T* VkAccelerationStructureKHR;
typedef VkAccelerationStructureKHR VkAccelerationStructureNV;

#define VK_NV_RAY_TRACING_SPEC_VERSION    3
#define VK_NV_RAY_TRACING_EXTENSION_NAME  "VK_NV_ray_tracing"
#define VK_SHADER_UNUSED_KHR              (~0U)
#define VK_SHADER_UNUSED_NV               VK_SHADER_UNUSED_KHR

typedef enum VkRayTracingShaderGroupTypeKHR {
    VK_RAY_TRACING_SHADER_GROUP_TYPE_GENERAL_KHR = 0,
    VK_RAY_TRACING_SHADER_GROUP_TYPE_TRIANGLES_HIT_GROUP_KHR = 1,
    VK_RAY_TRACING_SHADER_GROUP_TYPE_PROCEDURAL_HIT_GROUP_KHR = 2,
    VK_RAY_TRACING_SHADER_GROUP_TYPE_GENERAL_NV = VK_RAY_TRACING_SHADER_GROUP_TYPE_GENERAL_KHR,
    VK_RAY_TRACING_SHADER_GROUP_TYPE_TRIANGLES_HIT_GROUP_NV = VK_RAY_TRACING_SHADER_GROUP_TYPE_TRIANGLES_HIT_GROUP_KHR,
    VK_RAY_TRACING_SHADER_GROUP_TYPE_PROCEDURAL_HIT_GROUP_NV = VK_RAY_TRACING_SHADER_GROUP_TYPE_PROCEDURAL_HIT_GROUP_KHR,
    VK_RAY_TRACING_SHADER_GROUP_TYPE_BEGIN_RANGE_KHR = VK_RAY_TRACING_SHADER_GROUP_TYPE_GENERAL_KHR,
    VK_RAY_TRACING_SHADER_GROUP_TYPE_END_RANGE_KHR = VK_RAY_TRACING_SHADER_GROUP_TYPE_PROCEDURAL_HIT_GROUP_KHR,
    VK_RAY_TRACING_SHADER_GROUP_TYPE_RANGE_SIZE_KHR = (VK_RAY_TRACING_SHADER_GROUP_TYPE_PROCEDURAL_HIT_GROUP_KHR - VK_RAY_TRACING_SHADER_GROUP_TYPE_GENERAL_KHR + 1),
    VK_RAY_TRACING_SHADER_GROUP_TYPE_MAX_ENUM_KHR = 0x7FFFFFFF
} VkRayTracingShaderGroupTypeKHR;
typedef VkRayTracingShaderGroupTypeKHR VkRayTracingShaderGroupTypeNV;


typedef enum VkGeometryTypeKHR {
    VK_GEOMETRY_TYPE_TRIANGLES_KHR = 0,
    VK_GEOMETRY_TYPE_AABBS_KHR = 1,
    VK_GEOMETRY_TYPE_INSTANCES_KHR = 1000150000,
    VK_GEOMETRY_TYPE_TRIANGLES_NV = VK_GEOMETRY_TYPE_TRIANGLES_KHR,
    VK_GEOMETRY_TYPE_AABBS_NV = VK_GEOMETRY_TYPE_AABBS_KHR,
    VK_GEOMETRY_TYPE_BEGIN_RANGE_KHR = VK_GEOMETRY_TYPE_TRIANGLES_KHR,
    VK_GEOMETRY_TYPE_END_RANGE_KHR = VK_GEOMETRY_TYPE_AABBS_KHR,
    VK_GEOMETRY_TYPE_RANGE_SIZE_KHR = (VK_GEOMETRY_TYPE_AABBS_KHR - VK_GEOMETRY_TYPE_TRIANGLES_KHR + 1),
    VK_GEOMETRY_TYPE_MAX_ENUM_KHR = 0x7FFFFFFF
} VkGeometryTypeKHR;
typedef VkGeometryTypeKHR VkGeometryTypeNV;


typedef enum VkAccelerationStructureTypeKHR {
    VK_ACCELERATION_STRUCTURE_TYPE_TOP_LEVEL_KHR = 0,
    VK_ACCELERATION_STRUCTURE_TYPE_BOTTOM_LEVEL_KHR = 1,
    VK_ACCELERATION_STRUCTURE_TYPE_TOP_LEVEL_NV = VK_ACCELERATION_STRUCTURE_TYPE_TOP_LEVEL_KHR,
    VK_ACCELERATION_STRUCTURE_TYPE_BOTTOM_LEVEL_NV = VK_ACCELERATION_STRUCTURE_TYPE_BOTTOM_LEVEL_KHR,
    VK_ACCELERATION_STRUCTURE_TYPE_BEGIN_RANGE_KHR = VK_ACCELERATION_STRUCTURE_TYPE_TOP_LEVEL_KHR,
    VK_ACCELERATION_STRUCTURE_TYPE_END_RANGE_KHR = VK_ACCELERATION_STRUCTURE_TYPE_BOTTOM_LEVEL_KHR,
    VK_ACCELERATION_STRUCTURE_TYPE_RANGE_SIZE_KHR = (VK_ACCELERATION_STRUCTURE_TYPE_BOTTOM_LEVEL_KHR - VK_ACCELERATION_STRUCTURE_TYPE_TOP_LEVEL_KHR + 1),
    VK_ACCELERATION_STRUCTURE_TYPE_MAX_ENUM_KHR = 0x7FFFFFFF
} VkAccelerationStructureTypeKHR;
typedef VkAccelerationStructureTypeKHR VkAccelerationStructureTypeNV;


typedef enum VkCopyAccelerationStructureModeKHR {
    VK_COPY_ACCELERATION_STRUCTURE_MODE_CLONE_KHR = 0,
    VK_COPY_ACCELERATION_STRUCTURE_MODE_COMPACT_KHR = 1,
    VK_COPY_ACCELERATION_STRUCTURE_MODE_SERIALIZE_KHR = 2,
    VK_COPY_ACCELERATION_STRUCTURE_MODE_DESERIALIZE_KHR = 3,
    VK_COPY_ACCELERATION_STRUCTURE_MODE_CLONE_NV = VK_COPY_ACCELERATION_STRUCTURE_MODE_CLONE_KHR,
    VK_COPY_ACCELERATION_STRUCTURE_MODE_COMPACT_NV = VK_COPY_ACCELERATION_STRUCTURE_MODE_COMPACT_KHR,
    VK_COPY_ACCELERATION_STRUCTURE_MODE_BEGIN_RANGE_KHR = VK_COPY_ACCELERATION_STRUCTURE_MODE_CLONE_KHR,
    VK_COPY_ACCELERATION_STRUCTURE_MODE_END_RANGE_KHR = VK_COPY_ACCELERATION_STRUCTURE_MODE_DESERIALIZE_KHR,
    VK_COPY_ACCELERATION_STRUCTURE_MODE_RANGE_SIZE_KHR = (VK_COPY_ACCELERATION_STRUCTURE_MODE_DESERIALIZE_KHR - VK_COPY_ACCELERATION_STRUCTURE_MODE_CLONE_KHR + 1),
    VK_COPY_ACCELERATION_STRUCTURE_MODE_MAX_ENUM_KHR = 0x7FFFFFFF
} VkCopyAccelerationStructureModeKHR;
typedef VkCopyAccelerationStructureModeKHR VkCopyAccelerationStructureModeNV;


typedef enum VkAccelerationStructureMemoryRequirementsTypeKHR {
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_OBJECT_KHR = 0,
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_BUILD_SCRATCH_KHR = 1,
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_UPDATE_SCRATCH_KHR = 2,
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_OBJECT_NV = VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_OBJECT_KHR,
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_BUILD_SCRATCH_NV = VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_BUILD_SCRATCH_KHR,
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_UPDATE_SCRATCH_NV = VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_UPDATE_SCRATCH_KHR,
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_BEGIN_RANGE_KHR = VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_OBJECT_KHR,
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_END_RANGE_KHR = VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_UPDATE_SCRATCH_KHR,
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_RANGE_SIZE_KHR = (VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_UPDATE_SCRATCH_KHR - VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_OBJECT_KHR + 1),
    VK_ACCELERATION_STRUCTURE_MEMORY_REQUIREMENTS_TYPE_MAX_ENUM_KHR = 0x7FFFFFFF
} VkAccelerationStructureMemoryRequirementsTypeKHR;
typedef VkAccelerationStructureMemoryRequirementsTypeKHR VkAccelerationStructureMemoryRequirementsTypeNV;


typedef enum VkGeometryFlagBitsKHR {
    VK_GEOMETRY_OPAQUE_BIT_KHR = 0x00000001,
    VK_GEOMETRY_NO_DUPLICATE_ANY_HIT_INVOCATION_BIT_KHR = 0x00000002,
    VK_GEOMETRY_OPAQUE_BIT_NV = VK_GEOMETRY_OPAQUE_BIT_KHR,
    VK_GEOMETRY_NO_DUPLICATE_ANY_HIT_INVOCATION_BIT_NV = VK_GEOMETRY_NO_DUPLICATE_ANY_HIT_INVOCATION_BIT_KHR,
    VK_GEOMETRY_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkGeometryFlagBitsKHR;
typedef VkFlags VkGeometryFlagsKHR;
typedef VkGeometryFlagsKHR VkGeometryFlagsNV;

typedef VkGeometryFlagBitsKHR VkGeometryFlagBitsNV;


typedef enum VkGeometryInstanceFlagBitsKHR {
    VK_GEOMETRY_INSTANCE_TRIANGLE_FACING_CULL_DISABLE_BIT_KHR = 0x00000001,
    VK_GEOMETRY_INSTANCE_TRIANGLE_FRONT_COUNTERCLOCKWISE_BIT_KHR = 0x00000002,
    VK_GEOMETRY_INSTANCE_FORCE_OPAQUE_BIT_KHR = 0x00000004,
    VK_GEOMETRY_INSTANCE_FORCE_NO_OPAQUE_BIT_KHR = 0x00000008,
    VK_GEOMETRY_INSTANCE_TRIANGLE_CULL_DISABLE_BIT_NV = VK_GEOMETRY_INSTANCE_TRIANGLE_FACING_CULL_DISABLE_BIT_KHR,
    VK_GEOMETRY_INSTANCE_TRIANGLE_FRONT_COUNTERCLOCKWISE_BIT_NV = VK_GEOMETRY_INSTANCE_TRIANGLE_FRONT_COUNTERCLOCKWISE_BIT_KHR,
    VK_GEOMETRY_INSTANCE_FORCE_OPAQUE_BIT_NV = VK_GEOMETRY_INSTANCE_FORCE_OPAQUE_BIT_KHR,
    VK_GEOMETRY_INSTANCE_FORCE_NO_OPAQUE_BIT_NV = VK_GEOMETRY_INSTANCE_FORCE_NO_OPAQUE_BIT_KHR,
    VK_GEOMETRY_INSTANCE_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkGeometryInstanceFlagBitsKHR;
typedef VkFlags VkGeometryInstanceFlagsKHR;
typedef VkGeometryInstanceFlagsKHR VkGeometryInstanceFlagsNV;

typedef VkGeometryInstanceFlagBitsKHR VkGeometryInstanceFlagBitsNV;


typedef enum VkBuildAccelerationStructureFlagBitsKHR {
    VK_BUILD_ACCELERATION_STRUCTURE_ALLOW_UPDATE_BIT_KHR = 0x00000001,
    VK_BUILD_ACCELERATION_STRUCTURE_ALLOW_COMPACTION_BIT_KHR = 0x00000002,
    VK_BUILD_ACCELERATION_STRUCTURE_PREFER_FAST_TRACE_BIT_KHR = 0x00000004,
    VK_BUILD_ACCELERATION_STRUCTURE_PREFER_FAST_BUILD_BIT_KHR = 0x00000008,
    VK_BUILD_ACCELERATION_STRUCTURE_LOW_MEMORY_BIT_KHR = 0x00000010,
    VK_BUILD_ACCELERATION_STRUCTURE_ALLOW_UPDATE_BIT_NV = VK_BUILD_ACCELERATION_STRUCTURE_ALLOW_UPDATE_BIT_KHR,
    VK_BUILD_ACCELERATION_STRUCTURE_ALLOW_COMPACTION_BIT_NV = VK_BUILD_ACCELERATION_STRUCTURE_ALLOW_COMPACTION_BIT_KHR,
    VK_BUILD_ACCELERATION_STRUCTURE_PREFER_FAST_TRACE_BIT_NV = VK_BUILD_ACCELERATION_STRUCTURE_PREFER_FAST_TRACE_BIT_KHR,
    VK_BUILD_ACCELERATION_STRUCTURE_PREFER_FAST_BUILD_BIT_NV = VK_BUILD_ACCELERATION_STRUCTURE_PREFER_FAST_BUILD_BIT_KHR,
    VK_BUILD_ACCELERATION_STRUCTURE_LOW_MEMORY_BIT_NV = VK_BUILD_ACCELERATION_STRUCTURE_LOW_MEMORY_BIT_KHR,
    VK_BUILD_ACCELERATION_STRUCTURE_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF
} VkBuildAccelerationStructureFlagBitsKHR;
typedef VkFlags VkBuildAccelerationStructureFlagsKHR;
typedef VkBuildAccelerationStructureFlagsKHR VkBuildAccelerationStructureFlagsNV;

typedef VkBuildAccelerationStructureFlagBitsKHR VkBuildAccelerationStructureFlagBitsNV;

typedef struct VkRayTracingShaderGroupCreateInfoNV {
    VkStructureType                   sType;
    const void*                       pNext;
    VkRayTracingShaderGroupTypeKHR    type;
    uint32_t                          generalShader;
    uint32_t                          closestHitShader;
    uint32_t                          anyHitShader;
    uint32_t                          intersectionShader;
} VkRayTracingShaderGroupCreateInfoNV;

typedef struct VkRayTracingPipelineCreateInfoNV {
    VkStructureType                               sType;
    const void*                                   pNext;
    VkPipelineCreateFlags                         flags;
    uint32_t                                      stageCount;
    const VkPipelineShaderStageCreateInfo*        pStages;
    uint32_t                                      groupCount;
    const VkRayTracingShaderGroupCreateInfoNV*    pGroups;
    uint32_t                                      maxRecursionDepth;
    VkPipelineLayout                              layout;
    VkPipeline                                    basePipelineHandle;
    int32_t                                       basePipelineIndex;
} VkRayTracingPipelineCreateInfoNV;

typedef struct VkGeometryTrianglesNV {
    VkStructureType    sType;
    const void*        pNext;
    VkBuffer           vertexData;
    VkDeviceSize       vertexOffset;
    uint32_t           vertexCount;
    VkDeviceSize       vertexStride;
    VkFormat           vertexFormat;
    VkBuffer           indexData;
    VkDeviceSize       indexOffset;
    uint32_t           indexCount;
    VkIndexType        indexType;
    VkBuffer           transformData;
    VkDeviceSize       transformOffset;
} VkGeometryTrianglesNV;

typedef struct VkGeometryAABBNV {
    VkStructureType    sType;
    const void*        pNext;
    VkBuffer           aabbData;
    uint32_t           numAABBs;
    uint32_t           stride;
    VkDeviceSize       offset;
} VkGeometryAABBNV;

typedef struct VkGeometryDataNV {
    VkGeometryTrianglesNV    triangles;
    VkGeometryAABBNV         aabbs;
} VkGeometryDataNV;

typedef struct VkGeometryNV {
    VkStructureType       sType;
    const void*           pNext;
    VkGeometryTypeKHR     geometryType;
    VkGeometryDataNV      geometry;
    VkGeometryFlagsKHR    flags;
} VkGeometryNV;

typedef struct VkAccelerationStructureInfoNV {
    VkStructureType                        sType;
    const void*                            pNext;
    VkAccelerationStructureTypeNV          type;
    VkBuildAccelerationStructureFlagsNV    flags;
    uint32_t                               instanceCount;
    uint32_t                               geometryCount;
    const VkGeometryNV*                    pGeometries;
} VkAccelerationStructureInfoNV;

typedef struct VkAccelerationStructureCreateInfoNV {
    VkStructureType                  sType;
    const void*                      pNext;
    VkDeviceSize                     compactedSize;
    VkAccelerationStructureInfoNV    info;
} VkAccelerationStructureCreateInfoNV;

typedef struct VkBindAccelerationStructureMemoryInfoKHR {
    VkStructureType               sType;
    const void*                   pNext;
    VkAccelerationStructureKHR    accelerationStructure;
    VkDeviceMemory                memory;
    VkDeviceSize                  memoryOffset;
    uint32_t                      deviceIndexCount;
    const uint32_t*               pDeviceIndices;
} VkBindAccelerationStructureMemoryInfoKHR;

typedef VkBindAccelerationStructureMemoryInfoKHR VkBindAccelerationStructureMemoryInfoNV;

typedef struct VkWriteDescriptorSetAccelerationStructureKHR {
    VkStructureType                      sType;
    const void*                          pNext;
    uint32_t                             accelerationStructureCount;
    const VkAccelerationStructureKHR*    pAccelerationStructures;
} VkWriteDescriptorSetAccelerationStructureKHR;

typedef VkWriteDescriptorSetAccelerationStructureKHR VkWriteDescriptorSetAccelerationStructureNV;

typedef struct VkAccelerationStructureMemoryRequirementsInfoNV {
    VkStructureType                                    sType;
    const void*                                        pNext;
    VkAccelerationStructureMemoryRequirementsTypeNV    type;
    VkAccelerationStructureNV                          accelerationStructure;
} VkAccelerationStructureMemoryRequirementsInfoNV;

typedef struct VkPhysicalDeviceRayTracingPropertiesNV {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           shaderGroupHandleSize;
    uint32_t           maxRecursionDepth;
    uint32_t           maxShaderGroupStride;
    uint32_t           shaderGroupBaseAlignment;
    uint64_t           maxGeometryCount;
    uint64_t           maxInstanceCount;
    uint64_t           maxTriangleCount;
    uint32_t           maxDescriptorSetAccelerationStructures;
} VkPhysicalDeviceRayTracingPropertiesNV;

typedef struct VkTransformMatrixKHR {
    float    matrix[3][4];
} VkTransformMatrixKHR;

typedef VkTransformMatrixKHR VkTransformMatrixNV;

typedef struct VkAabbPositionsKHR {
    float    minX;
    float    minY;
    float    minZ;
    float    maxX;
    float    maxY;
    float    maxZ;
} VkAabbPositionsKHR;

typedef VkAabbPositionsKHR VkAabbPositionsNV;

typedef struct VkAccelerationStructureInstanceKHR {
    VkTransformMatrixKHR          transform;
    uint32_t                      instanceCustomIndex:24;
    uint32_t                      mask:8;
    uint32_t                      instanceShaderBindingTableRecordOffset:24;
    VkGeometryInstanceFlagsKHR    flags:8;
    uint64_t                      accelerationStructureReference;
} VkAccelerationStructureInstanceKHR;

typedef VkAccelerationStructureInstanceKHR VkAccelerationStructureInstanceNV;

typedef VkResult (VKAPI_PTR *PFN_vkCreateAccelerationStructureNV)(VkDevice device, const VkAccelerationStructureCreateInfoNV* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkAccelerationStructureNV* pAccelerationStructure);
typedef void (VKAPI_PTR *PFN_vkDestroyAccelerationStructureKHR)(VkDevice device, VkAccelerationStructureKHR accelerationStructure, const VkAllocationCallbacks* pAllocator);
typedef void (VKAPI_PTR *PFN_vkDestroyAccelerationStructureNV)(VkDevice device, VkAccelerationStructureKHR accelerationStructure, const VkAllocationCallbacks* pAllocator);
typedef void (VKAPI_PTR *PFN_vkGetAccelerationStructureMemoryRequirementsNV)(VkDevice device, const VkAccelerationStructureMemoryRequirementsInfoNV* pInfo, VkMemoryRequirements2KHR* pMemoryRequirements);
typedef VkResult (VKAPI_PTR *PFN_vkBindAccelerationStructureMemoryKHR)(VkDevice device, uint32_t bindInfoCount, const VkBindAccelerationStructureMemoryInfoKHR* pBindInfos);
typedef VkResult (VKAPI_PTR *PFN_vkBindAccelerationStructureMemoryNV)(VkDevice device, uint32_t bindInfoCount, const VkBindAccelerationStructureMemoryInfoKHR* pBindInfos);
typedef void (VKAPI_PTR *PFN_vkCmdBuildAccelerationStructureNV)(VkCommandBuffer commandBuffer, const VkAccelerationStructureInfoNV* pInfo, VkBuffer instanceData, VkDeviceSize instanceOffset, VkBool32 update, VkAccelerationStructureKHR dst, VkAccelerationStructureKHR src, VkBuffer scratch, VkDeviceSize scratchOffset);
typedef void (VKAPI_PTR *PFN_vkCmdCopyAccelerationStructureNV)(VkCommandBuffer commandBuffer, VkAccelerationStructureKHR dst, VkAccelerationStructureKHR src, VkCopyAccelerationStructureModeKHR mode);
typedef void (VKAPI_PTR *PFN_vkCmdTraceRaysNV)(VkCommandBuffer commandBuffer, VkBuffer raygenShaderBindingTableBuffer, VkDeviceSize raygenShaderBindingOffset, VkBuffer missShaderBindingTableBuffer, VkDeviceSize missShaderBindingOffset, VkDeviceSize missShaderBindingStride, VkBuffer hitShaderBindingTableBuffer, VkDeviceSize hitShaderBindingOffset, VkDeviceSize hitShaderBindingStride, VkBuffer callableShaderBindingTableBuffer, VkDeviceSize callableShaderBindingOffset, VkDeviceSize callableShaderBindingStride, uint32_t width, uint32_t height, uint32_t depth);
typedef VkResult (VKAPI_PTR *PFN_vkCreateRayTracingPipelinesNV)(VkDevice device, VkPipelineCache pipelineCache, uint32_t createInfoCount, const VkRayTracingPipelineCreateInfoNV* pCreateInfos, const VkAllocationCallbacks* pAllocator, VkPipeline* pPipelines);
typedef VkResult (VKAPI_PTR *PFN_vkGetRayTracingShaderGroupHandlesKHR)(VkDevice device, VkPipeline pipeline, uint32_t firstGroup, uint32_t groupCount, size_t dataSize, void* pData);
typedef VkResult (VKAPI_PTR *PFN_vkGetRayTracingShaderGroupHandlesNV)(VkDevice device, VkPipeline pipeline, uint32_t firstGroup, uint32_t groupCount, size_t dataSize, void* pData);
typedef VkResult (VKAPI_PTR *PFN_vkGetAccelerationStructureHandleNV)(VkDevice device, VkAccelerationStructureKHR accelerationStructure, size_t dataSize, void* pData);
typedef void (VKAPI_PTR *PFN_vkCmdWriteAccelerationStructuresPropertiesKHR)(VkCommandBuffer commandBuffer, uint32_t accelerationStructureCount, const VkAccelerationStructureKHR* pAccelerationStructures, VkQueryType queryType, VkQueryPool queryPool, uint32_t firstQuery);
typedef void (VKAPI_PTR *PFN_vkCmdWriteAccelerationStructuresPropertiesNV)(VkCommandBuffer commandBuffer, uint32_t accelerationStructureCount, const VkAccelerationStructureKHR* pAccelerationStructures, VkQueryType queryType, VkQueryPool queryPool, uint32_t firstQuery);
typedef VkResult (VKAPI_PTR *PFN_vkCompileDeferredNV)(VkDevice device, VkPipeline pipeline, uint32_t shader);



#define VK_NV_representative_fragment_test 1
#define VK_NV_REPRESENTATIVE_FRAGMENT_TEST_SPEC_VERSION 2
#define VK_NV_REPRESENTATIVE_FRAGMENT_TEST_EXTENSION_NAME "VK_NV_representative_fragment_test"
typedef struct VkPhysicalDeviceRepresentativeFragmentTestFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           representativeFragmentTest;
} VkPhysicalDeviceRepresentativeFragmentTestFeaturesNV;

typedef struct VkPipelineRepresentativeFragmentTestStateCreateInfoNV {
    VkStructureType    sType;
    const void*        pNext;
    VkBool32           representativeFragmentTestEnable;
} VkPipelineRepresentativeFragmentTestStateCreateInfoNV;



#define VK_EXT_filter_cubic 1
#define VK_EXT_FILTER_CUBIC_SPEC_VERSION  3
#define VK_EXT_FILTER_CUBIC_EXTENSION_NAME "VK_EXT_filter_cubic"
typedef struct VkPhysicalDeviceImageViewImageFormatInfoEXT {
    VkStructureType    sType;
    void*              pNext;
    VkImageViewType    imageViewType;
} VkPhysicalDeviceImageViewImageFormatInfoEXT;

typedef struct VkFilterCubicImageViewImageFormatPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           filterCubic;
    VkBool32           filterCubicMinmax;
} VkFilterCubicImageViewImageFormatPropertiesEXT;



#define VK_EXT_global_priority 1
#define VK_EXT_GLOBAL_PRIORITY_SPEC_VERSION 2
#define VK_EXT_GLOBAL_PRIORITY_EXTENSION_NAME "VK_EXT_global_priority"

typedef enum VkQueueGlobalPriorityEXT {
    VK_QUEUE_GLOBAL_PRIORITY_LOW_EXT = 128,
    VK_QUEUE_GLOBAL_PRIORITY_MEDIUM_EXT = 256,
    VK_QUEUE_GLOBAL_PRIORITY_HIGH_EXT = 512,
    VK_QUEUE_GLOBAL_PRIORITY_REALTIME_EXT = 1024,
    VK_QUEUE_GLOBAL_PRIORITY_BEGIN_RANGE_EXT = VK_QUEUE_GLOBAL_PRIORITY_LOW_EXT,
    VK_QUEUE_GLOBAL_PRIORITY_END_RANGE_EXT = VK_QUEUE_GLOBAL_PRIORITY_REALTIME_EXT,
    VK_QUEUE_GLOBAL_PRIORITY_RANGE_SIZE_EXT = (VK_QUEUE_GLOBAL_PRIORITY_REALTIME_EXT - VK_QUEUE_GLOBAL_PRIORITY_LOW_EXT + 1),
    VK_QUEUE_GLOBAL_PRIORITY_MAX_ENUM_EXT = 0x7FFFFFFF
} VkQueueGlobalPriorityEXT;
typedef struct VkDeviceQueueGlobalPriorityCreateInfoEXT {
    VkStructureType             sType;
    const void*                 pNext;
    VkQueueGlobalPriorityEXT    globalPriority;
} VkDeviceQueueGlobalPriorityCreateInfoEXT;



#define VK_EXT_external_memory_host 1
#define VK_EXT_EXTERNAL_MEMORY_HOST_SPEC_VERSION 1
#define VK_EXT_EXTERNAL_MEMORY_HOST_EXTENSION_NAME "VK_EXT_external_memory_host"
typedef struct VkImportMemoryHostPointerInfoEXT {
    VkStructureType                       sType;
    const void*                           pNext;
    VkExternalMemoryHandleTypeFlagBits    handleType;
    void*                                 pHostPointer;
} VkImportMemoryHostPointerInfoEXT;

typedef struct VkMemoryHostPointerPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           memoryTypeBits;
} VkMemoryHostPointerPropertiesEXT;

typedef struct VkPhysicalDeviceExternalMemoryHostPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkDeviceSize       minImportedHostPointerAlignment;
} VkPhysicalDeviceExternalMemoryHostPropertiesEXT;

typedef VkResult (VKAPI_PTR *PFN_vkGetMemoryHostPointerPropertiesEXT)(VkDevice device, VkExternalMemoryHandleTypeFlagBits handleType, const void* pHostPointer, VkMemoryHostPointerPropertiesEXT* pMemoryHostPointerProperties);




#define VK_AMD_buffer_marker 1
#define VK_AMD_BUFFER_MARKER_SPEC_VERSION 1
#define VK_AMD_BUFFER_MARKER_EXTENSION_NAME "VK_AMD_buffer_marker"
typedef void (VKAPI_PTR *PFN_vkCmdWriteBufferMarkerAMD)(VkCommandBuffer commandBuffer, VkPipelineStageFlagBits pipelineStage, VkBuffer dstBuffer, VkDeviceSize dstOffset, uint32_t marker);




#define VK_AMD_pipeline_compiler_control 1
#define VK_AMD_PIPELINE_COMPILER_CONTROL_SPEC_VERSION 1
#define VK_AMD_PIPELINE_COMPILER_CONTROL_EXTENSION_NAME "VK_AMD_pipeline_compiler_control"

typedef enum VkPipelineCompilerControlFlagBitsAMD {
    VK_PIPELINE_COMPILER_CONTROL_FLAG_BITS_MAX_ENUM_AMD = 0x7FFFFFFF
} VkPipelineCompilerControlFlagBitsAMD;
typedef VkFlags VkPipelineCompilerControlFlagsAMD;
typedef struct VkPipelineCompilerControlCreateInfoAMD {
    VkStructureType                      sType;
    const void*                          pNext;
    VkPipelineCompilerControlFlagsAMD    compilerControlFlags;
} VkPipelineCompilerControlCreateInfoAMD;



#define VK_EXT_calibrated_timestamps 1
#define VK_EXT_CALIBRATED_TIMESTAMPS_SPEC_VERSION 1
#define VK_EXT_CALIBRATED_TIMESTAMPS_EXTENSION_NAME "VK_EXT_calibrated_timestamps"

typedef enum VkTimeDomainEXT {
    VK_TIME_DOMAIN_DEVICE_EXT = 0,
    VK_TIME_DOMAIN_CLOCK_MONOTONIC_EXT = 1,
    VK_TIME_DOMAIN_CLOCK_MONOTONIC_RAW_EXT = 2,
    VK_TIME_DOMAIN_QUERY_PERFORMANCE_COUNTER_EXT = 3,
    VK_TIME_DOMAIN_BEGIN_RANGE_EXT = VK_TIME_DOMAIN_DEVICE_EXT,
    VK_TIME_DOMAIN_END_RANGE_EXT = VK_TIME_DOMAIN_QUERY_PERFORMANCE_COUNTER_EXT,
    VK_TIME_DOMAIN_RANGE_SIZE_EXT = (VK_TIME_DOMAIN_QUERY_PERFORMANCE_COUNTER_EXT - VK_TIME_DOMAIN_DEVICE_EXT + 1),
    VK_TIME_DOMAIN_MAX_ENUM_EXT = 0x7FFFFFFF
} VkTimeDomainEXT;
typedef struct VkCalibratedTimestampInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    VkTimeDomainEXT    timeDomain;
} VkCalibratedTimestampInfoEXT;

typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceCalibrateableTimeDomainsEXT)(VkPhysicalDevice physicalDevice, uint32_t* pTimeDomainCount, VkTimeDomainEXT* pTimeDomains);
typedef VkResult (VKAPI_PTR *PFN_vkGetCalibratedTimestampsEXT)(VkDevice device, uint32_t timestampCount, const VkCalibratedTimestampInfoEXT* pTimestampInfos, uint64_t* pTimestamps, uint64_t* pMaxDeviation);



#define VK_AMD_shader_core_properties 1
#define VK_AMD_SHADER_CORE_PROPERTIES_SPEC_VERSION 2
#define VK_AMD_SHADER_CORE_PROPERTIES_EXTENSION_NAME "VK_AMD_shader_core_properties"
typedef struct VkPhysicalDeviceShaderCorePropertiesAMD {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           shaderEngineCount;
    uint32_t           shaderArraysPerEngineCount;
    uint32_t           computeUnitsPerShaderArray;
    uint32_t           simdPerComputeUnit;
    uint32_t           wavefrontsPerSimd;
    uint32_t           wavefrontSize;
    uint32_t           sgprsPerSimd;
    uint32_t           minSgprAllocation;
    uint32_t           maxSgprAllocation;
    uint32_t           sgprAllocationGranularity;
    uint32_t           vgprsPerSimd;
    uint32_t           minVgprAllocation;
    uint32_t           maxVgprAllocation;
    uint32_t           vgprAllocationGranularity;
} VkPhysicalDeviceShaderCorePropertiesAMD;



#define VK_AMD_memory_overallocation_behavior 1
#define VK_AMD_MEMORY_OVERALLOCATION_BEHAVIOR_SPEC_VERSION 1
#define VK_AMD_MEMORY_OVERALLOCATION_BEHAVIOR_EXTENSION_NAME "VK_AMD_memory_overallocation_behavior"

typedef enum VkMemoryOverallocationBehaviorAMD {
    VK_MEMORY_OVERALLOCATION_BEHAVIOR_DEFAULT_AMD = 0,
    VK_MEMORY_OVERALLOCATION_BEHAVIOR_ALLOWED_AMD = 1,
    VK_MEMORY_OVERALLOCATION_BEHAVIOR_DISALLOWED_AMD = 2,
    VK_MEMORY_OVERALLOCATION_BEHAVIOR_BEGIN_RANGE_AMD = VK_MEMORY_OVERALLOCATION_BEHAVIOR_DEFAULT_AMD,
    VK_MEMORY_OVERALLOCATION_BEHAVIOR_END_RANGE_AMD = VK_MEMORY_OVERALLOCATION_BEHAVIOR_DISALLOWED_AMD,
    VK_MEMORY_OVERALLOCATION_BEHAVIOR_RANGE_SIZE_AMD = (VK_MEMORY_OVERALLOCATION_BEHAVIOR_DISALLOWED_AMD - VK_MEMORY_OVERALLOCATION_BEHAVIOR_DEFAULT_AMD + 1),
    VK_MEMORY_OVERALLOCATION_BEHAVIOR_MAX_ENUM_AMD = 0x7FFFFFFF
} VkMemoryOverallocationBehaviorAMD;
typedef struct VkDeviceMemoryOverallocationCreateInfoAMD {
    VkStructureType                      sType;
    const void*                          pNext;
    VkMemoryOverallocationBehaviorAMD    overallocationBehavior;
} VkDeviceMemoryOverallocationCreateInfoAMD;



#define VK_EXT_vertex_attribute_divisor 1
#define VK_EXT_VERTEX_ATTRIBUTE_DIVISOR_SPEC_VERSION 3
#define VK_EXT_VERTEX_ATTRIBUTE_DIVISOR_EXTENSION_NAME "VK_EXT_vertex_attribute_divisor"
typedef struct VkPhysicalDeviceVertexAttributeDivisorPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           maxVertexAttribDivisor;
} VkPhysicalDeviceVertexAttributeDivisorPropertiesEXT;

typedef struct VkVertexInputBindingDivisorDescriptionEXT {
    uint32_t    binding;
    uint32_t    divisor;
} VkVertexInputBindingDivisorDescriptionEXT;

typedef struct VkPipelineVertexInputDivisorStateCreateInfoEXT {
    VkStructureType                                     sType;
    const void*                                         pNext;
    uint32_t                                            vertexBindingDivisorCount;
    const VkVertexInputBindingDivisorDescriptionEXT*    pVertexBindingDivisors;
} VkPipelineVertexInputDivisorStateCreateInfoEXT;

typedef struct VkPhysicalDeviceVertexAttributeDivisorFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           vertexAttributeInstanceRateDivisor;
    VkBool32           vertexAttributeInstanceRateZeroDivisor;
} VkPhysicalDeviceVertexAttributeDivisorFeaturesEXT;



#define VK_EXT_pipeline_creation_feedback 1
#define VK_EXT_PIPELINE_CREATION_FEEDBACK_SPEC_VERSION 1
#define VK_EXT_PIPELINE_CREATION_FEEDBACK_EXTENSION_NAME "VK_EXT_pipeline_creation_feedback"

typedef enum VkPipelineCreationFeedbackFlagBitsEXT {
    VK_PIPELINE_CREATION_FEEDBACK_VALID_BIT_EXT = 0x00000001,
    VK_PIPELINE_CREATION_FEEDBACK_APPLICATION_PIPELINE_CACHE_HIT_BIT_EXT = 0x00000002,
    VK_PIPELINE_CREATION_FEEDBACK_BASE_PIPELINE_ACCELERATION_BIT_EXT = 0x00000004,
    VK_PIPELINE_CREATION_FEEDBACK_FLAG_BITS_MAX_ENUM_EXT = 0x7FFFFFFF
} VkPipelineCreationFeedbackFlagBitsEXT;
typedef VkFlags VkPipelineCreationFeedbackFlagsEXT;
typedef struct VkPipelineCreationFeedbackEXT {
    VkPipelineCreationFeedbackFlagsEXT    flags;
    uint64_t                              duration;
} VkPipelineCreationFeedbackEXT;

typedef struct VkPipelineCreationFeedbackCreateInfoEXT {
    VkStructureType                   sType;
    const void*                       pNext;
    VkPipelineCreationFeedbackEXT*    pPipelineCreationFeedback;
    uint32_t                          pipelineStageCreationFeedbackCount;
    VkPipelineCreationFeedbackEXT*    pPipelineStageCreationFeedbacks;
} VkPipelineCreationFeedbackCreateInfoEXT;



#define VK_NV_shader_subgroup_partitioned 1
#define VK_NV_SHADER_SUBGROUP_PARTITIONED_SPEC_VERSION 1
#define VK_NV_SHADER_SUBGROUP_PARTITIONED_EXTENSION_NAME "VK_NV_shader_subgroup_partitioned"


#define VK_NV_compute_shader_derivatives 1
#define VK_NV_COMPUTE_SHADER_DERIVATIVES_SPEC_VERSION 1
#define VK_NV_COMPUTE_SHADER_DERIVATIVES_EXTENSION_NAME "VK_NV_compute_shader_derivatives"
typedef struct VkPhysicalDeviceComputeShaderDerivativesFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           computeDerivativeGroupQuads;
    VkBool32           computeDerivativeGroupLinear;
} VkPhysicalDeviceComputeShaderDerivativesFeaturesNV;



#define VK_NV_mesh_shader 1
#define VK_NV_MESH_SHADER_SPEC_VERSION    1
#define VK_NV_MESH_SHADER_EXTENSION_NAME  "VK_NV_mesh_shader"
typedef struct VkPhysicalDeviceMeshShaderFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           taskShader;
    VkBool32           meshShader;
} VkPhysicalDeviceMeshShaderFeaturesNV;

typedef struct VkPhysicalDeviceMeshShaderPropertiesNV {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           maxDrawMeshTasksCount;
    uint32_t           maxTaskWorkGroupInvocations;
    uint32_t           maxTaskWorkGroupSize[3];
    uint32_t           maxTaskTotalMemorySize;
    uint32_t           maxTaskOutputCount;
    uint32_t           maxMeshWorkGroupInvocations;
    uint32_t           maxMeshWorkGroupSize[3];
    uint32_t           maxMeshTotalMemorySize;
    uint32_t           maxMeshOutputVertices;
    uint32_t           maxMeshOutputPrimitives;
    uint32_t           maxMeshMultiviewViewCount;
    uint32_t           meshOutputPerVertexGranularity;
    uint32_t           meshOutputPerPrimitiveGranularity;
} VkPhysicalDeviceMeshShaderPropertiesNV;

typedef struct VkDrawMeshTasksIndirectCommandNV {
    uint32_t    taskCount;
    uint32_t    firstTask;
} VkDrawMeshTasksIndirectCommandNV;

typedef void (VKAPI_PTR *PFN_vkCmdDrawMeshTasksNV)(VkCommandBuffer commandBuffer, uint32_t taskCount, uint32_t firstTask);
typedef void (VKAPI_PTR *PFN_vkCmdDrawMeshTasksIndirectNV)(VkCommandBuffer commandBuffer, VkBuffer buffer, VkDeviceSize offset, uint32_t drawCount, uint32_t stride);
typedef void (VKAPI_PTR *PFN_vkCmdDrawMeshTasksIndirectCountNV)(VkCommandBuffer commandBuffer, VkBuffer buffer, VkDeviceSize offset, VkBuffer countBuffer, VkDeviceSize countBufferOffset, uint32_t maxDrawCount, uint32_t stride);



#define VK_NV_fragment_shader_barycentric 1
#define VK_NV_FRAGMENT_SHADER_BARYCENTRIC_SPEC_VERSION 1
#define VK_NV_FRAGMENT_SHADER_BARYCENTRIC_EXTENSION_NAME "VK_NV_fragment_shader_barycentric"
typedef struct VkPhysicalDeviceFragmentShaderBarycentricFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           fragmentShaderBarycentric;
} VkPhysicalDeviceFragmentShaderBarycentricFeaturesNV;



#define VK_NV_shader_image_footprint 1
#define VK_NV_SHADER_IMAGE_FOOTPRINT_SPEC_VERSION 2
#define VK_NV_SHADER_IMAGE_FOOTPRINT_EXTENSION_NAME "VK_NV_shader_image_footprint"
typedef struct VkPhysicalDeviceShaderImageFootprintFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           imageFootprint;
} VkPhysicalDeviceShaderImageFootprintFeaturesNV;



#define VK_NV_scissor_exclusive 1
#define VK_NV_SCISSOR_EXCLUSIVE_SPEC_VERSION 1
#define VK_NV_SCISSOR_EXCLUSIVE_EXTENSION_NAME "VK_NV_scissor_exclusive"
typedef struct VkPipelineViewportExclusiveScissorStateCreateInfoNV {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           exclusiveScissorCount;
    const VkRect2D*    pExclusiveScissors;
} VkPipelineViewportExclusiveScissorStateCreateInfoNV;

typedef struct VkPhysicalDeviceExclusiveScissorFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           exclusiveScissor;
} VkPhysicalDeviceExclusiveScissorFeaturesNV;

typedef void (VKAPI_PTR *PFN_vkCmdSetExclusiveScissorNV)(VkCommandBuffer commandBuffer, uint32_t firstExclusiveScissor, uint32_t exclusiveScissorCount, const VkRect2D* pExclusiveScissors);




#define VK_NV_device_diagnostic_checkpoints 1
#define VK_NV_DEVICE_DIAGNOSTIC_CHECKPOINTS_SPEC_VERSION 2
#define VK_NV_DEVICE_DIAGNOSTIC_CHECKPOINTS_EXTENSION_NAME "VK_NV_device_diagnostic_checkpoints"
typedef struct VkQueueFamilyCheckpointPropertiesNV {
    VkStructureType         sType;
    void*                   pNext;
    VkPipelineStageFlags    checkpointExecutionStageMask;
} VkQueueFamilyCheckpointPropertiesNV;

typedef struct VkCheckpointDataNV {
    VkStructureType            sType;
    void*                      pNext;
    VkPipelineStageFlagBits    stage;
    void*                      pCheckpointMarker;
} VkCheckpointDataNV;

typedef void (VKAPI_PTR *PFN_vkCmdSetCheckpointNV)(VkCommandBuffer commandBuffer, const void* pCheckpointMarker);
typedef void (VKAPI_PTR *PFN_vkGetQueueCheckpointDataNV)(VkQueue queue, uint32_t* pCheckpointDataCount, VkCheckpointDataNV* pCheckpointData);



#define VK_INTEL_shader_integer_functions2 1
#define VK_INTEL_SHADER_INTEGER_FUNCTIONS_2_SPEC_VERSION 1
#define VK_INTEL_SHADER_INTEGER_FUNCTIONS_2_EXTENSION_NAME "VK_INTEL_shader_integer_functions2"
typedef struct VkPhysicalDeviceShaderIntegerFunctions2FeaturesINTEL {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           shaderIntegerFunctions2;
} VkPhysicalDeviceShaderIntegerFunctions2FeaturesINTEL;



#define VK_INTEL_performance_query 1
typedef struct VkPerformanceConfigurationINTEL_T* VkPerformanceConfigurationINTEL;
#define VK_INTEL_PERFORMANCE_QUERY_SPEC_VERSION 2
#define VK_INTEL_PERFORMANCE_QUERY_EXTENSION_NAME "VK_INTEL_performance_query"

typedef enum VkPerformanceConfigurationTypeINTEL {
    VK_PERFORMANCE_CONFIGURATION_TYPE_COMMAND_QUEUE_METRICS_DISCOVERY_ACTIVATED_INTEL = 0,
    VK_PERFORMANCE_CONFIGURATION_TYPE_BEGIN_RANGE_INTEL = VK_PERFORMANCE_CONFIGURATION_TYPE_COMMAND_QUEUE_METRICS_DISCOVERY_ACTIVATED_INTEL,
    VK_PERFORMANCE_CONFIGURATION_TYPE_END_RANGE_INTEL = VK_PERFORMANCE_CONFIGURATION_TYPE_COMMAND_QUEUE_METRICS_DISCOVERY_ACTIVATED_INTEL,
    VK_PERFORMANCE_CONFIGURATION_TYPE_RANGE_SIZE_INTEL = (VK_PERFORMANCE_CONFIGURATION_TYPE_COMMAND_QUEUE_METRICS_DISCOVERY_ACTIVATED_INTEL - VK_PERFORMANCE_CONFIGURATION_TYPE_COMMAND_QUEUE_METRICS_DISCOVERY_ACTIVATED_INTEL + 1),
    VK_PERFORMANCE_CONFIGURATION_TYPE_MAX_ENUM_INTEL = 0x7FFFFFFF
} VkPerformanceConfigurationTypeINTEL;

typedef enum VkQueryPoolSamplingModeINTEL {
    VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL = 0,
    VK_QUERY_POOL_SAMPLING_MODE_BEGIN_RANGE_INTEL = VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL,
    VK_QUERY_POOL_SAMPLING_MODE_END_RANGE_INTEL = VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL,
    VK_QUERY_POOL_SAMPLING_MODE_RANGE_SIZE_INTEL = (VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL - VK_QUERY_POOL_SAMPLING_MODE_MANUAL_INTEL + 1),
    VK_QUERY_POOL_SAMPLING_MODE_MAX_ENUM_INTEL = 0x7FFFFFFF
} VkQueryPoolSamplingModeINTEL;

typedef enum VkPerformanceOverrideTypeINTEL {
    VK_PERFORMANCE_OVERRIDE_TYPE_NULL_HARDWARE_INTEL = 0,
    VK_PERFORMANCE_OVERRIDE_TYPE_FLUSH_GPU_CACHES_INTEL = 1,
    VK_PERFORMANCE_OVERRIDE_TYPE_BEGIN_RANGE_INTEL = VK_PERFORMANCE_OVERRIDE_TYPE_NULL_HARDWARE_INTEL,
    VK_PERFORMANCE_OVERRIDE_TYPE_END_RANGE_INTEL = VK_PERFORMANCE_OVERRIDE_TYPE_FLUSH_GPU_CACHES_INTEL,
    VK_PERFORMANCE_OVERRIDE_TYPE_RANGE_SIZE_INTEL = (VK_PERFORMANCE_OVERRIDE_TYPE_FLUSH_GPU_CACHES_INTEL - VK_PERFORMANCE_OVERRIDE_TYPE_NULL_HARDWARE_INTEL + 1),
    VK_PERFORMANCE_OVERRIDE_TYPE_MAX_ENUM_INTEL = 0x7FFFFFFF
} VkPerformanceOverrideTypeINTEL;

typedef enum VkPerformanceParameterTypeINTEL {
    VK_PERFORMANCE_PARAMETER_TYPE_HW_COUNTERS_SUPPORTED_INTEL = 0,
    VK_PERFORMANCE_PARAMETER_TYPE_STREAM_MARKER_VALID_BITS_INTEL = 1,
    VK_PERFORMANCE_PARAMETER_TYPE_BEGIN_RANGE_INTEL = VK_PERFORMANCE_PARAMETER_TYPE_HW_COUNTERS_SUPPORTED_INTEL,
    VK_PERFORMANCE_PARAMETER_TYPE_END_RANGE_INTEL = VK_PERFORMANCE_PARAMETER_TYPE_STREAM_MARKER_VALID_BITS_INTEL,
    VK_PERFORMANCE_PARAMETER_TYPE_RANGE_SIZE_INTEL = (VK_PERFORMANCE_PARAMETER_TYPE_STREAM_MARKER_VALID_BITS_INTEL - VK_PERFORMANCE_PARAMETER_TYPE_HW_COUNTERS_SUPPORTED_INTEL + 1),
    VK_PERFORMANCE_PARAMETER_TYPE_MAX_ENUM_INTEL = 0x7FFFFFFF
} VkPerformanceParameterTypeINTEL;

typedef enum VkPerformanceValueTypeINTEL {
    VK_PERFORMANCE_VALUE_TYPE_UINT32_INTEL = 0,
    VK_PERFORMANCE_VALUE_TYPE_UINT64_INTEL = 1,
    VK_PERFORMANCE_VALUE_TYPE_FLOAT_INTEL = 2,
    VK_PERFORMANCE_VALUE_TYPE_BOOL_INTEL = 3,
    VK_PERFORMANCE_VALUE_TYPE_STRING_INTEL = 4,
    VK_PERFORMANCE_VALUE_TYPE_BEGIN_RANGE_INTEL = VK_PERFORMANCE_VALUE_TYPE_UINT32_INTEL,
    VK_PERFORMANCE_VALUE_TYPE_END_RANGE_INTEL = VK_PERFORMANCE_VALUE_TYPE_STRING_INTEL,
    VK_PERFORMANCE_VALUE_TYPE_RANGE_SIZE_INTEL = (VK_PERFORMANCE_VALUE_TYPE_STRING_INTEL - VK_PERFORMANCE_VALUE_TYPE_UINT32_INTEL + 1),
    VK_PERFORMANCE_VALUE_TYPE_MAX_ENUM_INTEL = 0x7FFFFFFF
} VkPerformanceValueTypeINTEL;
typedef union VkPerformanceValueDataINTEL {
    uint32_t       value32;
    uint64_t       value64;
    float          valueFloat;
    VkBool32       valueBool;
    const char*    valueString;
} VkPerformanceValueDataINTEL;

typedef struct VkPerformanceValueINTEL {
    VkPerformanceValueTypeINTEL    type;
    VkPerformanceValueDataINTEL    data;
} VkPerformanceValueINTEL;

typedef struct VkInitializePerformanceApiInfoINTEL {
    VkStructureType    sType;
    const void*        pNext;
    void*              pUserData;
} VkInitializePerformanceApiInfoINTEL;

typedef struct VkQueryPoolPerformanceQueryCreateInfoINTEL {
    VkStructureType                 sType;
    const void*                     pNext;
    VkQueryPoolSamplingModeINTEL    performanceCountersSampling;
} VkQueryPoolPerformanceQueryCreateInfoINTEL;

typedef VkQueryPoolPerformanceQueryCreateInfoINTEL VkQueryPoolCreateInfoINTEL;

typedef struct VkPerformanceMarkerInfoINTEL {
    VkStructureType    sType;
    const void*        pNext;
    uint64_t           marker;
} VkPerformanceMarkerInfoINTEL;

typedef struct VkPerformanceStreamMarkerInfoINTEL {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           marker;
} VkPerformanceStreamMarkerInfoINTEL;

typedef struct VkPerformanceOverrideInfoINTEL {
    VkStructureType                   sType;
    const void*                       pNext;
    VkPerformanceOverrideTypeINTEL    type;
    VkBool32                          enable;
    uint64_t                          parameter;
} VkPerformanceOverrideInfoINTEL;

typedef struct VkPerformanceConfigurationAcquireInfoINTEL {
    VkStructureType                        sType;
    const void*                            pNext;
    VkPerformanceConfigurationTypeINTEL    type;
} VkPerformanceConfigurationAcquireInfoINTEL;

typedef VkResult (VKAPI_PTR *PFN_vkInitializePerformanceApiINTEL)(VkDevice device, const VkInitializePerformanceApiInfoINTEL* pInitializeInfo);
typedef void (VKAPI_PTR *PFN_vkUninitializePerformanceApiINTEL)(VkDevice device);
typedef VkResult (VKAPI_PTR *PFN_vkCmdSetPerformanceMarkerINTEL)(VkCommandBuffer commandBuffer, const VkPerformanceMarkerInfoINTEL* pMarkerInfo);
typedef VkResult (VKAPI_PTR *PFN_vkCmdSetPerformanceStreamMarkerINTEL)(VkCommandBuffer commandBuffer, const VkPerformanceStreamMarkerInfoINTEL* pMarkerInfo);
typedef VkResult (VKAPI_PTR *PFN_vkCmdSetPerformanceOverrideINTEL)(VkCommandBuffer commandBuffer, const VkPerformanceOverrideInfoINTEL* pOverrideInfo);
typedef VkResult (VKAPI_PTR *PFN_vkAcquirePerformanceConfigurationINTEL)(VkDevice device, const VkPerformanceConfigurationAcquireInfoINTEL* pAcquireInfo, VkPerformanceConfigurationINTEL* pConfiguration);
typedef VkResult (VKAPI_PTR *PFN_vkReleasePerformanceConfigurationINTEL)(VkDevice device, VkPerformanceConfigurationINTEL configuration);
typedef VkResult (VKAPI_PTR *PFN_vkQueueSetPerformanceConfigurationINTEL)(VkQueue queue, VkPerformanceConfigurationINTEL configuration);
typedef VkResult (VKAPI_PTR *PFN_vkGetPerformanceParameterINTEL)(VkDevice device, VkPerformanceParameterTypeINTEL parameter, VkPerformanceValueINTEL* pValue);



#define VK_EXT_pci_bus_info 1
#define VK_EXT_PCI_BUS_INFO_SPEC_VERSION  2
#define VK_EXT_PCI_BUS_INFO_EXTENSION_NAME "VK_EXT_pci_bus_info"
typedef struct VkPhysicalDevicePCIBusInfoPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           pciDomain;
    uint32_t           pciBus;
    uint32_t           pciDevice;
    uint32_t           pciFunction;
} VkPhysicalDevicePCIBusInfoPropertiesEXT;



#define VK_AMD_display_native_hdr 1
#define VK_AMD_DISPLAY_NATIVE_HDR_SPEC_VERSION 1
#define VK_AMD_DISPLAY_NATIVE_HDR_EXTENSION_NAME "VK_AMD_display_native_hdr"
typedef struct VkDisplayNativeHdrSurfaceCapabilitiesAMD {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           localDimmingSupport;
} VkDisplayNativeHdrSurfaceCapabilitiesAMD;

typedef struct VkSwapchainDisplayNativeHdrCreateInfoAMD {
    VkStructureType    sType;
    const void*        pNext;
    VkBool32           localDimmingEnable;
} VkSwapchainDisplayNativeHdrCreateInfoAMD;

typedef void (VKAPI_PTR *PFN_vkSetLocalDimmingAMD)(VkDevice device, VkSwapchainKHR swapChain, VkBool32 localDimmingEnable);




#define VK_EXT_fragment_density_map 1
#define VK_EXT_FRAGMENT_DENSITY_MAP_SPEC_VERSION 1
#define VK_EXT_FRAGMENT_DENSITY_MAP_EXTENSION_NAME "VK_EXT_fragment_density_map"
typedef struct VkPhysicalDeviceFragmentDensityMapFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           fragmentDensityMap;
    VkBool32           fragmentDensityMapDynamic;
    VkBool32           fragmentDensityMapNonSubsampledImages;
} VkPhysicalDeviceFragmentDensityMapFeaturesEXT;

typedef struct VkPhysicalDeviceFragmentDensityMapPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkExtent2D         minFragmentDensityTexelSize;
    VkExtent2D         maxFragmentDensityTexelSize;
    VkBool32           fragmentDensityInvocations;
} VkPhysicalDeviceFragmentDensityMapPropertiesEXT;

typedef struct VkRenderPassFragmentDensityMapCreateInfoEXT {
    VkStructureType          sType;
    const void*              pNext;
    VkAttachmentReference    fragmentDensityMapAttachment;
} VkRenderPassFragmentDensityMapCreateInfoEXT;



#define VK_EXT_scalar_block_layout 1
#define VK_EXT_SCALAR_BLOCK_LAYOUT_SPEC_VERSION 1
#define VK_EXT_SCALAR_BLOCK_LAYOUT_EXTENSION_NAME "VK_EXT_scalar_block_layout"
typedef VkPhysicalDeviceScalarBlockLayoutFeatures VkPhysicalDeviceScalarBlockLayoutFeaturesEXT;



#define VK_GOOGLE_hlsl_functionality1 1
#define VK_GOOGLE_HLSL_FUNCTIONALITY1_SPEC_VERSION 1
#define VK_GOOGLE_HLSL_FUNCTIONALITY1_EXTENSION_NAME "VK_GOOGLE_hlsl_functionality1"


#define VK_GOOGLE_decorate_string 1
#define VK_GOOGLE_DECORATE_STRING_SPEC_VERSION 1
#define VK_GOOGLE_DECORATE_STRING_EXTENSION_NAME "VK_GOOGLE_decorate_string"


#define VK_EXT_subgroup_size_control 1
#define VK_EXT_SUBGROUP_SIZE_CONTROL_SPEC_VERSION 2
#define VK_EXT_SUBGROUP_SIZE_CONTROL_EXTENSION_NAME "VK_EXT_subgroup_size_control"
typedef struct VkPhysicalDeviceSubgroupSizeControlFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           subgroupSizeControl;
    VkBool32           computeFullSubgroups;
} VkPhysicalDeviceSubgroupSizeControlFeaturesEXT;

typedef struct VkPhysicalDeviceSubgroupSizeControlPropertiesEXT {
    VkStructureType       sType;
    void*                 pNext;
    uint32_t              minSubgroupSize;
    uint32_t              maxSubgroupSize;
    uint32_t              maxComputeWorkgroupSubgroups;
    VkShaderStageFlags    requiredSubgroupSizeStages;
} VkPhysicalDeviceSubgroupSizeControlPropertiesEXT;

typedef struct VkPipelineShaderStageRequiredSubgroupSizeCreateInfoEXT {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           requiredSubgroupSize;
} VkPipelineShaderStageRequiredSubgroupSizeCreateInfoEXT;



#define VK_AMD_shader_core_properties2 1
#define VK_AMD_SHADER_CORE_PROPERTIES_2_SPEC_VERSION 1
#define VK_AMD_SHADER_CORE_PROPERTIES_2_EXTENSION_NAME "VK_AMD_shader_core_properties2"

typedef enum VkShaderCorePropertiesFlagBitsAMD {
    VK_SHADER_CORE_PROPERTIES_FLAG_BITS_MAX_ENUM_AMD = 0x7FFFFFFF
} VkShaderCorePropertiesFlagBitsAMD;
typedef VkFlags VkShaderCorePropertiesFlagsAMD;
typedef struct VkPhysicalDeviceShaderCoreProperties2AMD {
    VkStructureType                   sType;
    void*                             pNext;
    VkShaderCorePropertiesFlagsAMD    shaderCoreFeatures;
    uint32_t                          activeComputeUnitCount;
} VkPhysicalDeviceShaderCoreProperties2AMD;



#define VK_AMD_device_coherent_memory 1
#define VK_AMD_DEVICE_COHERENT_MEMORY_SPEC_VERSION 1
#define VK_AMD_DEVICE_COHERENT_MEMORY_EXTENSION_NAME "VK_AMD_device_coherent_memory"
typedef struct VkPhysicalDeviceCoherentMemoryFeaturesAMD {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           deviceCoherentMemory;
} VkPhysicalDeviceCoherentMemoryFeaturesAMD;



#define VK_EXT_memory_budget 1
#define VK_EXT_MEMORY_BUDGET_SPEC_VERSION 1
#define VK_EXT_MEMORY_BUDGET_EXTENSION_NAME "VK_EXT_memory_budget"
typedef struct VkPhysicalDeviceMemoryBudgetPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkDeviceSize       heapBudget[VK_MAX_MEMORY_HEAPS];
    VkDeviceSize       heapUsage[VK_MAX_MEMORY_HEAPS];
} VkPhysicalDeviceMemoryBudgetPropertiesEXT;



#define VK_EXT_memory_priority 1
#define VK_EXT_MEMORY_PRIORITY_SPEC_VERSION 1
#define VK_EXT_MEMORY_PRIORITY_EXTENSION_NAME "VK_EXT_memory_priority"
typedef struct VkPhysicalDeviceMemoryPriorityFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           memoryPriority;
} VkPhysicalDeviceMemoryPriorityFeaturesEXT;

typedef struct VkMemoryPriorityAllocateInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    float              priority;
} VkMemoryPriorityAllocateInfoEXT;



#define VK_NV_dedicated_allocation_image_aliasing 1
#define VK_NV_DEDICATED_ALLOCATION_IMAGE_ALIASING_SPEC_VERSION 1
#define VK_NV_DEDICATED_ALLOCATION_IMAGE_ALIASING_EXTENSION_NAME "VK_NV_dedicated_allocation_image_aliasing"
typedef struct VkPhysicalDeviceDedicatedAllocationImageAliasingFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           dedicatedAllocationImageAliasing;
} VkPhysicalDeviceDedicatedAllocationImageAliasingFeaturesNV;



#define VK_EXT_buffer_device_address 1
#define VK_EXT_BUFFER_DEVICE_ADDRESS_SPEC_VERSION 2
#define VK_EXT_BUFFER_DEVICE_ADDRESS_EXTENSION_NAME "VK_EXT_buffer_device_address"
typedef struct VkPhysicalDeviceBufferDeviceAddressFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           bufferDeviceAddress;
    VkBool32           bufferDeviceAddressCaptureReplay;
    VkBool32           bufferDeviceAddressMultiDevice;
} VkPhysicalDeviceBufferDeviceAddressFeaturesEXT;

typedef VkPhysicalDeviceBufferDeviceAddressFeaturesEXT VkPhysicalDeviceBufferAddressFeaturesEXT;

typedef VkBufferDeviceAddressInfo VkBufferDeviceAddressInfoEXT;

typedef struct VkBufferDeviceAddressCreateInfoEXT {
    VkStructureType    sType;
    const void*        pNext;
    VkDeviceAddress    deviceAddress;
} VkBufferDeviceAddressCreateInfoEXT;

typedef VkDeviceAddress (VKAPI_PTR *PFN_vkGetBufferDeviceAddressEXT)(VkDevice device, const VkBufferDeviceAddressInfo* pInfo);




#define VK_EXT_tooling_info 1
#define VK_EXT_TOOLING_INFO_SPEC_VERSION  1
#define VK_EXT_TOOLING_INFO_EXTENSION_NAME "VK_EXT_tooling_info"

typedef enum VkToolPurposeFlagBitsEXT {
    VK_TOOL_PURPOSE_VALIDATION_BIT_EXT = 0x00000001,
    VK_TOOL_PURPOSE_PROFILING_BIT_EXT = 0x00000002,
    VK_TOOL_PURPOSE_TRACING_BIT_EXT = 0x00000004,
    VK_TOOL_PURPOSE_ADDITIONAL_FEATURES_BIT_EXT = 0x00000008,
    VK_TOOL_PURPOSE_MODIFYING_FEATURES_BIT_EXT = 0x00000010,
    VK_TOOL_PURPOSE_DEBUG_REPORTING_BIT_EXT = 0x00000020,
    VK_TOOL_PURPOSE_DEBUG_MARKERS_BIT_EXT = 0x00000040,
    VK_TOOL_PURPOSE_FLAG_BITS_MAX_ENUM_EXT = 0x7FFFFFFF
} VkToolPurposeFlagBitsEXT;
typedef VkFlags VkToolPurposeFlagsEXT;
typedef struct VkPhysicalDeviceToolPropertiesEXT {
    VkStructureType          sType;
    void*                    pNext;
    char                     name[VK_MAX_EXTENSION_NAME_SIZE];
    char                     version[VK_MAX_EXTENSION_NAME_SIZE];
    VkToolPurposeFlagsEXT    purposes;
    char                     description[VK_MAX_DESCRIPTION_SIZE];
    char                     layer[VK_MAX_EXTENSION_NAME_SIZE];
} VkPhysicalDeviceToolPropertiesEXT;

typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceToolPropertiesEXT)(VkPhysicalDevice physicalDevice, uint32_t* pToolCount, VkPhysicalDeviceToolPropertiesEXT* pToolProperties);




#define VK_EXT_separate_stencil_usage 1
#define VK_EXT_SEPARATE_STENCIL_USAGE_SPEC_VERSION 1
#define VK_EXT_SEPARATE_STENCIL_USAGE_EXTENSION_NAME "VK_EXT_separate_stencil_usage"
typedef VkImageStencilUsageCreateInfo VkImageStencilUsageCreateInfoEXT;



#define VK_EXT_validation_features 1
#define VK_EXT_VALIDATION_FEATURES_SPEC_VERSION 3
#define VK_EXT_VALIDATION_FEATURES_EXTENSION_NAME "VK_EXT_validation_features"

typedef enum VkValidationFeatureEnableEXT {
    VK_VALIDATION_FEATURE_ENABLE_GPU_ASSISTED_EXT = 0,
    VK_VALIDATION_FEATURE_ENABLE_GPU_ASSISTED_RESERVE_BINDING_SLOT_EXT = 1,
    VK_VALIDATION_FEATURE_ENABLE_BEST_PRACTICES_EXT = 2,
    VK_VALIDATION_FEATURE_ENABLE_DEBUG_PRINTF_EXT = 3,
    VK_VALIDATION_FEATURE_ENABLE_BEGIN_RANGE_EXT = VK_VALIDATION_FEATURE_ENABLE_GPU_ASSISTED_EXT,
    VK_VALIDATION_FEATURE_ENABLE_END_RANGE_EXT = VK_VALIDATION_FEATURE_ENABLE_DEBUG_PRINTF_EXT,
    VK_VALIDATION_FEATURE_ENABLE_RANGE_SIZE_EXT = (VK_VALIDATION_FEATURE_ENABLE_DEBUG_PRINTF_EXT - VK_VALIDATION_FEATURE_ENABLE_GPU_ASSISTED_EXT + 1),
    VK_VALIDATION_FEATURE_ENABLE_MAX_ENUM_EXT = 0x7FFFFFFF
} VkValidationFeatureEnableEXT;

typedef enum VkValidationFeatureDisableEXT {
    VK_VALIDATION_FEATURE_DISABLE_ALL_EXT = 0,
    VK_VALIDATION_FEATURE_DISABLE_SHADERS_EXT = 1,
    VK_VALIDATION_FEATURE_DISABLE_THREAD_SAFETY_EXT = 2,
    VK_VALIDATION_FEATURE_DISABLE_API_PARAMETERS_EXT = 3,
    VK_VALIDATION_FEATURE_DISABLE_OBJECT_LIFETIMES_EXT = 4,
    VK_VALIDATION_FEATURE_DISABLE_CORE_CHECKS_EXT = 5,
    VK_VALIDATION_FEATURE_DISABLE_UNIQUE_HANDLES_EXT = 6,
    VK_VALIDATION_FEATURE_DISABLE_BEGIN_RANGE_EXT = VK_VALIDATION_FEATURE_DISABLE_ALL_EXT,
    VK_VALIDATION_FEATURE_DISABLE_END_RANGE_EXT = VK_VALIDATION_FEATURE_DISABLE_UNIQUE_HANDLES_EXT,
    VK_VALIDATION_FEATURE_DISABLE_RANGE_SIZE_EXT = (VK_VALIDATION_FEATURE_DISABLE_UNIQUE_HANDLES_EXT - VK_VALIDATION_FEATURE_DISABLE_ALL_EXT + 1),
    VK_VALIDATION_FEATURE_DISABLE_MAX_ENUM_EXT = 0x7FFFFFFF
} VkValidationFeatureDisableEXT;
typedef struct VkValidationFeaturesEXT {
    VkStructureType                         sType;
    const void*                             pNext;
    uint32_t                                enabledValidationFeatureCount;
    const VkValidationFeatureEnableEXT*     pEnabledValidationFeatures;
    uint32_t                                disabledValidationFeatureCount;
    const VkValidationFeatureDisableEXT*    pDisabledValidationFeatures;
} VkValidationFeaturesEXT;



#define VK_NV_cooperative_matrix 1
#define VK_NV_COOPERATIVE_MATRIX_SPEC_VERSION 1
#define VK_NV_COOPERATIVE_MATRIX_EXTENSION_NAME "VK_NV_cooperative_matrix"

typedef enum VkComponentTypeNV {
    VK_COMPONENT_TYPE_FLOAT16_NV = 0,
    VK_COMPONENT_TYPE_FLOAT32_NV = 1,
    VK_COMPONENT_TYPE_FLOAT64_NV = 2,
    VK_COMPONENT_TYPE_SINT8_NV = 3,
    VK_COMPONENT_TYPE_SINT16_NV = 4,
    VK_COMPONENT_TYPE_SINT32_NV = 5,
    VK_COMPONENT_TYPE_SINT64_NV = 6,
    VK_COMPONENT_TYPE_UINT8_NV = 7,
    VK_COMPONENT_TYPE_UINT16_NV = 8,
    VK_COMPONENT_TYPE_UINT32_NV = 9,
    VK_COMPONENT_TYPE_UINT64_NV = 10,
    VK_COMPONENT_TYPE_BEGIN_RANGE_NV = VK_COMPONENT_TYPE_FLOAT16_NV,
    VK_COMPONENT_TYPE_END_RANGE_NV = VK_COMPONENT_TYPE_UINT64_NV,
    VK_COMPONENT_TYPE_RANGE_SIZE_NV = (VK_COMPONENT_TYPE_UINT64_NV - VK_COMPONENT_TYPE_FLOAT16_NV + 1),
    VK_COMPONENT_TYPE_MAX_ENUM_NV = 0x7FFFFFFF
} VkComponentTypeNV;

typedef enum VkScopeNV {
    VK_SCOPE_DEVICE_NV = 1,
    VK_SCOPE_WORKGROUP_NV = 2,
    VK_SCOPE_SUBGROUP_NV = 3,
    VK_SCOPE_QUEUE_FAMILY_NV = 5,
    VK_SCOPE_BEGIN_RANGE_NV = VK_SCOPE_DEVICE_NV,
    VK_SCOPE_END_RANGE_NV = VK_SCOPE_QUEUE_FAMILY_NV,
    VK_SCOPE_RANGE_SIZE_NV = (VK_SCOPE_QUEUE_FAMILY_NV - VK_SCOPE_DEVICE_NV + 1),
    VK_SCOPE_MAX_ENUM_NV = 0x7FFFFFFF
} VkScopeNV;
typedef struct VkCooperativeMatrixPropertiesNV {
    VkStructureType      sType;
    void*                pNext;
    uint32_t             MSize;
    uint32_t             NSize;
    uint32_t             KSize;
    VkComponentTypeNV    AType;
    VkComponentTypeNV    BType;
    VkComponentTypeNV    CType;
    VkComponentTypeNV    DType;
    VkScopeNV            scope;
} VkCooperativeMatrixPropertiesNV;

typedef struct VkPhysicalDeviceCooperativeMatrixFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           cooperativeMatrix;
    VkBool32           cooperativeMatrixRobustBufferAccess;
} VkPhysicalDeviceCooperativeMatrixFeaturesNV;

typedef struct VkPhysicalDeviceCooperativeMatrixPropertiesNV {
    VkStructureType       sType;
    void*                 pNext;
    VkShaderStageFlags    cooperativeMatrixSupportedStages;
} VkPhysicalDeviceCooperativeMatrixPropertiesNV;

typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceCooperativeMatrixPropertiesNV)(VkPhysicalDevice physicalDevice, uint32_t* pPropertyCount, VkCooperativeMatrixPropertiesNV* pProperties);




#define VK_NV_coverage_reduction_mode 1
#define VK_NV_COVERAGE_REDUCTION_MODE_SPEC_VERSION 1
#define VK_NV_COVERAGE_REDUCTION_MODE_EXTENSION_NAME "VK_NV_coverage_reduction_mode"

typedef enum VkCoverageReductionModeNV {
    VK_COVERAGE_REDUCTION_MODE_MERGE_NV = 0,
    VK_COVERAGE_REDUCTION_MODE_TRUNCATE_NV = 1,
    VK_COVERAGE_REDUCTION_MODE_BEGIN_RANGE_NV = VK_COVERAGE_REDUCTION_MODE_MERGE_NV,
    VK_COVERAGE_REDUCTION_MODE_END_RANGE_NV = VK_COVERAGE_REDUCTION_MODE_TRUNCATE_NV,
    VK_COVERAGE_REDUCTION_MODE_RANGE_SIZE_NV = (VK_COVERAGE_REDUCTION_MODE_TRUNCATE_NV - VK_COVERAGE_REDUCTION_MODE_MERGE_NV + 1),
    VK_COVERAGE_REDUCTION_MODE_MAX_ENUM_NV = 0x7FFFFFFF
} VkCoverageReductionModeNV;
typedef VkFlags VkPipelineCoverageReductionStateCreateFlagsNV;
typedef struct VkPhysicalDeviceCoverageReductionModeFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           coverageReductionMode;
} VkPhysicalDeviceCoverageReductionModeFeaturesNV;

typedef struct VkPipelineCoverageReductionStateCreateInfoNV {
    VkStructureType                                  sType;
    const void*                                      pNext;
    VkPipelineCoverageReductionStateCreateFlagsNV    flags;
    VkCoverageReductionModeNV                        coverageReductionMode;
} VkPipelineCoverageReductionStateCreateInfoNV;

typedef struct VkFramebufferMixedSamplesCombinationNV {
    VkStructureType              sType;
    void*                        pNext;
    VkCoverageReductionModeNV    coverageReductionMode;
    VkSampleCountFlagBits        rasterizationSamples;
    VkSampleCountFlags           depthStencilSamples;
    VkSampleCountFlags           colorSamples;
} VkFramebufferMixedSamplesCombinationNV;

typedef VkResult (VKAPI_PTR *PFN_vkGetPhysicalDeviceSupportedFramebufferMixedSamplesCombinationsNV)(VkPhysicalDevice physicalDevice, uint32_t* pCombinationCount, VkFramebufferMixedSamplesCombinationNV* pCombinations);




#define VK_EXT_fragment_shader_interlock 1
#define VK_EXT_FRAGMENT_SHADER_INTERLOCK_SPEC_VERSION 1
#define VK_EXT_FRAGMENT_SHADER_INTERLOCK_EXTENSION_NAME "VK_EXT_fragment_shader_interlock"
typedef struct VkPhysicalDeviceFragmentShaderInterlockFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           fragmentShaderSampleInterlock;
    VkBool32           fragmentShaderPixelInterlock;
    VkBool32           fragmentShaderShadingRateInterlock;
} VkPhysicalDeviceFragmentShaderInterlockFeaturesEXT;



#define VK_EXT_ycbcr_image_arrays 1
#define VK_EXT_YCBCR_IMAGE_ARRAYS_SPEC_VERSION 1
#define VK_EXT_YCBCR_IMAGE_ARRAYS_EXTENSION_NAME "VK_EXT_ycbcr_image_arrays"
typedef struct VkPhysicalDeviceYcbcrImageArraysFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           ycbcrImageArrays;
} VkPhysicalDeviceYcbcrImageArraysFeaturesEXT;



#define VK_EXT_headless_surface 1
#define VK_EXT_HEADLESS_SURFACE_SPEC_VERSION 1
#define VK_EXT_HEADLESS_SURFACE_EXTENSION_NAME "VK_EXT_headless_surface"
typedef VkFlags VkHeadlessSurfaceCreateFlagsEXT;
typedef struct VkHeadlessSurfaceCreateInfoEXT {
    VkStructureType                    sType;
    const void*                        pNext;
    VkHeadlessSurfaceCreateFlagsEXT    flags;
} VkHeadlessSurfaceCreateInfoEXT;

typedef VkResult (VKAPI_PTR *PFN_vkCreateHeadlessSurfaceEXT)(VkInstance instance, const VkHeadlessSurfaceCreateInfoEXT* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkSurfaceKHR* pSurface);




#define VK_EXT_line_rasterization 1
#define VK_EXT_LINE_RASTERIZATION_SPEC_VERSION 1
#define VK_EXT_LINE_RASTERIZATION_EXTENSION_NAME "VK_EXT_line_rasterization"

typedef enum VkLineRasterizationModeEXT {
    VK_LINE_RASTERIZATION_MODE_DEFAULT_EXT = 0,
    VK_LINE_RASTERIZATION_MODE_RECTANGULAR_EXT = 1,
    VK_LINE_RASTERIZATION_MODE_BRESENHAM_EXT = 2,
    VK_LINE_RASTERIZATION_MODE_RECTANGULAR_SMOOTH_EXT = 3,
    VK_LINE_RASTERIZATION_MODE_BEGIN_RANGE_EXT = VK_LINE_RASTERIZATION_MODE_DEFAULT_EXT,
    VK_LINE_RASTERIZATION_MODE_END_RANGE_EXT = VK_LINE_RASTERIZATION_MODE_RECTANGULAR_SMOOTH_EXT,
    VK_LINE_RASTERIZATION_MODE_RANGE_SIZE_EXT = (VK_LINE_RASTERIZATION_MODE_RECTANGULAR_SMOOTH_EXT - VK_LINE_RASTERIZATION_MODE_DEFAULT_EXT + 1),
    VK_LINE_RASTERIZATION_MODE_MAX_ENUM_EXT = 0x7FFFFFFF
} VkLineRasterizationModeEXT;
typedef struct VkPhysicalDeviceLineRasterizationFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           rectangularLines;
    VkBool32           bresenhamLines;
    VkBool32           smoothLines;
    VkBool32           stippledRectangularLines;
    VkBool32           stippledBresenhamLines;
    VkBool32           stippledSmoothLines;
} VkPhysicalDeviceLineRasterizationFeaturesEXT;

typedef struct VkPhysicalDeviceLineRasterizationPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    uint32_t           lineSubPixelPrecisionBits;
} VkPhysicalDeviceLineRasterizationPropertiesEXT;

typedef struct VkPipelineRasterizationLineStateCreateInfoEXT {
    VkStructureType               sType;
    const void*                   pNext;
    VkLineRasterizationModeEXT    lineRasterizationMode;
    VkBool32                      stippledLineEnable;
    uint32_t                      lineStippleFactor;
    uint16_t                      lineStipplePattern;
} VkPipelineRasterizationLineStateCreateInfoEXT;

typedef void (VKAPI_PTR *PFN_vkCmdSetLineStippleEXT)(VkCommandBuffer commandBuffer, uint32_t lineStippleFactor, uint16_t lineStipplePattern);




#define VK_EXT_host_query_reset 1
#define VK_EXT_HOST_QUERY_RESET_SPEC_VERSION 1
#define VK_EXT_HOST_QUERY_RESET_EXTENSION_NAME "VK_EXT_host_query_reset"
typedef VkPhysicalDeviceHostQueryResetFeatures VkPhysicalDeviceHostQueryResetFeaturesEXT;

typedef void (VKAPI_PTR *PFN_vkResetQueryPoolEXT)(VkDevice device, VkQueryPool queryPool, uint32_t firstQuery, uint32_t queryCount);




#define VK_EXT_index_type_uint8 1
#define VK_EXT_INDEX_TYPE_UINT8_SPEC_VERSION 1
#define VK_EXT_INDEX_TYPE_UINT8_EXTENSION_NAME "VK_EXT_index_type_uint8"
typedef struct VkPhysicalDeviceIndexTypeUint8FeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           indexTypeUint8;
} VkPhysicalDeviceIndexTypeUint8FeaturesEXT;



#define VK_EXT_shader_demote_to_helper_invocation 1
#define VK_EXT_SHADER_DEMOTE_TO_HELPER_INVOCATION_SPEC_VERSION 1
#define VK_EXT_SHADER_DEMOTE_TO_HELPER_INVOCATION_EXTENSION_NAME "VK_EXT_shader_demote_to_helper_invocation"
typedef struct VkPhysicalDeviceShaderDemoteToHelperInvocationFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           shaderDemoteToHelperInvocation;
} VkPhysicalDeviceShaderDemoteToHelperInvocationFeaturesEXT;



#define VK_NV_device_generated_commands 1
typedef struct VkIndirectCommandsLayoutNV_T* VkIndirectCommandsLayoutNV;
#define VK_NV_DEVICE_GENERATED_COMMANDS_SPEC_VERSION 3
#define VK_NV_DEVICE_GENERATED_COMMANDS_EXTENSION_NAME "VK_NV_device_generated_commands"

typedef enum VkIndirectCommandsTokenTypeNV {
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_SHADER_GROUP_NV = 0,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_STATE_FLAGS_NV = 1,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_INDEX_BUFFER_NV = 2,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_VERTEX_BUFFER_NV = 3,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_PUSH_CONSTANT_NV = 4,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_INDEXED_NV = 5,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_NV = 6,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_TASKS_NV = 7,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_BEGIN_RANGE_NV = VK_INDIRECT_COMMANDS_TOKEN_TYPE_SHADER_GROUP_NV,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_END_RANGE_NV = VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_TASKS_NV,
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_RANGE_SIZE_NV = (VK_INDIRECT_COMMANDS_TOKEN_TYPE_DRAW_TASKS_NV - VK_INDIRECT_COMMANDS_TOKEN_TYPE_SHADER_GROUP_NV + 1),
    VK_INDIRECT_COMMANDS_TOKEN_TYPE_MAX_ENUM_NV = 0x7FFFFFFF
} VkIndirectCommandsTokenTypeNV;

typedef enum VkIndirectStateFlagBitsNV {
    VK_INDIRECT_STATE_FLAG_FRONTFACE_BIT_NV = 0x00000001,
    VK_INDIRECT_STATE_FLAG_BITS_MAX_ENUM_NV = 0x7FFFFFFF
} VkIndirectStateFlagBitsNV;
typedef VkFlags VkIndirectStateFlagsNV;

typedef enum VkIndirectCommandsLayoutUsageFlagBitsNV {
    VK_INDIRECT_COMMANDS_LAYOUT_USAGE_EXPLICIT_PREPROCESS_BIT_NV = 0x00000001,
    VK_INDIRECT_COMMANDS_LAYOUT_USAGE_INDEXED_SEQUENCES_BIT_NV = 0x00000002,
    VK_INDIRECT_COMMANDS_LAYOUT_USAGE_UNORDERED_SEQUENCES_BIT_NV = 0x00000004,
    VK_INDIRECT_COMMANDS_LAYOUT_USAGE_FLAG_BITS_MAX_ENUM_NV = 0x7FFFFFFF
} VkIndirectCommandsLayoutUsageFlagBitsNV;
typedef VkFlags VkIndirectCommandsLayoutUsageFlagsNV;
typedef struct VkPhysicalDeviceDeviceGeneratedCommandsPropertiesNV {
    VkStructureType    sType;
    const void*        pNext;
    uint32_t           maxGraphicsShaderGroupCount;
    uint32_t           maxIndirectSequenceCount;
    uint32_t           maxIndirectCommandsTokenCount;
    uint32_t           maxIndirectCommandsStreamCount;
    uint32_t           maxIndirectCommandsTokenOffset;
    uint32_t           maxIndirectCommandsStreamStride;
    uint32_t           minSequencesCountBufferOffsetAlignment;
    uint32_t           minSequencesIndexBufferOffsetAlignment;
    uint32_t           minIndirectCommandsBufferOffsetAlignment;
} VkPhysicalDeviceDeviceGeneratedCommandsPropertiesNV;

typedef struct VkPhysicalDeviceDeviceGeneratedCommandsFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           deviceGeneratedCommands;
} VkPhysicalDeviceDeviceGeneratedCommandsFeaturesNV;

typedef struct VkGraphicsShaderGroupCreateInfoNV {
    VkStructureType                                 sType;
    const void*                                     pNext;
    uint32_t                                        stageCount;
    const VkPipelineShaderStageCreateInfo*          pStages;
    const VkPipelineVertexInputStateCreateInfo*     pVertexInputState;
    const VkPipelineTessellationStateCreateInfo*    pTessellationState;
} VkGraphicsShaderGroupCreateInfoNV;

typedef struct VkGraphicsPipelineShaderGroupsCreateInfoNV {
    VkStructureType                             sType;
    const void*                                 pNext;
    uint32_t                                    groupCount;
    const VkGraphicsShaderGroupCreateInfoNV*    pGroups;
    uint32_t                                    pipelineCount;
    const VkPipeline*                           pPipelines;
} VkGraphicsPipelineShaderGroupsCreateInfoNV;

typedef struct VkBindShaderGroupIndirectCommandNV {
    uint32_t    groupIndex;
} VkBindShaderGroupIndirectCommandNV;

typedef struct VkBindIndexBufferIndirectCommandNV {
    VkDeviceAddress    bufferAddress;
    uint32_t           size;
    VkIndexType        indexType;
} VkBindIndexBufferIndirectCommandNV;

typedef struct VkBindVertexBufferIndirectCommandNV {
    VkDeviceAddress    bufferAddress;
    uint32_t           size;
    uint32_t           stride;
} VkBindVertexBufferIndirectCommandNV;

typedef struct VkSetStateFlagsIndirectCommandNV {
    uint32_t    data;
} VkSetStateFlagsIndirectCommandNV;

typedef struct VkIndirectCommandsStreamNV {
    VkBuffer        buffer;
    VkDeviceSize    offset;
} VkIndirectCommandsStreamNV;

typedef struct VkIndirectCommandsLayoutTokenNV {
    VkStructureType                  sType;
    const void*                      pNext;
    VkIndirectCommandsTokenTypeNV    tokenType;
    uint32_t                         stream;
    uint32_t                         offset;
    uint32_t                         vertexBindingUnit;
    VkBool32                         vertexDynamicStride;
    VkPipelineLayout                 pushconstantPipelineLayout;
    VkShaderStageFlags               pushconstantShaderStageFlags;
    uint32_t                         pushconstantOffset;
    uint32_t                         pushconstantSize;
    VkIndirectStateFlagsNV           indirectStateFlags;
    uint32_t                         indexTypeCount;
    const VkIndexType*               pIndexTypes;
    const uint32_t*                  pIndexTypeValues;
} VkIndirectCommandsLayoutTokenNV;

typedef struct VkIndirectCommandsLayoutCreateInfoNV {
    VkStructureType                           sType;
    const void*                               pNext;
    VkIndirectCommandsLayoutUsageFlagsNV      flags;
    VkPipelineBindPoint                       pipelineBindPoint;
    uint32_t                                  tokenCount;
    const VkIndirectCommandsLayoutTokenNV*    pTokens;
    uint32_t                                  streamCount;
    const uint32_t*                           pStreamStrides;
} VkIndirectCommandsLayoutCreateInfoNV;

typedef struct VkGeneratedCommandsInfoNV {
    VkStructureType                      sType;
    const void*                          pNext;
    VkPipelineBindPoint                  pipelineBindPoint;
    VkPipeline                           pipeline;
    VkIndirectCommandsLayoutNV           indirectCommandsLayout;
    uint32_t                             streamCount;
    const VkIndirectCommandsStreamNV*    pStreams;
    uint32_t                             sequencesCount;
    VkBuffer                             preprocessBuffer;
    VkDeviceSize                         preprocessOffset;
    VkDeviceSize                         preprocessSize;
    VkBuffer                             sequencesCountBuffer;
    VkDeviceSize                         sequencesCountOffset;
    VkBuffer                             sequencesIndexBuffer;
    VkDeviceSize                         sequencesIndexOffset;
} VkGeneratedCommandsInfoNV;

typedef struct VkGeneratedCommandsMemoryRequirementsInfoNV {
    VkStructureType               sType;
    const void*                   pNext;
    VkPipelineBindPoint           pipelineBindPoint;
    VkPipeline                    pipeline;
    VkIndirectCommandsLayoutNV    indirectCommandsLayout;
    uint32_t                      maxSequencesCount;
} VkGeneratedCommandsMemoryRequirementsInfoNV;

typedef void (VKAPI_PTR *PFN_vkGetGeneratedCommandsMemoryRequirementsNV)(VkDevice device, const VkGeneratedCommandsMemoryRequirementsInfoNV* pInfo, VkMemoryRequirements2* pMemoryRequirements);
typedef void (VKAPI_PTR *PFN_vkCmdPreprocessGeneratedCommandsNV)(VkCommandBuffer commandBuffer, const VkGeneratedCommandsInfoNV* pGeneratedCommandsInfo);
typedef void (VKAPI_PTR *PFN_vkCmdExecuteGeneratedCommandsNV)(VkCommandBuffer commandBuffer, VkBool32 isPreprocessed, const VkGeneratedCommandsInfoNV* pGeneratedCommandsInfo);
typedef void (VKAPI_PTR *PFN_vkCmdBindPipelineShaderGroupNV)(VkCommandBuffer commandBuffer, VkPipelineBindPoint pipelineBindPoint, VkPipeline pipeline, uint32_t groupIndex);
typedef VkResult (VKAPI_PTR *PFN_vkCreateIndirectCommandsLayoutNV)(VkDevice device, const VkIndirectCommandsLayoutCreateInfoNV* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkIndirectCommandsLayoutNV* pIndirectCommandsLayout);
typedef void (VKAPI_PTR *PFN_vkDestroyIndirectCommandsLayoutNV)(VkDevice device, VkIndirectCommandsLayoutNV indirectCommandsLayout, const VkAllocationCallbacks* pAllocator);


#define VK_EXT_texel_buffer_alignment 1
#define VK_EXT_TEXEL_BUFFER_ALIGNMENT_SPEC_VERSION 1
#define VK_EXT_TEXEL_BUFFER_ALIGNMENT_EXTENSION_NAME "VK_EXT_texel_buffer_alignment"
typedef struct VkPhysicalDeviceTexelBufferAlignmentFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           texelBufferAlignment;
} VkPhysicalDeviceTexelBufferAlignmentFeaturesEXT;

typedef struct VkPhysicalDeviceTexelBufferAlignmentPropertiesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkDeviceSize       storageTexelBufferOffsetAlignmentBytes;
    VkBool32           storageTexelBufferOffsetSingleTexelAlignment;
    VkDeviceSize       uniformTexelBufferOffsetAlignmentBytes;
    VkBool32           uniformTexelBufferOffsetSingleTexelAlignment;
} VkPhysicalDeviceTexelBufferAlignmentPropertiesEXT;



#define VK_QCOM_render_pass_transform 1
#define VK_QCOM_RENDER_PASS_TRANSFORM_SPEC_VERSION 1
#define VK_QCOM_RENDER_PASS_TRANSFORM_EXTENSION_NAME "VK_QCOM_render_pass_transform"
typedef struct VkRenderPassTransformBeginInfoQCOM {
    VkStructureType                  sType;
    void*                            pNext;
    VkSurfaceTransformFlagBitsKHR    transform;
} VkRenderPassTransformBeginInfoQCOM;

typedef struct VkCommandBufferInheritanceRenderPassTransformInfoQCOM {
    VkStructureType                  sType;
    void*                            pNext;
    VkSurfaceTransformFlagBitsKHR    transform;
    VkRect2D                         renderArea;
} VkCommandBufferInheritanceRenderPassTransformInfoQCOM;



#define VK_GOOGLE_user_type 1
#define VK_GOOGLE_USER_TYPE_SPEC_VERSION  1
#define VK_GOOGLE_USER_TYPE_EXTENSION_NAME "VK_GOOGLE_user_type"


#define VK_EXT_pipeline_creation_cache_control 1
#define VK_EXT_PIPELINE_CREATION_CACHE_CONTROL_SPEC_VERSION 2
#define VK_EXT_PIPELINE_CREATION_CACHE_CONTROL_EXTENSION_NAME "VK_EXT_pipeline_creation_cache_control"
typedef struct VkPhysicalDevicePipelineCreationCacheControlFeaturesEXT {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           pipelineCreationCacheControl;
} VkPhysicalDevicePipelineCreationCacheControlFeaturesEXT;



#define VK_NV_device_diagnostics_config 1
#define VK_NV_DEVICE_DIAGNOSTICS_CONFIG_SPEC_VERSION 1
#define VK_NV_DEVICE_DIAGNOSTICS_CONFIG_EXTENSION_NAME "VK_NV_device_diagnostics_config"

typedef enum VkDeviceDiagnosticsConfigFlagBitsNV {
    VK_DEVICE_DIAGNOSTICS_CONFIG_ENABLE_SHADER_DEBUG_INFO_BIT_NV = 0x00000001,
    VK_DEVICE_DIAGNOSTICS_CONFIG_ENABLE_RESOURCE_TRACKING_BIT_NV = 0x00000002,
    VK_DEVICE_DIAGNOSTICS_CONFIG_ENABLE_AUTOMATIC_CHECKPOINTS_BIT_NV = 0x00000004,
    VK_DEVICE_DIAGNOSTICS_CONFIG_FLAG_BITS_MAX_ENUM_NV = 0x7FFFFFFF
} VkDeviceDiagnosticsConfigFlagBitsNV;
typedef VkFlags VkDeviceDiagnosticsConfigFlagsNV;
typedef struct VkPhysicalDeviceDiagnosticsConfigFeaturesNV {
    VkStructureType    sType;
    void*              pNext;
    VkBool32           diagnosticsConfig;
} VkPhysicalDeviceDiagnosticsConfigFeaturesNV;

typedef struct VkDeviceDiagnosticsConfigCreateInfoNV {
    VkStructureType                     sType;
    const void*                         pNext;
    VkDeviceDiagnosticsConfigFlagsNV    flags;
} VkDeviceDiagnosticsConfigCreateInfoNV;
