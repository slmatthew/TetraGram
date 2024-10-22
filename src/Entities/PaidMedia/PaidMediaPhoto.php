<?php

namespace Slmatthew\Tetragram\Entities\PaidMedia;

use Slmatthew\Tetragram\Entities\PhotoSize;

/**
 * @method PhotoSize[] getPhoto() The photo
 */
class PaidMediaPhoto extends PaidMedia
{
    protected static function subEntities(): array
    {
        return [
            'photo' => [PhotoSize::class],
        ];
    }

    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_PHOTO,
        ];
    }
}
