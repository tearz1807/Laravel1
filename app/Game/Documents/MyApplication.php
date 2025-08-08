<?php

namespace App\Game\Documents;

class MyApplication extends Application {
    public function createDocument(): Document {
        return new MyDocument();
    }
}