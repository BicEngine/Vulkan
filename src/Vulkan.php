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
use FFI\CType;
use Serafim\FFILoader\LibraryInformation;
use Bic\Vulkan\Core\VersionTrait;
use Bic\Vulkan\Core\Vulkan10Interface;
use Bic\Vulkan\Core\Vulkan10MethodsTrait;
use Bic\Vulkan\Core\Vulkan11Interface;
use Bic\Vulkan\Core\Vulkan11MethodsTrait;
use Bic\Vulkan\Core\Vulkan12Interface;
use Bic\Vulkan\Core\Vulkan12MethodsTrait;
use Bic\Vulkan\Support\Library;
use Serafim\FFILoader\Loader;

/**
 * Class Vulkan
 */
final class Vulkan implements Vulkan10Interface, Vulkan11Interface, Vulkan12Interface
{
    use VersionTrait;
    use Vulkan10MethodsTrait;
    use Vulkan11MethodsTrait;
    use Vulkan12MethodsTrait;

    /**
     * The Vulkan registry version used to generate the bindings.
     *
     * @var int
     */
    public const VK_HEADER_VERSION = 131;

    /**
     * @var LibraryInformation
     */
    public LibraryInformation $info;

    /**
     * Vulkan constructor.
     *
     * @param int $version
     */
    public function __construct(int $version = self::VK_API_VERSION_1_0)
    {
        $this->info = (new Loader())->load(new Library($version));
    }

    /**
     * @param string|CType $type
     * @param bool $owned
     * @return CData
     */
    public function new($type, bool $owned = false): CData
    {
        $chunks = \explode('\\', $type);

        /** @noinspection StaticInvocationViaThisInspection */
        return $this->info->ffi->new(\end($chunks), $owned);
    }

    /**
     * @param string|CType $type
     * @param CData $cdata
     * @return CData|mixed
     */
    public function cast($type, CData $cdata): CData
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return $this->info->ffi->cast($type, $cdata);
    }

    /**
     * @param string|CType $type
     * @return CType
     */
    public function type($type): CType
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return $this->info->ffi->type($type);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        return $this->info->ffi->$name(...$arguments);
    }

    /**
     * @since 1.0
     * @param CData|VkDevice $device
     * @param string $function
     * @return CData|callable|null
     */
    public function getDeviceProcAddr(CData $device, string $function): ?CData
    {
        if ($result = $this->vkGetDeviceProcAddr($device, $function)) {
            return $this->cast('PFN_' . $function, $result);
        }

        return null;
    }

    /**
     * @since 1.0
     *
     * @param CData|VkInstance $instance
     * @param string $function
     * @return CData|callable|null
     */
    public function getInstanceProcAddr(CData $instance, string $function): ?CData
    {
        if ($result = $this->vkGetInstanceProcAddr($instance, $function)) {
            return $this->cast('PFN_' . $function, $result);
        }

        return null;
    }
}
