<?php

namespace App\Game\Structural\Bridge;

interface WindowImp
{
    public function deviceRect(float $x1, float $y1, float $x2, float $y2);
    public function deviceText(string $text, float $x, float $y);
    public function deviceBitmap(string $bitmap, float $x, float $y);
}