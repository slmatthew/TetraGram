<?php


namespace Slmatthew\Tetragram\Entities\InlineQuery;

use Slmatthew\Tetragram\Entities\InlineKeyboard;
use Slmatthew\Tetragram\Entities\InputMessageContent\InputMessageContent;
use Slmatthew\Tetragram\Entities\MessageEntity;

/**
 * Class InlineQueryResultDocument
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultdocument
 *
 * <code>
 * $data = [
 *   'id'                    => '',
 *   'title'                 => '',
 *   'caption'               => '',
 *   'document_url'          => '',
 *   'mime_type'             => '',
 *   'description'           => '',
 *   'reply_markup'          => <InlineKeyboard>,
 *   'input_message_content' => <InputMessageContent>,
 *   'thumbnail_url'         => '',
 *   'thumbnail_width'       => 30,
 *   'thumbnail_height'      => 30,
 * ];
 * </code>
 *
 * @method string               getType()                Type of the result, must be document
 * @method string               getId()                  Unique identifier for this result, 1-64 bytes
 * @method string               getTitle()               Title for the result
 * @method string               getCaption()             Optional. Caption of the document to be sent, 0-200 characters
 * @method string               getParseMode()           Optional. Mode for parsing entities in the document caption
 * @method MessageEntity[]      getCaptionEntities()     Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method string               getDocumentUrl()         A valid URL for the file
 * @method string               getMimeType()            Mime type of the content of the file, either “application/pdf” or “application/zip”
 * @method string               getDescription()         Optional. Short description of the result
 * @method InlineKeyboard       getReplyMarkup()         Optional. Inline keyboard attached to the message
 * @method InputMessageContent  getInputMessageContent() Optional. Content of the message to be sent instead of the file
 * @method string               getThumbnailUrl()        Optional. URL of the thumbnail (jpeg only) for the file
 * @method int                  getThumbnailWidth()      Optional. Thumbnail width
 * @method int                  getThumbnailHeight()     Optional. Thumbnail height
 *
 * @method $this setId(string $id)                                                  Unique identifier for this result, 1-64 bytes
 * @method $this setTitle(string $title)                                            Title for the result
 * @method $this setCaption(string $caption)                                        Optional. Caption of the document to be sent, 0-200 characters
 * @method $this setParseMode(string $parse_mode)                                   Optional. Mode for parsing entities in the document caption
 * @method $this setCaptionEntities(array $caption_entities)                        Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method $this setDocumentUrl(string $document_url)                               A valid URL for the file
 * @method $this setMimeType(string $mime_type)                                     Mime type of the content of the file, either “application/pdf” or “application/zip”
 * @method $this setDescription(string $description)                                Optional. Short description of the result
 * @method $this setReplyMarkup(InlineKeyboard $reply_markup)                       Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $input_message_content) Optional. Content of the message to be sent instead of the file
 * @method $this setThumbnailUrl(string $thumbnail_url)                             Optional. URL of the thumbnail (jpeg only) for the file
 * @method $this setThumbnailWidth(int $thumbnail_width)                            Optional. Thumbnail width
 * @method $this setThumbnailHeight(int $thumbnail_height)                          Optional. Thumbnail height
 */
class InlineQueryResultDocument extends InlineEntity implements InlineQueryResult
{
    /**
     * InlineQueryResultDocument constructor
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $data['type'] = 'document';
        parent::__construct($data);
    }
}
