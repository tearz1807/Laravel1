<?php

namespace App\Http\Controllers\Patterns\Behavioral\Observer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObserverController extends Controller
{
    public function simpleExample()
    {
        $weatherStation = new WeatherStation();
        $temperatureDisplay = new TemperatureDisplay();
        $humidityDisplay = new HumidityDisplay();

        $weatherStation->attach($temperatureDisplay);
        $weatherStation->attach($humidityDisplay);
        $weatherStation->setMeasurements(25.5, 60);
        
        return response()->json([
            'pattern' => 'Observer',
            'temperature_display' => $temperatureDisplay->update(25.5, 60),
            'humidity_display' => $humidityDisplay->update(25.5, 60),
        ]);
    }
}
