<?php

namespace Slmatthew\Tetragram\Helpers;

function array_is_assoc(array $array): bool
{
    $keys = array_keys($array);

    return array_keys($keys) !== $keys;
}
