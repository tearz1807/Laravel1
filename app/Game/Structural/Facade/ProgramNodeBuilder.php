<?php

namespace App\Game\Structural\Facade;

class ProgramNodeBuilder
{
    private ProgramNode $node;

    public function __construct()
    {
        $this->node = new ProgramNode();
    }

    public function buildVariable(string $name): void
    {
        $this->node->add("Variable: $name");
    }

    public function buildAssignment($var, $expr): void
    {
        $this->node->add("Assignment: $var = $expr");
    }

    public function getRootNode(): ProgramNode
    {
        return $this->node;
    }
}