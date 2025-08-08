<?php

namespace App\Game;

class MazeSingleton {
    private static $instance;
    
    private function __construct() {}
    
    public static function getInstance(): MazeSingleton {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getInstanceId(): int{
        return spl_object_id($this);
    }
}