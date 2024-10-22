<?php

namespace Slmatthew\Tetragram\Entities;

/**
 * @method string      getType() Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
 * @method int         getOffset()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               Offset in UTF-16 code units to the start of the entity
 * @method int         getLength()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               Length of the entity in UTF-16 code units
 * @method string|null getUrl()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  Optional. For “text_link” only, URL that will be opened after user taps on the text
 * @method User|null   getUser()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 Optional. For “text_mention” only, the mentioned user
 * @method string|null getLanguage()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             Optional. For “pre” only, the programming language of the entity text
 * @method string|null getCustomEmojiId()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
 */
class MessageEntity extends Entity
{
    public const string TYPE_MENTION = 'mention'; // @username

    public const string TYPE_HASHTAG = 'hashtag'; // #hashtag

    public const string TYPE_CASHTAG = 'cashtag'; // $USD

    public const string TYPE_BOT_COMMAND = 'bot_command'; // /start@jobs_bot

    public const string TYPE_URL = 'url'; // https://telegram.org

    public const string TYPE_EMAIL = 'email'; // do-not-reply@telegram.org

    public const string TYPE_PHONE_NUMBER = 'phone_number'; // +1-212-555-0123

    public const string TYPE_BOLD = 'bold'; // bold text

    public const string TYPE_ITALIC = 'italic'; // italic text

    public const string TYPE_UNDERLINE = 'underline'; // underlined text

    public const string TYPE_STRIKETHROUGH = 'strikethrough'; // strikethrough text

    public const string TYPE_SPOILER = 'spoiler'; // spoiler message

    public const string TYPE_BLOCKQUOTE = 'blockquote'; // block quotation

    public const string TYPE_EXPANDABLE_BLOCKQUOTE = 'expandable_blockquote'; // collapsed-by-default block quotation

    public const string TYPE_CODE = 'code'; // monowidth string

    public const string TYPE_PRE = 'pre'; // monowidth block

    public const string TYPE_TEXT_LINK = 'text_link'; // for clickable text URLs

    public const string TYPE_TEXT_MENTION = 'text_mention'; // for users without usernames

    public const string TYPE_CUSTOM_EMOJI = 'custom_emoji'; // for inline custom emoji stickers

    protected static function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}