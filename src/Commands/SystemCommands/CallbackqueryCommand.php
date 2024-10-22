<?php


namespace Slmatthew\Tetragram\Commands\SystemCommands;

use Slmatthew\Tetragram\Commands\SystemCommand;
use Slmatthew\Tetragram\Entities\ServerResponse;

/**
 * Callback query command
 */
class CallbackqueryCommand extends SystemCommand
{
    /**
     * @var callable[]
     */
    protected static $callbacks = [];

    /**
     * @var string
     */
    protected string $name = 'callbackquery';

    /**
     * @var string
     */
    protected string $description = 'Reply to callback query';

    /**
     * @var string
     */
    protected string $version = '1.0.0';

    /**
     * Command execute method
     *
     * @return ServerResponse
     */
    public function execute(): ServerResponse
    {
        //$callback_query = $this->getCallbackQuery();
        //$user_id        = $callback_query->getFrom()->getId();
        //$query_id       = $callback_query->getId();
        //$query_data     = $callback_query->getData();

        $answer         = null;
        $callback_query = $this->getCallbackQuery();

        // Call all registered callbacks.
        foreach (self::$callbacks as $callback) {
            $answer = $callback($callback_query);
        }

        return ($answer instanceof ServerResponse) ? $answer : $callback_query->answer();
    }

    /**
     * Add a new callback handler for callback queries.
     *
     * @param $callback
     */
    public static function addCallbackHandler($callback): void
    {
        self::$callbacks[] = $callback;
    }
}
