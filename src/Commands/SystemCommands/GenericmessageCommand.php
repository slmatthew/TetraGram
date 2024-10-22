<?php


namespace Slmatthew\Tetragram\Commands\SystemCommands;

use Slmatthew\Tetragram\Commands\SystemCommand;
use Slmatthew\Tetragram\Entities\ServerResponse;
use Slmatthew\Tetragram\Exceptions\TelegramException;
use Slmatthew\Tetragram\Request;
use Slmatthew\Tetragram\Telegram;

/**
 * Generic message command
 */
class GenericmessageCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected string $name = Telegram::GENERIC_MESSAGE_COMMAND;

    /**
     * @var string
     */
    protected string $description = 'Handle generic message';

    /**
     * @var string
     */
    protected string $version = '1.2.0';

    /**
     * @var bool
     */
    protected bool $need_mysql = true;

    /**
     * Execution if MySQL is required but not available
     *
     * @return ServerResponse
     * @throws TelegramException
     */
    public function executeNoDb(): ServerResponse
    {
        // Try to execute any deprecated system commands.
        if (self::$execute_deprecated && $deprecated_system_command_response = $this->executeDeprecatedSystemCommand()) {
            return $deprecated_system_command_response;
        }

        return Request::emptyResponse();
    }

    /**
     * Execute command
     *
     * @return ServerResponse
     * @throws TelegramException
     */
    public function execute(): ServerResponse
    {
        // Try to continue any active conversation.
        if ($active_conversation_response = $this->executeActiveConversation()) {
            return $active_conversation_response;
        }

        // Try to execute any deprecated system commands.
        if (self::$execute_deprecated && $deprecated_system_command_response = $this->executeDeprecatedSystemCommand()) {
            return $deprecated_system_command_response;
        }

        return Request::emptyResponse();
    }
}
