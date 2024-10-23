<?php

namespace Slmatthew\Tetragram\Entities\InputPaidMedia;

use Slmatthew\Tetragram\Contracts\AllowsBypassingGet;
use Slmatthew\Tetragram\Entities\InputFile;

/**
 * @method string           getMedia()          File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method InputFile|string getThumbnail()      Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @method int|null         getWidth()          Optional. Video width
 * @method int|null         getHeight()         Optional. Video height
 * @method int|null         getDuration()       Optional. Video duration in seconds
 * @method bool|null        supportsStreaming() Optional. Pass True if the uploaded video is suitable for streaming
 */
class InputPaidMediaVideo extends InputPaidMedia implements AllowsBypassingGet
{
    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_VIDEO,
        ];
    }

    protected static function subEntities(): array
    {
        return [
            'thumbnail' => InputFile::class,
        ];
    }

    public static function fieldsBypassingGet(): array
    {
        return [
            'supports_streaming' => false,
        ];
    }
}
