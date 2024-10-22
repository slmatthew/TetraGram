<?php

namespace Slmatthew\Tetragram\Entities;

use Slmatthew\Tetragram\Entities\BackgroundType\BackgroundType;

/**
 * @method BackgroundType getType() Type of the background
 */
class ChatBackground extends Entity
{
    protected static function subEntities(): array
    {
        return [
            'type' => BackgroundType::class,
        ];
    }
}
