<?php

/**
 * This file is part of Bic Engine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

use FFI\CData;
use Bic\Vulkan\VkAllocationCallbacksPtr;
use Bic\Vulkan\VkBuffer;
use Bic\Vulkan\VkBufferDeviceAddressInfoPtr;
use Bic\Vulkan\VkCommandBuffer;
use Bic\Vulkan\VkDevice;
use Bic\Vulkan\VkDeviceMemoryOpaqueCaptureAddressInfoPtr;
use Bic\Vulkan\VkQueryPool;
use Bic\Vulkan\VkRenderPassBeginInfoPtr;
use Bic\Vulkan\VkRenderPassCreateInfo2Ptr;
use Bic\Vulkan\VkSemaphore;
use Bic\Vulkan\VkSemaphoreSignalInfoPtr;
use Bic\Vulkan\VkSemaphoreWaitInfoPtr;
use Bic\Vulkan\VkSubpassBeginInfoPtr;
use Bic\Vulkan\VkSubpassEndInfoPtr;

/**
 * @mixin Vulkan12Interface
 * @version 1.2
 */
trait Vulkan12MethodsTrait
{
    /**
     * @since 1.2
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $buffer <<Native("VkBuffer")>>
     * @param int $offset <<Native("VkDeviceSize")>>
     * @param CData|VkBuffer $countBuffer <<Native("VkBuffer")>>
     * @param int $countBufferOffset <<Native("VkDeviceSize")>>
     * @param int $maxDrawCount <<Native("uint32_t")>>
     * @param int $stride <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdDrawIndirectCount(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        CData $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride
    ): void {
        assert(version_compare($this->info->version, '1.2') >= 0, 'vkCmdDrawIndirectCount required Vulkan v1.2 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdDrawIndirectCount($commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset, $maxDrawCount, $stride);
    }

    /**
     * @since 1.2
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|VkBuffer $buffer <<Native("VkBuffer")>>
     * @param int $offset <<Native("VkDeviceSize")>>
     * @param CData|VkBuffer $countBuffer <<Native("VkBuffer")>>
     * @param int $countBufferOffset <<Native("VkDeviceSize")>>
     * @param int $maxDrawCount <<Native("uint32_t")>>
     * @param int $stride <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdDrawIndexedIndirectCount(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        CData $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride
    ): void {
        assert(version_compare($this->info->version, '1.2') >= 0, 'vkCmdDrawIndexedIndirectCount required Vulkan v1.2 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdDrawIndexedIndirectCount($commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset, $maxDrawCount, $stride);
    }

    /**
     * @since 1.2
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkRenderPassCreateInfo2Ptr $pCreateInfo <<Native("const VkRenderPassCreateInfo2*")>>
     * @param CData|null|VkAllocationCallbacksPtr $pAllocator <<Native("const VkAllocationCallbacks*")>>
     * @param CData|null $pRenderPass <<Native("VkRenderPass*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkCreateRenderPass2(CData $device, ?CData $pCreateInfo, ?CData $pAllocator, ?CData $pRenderPass): int
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'VkRenderPass required Vulkan v1.2 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkCreateRenderPass2($device, $pCreateInfo, $pAllocator, $pRenderPass);
    }

    /**
     * @since 1.2
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|null|VkRenderPassBeginInfoPtr $pRenderPassBegin <<Native("const VkRenderPassBeginInfo*")>>
     * @param CData|null|VkSubpassBeginInfoPtr $pSubpassBeginInfo <<Native("const VkSubpassBeginInfo*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdBeginRenderPass2(CData $commandBuffer, ?CData $pRenderPassBegin, ?CData $pSubpassBeginInfo): void
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'VkSubpassBeginInfo required Vulkan v1.2 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdBeginRenderPass2($commandBuffer, $pRenderPassBegin, $pSubpassBeginInfo);
    }

    /**
     * @since 1.2
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|null|VkSubpassBeginInfoPtr $pSubpassBeginInfo <<Native("const VkSubpassBeginInfo*")>>
     * @param CData|null|VkSubpassEndInfoPtr $pSubpassEndInfo <<Native("const VkSubpassEndInfo*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdNextSubpass2(CData $commandBuffer, ?CData $pSubpassBeginInfo, ?CData $pSubpassEndInfo): void
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'VkSubpassEndInfo required Vulkan v1.2 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdNextSubpass2($commandBuffer, $pSubpassBeginInfo, $pSubpassEndInfo);
    }

    /**
     * @since 1.2
     * @param CData|VkCommandBuffer $commandBuffer <<Native("VkCommandBuffer")>>
     * @param CData|null|VkSubpassEndInfoPtr $pSubpassEndInfo <<Native("const VkSubpassEndInfo*")>>
     * @return void <<Native("void")>>
     */
    public function vkCmdEndRenderPass2(CData $commandBuffer, ?CData $pSubpassEndInfo): void
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'VkSubpassEndInfo required Vulkan v1.2 (current v' . $this->info->version . ')');

        $this->info->ffi->vkCmdEndRenderPass2($commandBuffer, $pSubpassEndInfo);
    }

    /**
     * @since 1.2
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkQueryPool $queryPool <<Native("VkQueryPool")>>
     * @param int $firstQuery <<Native("uint32_t")>>
     * @param int $queryCount <<Native("uint32_t")>>
     * @return void <<Native("void")>>
     */
    public function vkResetQueryPool(CData $device, CData $queryPool, int $firstQuery, int $queryCount): void
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'vkResetQueryPool required Vulkan v1.2 (current v' . $this->info->version . ')');

        $this->info->ffi->vkResetQueryPool($device, $queryPool, $firstQuery, $queryCount);
    }

    /**
     * @since 1.2
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|VkSemaphore $semaphore <<Native("VkSemaphore")>>
     * @param CData|null|\FFI\CIntPtr $pValue <<Native("uint64_t*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkGetSemaphoreCounterValue(CData $device, CData $semaphore, ?CData $pValue): int
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'vkGetSemaphoreCounterValue required Vulkan v1.2 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetSemaphoreCounterValue($device, $semaphore, $pValue);
    }

    /**
     * @since 1.2
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkSemaphoreWaitInfoPtr $pWaitInfo <<Native("const VkSemaphoreWaitInfo*")>>
     * @param int $timeout <<Native("uint64_t")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkWaitSemaphores(CData $device, ?CData $pWaitInfo, int $timeout): int
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'VkSemaphoreWaitInfo required Vulkan v1.2 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkWaitSemaphores($device, $pWaitInfo, $timeout);
    }

    /**
     * @since 1.2
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkSemaphoreSignalInfoPtr $pSignalInfo <<Native("const VkSemaphoreSignalInfo*")>>
     * @return int <<Native("VkResult")>>
     */
    public function vkSignalSemaphore(CData $device, ?CData $pSignalInfo): int
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'VkSemaphoreSignalInfo required Vulkan v1.2 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkSignalSemaphore($device, $pSignalInfo);
    }

    /**
     * @since 1.2
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkBufferDeviceAddressInfoPtr $pInfo <<Native("const VkBufferDeviceAddressInfo*")>>
     * @return int <<Native("VkDeviceAddress")>>
     */
    public function vkGetBufferDeviceAddress(CData $device, ?CData $pInfo): int
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'VkBufferDeviceAddressInfo required Vulkan v1.2 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetBufferDeviceAddress($device, $pInfo);
    }

    /**
     * @since 1.2
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkBufferDeviceAddressInfoPtr $pInfo <<Native("const VkBufferDeviceAddressInfo*")>>
     * @return int <<Native("uint64_t")>>
     */
    public function vkGetBufferOpaqueCaptureAddress(CData $device, ?CData $pInfo): int
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'VkBufferDeviceAddressInfo required Vulkan v1.2 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetBufferOpaqueCaptureAddress($device, $pInfo);
    }

    /**
     * @since 1.2
     * @param CData|VkDevice $device <<Native("VkDevice")>>
     * @param CData|null|VkDeviceMemoryOpaqueCaptureAddressInfoPtr $pInfo <<Native("const VkDeviceMemoryOpaqueCaptureAddressInfo*")>>
     * @return int <<Native("uint64_t")>>
     */
    public function vkGetDeviceMemoryOpaqueCaptureAddress(CData $device, ?CData $pInfo): int
    {
        assert(version_compare($this->info->version, '1.2') >= 0, 'VkDeviceMemoryOpaqueCaptureAddressInfo required Vulkan v1.2 (current v' . $this->info->version . ')');

        return $this->info->ffi->vkGetDeviceMemoryOpaqueCaptureAddress($device, $pInfo);
    }
}
