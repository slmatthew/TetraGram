<?php

namespace Slmatthew\Tetragram\Entities\MenuButton;

class MenuButtonCommands extends MenuButton
{
    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_COMMANDS,
        ];
    }
}
