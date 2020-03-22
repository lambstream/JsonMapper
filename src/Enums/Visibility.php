<?php

declare(strict_types=1);

namespace DannyVanDerSluijs\JsonMapper\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static Visibility PUBLIC()
 * @method static Visibility PROTECTED()
 * @method static Visibility PRIVATE()
 */
class Visibility extends Enum
{
    private const PUBLIC = 'public';
    private const PROTECTED = 'protected';
    private const PRIVATE = 'private';

    public static function fromReflectionProperty(\ReflectionProperty $property): self
    {
        if ($property->isPublic()) {
            return self::PUBLIC();
        }
        if ($property->isProtected()) {
            return self::PROTECTED();
        }
        return self::PRIVATE();
    }
}
