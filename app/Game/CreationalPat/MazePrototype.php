<?php

namespace App\Game\CreationalPat;

use App\Game\Products\Maze;
use App\Game\Products\Wall;
use App\Game\Products\Room;
use App\Game\Products\Door;

class MazePrototype {
    private $maze;
    private $wall;
    private $room;
    private $door;
    
    public function __construct() {
        $this->maze = new Maze();
        $this->wall = new Wall();
        $this->room = new Room(0);
        $this->door = new Door(new Room(1), new Room(2));
    }
    
    public function makeMaze(): Maze {
        return clone $this->maze;
    }
    
    public function makeWall(): Wall {
        return clone $this->wall;
    }
}