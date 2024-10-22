<?php

namespace Slmatthew\Tetragram\Entities\MenuButton;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getType() Type of the button
 */
class MenuButton extends Entity implements Factory
{
    public const string TYPE_COMMANDS = 'commands';

    public const string TYPE_WEB_APP = 'web_app';

    public const string TYPE_DEFAULT = 'default';

    public static function make(array $data): static
    {
        return match ($data['type']) {
            self::TYPE_COMMANDS => new MenuButtonCommands($data),
            self::TYPE_WEB_APP  => new MenuButtonWebApp($data),
            self::TYPE_DEFAULT  => new MenuButtonDefault($data),
        };
    }
}
