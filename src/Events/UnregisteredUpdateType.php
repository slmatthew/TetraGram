<?php

namespace Slmatthew\Tetragram\Events;

use Slmatthew\Tetragram\Entities\Update;

class UnregisteredUpdateType extends Event
{
    public function __construct(
        public Update $update,
    ) {
    }
}
