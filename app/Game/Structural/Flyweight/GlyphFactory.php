<?php

namespace App\Game\Structural\Flyweight;

class GlyphFactory
{
    private array $characters = [];

    public function createCharacter(string $charCode): Character
    {
        if (!isset($this->characters[$charCode])) {
            $this->characters[$charCode] = new Character($charCode);
        }
        return $this->characters[$charCode];
    }

    public function getCharacterCount(): int
    {
        return count($this->characters);
    }
}