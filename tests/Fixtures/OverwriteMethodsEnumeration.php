<?php

namespace Aphproach\Enumerations\Tests\Fixtures;

use Aphproach\Enumerations\Enumeration;

class OverwriteMethodsEnumeration extends Enumeration
{
    public static function values(): array
    {
        return [
            'CONST_NAME' => 'value'
        ];
    }
}