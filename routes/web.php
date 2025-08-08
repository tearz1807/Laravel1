<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.index');
})->name('home');

Route::get('/reminders', function () {
    return view('reminders.index');
})->name('reminders.index');

Route::get('/knowledge', function () {
    return view('knowledge.index');
})->name('knowledge.index');

Route::get('/usage', function () {
    return view('usage.index');
})->name('usage.index');

Route::get('/language/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'ru'])) {
        abort(400);
    }
    return back()->withCookie(cookie()->forever('locale', $locale));
})->name('language.switch');

Route::get('/translate', [App\Http\Controllers\Translete::class, 'translate'])->name('translate');


use App\Http\Controllers\TestController;

use App\Http\Controllers\MagicController;

Route::get('/magic-demo', [MagicController::class, 'demo']);
Route::get('/magic-invoke', MagicController::class);

Route::get('/test', function(){
    echo MagicController::method(5000);
    
    $test0 =  new MagicController();
    echo $test0->wfsdfdsf('0sdfsdf0');


    $test = new TestController(1000);
})->name('translate');


use App\Http\Controllers\MazeController;
use App\Http\Controllers\MazeBuilderController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PrototypeController;
use App\Http\Controllers\SingletonController;

Route::get('/abstract', [MazeController::class, 'createMaze']);
Route::get('/builder', [MazeBuilderController::class, 'build']);
Route::get('/factory', [DocumentController::class, 'create']);
Route::get('/prototype', [PrototypeController::class, 'clone']);
Route::get('/singleton', [SingletonController::class, 'show']);