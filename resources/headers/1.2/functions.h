
typedef void (VKAPI_PTR *PFN_vkCmdDrawIndirectCount)(VkCommandBuffer commandBuffer, VkBuffer buffer, VkDeviceSize offset, VkBuffer countBuffer, VkDeviceSize countBufferOffset, uint32_t maxDrawCount, uint32_t stride);
typedef void (VKAPI_PTR *PFN_vkCmdDrawIndexedIndirectCount)(VkCommandBuffer commandBuffer, VkBuffer buffer, VkDeviceSize offset, VkBuffer countBuffer, VkDeviceSize countBufferOffset, uint32_t maxDrawCount, uint32_t stride);
typedef VkResult (VKAPI_PTR *PFN_vkCreateRenderPass2)(VkDevice device, const VkRenderPassCreateInfo2* pCreateInfo, const VkAllocationCallbacks* pAllocator, VkRenderPass* pRenderPass);
typedef void (VKAPI_PTR *PFN_vkCmdBeginRenderPass2)(VkCommandBuffer commandBuffer, const VkRenderPassBeginInfo*      pRenderPassBegin, const VkSubpassBeginInfo*      pSubpassBeginInfo);
typedef void (VKAPI_PTR *PFN_vkCmdNextSubpass2)(VkCommandBuffer commandBuffer, const VkSubpassBeginInfo*      pSubpassBeginInfo, const VkSubpassEndInfo*        pSubpassEndInfo);
typedef void (VKAPI_PTR *PFN_vkCmdEndRenderPass2)(VkCommandBuffer commandBuffer, const VkSubpassEndInfo*        pSubpassEndInfo);
typedef void (VKAPI_PTR *PFN_vkResetQueryPool)(VkDevice device, VkQueryPool queryPool, uint32_t firstQuery, uint32_t queryCount);
typedef VkResult (VKAPI_PTR *PFN_vkGetSemaphoreCounterValue)(VkDevice device, VkSemaphore semaphore, uint64_t* pValue);
typedef VkResult (VKAPI_PTR *PFN_vkWaitSemaphores)(VkDevice device, const VkSemaphoreWaitInfo* pWaitInfo, uint64_t timeout);
typedef VkResult (VKAPI_PTR *PFN_vkSignalSemaphore)(VkDevice device, const VkSemaphoreSignalInfo* pSignalInfo);
typedef VkDeviceAddress (VKAPI_PTR *PFN_vkGetBufferDeviceAddress)(VkDevice device, const VkBufferDeviceAddressInfo* pInfo);
typedef uint64_t (VKAPI_PTR *PFN_vkGetBufferOpaqueCaptureAddress)(VkDevice device, const VkBufferDeviceAddressInfo* pInfo);
typedef uint64_t (VKAPI_PTR *PFN_vkGetDeviceMemoryOpaqueCaptureAddress)(VkDevice device, const VkDeviceMemoryOpaqueCaptureAddressInfo* pInfo);
