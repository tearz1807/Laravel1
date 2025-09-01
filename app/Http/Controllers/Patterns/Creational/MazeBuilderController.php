<?php

namespace App\Http\Controllers\Patterns\Creational;
use Illuminate\Routing\Controller;

use App\Game\CreationalPat\StandardMazeBuilder;

class MazeBuilderController extends Controller 
{
    public function build()
    {
        $builder = new StandardMazeBuilder();
        $builder->buildMaze();
        $builder->buildRoom(1);
        $builder->buildRoom(2);
        $builder->buildRoom(3);
        $builder->buildRoom(4);
        $builder->buildDoor(1, 2);
        $builder->buildRoom(5);
        $builder->buildRoom(6);
        $builder->buildDoor(2, 3);
        $builder->buildDoor(4, 5);
        dd($builder);
        return response()->json([
            'result' => 'Maze built successfully',
            'components' => [
                'rooms' => ['Room #1', 'Room #2'],
                'door' => 'Door between rooms created'
            ]
        ]);
    }
}