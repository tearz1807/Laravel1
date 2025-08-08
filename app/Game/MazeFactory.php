<?php

namespace App\Game;

interface MazeFactory {
    public function makeMaze(): Maze;
    public function makeWall(): Wall;
    public function makeRoom(int $n): Room;
    public function makeDoor(Room $r1, Room $r2): Door;
}