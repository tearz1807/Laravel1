<?php

namespace App\Game\Structural\Bridge;

class WindowSystemFactory
{
    public static function makeWindowImp(): WindowImp
    {
        $windowSystem = config('app.window_system', 'X11');
        
        return match($windowSystem) {
            'PM' => new PMWindowImp(),
            default => new XWindowImp(),
        };
    }
}