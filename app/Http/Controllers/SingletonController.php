<?php

namespace App\Http\Controllers;

use App\Game\MazeSingleton;

class SingletonController extends Controller
{
    public function show()
    {
        $instance1 = MazeSingleton::getInstance();
        $instance2 = MazeSingleton::getInstance();
        
        return response()->json([
            'singleton_operation' => 'Instance check',
            'is_same_instance' => $instance1 === $instance2,
            'instance_id' => spl_object_id($instance1)
        ]);
    }
}