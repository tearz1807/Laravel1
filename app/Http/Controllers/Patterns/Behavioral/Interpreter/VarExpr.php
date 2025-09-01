<?php

namespace App\Http\Controllers\Patterns\Behavioral\Interpreter;

class VarExpr implements Expr
{
    public function __construct(private $n) {}
    
    public function eval($ctx) 
    { 
        return $ctx->get($this->n); 
    }
}
