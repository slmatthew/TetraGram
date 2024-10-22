<?php

namespace Slmatthew\Tetragram\Entities\ChatBoostSource;

use Slmatthew\Tetragram\Entities\User;

/**
 * @method User getUser() User for which the gift code was created
 */
class ChatBoostSourceGiftCode extends ChatBoostSource
{
    protected static function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
