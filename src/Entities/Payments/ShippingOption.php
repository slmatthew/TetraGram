<?php


namespace Slmatthew\Tetragram\Entities\Payments;

use Slmatthew\Tetragram\Entities\Entity;

/**
 * Class ShippingOption
 *
 * This object represents one shipping option.
 *
 * @link https://core.telegram.org/bots/api#shippingoption
 *
 * @method string         getId()     Shipping option identifier
 * @method string         getTitle()  Option title
 * @method LabeledPrice[] getPrices() List of price portions
 **/
class ShippingOption extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected static function subEntities(): array
    {
        return [
            'prices' => [LabeledPrice::class],
        ];
    }
}
