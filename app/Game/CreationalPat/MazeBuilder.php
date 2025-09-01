<?php

namespace App\Game\CreationalPat;
use App\Game\Products\Maze;
use App\Game\Products\Wall;
use App\Game\Products\Room;
use App\Game\Products\Door;

interface MazeBuilder {
    public function buildMaze();
    public function buildRoom(int $n);
    public function buildDoor(int $roomFrom, int $roomTo);
    public function getMaze(): Maze;
}