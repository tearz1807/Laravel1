<?php

namespace App\Game\Structural\Proxy;

use App\Game\Structural\Proxy\Point;
use App\Game\Structural\Proxy\Event;

interface Graphic
{
    public function draw(Point $at): void;
    public function handleMouse(Event $event): void;
    public function getExtent(): Point;
    public function load(string $from): void;
    public function save(string $to): void;
}