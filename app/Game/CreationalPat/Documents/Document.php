<?php

namespace App\Game\CreationalPat\Documents;

abstract class Document {
    abstract public function open();
    abstract public function getType(): string;
}