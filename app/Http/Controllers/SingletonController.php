<?php

namespace App\Http\Controllers;

use App\Game\MazeSingleton;

class SingletonController extends Controller
{
    public function show()
    {
        $instance1 = MazeSingleton::getInstance();
        
        $instance2 = MazeSingleton::getInstance();
        
        $instance1->setParam('test1', '12312 123 123 123 123');
        $instance2->setParam('test1', [1, 2, 3, 4]);

        return [
            'test1_via_instance2' => $instance2->getParam('test1'),
            'test2_via_instance1' => $instance1->getParam('test1'),
            'is_same' => $instance1 === $instance2
        ];
    }
}