<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',  [GuruController::class, 'index']);

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/create', [GuruController::class, 'create']);
Route::post('/guru/store', [GuruController::class, 'store']);
Route::get('/guru/edit/{id}', ['uses'=>'FooController@show']);