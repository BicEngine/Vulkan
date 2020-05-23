<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Tests;

use Faker\Factory;
use Faker\Generator;
use FFI\CData;
use FFI\CStruct;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Bic\Vulkan\Vulkan;

/**
 * Class TestCase
 */
abstract class TestCase extends BaseTestCase
{
    /**
     * @var Generator
     */
    protected Generator $faker;

    /**
     * @var Vulkan
     */
    protected Vulkan $vk;

    /**
     * @var array
     */
    protected array $memory = [];

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->faker = Factory::create();
        $this->vk = Vulkan::getInstance();
    }

    /**
     * @param string $name
     * @param array|iterable $attrs
     * @return CData|CStruct
     */
    protected function struct(string $name, iterable $attrs = []): CData
    {
        return $this->memory[] = $this->vk->struct($name, $attrs);
    }

    /**
     * @return void
     */
    protected function tearDown(): void
    {
        foreach ($this->memory as $item) {
            \FFI::free(\FFI::addr($item));
        }
    }
}
