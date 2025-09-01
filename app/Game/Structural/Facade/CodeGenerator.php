<?php

namespace App\Game\Structural\Facade;

class CodeGenerator
{
    private BytecodeStream $output;

    public function __construct(BytecodeStream $output)
    {
        $this->output = $output;
    }

    public function visit(string $node): void
    {
        $this->output->write("BYTECODE for {$node}");
    }
}