<?php

namespace App\Http\Controllers\Patterns\Behavioral\Command;

class LightOffCommand implements Command
{
    public function execute()
    {
        return "Свет выключен!";
    }
}
