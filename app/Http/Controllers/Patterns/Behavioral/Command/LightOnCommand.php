<?php

namespace App\Http\Controllers\Patterns\Behavioral\Command;

class LightOnCommand implements Command
{
    public function execute()
    {
        return "Свет включен!";
    }
}
