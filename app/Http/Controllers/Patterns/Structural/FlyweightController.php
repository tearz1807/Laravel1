<?php

namespace App\Http\Controllers\Patterns\Structural;

use App\Http\Controllers\Controller;
use App\Game\Structural\Flyweight\GlyphFactory;
use App\Game\Structural\Flyweight\GlyphContext;
use App\Game\Structural\Flyweight\Font;

class FlyweightController extends Controller
{
    public function demo()
    {
        $factory = new GlyphFactory();
        $context = new GlyphContext();
        
        $times12 = new Font("Times-Roman-12");
        $timesItalic12 = new Font("Times-Italic-12");
        $courier = new Font("Courier-12");
        
        $text = "Flyweight pattern demo";
        $chars = [];
        
        $context->setFont($times12, 9);
        $context->next(9);
        $context->setFont($timesItalic12, 8);
        $context->next(8);
        $context->setFont($courier, 5);
        
        $context->next(-strlen($text));
        
        $output = [];
        for ($i = 0; $i < strlen($text); $i++) {
            $char = $factory->createCharacter($text[$i]);
            $output[] = $char->draw($context);
            $context->next();
        }
        
        return response()->json([
            'unique_chars' => $factory->getCharacterCount(),
            'total_chars' => strlen($text),
            'rendering' => $output,
            'efficiency' => round((1 - $factory->getCharacterCount()/strlen($text)) * 100) . '% memory saved'
        ]);
    }
}