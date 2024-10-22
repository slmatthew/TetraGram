<?php

namespace Slmatthew\Tetragram\Entities\ChatBoostSource;

use Slmatthew\Tetragram\Entities\User;

/**
 * @method User getUser() User that boosted the chat
 */
class ChatBoostSourcePremium extends ChatBoostSource
{
    protected static function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
