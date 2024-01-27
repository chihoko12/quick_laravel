<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ViewController;

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
