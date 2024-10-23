<?php

namespace Slmatthew\Tetragram\Entities\BackgroundType;

use Slmatthew\Tetragram\Entities\BackgroundFill\BackgroundFill;

/**
 * @method BackgroundFill getFill()             The background fill
 * @method int            getDarkThemeDimming() Dimming of the background in dark themes, as a percentage; 0-100
 */
class BackgroundTypeFill extends BackgroundType
{
    protected static function subEntities(): array
    {
        return [
            'fill' => BackgroundFill::class,
        ];
    }
}
