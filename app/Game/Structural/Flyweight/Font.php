<?php

namespace App\Game\Structural\Flyweight;

class Font
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}