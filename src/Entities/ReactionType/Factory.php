<?php

namespace Slmatthew\Tetragram\Entities\ReactionType;

use Slmatthew\Tetragram\Entities\Entity;

class Factory extends \Slmatthew\Tetragram\Entities\Factory
{
    public static function make(array $data, string $bot_username): Entity
    {
        $type = [
            'emoji'        => ReactionTypeEmoji::class,
            'custom_emoji' => ReactionTypeCustomEmoji::class,
        ];

        if (!isset($type[$data['type'] ?? ''])) {
            return new ReactionTypeNotImplemented($data, $bot_username);
        }

        $class = $type[$data['type']];
        return new $class($data, $bot_username);
    }
}
