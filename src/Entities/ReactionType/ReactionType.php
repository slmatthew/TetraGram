<?php

namespace Slmatthew\Tetragram\Entities\ReactionType;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getType() Type of the reaction
 */
class ReactionType extends Entity implements Factory
{
    public const TYPE_EMOJI = 'emoji';

    public const TYPE_CUSTOM_EMOJI = 'custom_emoji';

    public static function make(array $data): static
    {
        return match ($data['type']) {
            self::TYPE_EMOJI        => new ReactionTypeEmoji($data),
            self::TYPE_CUSTOM_EMOJI => new ReactionTypeCustomEmoji($data),
        };
    }
}
