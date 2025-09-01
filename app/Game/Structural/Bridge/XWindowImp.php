<?php

namespace App\Game\Structural\Bridge;

class XWindowImp implements WindowImp
{
    public function deviceRect(float $x1, float $y1, float $x2, float $y2) {
        return "X11: Drawing rect at ($x1, $y1)-($x2, $y2)";
    }

    public function deviceText(string $text, float $x, float $y) {
    }

    public function deviceBitmap(string $bitmap, float $x, float $y) {
    }
}