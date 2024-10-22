<?php

namespace Slmatthew\Tetragram\Entities\BotCommandScope;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getType() Scope type
 */
abstract class BotCommandScope extends Entity implements Factory
{
    public const string TYPE_DEFAULT = 'default';

    public const string TYPE_ALL_PRIVATE_CHATS = 'all_private_chats';

    public const string TYPE_ALL_GROUP_CHATS = 'all_group_chats';

    public const string TYPE_ALL_CHAT_ADMINISTRATORS = 'all_chat_administrators';

    public const string TYPE_CHAT = 'chat';

    public const string TYPE_CHAT_ADMINISTRATORS = 'chat_administrators';

    public const string TYPE_CHAT_MEMBER = 'chat_member';

    public static function make(array $data): static
    {
        return match ($data['type']) {
            self::TYPE_DEFAULT                 => new BotCommandScopeDefault($data),
            self::TYPE_ALL_PRIVATE_CHATS       => new BotCommandScopeAllPrivateChats($data),
            self::TYPE_ALL_GROUP_CHATS         => new BotCommandScopeAllGroupChats($data),
            self::TYPE_ALL_CHAT_ADMINISTRATORS => new BotCommandScopeAllChatAdministrators($data),
            self::TYPE_CHAT                    => new BotCommandScopeChat($data),
            self::TYPE_CHAT_ADMINISTRATORS     => new BotCommandScopeChatAdministrators($data),
            self::TYPE_CHAT_MEMBER             => new BotCommandScopeChatMember($data),
        };
    }
}
