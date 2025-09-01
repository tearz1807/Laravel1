<?php

namespace App\Game\Structural\Bridge;

class ApplicationWindow extends Window
{
    public function __construct(View $contents) {
        parent::__construct($contents);
    }

    public function drawContents() {
        $this->contents->drawOn($this);
    }
    
    public function open() {}
    public function close() {}
}