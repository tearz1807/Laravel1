<?php

namespace App\Http\Controllers\Patterns\Behavioral\Interpreter;

class OrExpr implements Expr
{
    public function __construct(private $l, private $r) {}
    
    public function eval($ctx) 
    { 
        return $this->l->eval($ctx) || $this->r->eval($ctx); 
    }
}
