<?php

namespace App\Http\Controllers;

use App\Game\Documents\MyApplication;
use App\Game\Documents\Document;

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