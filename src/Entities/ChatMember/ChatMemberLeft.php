<?php

namespace Slmatthew\Tetragram\Entities\ChatMember;

use Slmatthew\Tetragram\Entities\User;

/**
 * @method User getUser() Information about the user
 */
class ChatMemberLeft extends ChatMember
{
    protected static function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
