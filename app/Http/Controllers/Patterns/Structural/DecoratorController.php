<?php

namespace App\Http\Controllers\Patterns\Structural;

use App\Http\Controllers\Controller;
use App\Game\Structural\Decorator\TextView;
use App\Game\Structural\Decorator\BorderDecorator;
use App\Game\Structural\Decorator\ScrollDecorator;

class DecoratorController extends Controller
{
    public function demo()
    {
        $textView = new TextView();

        $decoratedTextView = new BorderDecorator(
            new ScrollDecorator($textView),
            2
        );

        return response()->json([
            'simple' => [
                'draw' => $textView->draw(),
                'resize' => $textView->resize()
            ],
            'decorated' => [
                'draw' => $decoratedTextView->draw(),
                'resize' => $decoratedTextView->resize()
            ]
        ]);
    }
}