<?php

namespace App\Game\Structural\Composite;

class Card extends Equipment
{
    public function __construct(string $name) 
    {
        parent::__construct($name);
        $this->power = 30;
        $this->netPrice = 150;
        $this->discountPrice = 135;
    }

    public function power(): float 
    {
        return $this->power;
    }

    public function netPrice(): float 
    {
        return $this->netPrice;
    }

    public function discountPrice(): float 
    {
        return $this->discountPrice;
    }
}