<?php

namespace Slmatthew\Tetragram\Entities\Message;

use Slmatthew\Tetragram\Entities\Chat;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method Chat getChat()      Chat the message belonged to
 * @method int  getMessageId() Unique message identifier inside the chat
 * @method int  getDate()      Always 0. The field can be used to differentiate regular and inaccessible messages.
 */
class InaccessibleMessage extends Entity implements MaybeInaccessibleMessage
{
    protected static function subEntities(): array
    {
        return [
            'chat' => Chat::class,
        ];
    }
}
