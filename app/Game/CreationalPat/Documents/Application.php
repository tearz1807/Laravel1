<?php

namespace App\Game\CreationalPat\Documents;

abstract class Application {
    abstract public function createDocument(): Document;
    
    public function newDocument() {
        $doc = $this->createDocument();
        $docs[] = $doc;
        $doc->open();
    }
}