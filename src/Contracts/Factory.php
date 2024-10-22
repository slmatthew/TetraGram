<?php

namespace Slmatthew\Tetragram\Contracts;

interface Factory
{
    public static function make(array $data): static;
}
