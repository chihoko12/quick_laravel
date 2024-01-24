<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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
