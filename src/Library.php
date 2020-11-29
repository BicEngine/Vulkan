<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

use Bic\Preprocessor\Preprocessor;

/**
 * @internal Library is an internal library class, please do not use it in your code.
 * @psalm-internal Bic\Vulkan
 */
final class Library
{
    /**
     * @var string
     */
    private const HEADERS_FILE = __DIR__ . '/../resources/headers/vulkan.h';

    /**
     * @param int $version
     * @return string
     * @throws \ReflectionException
     */
    public static function getHeaders(int $version = Vulkan::VK_API_VERSION_1_0): string
    {
        $pre = new Preprocessor();

        $pre->define('VK_API_VERSION', Version::make(
            Version::major($version),
            Version::minor($version),
            Vulkan::VK_HEADER_VERSION
        ));

        $pre->define('VK_MAKE_VERSION', static fn(string $a = '1', string $b = '0', string $c = '0') =>
            Version::make((int)$a, (int)$b, (int)$c)
        );

        $pre->define('VK_VERSION_MAJOR', static fn(string $version) => Version::major((int)$version));
        $pre->define('VK_VERSION_MINOR', static fn(string $version) => Version::major((int)$version));
        $pre->define('VK_VERSION_PATCH', static fn(string $version) => Version::major((int)$version));

        return (string)$pre->process(new \SplFileInfo(self::HEADERS_FILE));
    }

    /**
     * @return string
     */
    public static function getBinary(): string
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
}