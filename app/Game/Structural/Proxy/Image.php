<?php

namespace App\Game\Structural\Proxy;

use App\Game\Structural\Proxy\Point;
use App\Game\Structural\Proxy\Event;

class Image implements Graphic
{
    private string $filename;
    private Point $extent;
    private array $log = [];

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->load($filename);
    }

    public function draw(Point $at): void
    {
        $this->log[] = "Drawing image {$this->filename} at ({$at->x}, {$at->y})";
    }

    public function handleMouse(Event $event): void
    {
        $this->log[] = "Handling mouse event ({$event->type}) for image {$this->filename}";
    }

    public function getExtent(): Point
    {
        return $this->extent;
    }

    public function load(string $from): void
    {
        $this->extent = new Point(rand(100, 500), rand(100, 500));
        $this->log[] = "Loaded image from {$from} (size: {$this->extent->x}x{$this->extent->y})";
    }

    public function save(string $to): void
    {
        $this->log[] = "Saved image to {$to}";
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