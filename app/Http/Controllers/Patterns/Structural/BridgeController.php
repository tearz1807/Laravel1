<?php

namespace App\Http\Controllers\Patterns\Structural;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Game\Structural\Bridge\ApplicationWindow;
use App\Game\Structural\Bridge\View;
use App\Game\Structural\Bridge\WindowSystemFactory;


class BridgeController extends Controller
{
    public function demo()
    {
        $view = new View("Default Content");
        $appWindow = new ApplicationWindow($view);
        
        return response()->json([
            'message' => 'Bridge demo',
            'draw_result' => $appWindow->drawRect(10, 10, 100, 100),
            'current_system' => config('app.window_system', 'X11')
        ]);
    }

    public function usePmImplementation()
    {
        config(['app.window_system' => 'PM']);
        return $this->demo();
    }

    public function useX11Implementation()
    {
        config(['app.window_system' => 'X11']);
        return $this->demo();
    }
}
