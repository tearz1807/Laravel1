<?php

namespace App\Game\Structural\Decorator;

class TextView extends VisualComponent
{
    public function draw(): string
    {
        return "Drawing Text View";
    }

    public function resize(): string
    {
        return "Resizing Text View";
    }
}