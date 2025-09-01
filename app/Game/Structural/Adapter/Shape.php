<?php

namespace App\Game\Structural\Adapter;

use App\Game\Products\Point;
use App\Game\Structural\Adapter\Manipulator;

interface Shape
{
    public function boundingBox(Point &$bottomLeft, Point &$topRight): void;
    public function createManipulator(): Manipulator;
}