<?php

namespace App\Http\Controllers;

class MagicController extends Controller
{
    private $name = 'Original';
    
    public static function __callStatic($method, $args)
    {
        return "0000Вызван статический метод: $method с аргументами: " . implode(', ', $args);
    }
    public function __call($method, $args)
    {
        return "11111Вызван статический метод: $method с аргументами: " . implode(', ', $args);
    }

    public function __invoke($param = null)
    {
        return "Объект вызван как функция" . ($param ? " с параметром: $param" : "");
    }
    
    public function __clone()
    {
        $this->name = 'Cloned';
    }
    
    public function demo()
    {
        $static = self::someStaticMethod('test');
        
        $invoked = $this('hello');
        
        $original = $this;
        $clone = clone $this;
        
        return implode("<br>", [
            "1. __callStatic: " . $static,
            "2. __invoke: " . $invoked,
            "3. __clone: " . "Оригинал: {$original->name}, Клон: {$clone->name}"
        ]);
    }
}