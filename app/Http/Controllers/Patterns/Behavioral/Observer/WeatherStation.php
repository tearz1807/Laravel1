<?php

namespace App\Http\Controllers\Patterns\Behavioral\Observer;

use SplObjectStorage;

class WeatherStation {
    private $observers;
    private $temperature;
    private $humidity;

    public function __construct() {
        $this->observers = new SplObjectStorage();
    }

    public function attach(ObserverInterface $observer) {
        $this->observers->attach($observer);
    }

    public function setMeasurements(float $temperature, float $humidity) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->notify();
    }

    private function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity);
        }
    }
}
