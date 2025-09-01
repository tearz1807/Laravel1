<?php

namespace App\Game\CreationalPat;
use App\Game\Products\Maze;
use App\Game\Products\Wall;
use App\Game\Products\Room;
use App\Game\Products\Door;

class StandardMazeFactory implements MazeFactory {
    public function makeMaze(): Maze {
        return new Maze();
    }
    
    public function makeWall(): Wall {
        return new Wall();
    }
    
    public function makeRoom(int $n): Room {
        return new Room($n);
    }
    
    public function makeDoor(Room $r1, Room $r2): Door {
        return new Door($r1, $r2);
    }
}