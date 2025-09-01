<?php

namespace App\Http\Controllers\Patterns\Behavioral\Interpreter;

class ConstExpr implements Expr
{
    public function __construct(private $v) {}
    
    public function eval($ctx) 
    { 
        return $this->v; 
    }
}
