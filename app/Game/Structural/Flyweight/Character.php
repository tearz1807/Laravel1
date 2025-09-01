<?php

namespace App\Game\Structural\Flyweight;

class Character extends Glyph
{
    private string $charCode;

    public function __construct(string $charCode)
    {
        $this->charCode = $charCode;
    }

    public function draw(GlyphContext $context): string
    {
        $font = $this->getFont($context);
        return "Drawing '{$this->charCode}' with font: " . ($font ? $font->getName() : 'default');
    }

    public function setFont(Font $font, GlyphContext $context): void
    {
        $context->setFont($font, 1);
    }

    public function getFont(GlyphContext $context): ?Font
    {
        return $context->getFont();
    }
}