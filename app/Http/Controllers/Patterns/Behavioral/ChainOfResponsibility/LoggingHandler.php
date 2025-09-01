<?php

namespace App\Http\Controllers\Patterns\Behavioral\ChainOfResponsibility;

use Illuminate\Http\Request;

class LoggingHandler extends Handler
{
    public function handle(Request $r) { return $r->has('log') ? response()->json(['message' => 'LoggingHandler: залогировано']) : parent::handle($r); }
}
