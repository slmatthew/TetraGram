<?php

namespace Slmatthew\Tetragram\Entities\PaidMedia;

use Slmatthew\Tetragram\Contracts\Factory;
use Slmatthew\Tetragram\Entities\Entity;

/**
 * @method string getType() Type of the paid media
 */
abstract class PaidMedia extends Entity implements Factory
{
    public const string TYPE_PREVIEW = 'preview';

    public const string TYPE_PHOTO = 'photo';

    public const string TYPE_VIDEO = 'video';

    public static function make(array $data): static
    {
        return match ($data['type']) {
            self::TYPE_PREVIEW => new PaidMediaPreview($data),
            self::TYPE_PHOTO   => new PaidMediaPhoto($data),
            self::TYPE_VIDEO   => new PaidMediaVideo($data),
        };
    }
}
