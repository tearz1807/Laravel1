<?php

namespace App\Game\Structural\Facade;

class Scanner
{
    private string $input;

    public function __construct(string $input)
    {
        $this->input = $input;
    }

    public function scan(): string
    {
        return "Token from: {$this->input}";
    }
}