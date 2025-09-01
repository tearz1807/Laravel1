<?php

namespace App\Game\Structural\Decorator;

abstract class VisualComponent
{
    abstract public function draw(): string;
    abstract public function resize(): string;
}