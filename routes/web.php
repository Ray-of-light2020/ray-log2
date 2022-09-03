<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('log', LogController::Class, ['only' => [
    'index', 'create','store','edit','destroy','update','show'
]]);

Route::post('/t-search', 'App\Http\Controllers\LogController@t_search');

Route::get('/conditions', 'App\Http\Controllers\LogController@conditions');
