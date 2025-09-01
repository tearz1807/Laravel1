<?php

namespace App\Http\Controllers\Patterns\Structural;

use App\Http\Controllers\Controller;
use App\Game\Structural\Facade\Compiler;

class FacadeController extends Controller
{
    public function demo()
    {
        $compiler = new Compiler();
        $bytecode = $compiler->compile("x = y + 2");
        
        return response()->json([
            'source_code' => "x = y + 2",
            'bytecode' => $bytecode->getBytes()
        ]);
    }
}