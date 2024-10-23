<?php

namespace Slmatthew\Tetragram\Entities\MessageOrigin;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getType() Type of the message origin
 * @method int    getDate() Date the message was sent originally in Unix time
 */
abstract class MessageOrigin extends Entity implements Factory
{
    public static function make(array $data): static
    {
        return match ($data['type']) {
            'user'        => new MessageOriginUser($data),
            'hidden_user' => new MessageOriginHiddenUser($data),
            'chat'        => new MessageOriginChat($data),
            'channel'     => new MessageOriginChannel($data),
        };
    }
}
