<?php

namespace Slmatthew\Tetragram\Entities\InputPaidMedia;

/**
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name.
 */
class InputPaidMediaPhoto extends InputPaidMedia
{
    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_PHOTO,
        ];
    }
}
