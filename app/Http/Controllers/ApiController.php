<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function ApiMethod()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Данные успешно загружены',
            'data' => [],
        ]);
    }
}