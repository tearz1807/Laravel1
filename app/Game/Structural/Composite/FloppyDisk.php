<?php

namespace App\Game\Structural\Composite;

class FloppyDisk extends Equipment
{
    public function __construct(string $name) 
    {
        parent::__construct($name);
        $this->power = 50;
        $this->netPrice = 100;
        $this->discountPrice = 90;
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