<?php

namespace App\Game\Structural\Bridge;

use App\Game\Structural\Bridge\WindowImp;
use App\Game\Structural\Bridge\View;

abstract class Window
{
    protected WindowImp $imp;
    protected View $contents;

    public function __construct(View $contents) {
        $this->contents = $contents;
        $this->imp = WindowSystemFactory::makeWindowImp();
    }

    abstract public function drawContents();
    abstract public function open();
    abstract public function close();

    public function drawRect(float $x1, float $y1, float $x2, float $y2) {
        return $this->imp->deviceRect($x1, $y1, $x2, $y2);
    }
}