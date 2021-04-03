<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

use Bic\Vulkan\Version;
use Bic\Vulkan\VkAllocationCallbacks;
use Bic\Vulkan\VkAllocationCallbacksPtr;
use Bic\Vulkan\VkBuffer;
use Bic\Vulkan\VkBufferDeviceAddressInfo;
use Bic\Vulkan\VkBufferDeviceAddressInfoPtr;
use Bic\Vulkan\VkCommandBuffer;
use Bic\Vulkan\VkDevice;
use Bic\Vulkan\VkDeviceMemoryOpaqueCaptureAddressInfo;
use Bic\Vulkan\VkDeviceMemoryOpaqueCaptureAddressInfoPtr;
use Bic\Vulkan\VkQueryPool;
use Bic\Vulkan\VkRenderPassBeginInfo;
use Bic\Vulkan\VkRenderPassBeginInfoPtr;
use Bic\Vulkan\VkRenderPassCreateInfo2;
use Bic\Vulkan\VkRenderPassCreateInfo2Ptr;
use Bic\Vulkan\VkSemaphore;
use Bic\Vulkan\VkSemaphoreSignalInfo;
use Bic\Vulkan\VkSemaphoreSignalInfoPtr;
use Bic\Vulkan\VkSemaphoreWaitInfo;
use Bic\Vulkan\VkSemaphoreWaitInfoPtr;
use Bic\Vulkan\VkSubpassBeginInfo;
use Bic\Vulkan\VkSubpassBeginInfoPtr;
use Bic\Vulkan\VkSubpassEndInfo;
use Bic\Vulkan\VkSubpassEndInfoPtr;
use FFI\CData;
use FFI\CPointer;

/**
 * @mixin Vulkan12Interface
 * @version 1.2
 */
