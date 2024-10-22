<?php

namespace Slmatthew\Tetragram\Entities\Message;

use Slmatthew\Tetragram\Entities\Entity;
use Slmatthew\Tetragram\Entities\Message;

class Factory extends \Slmatthew\Tetragram\Entities\Factory
{

    public static function make(array $data, string $bot_username): Entity
    {
        if ($data['date'] === 0) {
            $class = InaccessibleMessage::class;
        } else {
            $class = Message::class;
        }

        return new $class($data, $bot_username);
    }
}
