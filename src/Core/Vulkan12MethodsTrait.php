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
    public static function vkCmdDrawIndirectCount(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        CData $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride
    ): void {
        assert(Version::make(1, 2) >= self::$version, 'vkCmdDrawIndirectCount required Vulkan v1.2');

        self::$ffi->vkCmdDrawIndirectCount($commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset,
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
    public static function vkCmdDrawIndexedIndirectCount(
        CData $commandBuffer,
        CData $buffer,
        int $offset,
        CData $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride
    ): void {
        assert(Version::make(1, 2) >= self::$version, 'vkCmdDrawIndexedIndirectCount required Vulkan v1.2');

        self::$ffi->vkCmdDrawIndexedIndirectCount($commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset,
            $maxDrawCount, $stride);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkRenderPassCreateInfo2>|null $pCreateInfo
     * @param CPointer<VkAllocationCallbacks>|null $pAllocator
     * @param CData|null $pRenderPass
     * @return int
     * @since 1.2
     */
    public static function vkCreateRenderPass2(
        CData $device,
        ?CData $pCreateInfo,
        ?CData $pAllocator,
        ?CData $pRenderPass
    ): int {
        assert(Version::make(1, 2) >= self::$version, 'VkRenderPass required Vulkan v1.2');

        return self::$ffi->vkCreateRenderPass2($device, $pCreateInfo, $pAllocator, $pRenderPass);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CPointer<VkRenderPassBeginInfo>|null $pRenderPassBegin
     * @param CPointer<VkSubpassBeginInfo>|null $pSubpassBeginInfo
     * @return void
     * @since 1.2
     */
    public static function vkCmdBeginRenderPass2(
        CData $commandBuffer,
        ?CData $pRenderPassBegin,
        ?CData $pSubpassBeginInfo
    ): void {
        assert(Version::make(1, 2) >= self::$version, 'VkSubpassBeginInfo required Vulkan v1.2');

        self::$ffi->vkCmdBeginRenderPass2($commandBuffer, $pRenderPassBegin, $pSubpassBeginInfo);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CPointer<VkSubpassBeginInfo>|null $pSubpassBeginInfo
     * @param CPointer<VkSubpassEndInfo>|null $pSubpassEndInfo
     * @return void
     * @since 1.2
     */
    public static function vkCmdNextSubpass2(
        CData $commandBuffer,
        ?CData $pSubpassBeginInfo,
        ?CData $pSubpassEndInfo
    ): void {
        assert(Version::make(1, 2) >= self::$version, 'VkSubpassEndInfo required Vulkan v1.2');

        self::$ffi->vkCmdNextSubpass2($commandBuffer, $pSubpassBeginInfo, $pSubpassEndInfo);
    }

    /**
     * @param CData|VkCommandBuffer $commandBuffer
     * @param CPointer<VkSubpassEndInfo>|null $pSubpassEndInfo
     * @return void
     * @since 1.2
     */
    public static function vkCmdEndRenderPass2(CData $commandBuffer, ?CData $pSubpassEndInfo): void
    {
        assert(Version::make(1, 2) >= self::$version, 'VkSubpassEndInfo required Vulkan v1.2');

        self::$ffi->vkCmdEndRenderPass2($commandBuffer, $pSubpassEndInfo);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @return void
     * @since 1.2
     */
    public static function vkResetQueryPool(CData $device, CData $queryPool, int $firstQuery, int $queryCount): void
    {
        assert(Version::make(1, 2) >= self::$version, 'vkResetQueryPool required Vulkan v1.2');

        self::$ffi->vkResetQueryPool($device, $queryPool, $firstQuery, $queryCount);
    }

    /**
     * @param CData|VkDevice $device
     * @param CData|VkSemaphore $semaphore
     * @param CData|null $pValue
     * @return int
     * @since 1.2
     */
    public static function vkGetSemaphoreCounterValue(CData $device, CData $semaphore, ?CData $pValue): int
    {
        assert(Version::make(1, 2) >= self::$version, 'vkGetSemaphoreCounterValue required Vulkan v1.2');

        return self::$ffi->vkGetSemaphoreCounterValue($device, $semaphore, $pValue);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkSemaphoreWaitInfo>|null $pWaitInfo
     * @param int $timeout
     * @return int
     * @since 1.2
     */
    public static function vkWaitSemaphores(CData $device, ?CData $pWaitInfo, int $timeout): int
    {
        assert(Version::make(1, 2) >= self::$version, 'VkSemaphoreWaitInfo required Vulkan v1.2');

        return self::$ffi->vkWaitSemaphores($device, $pWaitInfo, $timeout);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkSemaphoreSignalInfo>|null $pSignalInfo
     * @return int
     * @since 1.2
     */
    public static function vkSignalSemaphore(CData $device, ?CData $pSignalInfo): int
    {
        assert(Version::make(1, 2) >= self::$version, 'VkSemaphoreSignalInfo required Vulkan v1.2');

        return self::$ffi->vkSignalSemaphore($device, $pSignalInfo);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkBufferDeviceAddressInfo>|null $pInfo
     * @return int
     * @since 1.2
     */
    public static function vkGetBufferDeviceAddress(CData $device, ?CData $pInfo): int
    {
        assert(Version::make(1, 2) >= self::$version, 'VkBufferDeviceAddressInfo required Vulkan v1.2');

        return self::$ffi->vkGetBufferDeviceAddress($device, $pInfo);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkBufferDeviceAddressInfo>|null $pInfo
     * @return int
     * @since 1.2
     */
    public static function vkGetBufferOpaqueCaptureAddress(CData $device, ?CData $pInfo): int
    {
        assert(Version::make(1, 2) >= self::$version, 'VkBufferDeviceAddressInfo required Vulkan v1.2');

        return self::$ffi->vkGetBufferOpaqueCaptureAddress($device, $pInfo);
    }

    /**
     * @param CData|VkDevice $device
     * @param CPointer<VkDeviceMemoryOpaqueCaptureAddressInfo>|null $pInfo
     * @return int
     * @since 1.2
     */
    public static function vkGetDeviceMemoryOpaqueCaptureAddress(CData $device, ?CData $pInfo): int
    {
        assert(Version::make(1, 2) >= self::$version, 'VkDeviceMemoryOpaqueCaptureAddressInfo required Vulkan v1.2');

        return self::$ffi->vkGetDeviceMemoryOpaqueCaptureAddress($device, $pInfo);
    }
}
