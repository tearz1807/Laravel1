<?php

namespace App\Http\Controllers\Patterns\Structural;

use App\Http\Controllers\Controller;
use App\Game\Products\Point;
use App\Game\Structural\Adapter\TextView;
use App\Game\Structural\Adapter\ClassTextShape;
use App\Game\Structural\Adapter\ObjectTextShape;
use App\Game\Structural\Adapter\TextManipulator;

class AdapterController extends Controller
{
    public function classAdapter()
    {
        $textShape = new ClassTextShape();
        
        $bottomLeft = new Point();
        $topRight = new Point();
        
        $textShape->boundingBox($bottomLeft, $topRight);
        $manipulator = $textShape->createManipulator();
        
        return response()->json([
            'pattern' => 'Adapter (Class)',
            'description' => 'Adapter implemented via inheritance',
            'bottomLeft' => $bottomLeft->toArray(),
            'topRight' => $topRight->toArray(),
            'manipulator' => $manipulator->manipulate()
        ]);
    }

    public function objectAdapter()
    {
        $textView = new TextView();
        $textShape = new ObjectTextShape($textView);
        
        $bottomLeft = new Point();
        $topRight = new Point();
        
        $textShape->boundingBox($bottomLeft, $topRight);
        $manipulator = $textShape->createManipulator();
        
        return response()->json([
            'pattern' => 'Adapter (Object)',
            'description' => 'Adapter implemented via composition',
            'bottomLeft' => $bottomLeft->toArray(),
            'topRight' => $topRight->toArray(),
            'manipulator' => $manipulator->manipulate()
        ]);
    }
}