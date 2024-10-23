<?php

namespace Slmatthew\Tetragram\ApiMethods;

use Slmatthew\Tetragram\Entities\InlineQueryResult\InlineQueryResult;
use Slmatthew\Tetragram\Entities\InlineQueryResultsButton;
use Slmatthew\Tetragram\Entities\SentWebAppMessage;

trait AnswersInlineQueries
{
    /**
     * @param array{
     *     inline_query_id: string,
     *     results: InlineQueryResult[],
     *     cache_time: int,
     *     is_personal: bool,
     *     next_offset: string,
     *     button: InlineQueryResultsButton,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function answerInlineQuery(array $data = []): bool
    {
        return $this->send(__FUNCTION__, $data, null);
    }

    /**
     * @param array{
     *     web_app_query_id: string,
     *     result: InlineQueryResult,
     * } $data
     *
     * @throws \Slmatthew\Tetragram\Exceptions\TelegramException
     */
    public function answerWebAppQuery(array $data = []): SentWebAppMessage
    {
        return $this->send(__FUNCTION__, $data, SentWebAppMessage::class);
    }
}
