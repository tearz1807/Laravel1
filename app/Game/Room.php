<?php

namespace App\Game;

class Room {
    private $number;

    public function __construct(int $n) {
        $this->number = $n;
    }
    public function getDescription(): string{
        return "Room #{$this->number}";
    }
}