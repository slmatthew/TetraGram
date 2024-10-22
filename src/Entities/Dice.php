<?php

namespace Slmatthew\Tetragram\Entities;

/**
 * @method string getEmoji() Emoji on which the dice throw animation is based
 * @method int    getValue() Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
 */
class Dice extends Entity
{
    public const string EMOJI_DICE = '🎲';

    public const string EMOJI_DARTS = '🎯';

    public const string EMOJI_BOWLING = '🎳';

    public const string EMOJI_BASKETBALL = '🏀';

    public const string EMOJI_SOCCER = '⚽';

    public const string EMOJI_SLOT_MACHINE = '🎰';
}
