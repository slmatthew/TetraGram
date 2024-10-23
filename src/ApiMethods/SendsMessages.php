<?php

namespace Slmatthew\Tetragram\ApiMethods;

use Slmatthew\Tetragram\Entities\BotCommand;
use Slmatthew\Tetragram\Entities\BotCommandScope\BotCommandScope;
use Slmatthew\Tetragram\Entities\BotDescription;
use Slmatthew\Tetragram\Entities\BotName;
use Slmatthew\Tetragram\Entities\BotShortDescription;
use Slmatthew\Tetragram\Entities\BusinessConnection;
use Slmatthew\Tetragram\Entities\ChatAdministratorRights;
use Slmatthew\Tetragram\Entities\ChatFullInfo;
use Slmatthew\Tetragram\Entities\ChatInviteLink;
use Slmatthew\Tetragram\Entities\ChatMember\ChatMember;
use Slmatthew\Tetragram\Entities\ChatPermissions;
use Slmatthew\Tetragram\Entities\File;
use Slmatthew\Tetragram\Entities\ForceReply;
use Slmatthew\Tetragram\Entities\ForumTopic;
use Slmatthew\Tetragram\Entities\InlineKeyboardMarkup;
use Slmatthew\Tetragram\Entities\InputFile;
use Slmatthew\Tetragram\Entities\InputMedia\InputMedia;
use Slmatthew\Tetragram\Entities\InputPaidMedia\InputPaidMedia;
use Slmatthew\Tetragram\Entities\LinkPreviewOptions;
use Slmatthew\Tetragram\Entities\MenuButton\MenuButton;
use Slmatthew\Tetragram\Entities\Message;
use Slmatthew\Tetragram\Entities\MessageEntity;
use Slmatthew\Tetragram\Entities\MessageId;
use Slmatthew\Tetragram\Entities\ReactionType\ReactionType;
use Slmatthew\Tetragram\Entities\ReplyKeyboardMarkup;
use Slmatthew\Tetragram\Entities\ReplyKeyboardRemove;
use Slmatthew\Tetragram\Entities\ReplyParameters;
use Slmatthew\Tetragram\Entities\Sticker;
use Slmatthew\Tetragram\Entities\Update;
use Slmatthew\Tetragram\Entities\User;
use Slmatthew\Tetragram\Entities\UserChatBoosts;
use Slmatthew\Tetragram\Entities\UserProfilePhotos;
use Slmatthew\Tetragram\Entities\WebhookInfo;
use Slmatthew\Tetragram\Exceptions;
use Slmatthew\Tetragram\Exceptions\TelegramException;

trait SendsMessages
{
    /**
     * @param  array{
     *     offset: int,
     *     limit: int,
     *     timeout: int,
     *     allowed_updates: array<string>
     * } $data
     * @return array<Update>
     *
     * @throws TelegramException
     */
    public function getUpdates(array $data = []): array
    {
        return $this->send(__FUNCTION__, $data, [Update::class]);
    }

