<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

use Bic\Loader\Loader;
use Bic\Preprocessor\Preprocessor;
use Bic\Preprocessor\PreprocessorInterface;
use Bic\Version\VersionInterface;
use Bic\Vulkan\Core\Vulkan10Interface;
use Bic\Vulkan\Core\Vulkan10MethodsTrait;
use Bic\Vulkan\Core\Vulkan11Interface;
use Bic\Vulkan\Core\Vulkan11MethodsTrait;
use Bic\Vulkan\Core\Vulkan12Interface;
use Bic\Vulkan\Core\Vulkan12MethodsTrait;
use FFI\CData;
use FFI\ParserException;
use Bic\Version\Version as ExternalVersion;

final class Vulkan implements Vulkan10Interface, Vulkan11Interface, Vulkan12Interface
{
    use Vulkan10MethodsTrait {
        Vulkan10MethodsTrait::getDeviceProcAddr as private __vkGetDeviceProcAddr;
        Vulkan10MethodsTrait::getInstanceProcAddr as private __vkGetInstanceProcAddr;
    }

    use Vulkan11MethodsTrait;
    use Vulkan12MethodsTrait;

    /**
     * @var string
     */
    private const VK_HEADERS = __DIR__ . '/../resources/include/vulkan.h';

    /**
     * @var \FFI|object
     */
    private \FFI $ffi;

    /**
     * @var int
     */
    private int $version;

    /**
     * @param VersionInterface|null $version
     * @param PreprocessorInterface|null $pre
     */
    public function __construct(VersionInterface $version = null, PreprocessorInterface $pre = null)
    {
        $version ??= new ExternalVersion();
        $this->version = Version::make($version->major, $version->minor, $version->patch);

        $pre ??= new Preprocessor();
        $pre = $this->withDirectives($pre);

        $this->ffi = (new Loader($this->withDirectives($pre)))
            ->create(new \SplFileInfo(self::VK_HEADERS))
            ->withVersion($version)
            ->withName('vk')
            ->withBinary($this->getBinary())
            ->load()
        ;
    }

    /**
     * @param PreprocessorInterface $pre
     * @return PreprocessorInterface
     */
    private function withDirectives(PreprocessorInterface $pre): PreprocessorInterface
    {
        $pre = clone $pre;

        $pre->define('VK_VERSION_MAJOR', static fn(string $version) => Version::major((int)$version));
        $pre->define('VK_VERSION_MINOR', static fn(string $version) => Version::major((int)$version));
        $pre->define('VK_VERSION_PATCH', static fn(string $version) => Version::major((int)$version));
        $pre->define('VK_API_VERSION', $this->version);
        $pre->define('VK_MAKE_VERSION',
            static fn(string $a = '1', string $b = '0', string $c = '0') =>
            Version::make((int)$a, (int)$b, (int)$c)
        );

        return $pre;
    }

    /**
     * @return string
     */
    private function getBinary(): string
    {
        switch (\PHP_OS_FAMILY) {
            case 'Linux':
                return 'libvulkan.so.1';

            case 'Windows':
                return 'vulkan-1.dll';

            case 'Darwin':
                return 'libvulkan.1.dylib';

            default:
                throw new \LogicException('Unsupported OS');
        }
    }

    /**
     * @param CData|VkDevice $device
     * @param string $pName
     * @return CData|callable|null
     *
     * @since 1.0
     */
    public function getDeviceProcAddr(CData $device, string $pName): ?CData
    {
        if ($result = $this->ffi->vkGetDeviceProcAddr($device, $pName)) {
            return $this->ffi->cast('PFN_' . $pName, $result);
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
    public function getInstanceProcAddr(CData $instance, string $pName): ?CData
    {
        if ($result = $this->ffi->vkGetInstanceProcAddr($instance, $pName)) {
            return $this->ffi->cast('PFN_' . $pName, $result);
        }

        return null;
    }

    /**
     * @param string $method
     * @param array $args
     * @return mixed
     */
    public function __call(string $method, array $args)
    {
        return $this->ffi->$method(...$args);
    }

    /**
     * @see \FFI::new()
     *
     * @param string|CData|mixed $type
     * @param bool $owned
     * @param bool $persistent
     * @return CData
     * @throws ParserException
     */
    public function new($type, bool $owned = true, bool $persistent = false): CData
    {
        return $this->ffi->new($type, $owned, $persistent);
    }

    /**
     * @see \FFI::cast()
     *
     * @param mixed $type
     * @param CData $pointer
     * @return CData
     */
    public function cast($type, CData $pointer): CData
    {
        return $this->ffi->cast($type, $pointer);
    }
}
