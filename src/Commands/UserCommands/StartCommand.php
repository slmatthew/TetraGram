<?php


namespace Slmatthew\Tetragram\Commands\UserCommands;

use Slmatthew\Tetragram\Commands\UserCommand;
use Slmatthew\Tetragram\Entities\ServerResponse;
use Slmatthew\Tetragram\Request;

/**
 * Start command
 */
class StartCommand extends UserCommand
{
    /**
     * @var string
     */
    protected string $name = 'start';

    /**
     * @var string
     */
    protected string $description = 'Start command';

    /**
     * @var string
     */
    protected string $usage = '/start';

    /**
     * @var string
     */
    protected string $version = '1.2.0';

    /**
     * Command execute method
     *
     * @return ServerResponse
     */
    public function execute(): ServerResponse
    {
        //$message = $this->getMessage() ?: $this->getEditedMessage() ?: $this->getChannelPost() ?: $this->getEditedChannelPost();
        //$chat_id = $message->getChat()->getId();
        //$user_id = $message->getFrom()->getId();

        return Request::emptyResponse();
    }
}
