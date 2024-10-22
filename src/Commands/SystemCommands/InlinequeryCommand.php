<?php


namespace Slmatthew\Tetragram\Commands\SystemCommands;

use Slmatthew\Tetragram\Commands\SystemCommand;
use Slmatthew\Tetragram\Entities\ServerResponse;

/**
 * Inline query command
 */
class InlinequeryCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected string $name = 'inlinequery';

    /**
     * @var string
     */
    protected string $description = 'Reply to inline query';

    /**
     * @var string
     */
    protected string $version = '1.0.1';

    /**
     * Command execute method
     *
     * @return mixed
     */
    public function execute(): ServerResponse
    {
        //$inline_query = $this->getInlineQuery();
        //$user_id      = $inline_query->getFrom()->getId();
        //$query        = $inline_query->getQuery();

        return $this->getInlineQuery()->answer([]);
    }
}
