<?php

namespace Slmatthew\Tetragram\Entities\ChatMember;

use Slmatthew\Tetragram\Entities\Entity;
use Slmatthew\Tetragram\Entities\User;

/**
 * @method User getUser()      Information about the user
 * @method int  getUntilDate() Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
 */
class ChatMemberBanned extends Entity
{
    protected static function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
