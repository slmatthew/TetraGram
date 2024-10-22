<?php

namespace Slmatthew\Tetragram\Entities\ChatBoostSource;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getSource() Source of the boost
 */
class ChatBoostSource extends Entity implements Factory
{
    public const string SOURCE_PREMIUM = 'premium';

    public const string SOURCE_GIFT_CODE = 'gift_code';

    public const string SOURCE_GIVEAWAY = 'giveaway';

    public static function make(array $data): static
    {
        return match ($data['source']) {
            self::SOURCE_PREMIUM   => new ChatBoostSourcePremium($data),
            self::SOURCE_GIFT_CODE => new ChatBoostSourceGiftCode($data),
            self::SOURCE_GIVEAWAY  => new ChatBoostSourceGiveaway($data),
        };
    }
}
