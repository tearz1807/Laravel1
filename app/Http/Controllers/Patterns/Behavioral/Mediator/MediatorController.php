<?php

namespace App\Http\Controllers\Patterns\Behavioral\Mediator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediatorController extends Controller
{
    public function simpleExample()
    {
        $mediator = new Mediator();
        
        $events = [
            ['type' => 'select', 'value' => 'Arial'],
            ['type' => 'click_ok'],
            ['type' => 'click_cancel']
        ];
        
        $results = [];
        foreach ($events as $event) {
            $results = array_merge($results, $mediator->handleEvent($event));
        }
        
        return response()->json([
            'pattern' => 'Mediator',
            'widgets' => [
                'okButton' => $mediator->okButton,
                'cancelButton' => $mediator->cancelButton,
                'fontList' => $mediator->fontList,
                'fontName' => $mediator->fontName
            ],
            'results' => $results
        ]);
    }
    
    public function handleEvent(Request $request)
    {
        $mediator = new Mediator();
        $result = $mediator->handleEvent([
            'type' => $request->input('type'),
            'value' => $request->input('value')
        ]);
        
        return response()->json([
            'result' => $result[0] ?? 'Неизвестное событие'
        ]);
    }
}