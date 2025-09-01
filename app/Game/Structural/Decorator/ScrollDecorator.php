<?php

namespace App\Game\Structural\Decorator;

class ScrollDecorator extends Decorator
{
    public function draw(): string
    {
        return parent::draw() . $this->addScroll();
    }

    private function addScroll(): string
    {
        return " + Adding scrollbars";
    }
}