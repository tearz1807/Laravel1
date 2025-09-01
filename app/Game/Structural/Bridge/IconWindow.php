<?php

namespace App\Game\Structural\Bridge;

class IconWindow extends Window
{
    private string $bitmapName = 'default.icon';

    public function __construct(View $contents) {
        parent::__construct($contents);
    }

    public function drawContents() {
        return $this->imp->deviceBitmap($this->bitmapName, 0, 0);
    }
    
    public function open() {}
    public function close() {}
}