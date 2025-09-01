<?php

namespace App\Http\Controllers\Patterns\Behavioral\Observer;

interface ObserverInterface {
    public function update(float $temperature, float $humidity);
}
