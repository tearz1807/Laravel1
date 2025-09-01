<?php

namespace App\Http\Controllers\Patterns\Behavioral\Observer;

class TemperatureDisplay implements ObserverInterface {
    public function update(float $temperature, float $humidity) {
        return sprintf("Температура: %.1f°C", $temperature);
    }
}
