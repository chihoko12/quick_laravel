<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\RouteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ('/hello')
// Route::get('hello', 'HelloController@index');
Route::get('/hello', [HelloController::class, 'index']);
// Route::get('hello', function() {
//   return 'Hello World!';
// });

// ('/hello/view')
Route::get('hello/view', [HelloController::class, 'view']);

// ('/hello/list')
Route::get('hello/list', [HelloController::class, 'list']);

// ('/view/escape')
Route::get('view/escape', [ViewController::class, 'escape']);

// ('/view/if')
Route::get('view/if', [ViewController::class, 'if']);

// ('/view/unless')
Route::get('view/unless', [ViewController::class, 'unless']);

// ('/view/isset')
Route::get('view/isset', [ViewController::class, 'isset']);

// ('/view/switch')
Route::get('view/switch', [ViewController::class, 'switch']);

// ('/view/while')
Route::get('view/while', [ViewController::class, 'while']);

// ('/view/for')
Route::get('view/for', [ViewController::class, 'for']);

// ('/view/foreach_assoc')
Route::get('view/foreach_assoc', [ViewController::class, 'foreach_assoc']);

// ('/view/foreach_loop')
Route::get('view/foreach_loop', [ViewController::class, 'foreach_loop']);

// ('/view/master')
Route::get('view/master', [ViewController::class, 'master']);

// ('/view/comp')
Route::get('view/comp', [ViewController::class, 'comp']);

// ('/view/list')
Route::get('view/list', [ViewController::class, 'list']);

// ('/route/param/{id}')
Route::get('route/param/{id?}', [RouteController::class, 'param'])
->where(['id' => '[0-9]{2,3}']);
