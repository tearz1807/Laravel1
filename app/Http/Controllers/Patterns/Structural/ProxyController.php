<?php

namespace App\Http\Controllers\Patterns\Structural;

use App\Http\Controllers\Controller;
use App\Game\Structural\Proxy\{
    TextDocument,
    ImageProxy
};

class ProxyController extends Controller
{
public function demo()
{
    $document = new TextDocument();
    $logs = [];
    
    $proxy1 = new ImageProxy("photo1.jpg");
    $proxy2 = new ImageProxy("photo2.png");
    $proxy3 = new ImageProxy("diagram.svg");
    
    $document->insert($proxy1);
    $document->insert($proxy2);
    $document->insert($proxy3);
    
    $document->drawAll();
    
    $logs = array_merge(
        $proxy1->getLog(),
        $proxy2->getLog(),
        $proxy3->getLog()
    );
    
    return response()->json([
        'message' => 'Proxy pattern demo executed',
        'logs' => $logs,
        'efficiency' => 'Images loaded on-demand via proxy'
    ]);
}
}