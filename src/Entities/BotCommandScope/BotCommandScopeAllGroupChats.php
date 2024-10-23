<?php

namespace Slmatthew\Tetragram\Entities\BotCommandScope;

class BotCommandScopeAllGroupChats extends BotCommandScope
{
    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_ALL_GROUP_CHATS,
        ];
    }
}
