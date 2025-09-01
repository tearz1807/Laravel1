<?php

namespace App\Http\Controllers\Patterns\Behavioral\Iterator;

function printItems(ListIterator $iterator)
{
    $result = [];
    while (!$iterator->isDone()) {
        $result[] = $iterator->currentItem();
        $iterator->next();
    }
    return $result;
}
