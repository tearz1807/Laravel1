<?php

namespace App\Http\Controllers\Patterns\Behavioral\ChainOfResponsibility;

use Illuminate\Http\Request;

abstract class Handler
{
    protected $next;
    public function setNext(Handler $h): Handler { return $this->next = $h; }
    public function handle(Request $r) { return $this->next ? $this->next->handle($r) : response()->json(['error' => 'Не обработано'], 404); }
}
