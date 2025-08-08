<?php

namespace App\Game;

class Door {
    private $room1;
    private $room2;

    public function __construct(Room $r1, Room $r2) {
        $this->room1 = $r1;
        $this->room2 = $r2;
    }
}