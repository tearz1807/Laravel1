<?php

namespace App\Http\Controllers\Patterns\Behavioral\Interpreter;

interface Expr 
{ 
    public function eval($ctx); 
}
