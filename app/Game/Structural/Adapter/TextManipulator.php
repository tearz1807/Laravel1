<?php

namespace App\Game\Structural\Adapter;

use App\Game\Structural\Adapter\Manipulator;
use App\Game\Structural\Adapter\Shape;

class TextManipulator implements Manipulator
{
    public function __construct(protected Shape $shape) {}

    public function manipulate(): string
    {
        return "Manipulating text shape";
    }
}