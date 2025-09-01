<?php

namespace App\Game\Structural\Proxy;

use App\Game\Structural\Proxy\Point;

class TextDocument
{
    private array $graphics = [];

    public function insert(Graphic $graphic): void
    {
        $this->graphics[] = $graphic;
    }

    public function drawAll(): void
    {
        foreach ($this->graphics as $i => $graphic) {
            $graphic->draw(new Point($i * 100, $i * 100));
        }
    }
}