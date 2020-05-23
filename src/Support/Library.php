<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Support;

use Serafim\FFILoader\BitDepth;
use Serafim\FFILoader\Library as BaseLibrary;
use Serafim\FFILoader\LibraryInformation;
use Serafim\FFILoader\Loader;
use Serafim\FFILoader\OperatingSystem;
use Serafim\FFILoader\Preprocessor;
use Bic\Vulkan\Vulkan;

/**
 * Class Library
 */
final class Library extends BaseLibrary
{
    /**
     * @var string
     */
    private const LIB_NAME = 'vk';

    /**
     * @var string
     */
    private const LIB_OUT = __DIR__ . '/../../out';

    /**
     * @var string
     */
    private const LIB_HEADERS = __DIR__ . '/../../resources/headers/vulkan.h';

    /**
     * @var int
     */
    private int $version;

    /**
     * Library constructor.
     *
     * @param int $version
     */
    public function __construct(int $version)
    {
        $this->version = $version;
    }

    /**
     * @return Loader
     */
    public static function loader(): Loader
    {
        $loader = new Loader();

        /** @var Preprocessor $pre */
        $pre = $loader->preprocessor();
        $pre->tolerant = false;
        $pre->includeFrom(\dirname(self::LIB_HEADERS));

        return $loader;
    }

    /**
     * @param int $version
     * @return LibraryInformation
     */
    public static function load(int $version): LibraryInformation
    {
        return self::loader()->load(new static($version));
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::LIB_NAME;
    }

    /**
     * @return string
     */
    public function getHeaders(): string
    {
        return self::LIB_HEADERS;
    }

    /**
     * @return string
     */
    public function getOutputDirectory(): string
    {
        return self::LIB_OUT;
    }

    /**
     * @param string $library
     * @return string
     */
    public function getVersion(string $library): string
    {
        return \vsprintf('%d.%d', [
            Vulkan::versionMajor($this->version),
            Vulkan::versionMinor($this->version),
        ]);
    }

    /**
     * @param OperatingSystem $os
     * @param BitDepth $bits
     * @return string|null
     */
    public function getLibrary(OperatingSystem $os, BitDepth $bits): ?string
    {
        switch ($os->getFamily()) {
            case OperatingSystem::OS_LINUX:
                return 'libvulkan.so.1';

            case OperatingSystem::OS_WINDOWS:
                return 'vulkan-1.dll';

            case OperatingSystem::OS_MAC:
                return 'libvulkan.1.dylib';
        }

        return null;
    }
}
