<?php

namespace Slmatthew\Tetragram\Entities\PaidMedia;

/**
 * @method int getWidth()    Optional. Media width as defined by the sender
 * @method int getHeight()   Optional. Media height as defined by the sender
 * @method int getDuration() Optional. Duration of the media in seconds as defined by the sender
 */
class PaidMediaPreview extends PaidMedia
{
    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_PREVIEW,
        ];
    }
}
