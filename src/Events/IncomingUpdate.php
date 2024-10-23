<?php

namespace Slmatthew\Tetragram\Events;

use Slmatthew\Tetragram\Entities\Update;

class IncomingUpdate extends Event
{
    public function __construct(
        public Update $update,
    ) {
    }
}
