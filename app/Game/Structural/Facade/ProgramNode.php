<?php

namespace App\Game\Structural\Facade;

class ProgramNode
{
    private array $children = [];

    public function add(string $node): void
    {
        $this->children[] = $node;
    }

    public function traverse(CodeGenerator $generator): void
    {
        foreach ($this->children as $child) {
            $generator->visit($child);
        }
    }
}