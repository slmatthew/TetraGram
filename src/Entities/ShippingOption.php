<?php

namespace Slmatthew\Tetragram\Entities;

/**
 * @method string         getId()     Shipping option identifier
 * @method string         getTitle()  Option title
 * @method LabeledPrice[] getPrices() List of price portions
 */
class ShippingOption extends Entity
{
    protected static function subEntities(): array
    {
        return [
            'prices' => [LabeledPrice::class],
        ];
    }
}
