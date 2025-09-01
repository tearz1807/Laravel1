<?php

namespace App\Http\Controllers\Patterns\Behavioral\Observer;

class HumidityDisplay implements ObserverInterface {
    public function update(float $temperature, float $humidity) {
        return sprintf("Влажность: %.1f%%", $humidity);
    }
}
