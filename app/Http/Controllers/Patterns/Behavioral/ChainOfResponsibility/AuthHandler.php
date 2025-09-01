<?php

namespace App\Http\Controllers\Patterns\Behavioral\ChainOfResponsibility;

use Illuminate\Http\Request;

class AuthHandler extends Handler
{
    public function handle(Request $r) { return $r->has('auth') ? response()->json(['message' => 'AuthHandler: аутентифицирован']) : parent::handle($r); }
}
