<?php

namespace App\Http\Controllers\Patterns\Behavioral\Iterator;

class ListIterator
{
    private $list;
    private $current;
    private $reverse;

    public function __construct(SimpleList $list, $reverse = false)
    {
        $this->list = $list;
        $this->reverse = $reverse;
        $this->current = $reverse ? $list->count() - 1 : 0;
    }

    public function next()
    {
        $this->current += $this->reverse ? -1 : 1;
    }

    public function isDone()
    {
        return $this->reverse ? $this->current < 0 : $this->current >= $this->list->count();
    }

    public function currentItem()
    {
        return $this->list->get($this->current);
    }
}
