<?php

namespace Slmatthew\Tetragram;

require __DIR__ . '/../vendor/autoload.php';

class Telegram
{
    /**
     * @var string Current version of the package
     */
    protected string $version = '0.1.0';

    /**
     * @var string Bot token got from @BotFather
     */
    protected string $bot_token;

    /**
     * @var string Bot username
     */
    protected string $bot_username;

    /**
     * @var int Bot ID
     */
    protected int $bot_id;

    public function __construct(string $bot_token) {
        $this->bot_token = $bot_token;

        Request::initialize($this);
    }

    public function getToken(): string {
        return $this->bot_token;
    }
}