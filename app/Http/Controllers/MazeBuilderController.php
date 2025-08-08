<?php

namespace App\Http\Controllers;

use App\Game\StandardMazeBuilder;

class MazeBuilderController extends Controller 
{
    public function build()
    {
        $builder = new StandardMazeBuilder();
        $builder->buildMaze();
        $builder->buildRoom(1);
        $builder->buildRoom(2);
        $builder->buildDoor(1, 2);
        
        return response()->json([
            'result' => 'Maze built successfully',
            'components' => [
                'rooms' => ['Room #1', 'Room #2'],
                'door' => 'Door between rooms created'
            ]
        ]);
    }
}