<?php

namespace Slmatthew\Tetragram\Entities;

use Slmatthew\Tetragram\Entities\PaidMedia\PaidMedia;

/**
 * @method int         getStarCount() The number of Telegram Stars that must be paid to buy access to the media
 * @method PaidMedia[] getPaidMedia() Information about the paid media
 */
class PaidMediaInfo extends Entity
{
    protected static function subEntities(): array
    {
        return [
            'paid_media' => [PaidMedia::class],
        ];
    }
}
