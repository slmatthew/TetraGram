<?php


namespace Slmatthew\Tetragram\Commands\SystemCommands;

use Slmatthew\Tetragram\Commands\SystemCommand;

/**
 * Generic command
 */
class GenericCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected string $name = 'generic';

    /**
     * @var string
     */
    protected string $description = 'Handles generic commands or is executed by default when a command is not found';

    /**
     * @var string
     */
    protected string $version = '1.1.0';
}
