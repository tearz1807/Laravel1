<?php

namespace App\Game\Structural\Composite;

class Bus extends CompositeEquipment
{
    public function __construct(string $name) 
    {
        parent::__construct($name);
    }
}