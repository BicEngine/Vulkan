<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use FFI\CChar;
use FFI\CCharPtr;
use FFI\CData;
use FFI\CFloat;
use FFI\CInt;
use FFI\CScalar;
use Bic\Vulkan\Vulkan;

if (! \function_exists('ptr')) {
    /**
     * @param CData $cdata
     * @return CData
     */
    function ptr(CData $cdata): CData
    {
        return \FFI::addr($cdata);
    }
}

if (! \function_exists('memcpy')) {
    /**
     * Copies $size bytes from memory area $source to memory area $target.
     * $source may be any native data structure (FFI\CData) or PHP string.
     *
     * @param CData $target
     * @param mixed $source
     * @param int $size
     */
    function memcpy(CData $target, $source, int $size): void
    {
        \FFI::memcpy($target, $source, $size);
    }
}

if (! \function_exists('memcmp')) {
    /**
     * Compares $size bytes from memory area $a and $b.
     *
     * @param CData|string $a
     * @param CData|string $b
     * @param int $size
     * @return int
     */
    function memcmp($a, $b, int $size): int
    {
        return \FFI::memcmp($a, $b, $size);
    }
}

if (! \function_exists('memset')) {
    /**
     * Fills the $size bytes of the memory area pointed to by $target with
     * the constant byte $byte.
     *
     * @param CData $target
     * @param int $byte
     * @param int $size
     */
    function memset(CData $target, int $byte, int $size): void
    {
        \FFI::memset($target, $byte, $size);
    }
}

if (! \function_exists('free')) {
    /**
     * Manually removes previously created "not-owned" data structure.
     *
     * @param CData ...$cdata
     * @return void
     */
    function free(CData ...$cdata): void
    {
        foreach ($cdata as $ptr) {
            \FFI::free($ptr);
        }
    }
}

if (! \function_exists('php_string')) {
    /**
     * @param CData|CCharPtr $cdata
     * @return string
     */
    function php_string(CData $cdata): string
    {
        return \FFI::string($cdata);
    }
}

if (! \function_exists('cdata_name')) {
    /**
     * @param CData $cdata
     * @return string
     */
    function cdata_name(CData $cdata): string
    {
        $pattern = '/FFI\\\\CData:(?:struct\h)?(.+?)\h*Object/ium';

        \preg_match($pattern, \print_r($cdata, true), $matches);

        return $matches[1] ?? 'unknown';
    }
}

if (! \function_exists('vk')) {
    /**
     * @return Vulkan
     */
    function vk(): Vulkan
    {
        return Vulkan::getInstance();
    }
}

if (! \function_exists('scalar')) {
    /**
     * @param string $type
     * @param mixed $value
     * @param bool $owned
     * @return CData|CScalar
     */
    function scalar(string $type, $value, bool $owned = false): CData
    {
        $instance = \FFI::new($type, $owned);
        $instance->cdata = $value;

        return $instance;
    }
}

if (! \function_exists('int8')) {
    /**
     * @param int|int[] $value
     * @param bool $owned
     * @return CData|CInt
     */
    function int8($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('int8_t', $value, $owned);
        }

        return scalar('int8_t', $value, $owned);
    }
}

if (! \function_exists('uint8')) {
    /**
     * @param int|int[] $value
     * @param bool $owned
     * @return CData|CInt
     */
    function uint8($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('uint8_t', $value, $owned);
        }

        return scalar('uint8_t', $value, $owned);
    }
}

if (! \function_exists('int16')) {
    /**
     * @param int|int[] $value
     * @param bool $owned
     * @return CData|CInt
     */
    function int16($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('int16_t', $value, $owned);
        }

        return scalar('int16_t', $value, $owned);
    }
}

if (! \function_exists('uint16')) {
    /**
     * @param int|int[] $value
     * @param bool $owned
     * @return CData|CInt
     */
    function uint16($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('uint16_t', $value, $owned);
        }

        return scalar('uint16_t', $value, $owned);
    }
}

if (! \function_exists('int32')) {
    /**
     * @param int|int[] $value
     * @param bool $owned
     * @return CData|CInt
     */
    function int32($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('int32_t', $value, $owned);
        }

        return scalar('int32_t', $value, $owned);
    }
}

if (! \function_exists('uint32')) {
    /**
     * @param int|int[] $value
     * @param bool $owned
     * @return CData|CInt
     */
    function uint32($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('uint32_t', $value, $owned);
        }

        return scalar('uint32_t', $value, $owned);
    }
}

if (! \function_exists('int64')) {
    /**
     * @param int|int[] $value
     * @param bool $owned
     * @return CData|CInt
     */
    function int64($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('int64_t', $value, $owned);
        }

        return scalar('int64_t', $value, $owned);
    }
}

if (! \function_exists('uint64')) {
    /**
     * @param int|int[] $value
     * @param bool $owned
     * @return CData|CInt
     */
    function uint64($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('uint64_t', $value, $owned);
        }

        return scalar('uint64_t', $value, $owned);
    }
}

if (! \function_exists('float')) {
    /**
     * @param float|float[] $value
     * @param bool $owned
     * @return CData|CFloat
     */
    function float($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('float', $value, $owned);
        }

        return scalar('float', $value, $owned);
    }
}

if (! \function_exists('double')) {
    /**
     * @param float|float[] $value
     * @param bool $owned
     * @return CData|CFloat
     */
    function double($value, bool $owned = false): CData
    {
        if (\is_iterable($value)) {
            return \array_of('double', $value, $owned);
        }

        return scalar('double', $value, $owned);
    }
}

if (! \function_exists('string')) {
    /**
     * @param string|string[] $string
     * @param bool $owned
     * @return CData|CChar[]
     */
    function string($string, bool $owned = false): CData
    {
        if (\is_iterable($string)) {
            $result = [];

            foreach ($string as $item) {
                $result[] = string($item, false);
            }

            return \array_of('char *', $result);
        }

        $length = strlen($nullTerminated = $string . "\0");

        $instance = \FFI::new("char[$length]", $owned);

        \FFI::memcpy($instance, $nullTerminated, $length);

        return $instance;
    }
}

if (! \function_exists('array_of')) {
    /**
     * @param string $type
     * @param iterable $initializer
     * @param bool $owned
     * @return CData
     */
    function array_of(string $type, iterable $initializer = [], bool $owned = false): CData
    {
        $initializer = [...$initializer];

        $instance = \FFI::new($type . '[' . count($initializer) . ']', $owned);

        foreach ($initializer as $i => $value) {
            $instance[$i] = $value;
        }

        return $instance;
    }
}

if (! \function_exists('val')) {
    /**
     * @param CData|CScalar $cdata
     * @return mixed
     */
    function val(CData $cdata)
    {
        return $cdata->cdata;
    }
}
