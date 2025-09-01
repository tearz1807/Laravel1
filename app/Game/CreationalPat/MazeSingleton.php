<?php

namespace App\Game\CreationalPat;

class MazeSingleton
{
    private static $instance;
    private $params = [];

    private function __construct() {}

    public static function getInstance(): self{
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;}

    public function setParam($key, $value): void{
        $this->params[$key] = $value;
    }

    public function getParam($key){
        return $this->params[$key] ?? null;
    }
}