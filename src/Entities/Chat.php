<?php

namespace Slmatthew\Tetragram\Entities;

use Slmatthew\Tetragram\Contracts\AllowsBypassingGet;

/**
 * @method int         getId()        Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method string      getType()      Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @method string|null getTitle()     Optional. Title, for supergroups, channels and group chats
 * @method string|null getUsername()  Optional. Username, for private chats, supergroups and channels if available
 * @method string|null getFirstName() Optional. First name of the other party in a private chat
 * @method string|null getLastName()  Optional. Last name of the other party in a private chat
 * @method bool        isForum()      Optional. True, if the supergroup chat is a forum (has topics enabled).
 */
class Chat extends Entity implements AllowsBypassingGet
{
    public const string TYPE_PRIVATE = 'private';

    public const string TYPE_GROUP = 'group';

    public const string TYPE_SUPERGROUP = 'supergroup';

    public const string TYPE_CHANNEL = 'channel';

    public static function fieldsBypassingGet(): array
    {
        return [
            'is_forum' => false,
        ];
    }
}
