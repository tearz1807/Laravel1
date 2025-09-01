<?php

namespace App\Game\Structural\Proxy;

use App\Game\Structural\Proxy\Point;
use App\Game\Structural\Proxy\Event;

class ImageProxy implements Graphic
{
    private ?Image $image = null;
    private Point $extent;
    private string $filename;
    private array $log = [];

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->extent = new Point(0, 0);
    }

    private function getImage(): Image
    {
        if ($this->image === null) {
            $this->image = new Image($this->filename);
            $this->log = array_merge($this->log, $this->image->getLog());
        }
        return $this->image;
    }

    public function draw(Point $at): void
    {
        $image = $this->getImage();
        $image->draw($at);
        $this->log = array_merge($this->log, $image->getLog());
    }

    public function handleMouse(Event $event): void
    {
        $image = $this->getImage();
        $image->handleMouse($event);
        $this->log = array_merge($this->log, $image->getLog());
    }

    public function getExtent(): Point
    {
        if ($this->extent->x == 0 && $this->extent->y == 0) {
            $this->extent = $this->getImage()->getExtent();
        }
        return $this->extent;
    }

    public function load(string $from): void
    {
        if ($this->image === null) {
            $this->filename = $from;
        } else {
            $image = $this->getImage();
            $image->load($from);
            $this->log = array_merge($this->log, $image->getLog());
        }
    }

    public function save(string $to): void
    {
        if ($this->image !== null) {
            $image = $this->getImage();
            $image->save($to);
            $this->log = array_merge($this->log, $image->getLog());
        }
    }

    public function getLog(): array
    {
        return $this->log;
    }

    public function clearLog(): void
    {
        $this->log = [];
    }
}