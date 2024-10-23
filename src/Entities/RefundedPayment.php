<?php

namespace Slmatthew\Tetragram\Entities;

/**
 * @method string getCurrency()                Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars. Currently, always “XTR”
 * @method int    getTotalAmount()             Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @method string getInvoicePayload()          Bot-specified invoice payload
 * @method string getTelegramPaymentChargeId() Telegram payment identifier
 * @method string|null getProviderPaymentChargeId   Optional. Provider payment identifier
 */
class RefundedPayment extends Entity {}
