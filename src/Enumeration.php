<?php

namespace Aphproach\Enumerations;

use Aphproach\Enumerations\Interfaces\RenderableInterface;
use ReflectionClass;
use ReflectionClassConstant;

/**
 * Class Enumeration
 * @package Aphproach\Enumerations
 * @author Romano Schoonheim <romano@romanoschoonheim.nl>
 * @website https://www.aphproach.com/packages/enumeration
 */
class Enumeration
{
    /**
     * Get all constants from object.
     *
     * @return array
     */
    public static function values(): array
    {
        $reflection = new ReflectionClass(
            static::class
        );

        return $reflection->getConstants(ReflectionClassConstant::IS_PUBLIC);
    }

    /**
     * Get all constants labeled from object.
     *
     * @return array
     */
    public static function labeled(): array
    {
        $values = static::values();

        return array_combine($values, $values);
    }
}