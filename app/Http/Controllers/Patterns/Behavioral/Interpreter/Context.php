<?php

namespace App\Http\Controllers\Patterns\Behavioral\Interpreter;

class Context
{
    private $vars = [];
    
    public function set($n, $v) 
    { 
        $this->vars[$n] = $v; 
    }
    
    public function get($n) 
    { 
        return $this->vars[$n] ?? false; 
    }
}
