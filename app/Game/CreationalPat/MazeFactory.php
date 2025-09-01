<?php

namespace App\Game\CreationalPat;
use App\Game\Products\Maze;
use App\Game\Products\Wall;
use App\Game\Products\Room;
use App\Game\Products\Door;

interface MazeFactory {
    public function makeMaze(): Maze;
    public function makeWall(): Wall;
    public function makeRoom(int $n): Room;
    public function makeDoor(Room $r1, Room $r2): Door;
}