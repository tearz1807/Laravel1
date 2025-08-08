<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class Translete extends Controller
{
    public function translate(Request $request)
    {
        $locale = $request->input('locale', 'en');
        App::setLocale($locale);
        
        $translations = require base_path("lang/{$locale}/vue.php");
        
        return response()->json(['info' => $translations]);
    }
}