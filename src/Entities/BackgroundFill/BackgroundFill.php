<?php

namespace Slmatthew\Tetragram\Entities\BackgroundFill;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getType() Type of the background fill
 */
class BackgroundFill extends Entity implements Factory
{
    public const string TYPE_SOLID = 'solid';

    public const string TYPE_GRADIENT = 'gradient';

    public const string TYPE_FREEFORM_GRADIENT = 'freeform_gradient';

    public static function make(array $data): static
    {
        return match ($data['type']) {
            self::TYPE_SOLID             => new BackgroundFillSolid($data),
            self::TYPE_GRADIENT          => new BackgroundFillGradient($data),
            self::TYPE_FREEFORM_GRADIENT => new BackgroundFillFreeformGradient($data),
        };
    }
}
