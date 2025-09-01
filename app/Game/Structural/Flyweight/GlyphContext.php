<?php

namespace App\Game\Structural\Flyweight;

class GlyphContext
{
    private int $index = 0;
    private BTree $fontTree;

    public function __construct()
    {
        $this->fontTree = new BTree();
    }

    public function next(int $step = 1): void
    {
        $this->index += $step;
    }

    public function setFont(Font $font, int $span = 1): void
    {
        for ($i = 0; $i < $span; $i++) {
            $this->fontTree->insert($this->index + $i, $font);
        }
    }

    public function getFont(): ?Font
    {
        return $this->fontTree->find($this->index);
    }
}