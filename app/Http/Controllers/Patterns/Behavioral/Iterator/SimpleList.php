<?php

namespace App\Http\Controllers\Patterns\Behavioral\Iterator;

class SimpleList
{
    private $items = [];

    public function add($item)
    {
        $this->items[] = $item;
    }

    public function count()
    {
        return count($this->items);
    }

    public function get($index)
    {
        return $this->items[$index] ?? null;
    }

    public function createIterator($reverse = false)
    {
        return new ListIterator($this, $reverse);
    }
}
