<?php

namespace App\Game\Documents;

abstract class Application {
    abstract public function createDocument(): Document;
    
    public function newDocument() {
        $doc = $this->createDocument();
        $docs[] = $doc;
        $doc->open();
    }
}