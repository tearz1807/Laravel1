<?php

namespace App\Game\Structural\Decorator;

class BorderDecorator extends Decorator
{
    private int $borderWidth;

    public function __construct(VisualComponent $component, int $borderWidth)
    {
        parent::__construct($component);
        $this->borderWidth = $borderWidth;
    }

    public function draw(): string
    {
        return parent::draw() . $this->drawBorder();
    }

    private function drawBorder(): string
    {
        return " + Drawing border (width: {$this->borderWidth}px)";
    }
}