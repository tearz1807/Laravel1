<?php

namespace App\Http\Controllers\Patterns\Behavioral\Command;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Patterns\Behavioral\Command\{
    RemoteControl,
    LightOnCommand,
    LightOffCommand
};

class CommandController extends Controller
{
    public function simpleExample()
    {
        $remote = new RemoteControl();
        $results = [];

        $remote->setCommand(new LightOnCommand());
        $results[] = $remote->pressButton();

        $remote->setCommand(new LightOffCommand());
        $results[] = $remote->pressButton();

        return response()->json([
            'pattern' => 'Command',
            'results' => $results
        ]);
    }

    public function executeCommand(Request $request)
    {
        $action = $request->input('action', 'on');
        
        $remote = new RemoteControl();
        
        if ($action === 'on') {
            $remote->setCommand(new LightOnCommand());
        } else {
            $remote->setCommand(new LightOffCommand());
        }

        return response()->json([
            'action' => $action,
            'result' => $remote->pressButton()
        ]);
    }
}
