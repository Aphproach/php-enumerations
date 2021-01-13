<?php

namespace Aphproach\Enumerations\Tests\Unit;

use Aphproach\Enumerations\Tests\Fixtures\ExampleEnumeration;
use Aphproach\Enumerations\Tests\Fixtures\OverwriteMethodsEnumeration;
use PHPUnit\Framework\TestCase;

class EnumerationTest extends TestCase
{
    /** @test */
    public function it_can_overwrite_values_method_and_return_expected_labeled_array(): void
    {
        $this->assertEquals(
            [
                'value' => 'value'
            ],
            OverwriteMethodsEnumeration::labeled()
        );
    }

    /** @test */
    public function it_returns_all_constants_labeled(): void
    {
        $this->assertEquals(
            [
                'Romano' => 'Romano',
                'Schoonheim' => 'Schoonheim',
                'Aphproach' => 'Aphproach',
            ],
            ExampleEnumeration::labeled()
        );
    }

    /** @test */
    public function it_does_not_return_private_constants()
    {
        $this->assertEquals(
            [
                'FIRST_NAME' => 'Romano',
                'LAST_NAME' => 'Schoonheim',
                'COMPANY' => 'Aphproach',
            ],
            ExampleEnumeration::values()
        );
    }
}