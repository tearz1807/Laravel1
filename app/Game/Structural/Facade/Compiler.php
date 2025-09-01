<?php

namespace App\Game\Structural\Facade;

class Compiler
{
    public function compile(string $sourceCode): BytecodeStream
    {
        $output = new BytecodeStream();
        
        $scanner = new Scanner($sourceCode);
        $builder = new ProgramNodeBuilder();
        $parser = new Parser();
        
        $parser->parse($scanner, $builder);
        
        $generator = new RISCCodeGenerator($output);
        $parseTree = $builder->getRootNode();
        $parseTree->traverse($generator);
        
        return $output;
    }
}

class RISCCodeGenerator extends CodeGenerator{}