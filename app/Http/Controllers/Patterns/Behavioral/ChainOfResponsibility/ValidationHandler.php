<?php

namespace App\Http\Controllers\Patterns\Behavioral\ChainOfResponsibility;

use Illuminate\Http\Request;

class ValidationHandler extends Handler
{
    public function handle(Request $r) { return $r->has('validate') ? response()->json(['message' => 'ValidationHandler: валидно']) : parent::handle($r); }
}
