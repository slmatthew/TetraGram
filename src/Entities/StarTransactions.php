<?php

namespace Slmatthew\Tetragram\Entities;

class StarTransactions extends Entity
{
    protected static function subEntities(): array
    {
        return [
            'transactions' => [StarTransaction::class],
        ];
    }
}
