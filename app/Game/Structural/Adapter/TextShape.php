<?php

namespace App\Game\Structural\Adapter;
use App\Game\Products\Point;
use App\Game\Products\Coord;
use App\Game\Structural\Adapter\Manipulator;
use App\Game\Structural\Adapter\TextManipulator;

class ClassTextShape extends TextView implements Shape
{
    public function boundingBox(Point &$bottomLeft, Point &$topRight): void
    {
        $bottom = new Coord();
        $left = new Coord();
        $width = new Coord();
        $height = new Coord();

        $this->getOrigin($bottom, $left);
        $this->getExtent($width, $height);

        $bottomLeft = new Point($bottom->value, $left->value);
        $topRight = new Point($bottom->value + $height->value, $left->value + $width->value);
    }

    public function createManipulator(): Manipulator
    {
        return new TextManipulator($this);
    }
}

class ObjectTextShape implements Shape
{
    private TextView $textView;

    public function __construct(TextView $textView)
    {
        $this->textView = $textView;
    }

    public function boundingBox(Point &$bottomLeft, Point &$topRight): void
    {
        $bottom = new Coord();
        $left = new Coord();
        $width = new Coord();
        $height = new Coord();

        $this->textView->getOrigin($bottom, $left);
        $this->textView->getExtent($width, $height);

        $bottomLeft = new Point($bottom->value, $left->value);
        $topRight = new Point($bottom->value + $height->value, $left->value + $width->value);
    }

    public function createManipulator(): Manipulator
    {
        return new TextManipulator($this);
    }

    public function isEmpty(): bool
    {
        return $this->textView->isEmpty();
    }
}