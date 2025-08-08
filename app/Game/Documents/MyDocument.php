<?php

namespace App\Game\Documents;

class MyDocument extends Document {
    public function open() {
        return "MyDocument opened";
    }
    public function getType(): string {
        return 'MyDocument';
    }
}