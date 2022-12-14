<?php

use App\Http\Controllers\Test3Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/custom', function () {
    $msj = "mensajes desde el servidor *-*";
    return view('custom', ['msj' => $msj, 'edad' => 15]);
});

Route::get('/test', function () {
    return view('test');
})->name('testpage');

Route::get('/test3', [Test3Controller::class,'index']);

Route::get('/t',[TestController::class,'test']);
