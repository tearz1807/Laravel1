<?php

namespace App\Http\Controllers\Patterns\Creational;
use Illuminate\Routing\Controller;

use App\Game\CreationalPat\MazePrototype;
use App\Game\Products\Maze;
use App\Game\Products\Wall;
use App\Game\Products\Room;
use App\Game\Products\Door;

class PrototypeController extends Controller
{
    public function clone()
    {
        $prototype = new MazePrototype();
        $mazeClone = $prototype->makeMaze();
        
        return response()->json([
            'operation' => 'Maze cloned successfully',
            'original' => get_class($prototype),
            'clone' => get_class($mazeClone)
        ]);
    }
}