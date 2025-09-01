<?php

namespace App\Game\Structural\Facade;

class Parser
{
    public function parse(Scanner $scanner, ProgramNodeBuilder $builder): void
    {
        $token = $scanner->scan();
        $builder->buildVariable($token);
        $builder->buildAssignment($token, "expression");
    }
}