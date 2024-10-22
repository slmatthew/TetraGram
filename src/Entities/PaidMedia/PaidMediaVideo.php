<?php

namespace Slmatthew\Tetragram\Entities\PaidMedia;

use Slmatthew\Tetragram\Entities\Video;

/**
 * @method Video getVideo() The video
 */
class PaidMediaVideo extends PaidMedia
{
    protected static function subEntities(): array
    {
        return [
            'video' => Video::class,
        ];
    }

    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_VIDEO,
        ];
    }
}
