<?php

namespace App\Http\Controllers;
use App\Game\MazeFactory;
use App\Game\StandardMazeFactory;

class MazeController extends Controller
{
    public function createMaze(MazeFactory $factory = new StandardMazeFactory())
    {
        //$factory = $factory ?? new StandardMazeFactory();
        
        $maze = $factory->makeMaze();
        $r1 = $factory->makeRoom(1);
        $r2 = $factory->makeRoom(2);
        $door = $factory->makeDoor($r1, $r2);
        
        $maze->addRoom($r1);
        $maze->addRoom($r2);
        
        return response()->json([
            'factory_type' => get_class($factory),
            'maze' => 'Maze object created',
            'rooms' => [
                'room_1' => 'Room #1 created',
                'room_2' => 'Room #2 created'
            ],
            'door' => 'Door between Room #1 and Room #2 created'
        ]);
    }
}