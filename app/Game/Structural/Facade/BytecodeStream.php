<?php

namespace App\Game\Structural\Facade;

class BytecodeStream
{
    private array $bytes = [];

    public function write(string $bytecode): void
    {
        $this->bytes[] = $bytecode;
    }

    public function getBytes(): array
    {
        return $this->bytes;
    }
}