<?php

namespace App\Http\Controllers\Patterns\Behavioral\Interpreter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Patterns\Behavioral\Interpreter\{
    Context,
    OrExpr,
    AndExpr,
    ConstExpr,
    VarExpr,
    NotExpr
};

class InterpreterController extends Controller
{
    public function simpleExample()
    {
        $expr = new OrExpr(
            new AndExpr(new ConstExpr(true), new VarExpr('X')),
            new AndExpr(new VarExpr('Y'), new NotExpr(new VarExpr('X')))
        );
        
        $ctx1 = new Context();
        $ctx1->set('X', false);
        $ctx1->set('Y', true);
        
        $ctx2 = new Context();
        $ctx2->set('X', true);
        $ctx2->set('Y', false);
        
        return response()->json([
            'X=false, Y=true' => $expr->eval($ctx1),
            'X=true, Y=false' => $expr->eval($ctx2)
        ]);
    }
    
    public function evaluate(Request $r)
    {
        $ctx = new Context();
        $expr = new OrExpr(
            new AndExpr(new ConstExpr(true), new VarExpr('X')),
            new AndExpr(new VarExpr('Y'), new NotExpr(new VarExpr('X')))
        );
        
        $ctx->set('X', (bool)$r->input('x'));
        $ctx->set('Y', (bool)$r->input('y'));
        
        return response()->json(['result' => $expr->eval($ctx)]);
    }
}
