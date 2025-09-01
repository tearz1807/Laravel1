<?php

namespace App\Http\Controllers\Patterns\Behavioral\Interpreter;

class NotExpr implements Expr
{
    public function __construct(private $e) {}
    
    public function eval($ctx) 
    { 
        return !$this->e->eval($ctx); 
    }
}
