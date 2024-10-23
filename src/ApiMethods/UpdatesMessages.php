<?php

namespace Slmatthew\Tetragram\ApiMethods;

use Slmatthew\Tetragram\Entities\InlineKeyboardMarkup;
use Slmatthew\Tetragram\Entities\InputMedia\InputMedia;
use Slmatthew\Tetragram\Entities\LinkPreviewOptions;
use Slmatthew\Tetragram\Entities\Message;
use Slmatthew\Tetragram\Entities\MessageEntity;
use Slmatthew\Tetragram\Entities\Poll;
use Slmatthew\Tetragram\Exceptions\TelegramException;

trait UpdatesMessages
{
    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_id: int,
     *     inline_message_id: string,
     *     text: string,
     *     parse_mode: string,
     *     entities: MessageEntity[],
     *     link_preview_options: LinkPreviewOptions,
     *     reply_markup: InlineKeyboardMarkup,
     * } $data
     *
     * @throws TelegramException
     */
    public function editMessageText(array $data = []): Message|bool
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_id: int,
     *     inline_message_id: string,
     *     caption: string,
     *     parse_mode: string,
     *     caption_entities: MessageEntity[],
     *     show_caption_above_media:bool,
     *     reply_markup: InlineKeyboardMarkup,
     * } $data
     *
     * @throws TelegramException
     */
    public function editMessageCaption(array $data = []): Message|bool
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_id: int,
     *     inline_message_id: string,
     *     media: InputMedia,
     *     reply_markup: InlineKeyboardMarkup,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function editMessageMedia(array $data = []): Message|bool
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_id: int,
     *     inline_message_id: string,
     *     latitude: float,
     *     longitude: float,
     *     live_period: int,
     *     horizontal_accuracy: float,
     *     heading: int,
     *     proximity_alert_radius: int,
     *     reply_markup: InlineKeyboardMarkup,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function editMessageLiveLocation(array $data = []): Message|bool
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_id: int,
     *     inline_message_id: string,
     *     reply_markup: InlineKeyboardMarkup,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function stopMessageLiveLocation(array $data = []): Message|bool
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     businss_connection_id: string,
     *     chat_id: int|string,
     *     message_id: int,
     *     inline_message_id: string,
     *     reply_markup: InlineKeyboardMarkup,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function editMessageReplyMarkup(array $data = []): Message|bool
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_id: int,
     *     reply_markup: InlineKeyboardMarkup,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function stopPoll(array $data = []): Poll
    {
        return $this->send(__FUNCTION__, $data, Poll::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_id: int,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function deleteMessage(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_ids: int[],
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function deleteMessages(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }
}
