<?php

namespace Slmatthew\Tetragram\Entities\RevenueWithdrawalState;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getType() Type of the state
 */
abstract class RevenueWithdrawalState extends Entity implements Factory
{
    public const string TYPE_PENDING = 'pending';

    public const string TYPE_SUCCEEDED = 'succeeded';

    public const string TYPE_FAILED = 'failed';

    public static function make(array $data): static
    {
        return match ($data['type']) {
            self::TYPE_PENDING   => new RevenueWithdrawalStatePending($data),
            self::TYPE_SUCCEEDED => new RevenueWithdrawalStateSucceeded($data),
            self::TYPE_FAILED    => new RevenueWithdrawalStateFailed($data),
        };
    }
}
