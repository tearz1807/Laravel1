<?php

namespace App\Game\Structural\Composite;

class Chassis extends CompositeEquipment
{
    public function __construct(string $name) 
    {
        parent::__construct($name);
    }
}