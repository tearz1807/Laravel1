<?php

namespace App\Game\CreationalPat;

use App\Game\Products\Maze;
use App\Game\Products\Wall;
use App\Game\Products\Room;
use App\Game\Products\Door;

class StandardMazeBuilder implements MazeBuilder {
    private $currentMaze;
    private $rooms = [];
    
    public function buildMaze() {
        $this->currentMaze = new Maze();
    }
    
    public function buildRoom(int $n) {
        if (!isset($this->rooms[$n])) {
            $room = new Room($n);
            $this->rooms[$n] = $room;
            $this->currentMaze->addRoom($room);
        }
        return $this->rooms[$n];
    }
    
    public function buildDoor(int $roomFrom, int $roomTo) {
        $r1 = $this->buildRoom($roomFrom);
        $r2 = $this->buildRoom($roomTo);
        return new Door($r1, $r2);
    }
    
    public function getMaze(): Maze {
        return $this->currentMaze;
    }
}