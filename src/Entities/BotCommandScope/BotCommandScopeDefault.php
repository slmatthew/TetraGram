<?php

namespace Slmatthew\Tetragram\Entities\BotCommandScope;

class BotCommandScopeDefault extends BotCommandScope
{
    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_DEFAULT,
        ];
    }
}
