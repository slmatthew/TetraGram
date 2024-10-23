<?php

namespace Slmatthew\Tetragram\Entities\BotCommandScope;

class BotCommandScopeAllChatAdministrators extends BotCommandScope
{
    //

    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_ALL_CHAT_ADMINISTRATORS,
        ];
    }
}
