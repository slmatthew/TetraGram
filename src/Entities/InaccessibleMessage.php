<?php

namespace Slmatthew\Tetragram\Entities;

class InaccessibleMessage extends MaybeInaccessibleMessage
{
    protected static function subEntities(): array
    {
        return [
            'chat' => Chat::class,
        ];
    }
}
