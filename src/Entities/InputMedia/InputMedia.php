<?php

namespace Slmatthew\Tetragram\Entities\InputMedia;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getType() Type of the result
 */
class InputMedia extends Entity implements Factory
{
    public const TYPE_PHOTO = 'photo';

    public const TYPE_VIDEO = 'video';

    public const TYPE_ANIMATION = 'animation';

    public const TYPE_AUDIO = 'audio';

    public const TYPE_DOCUMENT = 'document';

    public static function make(array $data): static
    {
        return match ($data['type']) {
            self::TYPE_PHOTO     => new InputMediaPhoto($data),
            self::TYPE_VIDEO     => new InputMediaVideo($data),
            self::TYPE_ANIMATION => new InputMediaAnimation($data),
            self::TYPE_AUDIO     => new InputMediaAudio($data),
            self::TYPE_DOCUMENT  => new InputMediaDocument($data),
        };
    }
}
