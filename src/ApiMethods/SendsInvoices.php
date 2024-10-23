<?php

namespace Slmatthew\Tetragram\ApiMethods;

use Slmatthew\Tetragram\Entities\InlineKeyboardMarkup;
use Slmatthew\Tetragram\Entities\LabeledPrice;
use Slmatthew\Tetragram\Entities\Message;
use Slmatthew\Tetragram\Entities\ReplyParameters;
use Slmatthew\Tetragram\Entities\ShippingOption;
use Slmatthew\Tetragram\Entities\StarTransactions;

trait SendsInvoices
{
    /**
     * @param array{
     *     chat_id: int|string,
     *     message_thread_id: int,
     *     title: string,
     *     description: string,
     *     payload: string,
     *     provider_token: string,
     *     currency: string,
     *     prices: LabeledPrice[],
     *     max_tip_amount: int,
     *     suggested_tip_amounts: int[],
     *     start_parameter: string,
     *     provider_data: string,
     *     photo_url: string,
     *     photo_size: int,
     *     photo_width: int,
     *     photo_height: int,
     *     need_name: bool,
     *     need_phone_number: bool,
     *     need_email: bool,
     *     need_shipping_address: bool,
     *     send_phone_number_to_provider: bool,
     *     send_email_to_provider: bool,
     *     is_flexible: bool,
     *     disable_notification: bool,
     *     protect_content: bool,
     *     message_effect_id: string,
     *     reply_parameters: ReplyParameters,
     *     reply_markup: InlineKeyboardMarkup
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function sendInvoice(array $data = []): Message
    {
        return $this->send(__FUNCTION__, $data, Message::class);
    }

    /**
     * @param array{
     *     title: string,
     *     description: string,
     *     payload: string,
     *     provider_token: string,
     *     currency: string,
     *     prices: LabeledPrice[],
     *     max_tip_amount: int,
     *     suggested_tip_amounts: int[],
     *     provider_data: string,
     *     photo_url: string,
     *     photo_size: int,
     *     photo_width: int,
     *     photo_height: int,
     *     need_name: bool,
     *     need_phone_number: bool,
     *     need_email: bool,
     *     need_shipping_address: bool,
     *     send_phone_number_to_provider: bool,
     *     send_email_to_provider: bool,
     *     is_flexible: bool,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function createInvoiceLink(array $data = []): string
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     shipping_query_id: string,
     *     ok: bool,
     *     shipping_options: ShippingOption[],
     *     error_message: string,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function answerShippingQuery(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     pre_checkout_query_id: string,
     *     ok: bool,
     *     error_message: string,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function answerPreCheckoutQuery(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     offset: int,
     *     limit: int,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function getStarTransactions(array $data = []): StarTransactions
    {
        return $this->send(__FUNCTION__, $data, StarTransactions::class);
    }

    /**
     * @param array{
     *     user_id: int,
     *     telegram_payment_charge_id: string,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function refundStarPayment(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }
}
