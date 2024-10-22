<?php


namespace Slmatthew\Tetragram\Commands;

abstract class AdminCommand extends Command
{
    /**
     * @var bool
     */
    protected bool $private_only = true;
}
