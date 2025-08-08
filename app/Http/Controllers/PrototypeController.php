<?php

namespace App\Http\Controllers;

use App\Game\MazePrototype;
use App\Game\Maze;
use App\Game\Wall;
use App\Game\Room;
use App\Game\Door;

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