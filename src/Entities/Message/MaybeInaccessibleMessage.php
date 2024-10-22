<?php

namespace Slmatthew\Tetragram\Entities\Message;

use Slmatthew\Tetragram\Entities\Chat;

/**
 * @method Chat getChat()      Chat the message belonged to
 * @method int  getMessageId() Unique message identifier inside this chat
 * @method int  getDate()      The field can be used to differentiate regular and inaccessible messages.
 */
interface MaybeInaccessibleMessage
{
    //
}
