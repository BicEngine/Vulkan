<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

use Bic\Vulkan\Core\Vulkan10Interface;
use Bic\Vulkan\Core\Vulkan10MethodsTrait;
use Bic\Vulkan\Core\Vulkan11Interface;
use Bic\Vulkan\Core\Vulkan11MethodsTrait;
use Bic\Vulkan\Core\Vulkan12Interface;
use Bic\Vulkan\Core\Vulkan12MethodsTrait;
use FFI\CData;
use FFI\CType;

final class Vulkan implements Vulkan10Interface, Vulkan11Interface, Vulkan12Interface
{
    use Vulkan10MethodsTrait {
        Vulkan10MethodsTrait::vkGetDeviceProcAddr as private __vkGetDeviceProcAddr;
        Vulkan10MethodsTrait::vkGetInstanceProcAddr as private __vkGetInstanceProcAddr;
    }

    use Vulkan11MethodsTrait;
    use Vulkan12MethodsTrait;

    /**
     * The Vulkan registry version used to generate the bindings.
     *
     * @var int
     */
    public const VK_HEADER_VERSION = 131;

    /**
     * @var \FFI|object
     */
    private static \FFI $ffi;

    /**
     * @var int
     */
    private static int $version;

    /**
     * @param int $version
     * @throws \ReflectionException
     */
    public static function load(int $version = self::VK_API_VERSION_1_0): void
    {
        self::$version = $version;

        [$headers, $library] = [Library::getHeaders($version), Library::getBinary()];

        self::$ffi = \FFI::cdef($headers, $library);
    }

    /**
     * @param CData|VkDevice $device
     * @param string $pName
     * @return CData|callable|null
     *
     * @since 1.0
     */
    public static function vkGetDeviceProcAddr(CData $device, string $pName): ?CData
    {
        if ($result = self::$ffi->vkGetDeviceProcAddr($device, $pName)) {
            return self::cast('PFN_' . $pName, $result);
        }

        return null;
    }

    /**
     * @param CData|VkInstance $instance
     * @param string $pName
     * @return CData|callable|null
     *
     * @since 1.0
     */
    public static function vkGetInstanceProcAddr(CData $instance, string $pName): ?CData
    {
        if ($result = self::$ffi->vkGetInstanceProcAddr($instance, $pName)) {
            return self::cast('PFN_' . $pName, $result);
        }

        return null;
    }

    /**
     * @psalm-template T of string|CType
     *
     * @param T $type
     * @return T
     */
    private static function type($type)
    {
        if (\is_string($type)) {
            $parts = \explode('\\', $type);

            return \end($parts);
        }

        return $type;
    }

    /**
     * Casts given `$ptr` to another C type, specified by C declaration string
     * or {@see \FFI\CType} object.
     *
     * @param string|CType $type
     * @param CData $ptr
     * @return CData
     */
    public static function cast($type, CData $ptr): CData
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return self::$ffi->cast(self::type($type), $ptr);
    }

    /**
     * Method that creates an arbitrary C structure.
     *
     * @param string $type
     * @param bool $owned
     * @return CData
     */
    public static function new(string $type, bool $owned = true): CData
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return self::$ffi->new(self::type($type), $owned);
    }

    /**
     * Method that creates an arbitrary C structure.
     *
     * @param string $name
     * @param iterable<string, mixed> $fields
     * @param bool $owned
     * @return CData
     */
    public static function struct(string $name, iterable $fields = [], bool $owned = true): CData
    {
        $struct = self::new($name, $owned);

        foreach ($fields as $field => $value) {
            $struct->$field = $value;
        }

        return $struct;
    }

    /**
     * @param string $function
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic(string $function, array $arguments = [])
    {
        return self::$ffi->$function(...$arguments);
    }
}
