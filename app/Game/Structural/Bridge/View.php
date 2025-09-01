<?php

namespace App\Game\Structural\Bridge;

class View
{
    private string $content;

    public function __construct(string $content) {
        $this->content = $content;
    }

    public function drawOn(Window $window) {
    }
}