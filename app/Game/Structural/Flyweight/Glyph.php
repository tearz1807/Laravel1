<?php

namespace App\Game\Structural\Flyweight;

abstract class Glyph
{
    abstract public function draw(GlyphContext $context): string;
    abstract public function setFont(Font $font, GlyphContext $context): void;
    abstract public function getFont(GlyphContext $context): ?Font;
}