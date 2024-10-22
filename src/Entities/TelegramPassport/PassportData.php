<?php


namespace Slmatthew\Tetragram\Entities\TelegramPassport;

use Slmatthew\Tetragram\Entities\Entity;

/**
 * Class PassportData
 *
 * Contains information about Telegram Passport data shared with the bot by the user.
 *
 * @link https://core.telegram.org/bots/api#passportdata
 *
 * @method EncryptedPassportElement[] getData()        Array with information about documents and other Telegram Passport elements that was shared with the bot
 * @method EncryptedCredentials       getCredentials() Encrypted credentials required to decrypt the data
 **/
class PassportData extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected static function subEntities(): array
    {
        return [
            'data'        => [EncryptedPassportElement::class],
            'credentials' => EncryptedCredentials::class,
        ];
    }
}
