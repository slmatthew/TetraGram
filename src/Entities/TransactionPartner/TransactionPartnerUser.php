<?php

namespace Slmatthew\Tetragram\Entities\TransactionPartner;

use Slmatthew\Tetragram\Entities\User;

/**
 * @method User        getUser()           Information about the user
 * @method string|null getInvoicePayload() Optional. Bot-specified invoice payload
 */
class TransactionPartnerUser extends TransactionPartner
{
    public static function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
