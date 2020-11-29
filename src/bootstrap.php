<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @internal This is an internal file, please do not use it in your code.
 * @psalm-internal Bic\Vulkan\Internal
 */

declare(strict_types=1);

use Bic\Vulkan\Vulkan;

//
// Checking the working environment of the library.
//
if (! \in_array(\PHP_SAPI, ['phpdbg', 'cli'], true)) {
    fwrite(STDERR, 'You must work in CLI mode to work with the Vulkan library');

    exit(1);
}

//
// Check FFI extension support.
//
if (! \extension_loaded('FFI')) {
    fwrite(STDERR, 'The Vulkan library requires FFI support');

    exit(2);
}

//
// Check that the FFI extension is enabled.
//
if (\in_array((string)\ini_get('ffi.enable'), ['0', 'false'], true)) {
    fwrite(
        STDERR,
        'The Vulkan library requires "ffi.enable" option with "true" or ' .
        '"preload" value, but ' . (string)\ini_get('ffi.enable') . ' defined'
    );

    exit(3);
}

//
// Force load Vulkan 1.0
//
try {
    Vulkan::load();
} catch (ReflectionException $e) {
    fwrite(STDERR, $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());

    exit(4);
}