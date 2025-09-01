<?php

namespace App\Http\Controllers\Patterns\Behavioral\ChainOfResponsibility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Patterns\Behavioral\ChainOfResponsibility\AuthHandler;
use App\Http\Controllers\Patterns\Behavioral\ChainOfResponsibility\ValidationHandler;
use App\Http\Controllers\Patterns\Behavioral\ChainOfResponsibility\LoggingHandler;

class ChainOfResponsibilityController extends Controller
{
    public function processRequest(Request $r)
    {
        return (new AuthHandler())->setNext(new ValidationHandler())->setNext(new LoggingHandler())->handle($r);
    }

    public function examples()
    {
        return response()->json([
            'auth' => $this->processRequest(new Request(['auth' => true]))->getContent(),
            'validate' => $this->processRequest(new Request(['validate' => true]))->getContent(),
            'log' => $this->processRequest(new Request(['log' => true]))->getContent(),
            'unknown' => $this->processRequest(new Request(['unknown' => true]))->getContent()
        ]);
    }
}
