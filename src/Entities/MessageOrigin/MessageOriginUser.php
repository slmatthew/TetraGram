<?php

namespace Slmatthew\Tetragram\Entities\MessageOrigin;

use Slmatthew\Tetragram\Entities\User;

/**
 * @method User getSenderUser() User that sent the message originally
 */
class MessageOriginUser extends MessageOrigin
{
    protected static function subEntities(): array
    {
        return [
            'sender_user' => User::class,
        ];
    }
}
