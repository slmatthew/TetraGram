<?php

namespace Slmatthew\Tetragram\Entities\Games;

use Slmatthew\Tetragram\Entities\Entity;
use Slmatthew\Tetragram\Entities\User;

/**
 * Class GameHighScore
 *
 * This object represents one row of the high scores table for a game.
 *
 * @link https://core.telegram.org/bots/api#gamehighscore
 *
 * @method int  getPosition() Position in high score table for the game
 * @method User getUser()     User
 * @method int  getScore()    Score
 **/
class GameHighScore extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected static function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
