<?php

namespace Slmatthew\Tetragram\Entities;

/**
 * @method int          getWinnerCount()         Number of winners in the giveaway
 * @method int|null     getUnclaimedPrizeCount() Optional. Number of undistributed prizes
 * @method Message|null getGiveawayMessage()     Optional. Message with the giveaway that was completed, if it wasn't deleted
 * @method true|null    getIsStarGiveaway()      Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
 */
class GiveawayCompleted extends Entity
{
    protected static function subEntities(): array
    {
        return [
            'giveaway_message' => Message::class,
        ];
    }
}