    /**
     * @param array{
     *     url: string,
     *     certificate: InputFile,
     *     ip_address: string,
     *     max_connections: int,
     *     allowed_updates: array<string>,
     *     drop_pending_updates: bool,
     *     secret_token: string
     * } $data
     *
     * @throws TelegramException
     */
    public function setWebhook(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data);
    }

    /**
     * @param array{
     *     drop_pending_updates: bool
     * } $data
     *
     * @throws TelegramException
     */
    public function deleteWebhook(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data);
    }

    /**
     * @throws TelegramException
     */
    public function getWebhookInfo(array $data = []): WebhookInfo
    {
        return $this->send(__FUNCTION__, $data, WebhookInfo::class);
    }

    /**
     * @throws TelegramException
     */
    public function getMe(array $data = []): User
    {
        return $this->send(__FUNCTION__, $data, User::class);
    }

    public function logOut(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data);
    }

    /**
     * @throws TelegramException
     */
    public function close(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     text: string,
     *     parse_mode: string,
     *     entities: MessageEntity[],
     *     link_preview_options: LinkPreviewOptions,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
     * } $data
     *
     * @throws TelegramException
     */
    public function sendMessage(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     from_chat_id: int|string,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function forwardMessage(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     from_chat_id: int|string,
     *     message_ids: int[],
     *     disable_notification: bool,
     *     protect_content: bool,
     * } $data
     * @return MessageId[]
     *
     * @throws TelegramException
     */
    public function forwardMessages(array $data = []): array
    {
        return $this->send(__FUNCTION__, $data, [MessageId::class]);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     from_chat_id: int|string,
     *     message_id: int,
     *     caption: string,
     *     parse_mode: string,
     *     caption_entities: MessageEntity[],
     *     show_caption_above_media: bool,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
     * } $data
     *
     * @throws TelegramException
     */
    public function copyMessage(array $data = []): MessageId
    {
        return $this->send(__FUNCTION__, $data, MessageId::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     from_chat_id: int|string,
     *     message_ids: int[],
     *     disable_notification: bool,
     *     protect_content: bool,
     *     remove_caption: bool,
     * } $data
     * @return MessageId[]
     *
     * @throws TelegramException
     */
    public function copyMessages(array $data = []): array
    {
        return $this->send(__FUNCTION__, $data, [MessageId::class]);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     photo: string|InputFile,
     *     caption: string,
     *     parse_mode: string,
     *     caption_entities: MessageEntity[],
     *     show_caption_above_media: bool,
     *     has_spoiler: bool,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
     * } $data
     *
     * @throws TelegramException
     */
    public function sendPhoto(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     audio: string|InputFile,
     *     caption: string,
     *     parse_mode: string,
     *     caption_entities: MessageEntity[],
     *     duration: int,
     *     performer: string,
     *     title: string,
     *     thumbnail: string|InputFile,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply,
     * } $data
     *
     * @throws TelegramException
     */
    public function sendAudio(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     document: string|InputFile,
     *     thumbnail: string|InputFile,
     *     caption: string,
     *     parse_mode: string,
     *     caption_entities: MessageEntity[],
     *     disable_content_type_detection: bool,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply,
     * } $data
     *
     * @throws TelegramException
     */
    public function sendDocument(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     video: string|InputFile,
     *     duration: int,
     *     width: int,
     *     height: int,
     *     thumbnail: string|InputFile,
     *     caption: string,
     *     parse_mode: string,
     *     caption_entities: MessageEntity[],
     *     show_caption_above_media: bool,
     *     has_spoiler: bool,
     *     supports_streaming: bool,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply,
     * } $data
     *
     * @throws TelegramException
     */
    public function sendVideo(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     animation: string|InputFile,
     *     duration: int,
     *     width: int,
     *     height: int,
     *     thumbnail: string|InputFile,
     *     caption: string,
     *     parse_mode: string,
     *     caption_entities: MessageEntity[],
     *     show_caption_above_media: bool,
     *     has_spoiler: bool,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply,
     * } $data
     *
     * @throws TelegramException
     */
    public function sendAnimation(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     voice: string|InputFile,
     *     caption: string,
     *     parse_mode: string,
     *     caption_entities: MessageEntity[],
     *     duration: int,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply,
     * } $data
     *
     * @throws TelegramException
     */
    public function sendVoice(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     video_note: string|InputFile,
     *     duration: int,
     *     length: int,
     *     thumbnail: string|InputFile,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply,
     * } $data
     *
     * @throws TelegramException
     */
    public function sendVideoNote(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string|null,
     *     chat_id: int|string,
     *     star_count: int,
     *     media: InputPaidMedia[],
     *     caption: string,
     *     parse_mode: string,
     *     caption_entities: MessageEntity[],
     *     show_caption_above_media: bool,
     *     disable_notification: bool,
     *     parse_content: bool,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply,
     * } $data
     *
     * @throws TelegramException
     */
    public function sendPaidMedia(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     media: InputMedia[],
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     * } $data
     * @return Message[]
     *
     * @throws TelegramException
     */
    public function sendMediaGroup(array $data = []): array
    {
        return $this->send(__FUNCTION__, $data, [Message::class]);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     latitude: float,
     *     longitude: float,
     *     horizontal_accuracy: float,
     *     live_period: int,
     *     heading: int,
     *     proximity_alert_radius: int,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
     * } $data
     *
     * @throws TelegramException
     */
    public function sendLocation(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     latitude: float,
     *     longitude: float,
     *     title: string,
     *     address: string,
     *     foursquare_id: string,
     *     foursquare_type: string,
     *     google_place_id: string,
     *     google_place_type: string,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
     * } $data
     *
     * @throws TelegramException
     */
    public function sendVenue(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     phone_number: string,
     *     first_name: string,
     *     last_name: string,
     *     vcard: string,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
     * } $data
     *
     * @throws TelegramException
     */
    public function sendContact(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     question: string,
     *     question_parse_mode: string,
     *     question_entities: array,
     *     options: array,
     *     is_anonymous: bool,
     *     type: string,
     *     allows_multiple_answers: bool,
     *     correct_option_id: int,
     *     explanation: string,
     *     explanation_parse_mode: string,
     *     explanation_entities: array,
     *     open_period: int,
     *     close_date: int,
     *     is_closed: bool,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
     * } $data
     *
     * @throws TelegramException
     */
    public function sendPoll(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     emoji: string,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
     * } $data
     *
     * @throws TelegramException
     */
    public function sendDice(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     action: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function sendChatAction(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_id: int,
     *     reaction: ReactionType[],
     *     is_big: bool
     * } $data
     *
     * @throws TelegramException
     */
    public function sendMessageReaction(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     user_id: int,
     *     offset: int,
     *     limit: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function getUserProfilePhotos(array $data = []): UserProfilePhotos
    {
        return $this->send(__FUNCTION__, $data, UserProfilePhotos::class);
    }

    /**
     * @param array{
     *     file_id: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function getFile(array $data = []): File
    {
        return $this->send(__FUNCTION__, $data, File::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     user_id: int,
     *     until_date: int,
     *     revoke_messages: bool,
     * } $data
     *
     * @throws TelegramException
     */
    public function banChatMember(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     user_id: int,
     *     only_if_banned: bool,
     * } $data
     *
     * @throws TelegramException
     */
    public function unbanChatMember(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     user_id: int,
     *     permissions: ChatPermissions,
     *     use_independent_chat_permissions: bool,
     *     until_date: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function restrictChatMember(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     user_id: int,
     *     is_anonymous: bool,
     *     can_manage_chat: bool,
     *     can_delete_messages: bool,
     *     can_manage_video_chats: bool,
     *     can_restrict_members: bool,
     *     can_promote_members: bool,
     *     can_change_info: bool,
     *     can_invite_users: bool,
     *     can_post_stories: bool,
     *     can_edit_stories: bool,
     *     can_delete_stories: bool,
     *     can_post_messages: bool,
     *     can_edit_messages: bool,
     *     can_pin_messages: bool,
     *     can_manage_topics: bool
     * } $data
     *
     * @throws TelegramException
     */
    public function promoteChatMember(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     user_id: int,
     *     custom_title: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function setChatAdministratorCustomTitle(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     sender_chat_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function banChatSenderChat(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     sender_chat_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function unbanChatSenderChat(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     permissions: ChatPermissions,
     *     use_independent_chat_permissions: bool,
     * } $data
     *
     * @throws TelegramException
     */
    public function setChatPermissions(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function exportChatInviteLink(array $data = []): string
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     name: string,
     *     expire_date: int,
     *     member_limit: int,
     *     creates_join_request: bool,
     * } $data
     *
     * @throws TelegramException
     */
    public function createChatInviteLink(array $data = []): ChatInviteLink
    {
        return $this->send(__FUNCTION__, $data, ChatInviteLink::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     invite_link: string,
     *     name: string,
     *     expire_date: int,
     *     member_limit: int,
     *     creates_join_request: bool,
     * } $data
     *
     * @throws TelegramException
     */
    public function editChatInviteLink(array $data = []): ChatInviteLink
    {
        return $this->send(__FUNCTION__, $data, ChatInviteLink::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     invite_link: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function revokeChatInviteLink(array $data = []): ChatInviteLink
    {
        return $this->send(__FUNCTION__, $data, ChatInviteLink::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     user_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function approveChatJoinRequest(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     user_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function declineChatJoinRequest(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     photo: InputFile,
     * } $data
     *
     * @throws TelegramException
     */
    public function setChatPhoto(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function deleteChatPhoto(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     title: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function setChatTitle(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     description: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function setChatDescription(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     business_connection_id: string|null,
     *     chat_id: int|string,
     *     message_id: int,
     *     disable_notification: bool,
     * } $data
     *
     * @throws TelegramException
     */
    public function pinChatMessage(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     business_connection_id: string|null,
     *     chat_id: int|string,
     *     message_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function unpinChatMessage(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function unpinAllChatMessages(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function leaveChat(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function getChat(array $data = []): ChatFullInfo
    {
        return $this->send(__FUNCTION__, $data, ChatFullInfo::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     * @return ChatMember[]
     *
     * @throws TelegramException
     */
    public function getChatAdministrator(array $data = []): array
    {
        return $this->send(__FUNCTION__, $data, [ChatMember::class]);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function getChatMemberCount(array $data = []): int
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     user_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function getChatMember(array $data = []): ChatMember
    {
        return $this->send(__FUNCTION__, $data, ChatMember::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     sticker_set_name: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function setChatStickerSet(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function deleteChatStickerSet(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *
     * } $data
     * @return Sticker[]
     *
     * @throws TelegramException
     */
    public function getForumTopicIconStickers(array $data = []): array
    {
        return $this->send(__FUNCTION__, $data, [Sticker::class]);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     name: string,
     *     icon_color: int,
     *     icon_custom_emoji_id: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function createForumTopic(array $data = []): ForumTopic
    {
        return $this->send(__FUNCTION__, $data, ForumTopic::class);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     name: string,
     *     icon_custom_emoji_id: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function editForumTopic(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function closeForumTopic(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function reopenForumTopic(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function deleteForumTopic(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function unpinAllForumTopicMessages(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     name: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function editGeneralForumTopic(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function closeGeneralForumTopic(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function reopenGeneralForumTopic(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function hideGeneralForumTopic(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string
     * } $data
     *
     * @throws TelegramException
     */
    public function unhideGeneralForumTopic(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     * } $data
     *
     * @throws TelegramException
     */
    public function unpinAllGeneralForumTopicMessages(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     callback_query_id: string,
     *     text: string,
     *     show_alert: bool,
     *     url: string,
     *     cache_time: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function answerCallbackQuery(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int|string,
     *     user_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function getUserChatBoosts(array $data = []): UserChatBoosts
    {
        return $this->send(__FUNCTION__, $data, UserChatBoosts::class);
    }

    /**
     * @param array{
     *     business_connection_id: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function getBusinessConnection(array $data = []): BusinessConnection
    {
        return $this->send(__FUNCTION__, $data, BusinessConnection::class);
    }

    /**
     * @param array{
     *     commands: BotCommand[],
     *     scope: BotCommandScope,
     *     language_code: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function setMyCommands(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     scope: BotCommandScope,
     *     language_code: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function deleteMyCommands(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     scope: BotCommandScope,
     *     language_code: string,
     * } $data
     * @return BotCommand[]
     *
     * @throws TelegramException
     */
    public function getMyCommands(array $data = []): array
    {
        return $this->send(__FUNCTION__, $data, [BotCommand::class]);
    }

    /**
     * @param array{
     *     name: string,
     *     language_code: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function setMyName(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     language_code: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function getMyName(array $data = []): BotName
    {
        return $this->send(__FUNCTION__, $data, BotName::class);
    }

    /**
     * @param array{
     *     description: string,
     *     language_code: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function setMyDescription(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     language_code: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function getMyDescription(array $data = []): BotDescription
    {
        return $this->send(__FUNCTION__, $data, BotDescription::class);
    }

    /**
     * @param array{
     *     short_description: string,
     *     language_code: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function setMyShortDescription(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     language_code: string,
     * } $data
     *
     * @throws TelegramException
     */
    public function getMyShortDescription(array $data = []): BotShortDescription
    {
        return $this->send(__FUNCTION__, $data, BotShortDescription::class);
    }

    /**
     * @param array{
     *     chat_id: int,
     *     menu_button: MenuButton,
     * } $data
     *
     * @throws TelegramException
     */
    public function setChatMenuButton(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     chat_id: int,
     * } $data
     *
     * @throws TelegramException
     */
    public function getChatMenuButton(array $data = []): MenuButton
    {
        return $this->send(__FUNCTION__, $data, MenuButton::class);
    }

    /**
     * @param array{
     *     rights: ChatAdministratorRights,
     *     for_channels: bool,
     * } $data
     *
     * @throws TelegramException
     */
    public function setMyDefaultAdministratorRights(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     for_channels: bool,
     * } $data
     *
     * @throws TelegramException
     */
    public function getMyDefaultAdministratorRights(array $data = []): ChatAdministratorRights
    {
        return $this->send(__FUNCTION__, $data, ChatAdministratorRights::class);
    }
}
