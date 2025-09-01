<?php

namespace App\Http\Controllers\Patterns\Behavioral\Command;

class RemoteControl
{
    private $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function pressButton()
    {
        return $this->command->execute();
    }
}
