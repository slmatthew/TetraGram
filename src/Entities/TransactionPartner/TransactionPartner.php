<?php

namespace Slmatthew\Tetragram\Entities\TransactionPartner;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getType() Type of the transaction partner
 */
abstract class TransactionPartner extends Entity implements Factory
{
    public const string TYPE_USER = 'user';

    public const string TYPE_FRAGMENT = 'fragment';

    public const string TYPE_TELEGRAM_ADS = 'telegram_ads';

    public const string TYPE_OTHER = 'other';

    public static function make(array $data): static
    {
        return match ($data['type']) {
            self::TYPE_USER         => new TransactionPartnerUser($data),
            self::TYPE_FRAGMENT     => new TransactionPartnerFragment($data),
            self::TYPE_TELEGRAM_ADS => new TransactionPartnerTelegramAds($data),
            self::TYPE_OTHER        => new TransactionPartnerOther($data),
        };
    }
}
