<?php

namespace App\Game;

interface MazeBuilder {
    public function buildMaze();
    public function buildRoom(int $n);
    public function buildDoor(int $roomFrom, int $roomTo);
    public function getMaze(): Maze;
}