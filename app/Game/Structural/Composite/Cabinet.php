<?php

namespace App\Game\Structural\Composite;

class Cabinet extends CompositeEquipment
{
    public function __construct(string $name) 
    {
        parent::__construct($name);
    }
}