<?php

namespace App\Http\Controllers\Patterns\Creational;
use Illuminate\Routing\Controller;
use App\Game\CreationalPat\MazeFactory;
use App\Game\CreationalPat\StandardMazeFactory;


class MazeController extends Controller
{
        public function createMaze(?MazeFactory $factory = null)
        {
            $factory = $factory ?? new StandardMazeFactory();
        
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