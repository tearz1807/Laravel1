<?php

namespace App\Http\Controllers\Patterns\Creational;
use Illuminate\Routing\Controller;
use App\Game\CreationalPat\Documents\MyApplication;
use App\Game\CreationalPat\Documents\Document;

class DocumentController extends Controller
{
    public function create()
    {
        $app = new MyApplication();
        $doc = $app->createDocument();
        
        return response()->json([
            'status' => 'Document created successfully',
            'document_type' => get_class($doc)
        ]);
    }
}