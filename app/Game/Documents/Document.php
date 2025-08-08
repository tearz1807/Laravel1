<?php

namespace App\Game\Documents;

abstract class Document {
    abstract public function open();
    abstract public function getType(): string;
}