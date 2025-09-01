<?php

namespace App\Game\Structural\Decorator;

abstract class Decorator extends VisualComponent
{
    protected VisualComponent $component;

    public function __construct(VisualComponent $component)
    {
        $this->component = $component;
    }

    public function draw(): string
    {
        return $this->component->draw();
    }

    public function resize(): string
    {
        return $this->component->resize();
    }
}