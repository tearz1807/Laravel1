<?php

namespace App\Game\Products;

class Maze {
    private $rooms = [];

    public function addRoom(Room $room) {
        $this->rooms[] = $room;
    }
    public function getDescription(): string{
        return "Maze with " . count($this->rooms) . " rooms";
    }
}