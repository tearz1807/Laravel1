<?php

namespace App\Game\Products;

class Point
{
    public function __construct(
        public float $x = 0.0,
        public float $y = 0.0
    ) {}

    public function toArray(): array
    {
        return ['x' => $this->x, 'y' => $this->y];
    }
}