trait Vulkan12MethodsTrait
{
    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $buffer
     * @param int $offset
     * @param CData|VkBuffer $countBuffer
     * @param int $countBufferOffset
     * @param int $maxDrawCount
     * @param int $stride
     * @return void
     * @since 1.2
     */
    public function cmdDrawIndirectCount(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        CData $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride
    ): void {
        assert(Version::make(1, 2) >= $this->version, 'vkCmdDrawIndirectCount required Vulkan v1.2');

        $this->ffi->vkCmdDrawIndirectCount($commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset,
            $maxDrawCount, $stride);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData|VkBuffer $buffer
     * @param int $offset
     * @param CData|VkBuffer $countBuffer
     * @param int $countBufferOffset
     * @param int $maxDrawCount
     * @param int $stride
     * @return void
     * @since 1.2
     */
    public function cmdDrawIndexedIndirectCount(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        CData $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride
    ): void {
        assert(Version::make(1, 2) >= $this->version, 'vkCmdDrawIndexedIndirectCount required Vulkan v1.2');

        $this->ffi->vkCmdDrawIndexedIndirectCount($commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset,
            $maxDrawCount, $stride);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkRenderPassCreateInfo2>|null $pCreateInfo
     * @param CData<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pRenderPass
     * @return int
     * @since 1.2
     */
    public function createRenderPass2(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pRenderPass
    ): int {
        assert(Version::make(1, 2) >= $this->version, 'VkRenderPass required Vulkan v1.2');

        return $this->ffi->vkCreateRenderPass2($device, $pCreateInfo, $pAllocator, $pRenderPass);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData<VkRenderPassBeginInfo>|null $pRenderPassBegin
     * @param CData<VkSubpassBeginInfo>|null $pSubpassBeginInfo
     * @return void
     * @since 1.2
     */
    public function cmdBeginRenderPass2(
        CData $commandBuffer,
        ?CData $pRenderPassBegin,
        ?CData $pSubpassBeginInfo
    ): void {
        assert(Version::make(1, 2) >= $this->version, 'VkSubpassBeginInfo required Vulkan v1.2');

        $this->ffi->vkCmdBeginRenderPass2($commandBuffer, $pRenderPassBegin, $pSubpassBeginInfo);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData<VkSubpassBeginInfo>|null $pSubpassBeginInfo
     * @param CData<VkSubpassEndInfo>|null $pSubpassEndInfo
     * @return void
     * @since 1.2
     */
    public function cmdNextSubpass2(
        CData $commandBuffer,
        ?CData $pSubpassBeginInfo,
        ?CData $pSubpassEndInfo
    ): void {
        assert(Version::make(1, 2) >= $this->version, 'VkSubpassEndInfo required Vulkan v1.2');

        $this->ffi->vkCmdNextSubpass2($commandBuffer, $pSubpassBeginInfo, $pSubpassEndInfo);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CData<VkSubpassEndInfo>|null $pSubpassEndInfo
     * @return void
     * @since 1.2
     */
    public function cmdEndRenderPass2(CData $commandBuffer, ?CData $pSubpassEndInfo): void
    {
        assert(Version::make(1, 2) >= $this->version, 'VkSubpassEndInfo required Vulkan v1.2');

        $this->ffi->vkCmdEndRenderPass2($commandBuffer, $pSubpassEndInfo);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @return void
     * @since 1.2
     */
    public function resetQueryPool(CData $device, CData $queryPool, int $firstQuery, int $queryCount): void
    {
        assert(Version::make(1, 2) >= $this->version, 'vkResetQueryPool required Vulkan v1.2');

        $this->ffi->vkResetQueryPool($device, $queryPool, $firstQuery, $queryCount);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkSemaphore $semaphore
     * @param CData|null $pValue
     * @return int
     * @since 1.2
     */
    public function getSemaphoreCounterValue(CData $device, CData $semaphore, ?CData $pValue): int
    {
        assert(Version::make(1, 2) >= $this->version, 'vkGetSemaphoreCounterValue required Vulkan v1.2');

        return $this->ffi->vkGetSemaphoreCounterValue($device, $semaphore, $pValue);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkSemaphoreWaitInfo>|null $pWaitInfo
     * @param int $timeout
     * @return int
     * @since 1.2
     */
    public function waitSemaphores(CData $device, ?CData $pWaitInfo, int $timeout): int
    {
        assert(Version::make(1, 2) >= $this->version, 'VkSemaphoreWaitInfo required Vulkan v1.2');

        return $this->ffi->vkWaitSemaphores($device, $pWaitInfo, $timeout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkSemaphoreSignalInfo>|null $pSignalInfo
     * @return int
     * @since 1.2
     */
    public function signalSemaphore(CData $device, ?CData $pSignalInfo): int
    {
        assert(Version::make(1, 2) >= $this->version, 'VkSemaphoreSignalInfo required Vulkan v1.2');

        return $this->ffi->vkSignalSemaphore($device, $pSignalInfo);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkBufferDeviceAddressInfo>|null $pInfo
     * @return int
     * @since 1.2
     */
    public function getBufferDeviceAddress(CData $device, ?CData $pInfo): int
    {
        assert(Version::make(1, 2) >= $this->version, 'VkBufferDeviceAddressInfo required Vulkan v1.2');

        return $this->ffi->vkGetBufferDeviceAddress($device, $pInfo);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkBufferDeviceAddressInfo>|null $pInfo
     * @return int
     * @since 1.2
     */
    public function getBufferOpaqueCaptureAddress(CData $device, ?CData $pInfo): int
    {
        assert(Version::make(1, 2) >= $this->version, 'VkBufferDeviceAddressInfo required Vulkan v1.2');

        return $this->ffi->vkGetBufferOpaqueCaptureAddress($device, $pInfo);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData<VkDeviceMemoryOpaqueCaptureAddressInfo>|null $pInfo
     * @return int
     * @since 1.2
     */
    public function getDeviceMemoryOpaqueCaptureAddress(CData $device, ?CData $pInfo): int
    {
        assert(Version::make(1, 2) >= $this->version, 'VkDeviceMemoryOpaqueCaptureAddressInfo required Vulkan v1.2');

        return $this->ffi->vkGetDeviceMemoryOpaqueCaptureAddress($device, $pInfo);
    }
}
