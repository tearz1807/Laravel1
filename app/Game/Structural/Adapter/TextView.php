<?php

namespace App\Game\Structural\Adapter;
use App\Game\Products\Coord;

class TextView
{
    public function getOrigin(Coord &$x, Coord &$y): void{}

    public function getExtent(Coord &$width, Coord &$height): void{}

    public function isEmpty(): bool
    {
        return false;
    }
}