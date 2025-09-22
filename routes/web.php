<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth')->get('/api/user', [AuthController::class, 'getAuthenticatedUser']);

use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\SettingController;

Route::get('/api/settings', [SettingController::class, 'index']);
Route::get('/api/settings/{module}', [SettingController::class, 'byModule']);
Route::put('/api/settings/{name}', [SettingController::class, 'update'])
    ->middleware([AdminMiddleware::class]);

Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/settings', function() {
        return view('admin.vue', ['component' => 'admin-settings-list']);
    })->name('admin.settings.index');
    
    Route::get('/settings/create', function() {
        return view('admin.vue', ['component' => 'admin-settings-create']);
    })->name('admin.settings.create');
    
    Route::get('/settings/{id}/edit', function($id) {
        return view('admin.vue', ['component' => 'admin-settings-edit', 'id' => $id]);
    })->name('admin.settings.edit');
    
    Route::prefix('api')->group(function () {
        Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index']);
        Route::post('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'store']);
        Route::get('/settings/{setting}', [\App\Http\Controllers\Admin\SettingController::class, 'show']);
        Route::put('/settings/{setting}', [\App\Http\Controllers\Admin\SettingController::class, 'update']);
        Route::delete('/settings/{setting}', [\App\Http\Controllers\Admin\SettingController::class, 'destroy']);
    });
});

use App\Http\Controllers\Patterns\Creational\MazeController;
use App\Http\Controllers\Patterns\Creational\MazeBuilderController;
use App\Http\Controllers\Patterns\Creational\DocumentController;
use App\Http\Controllers\Patterns\Creational\PrototypeController;
use App\Http\Controllers\Patterns\Creational\SingletonController;

Route::get('/abstract', [MazeController::class, 'createMaze']);
Route::get('/builder', [MazeBuilderController::class, 'build']);
Route::get('/factory', [DocumentController::class, 'create']);
Route::get('/prototype', [PrototypeController::class, 'clone']);
Route::get('/singleton', [SingletonController::class, 'show']);

use App\Http\Middleware\ResponseDelay;
use App\Http\Controllers\ApiController;

Route::middleware([ResponseDelay::class])->group(function () {
    Route::get('/endpoint', [ApiController::class, 'ApiMethod']);
});

use App\Http\Controllers\Patterns\Structural\AdapterController;

Route::get('/adapter/class', [AdapterController::class, 'classAdapter']);
Route::get('/adapter/object', [AdapterController::class, 'objectAdapter']);

use App\Http\Controllers\Patterns\Structural\BridgeController;

Route::get('bridge/demo', [BridgeController::class, 'demo']);
Route::get('bridge/pm', [BridgeController::class, 'usePmImplementation']);
Route::get('bridge/x11', [BridgeController::class, 'useX11Implementation']);

use App\Http\Controllers\Patterns\Structural\CompositeController;

Route::get('composite/demo', [CompositeController::class, 'demo']);

use App\Http\Controllers\Patterns\Structural\DecoratorController;

Route::get('decorator/demo', [DecoratorController::class, 'demo']);

use App\Http\Controllers\Patterns\Structural\FacadeController;

Route::get('facade/demo', [FacadeController::class, 'demo']);

use App\Http\Controllers\Patterns\Structural\FlyweightController;

Route::get('flyweight/demo', [FlyweightController::class, 'demo']);

use App\Http\Controllers\Patterns\Structural\ProxyController;

Route::get('proxy/demo', [ProxyController::class, 'demo']);

use App\Http\Controllers\Patterns\Behavioral\ChainOfResponsibility\ChainOfResponsibilityController;
use App\Http\Controllers\Patterns\Behavioral\Command\CommandController;
use App\Http\Controllers\Patterns\Behavioral\Interpreter\InterpreterController;
use App\Http\Controllers\Patterns\Behavioral\Iterator\IteratorController;
use App\Http\Controllers\Patterns\Behavioral\Mediator\MediatorController;
use App\Http\Controllers\Patterns\Behavioral\Memento\MementoController;
use App\Http\Controllers\Patterns\Behavioral\Observer\ObserverController;

Route::get('/patterns/chain', [ChainOfResponsibilityController::class, 'examples']);
Route::post('/patterns/chain/process', [ChainOfResponsibilityController::class, 'processRequest']);
Route::get('/patterns/command', [CommandController::class, 'simpleExample']);
Route::post('/patterns/command', [CommandController::class, 'executeCommand']);
Route::get('/patterns/interpreter', [InterpreterController::class, 'simpleExample']);
Route::post('/patterns/interpreter/evaluate', [InterpreterController::class, 'evaluateExpression']);
Route::get('/patterns/iterator', [IteratorController::class, 'simpleExample']);
Route::post('/patterns/iterator/iterate', [IteratorController::class, 'customIteration']);
Route::get('/patterns/mediator', [MediatorController::class, 'simpleExample']);
Route::post('/patterns/mediator/event', [MediatorController::class, 'handleEvent']);
Route::get('/patterns/memento', [MementoController::class, 'simpleExample']);
Route::post('/patterns/memento/editor', [MementoController::class, 'textEditorDemo']);
Route::get('/observer/simple', [ObserverController::class, 'simpleExample']);