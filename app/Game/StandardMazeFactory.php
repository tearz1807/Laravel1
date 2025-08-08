<?php

namespace App\Game;

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