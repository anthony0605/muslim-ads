<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/numberone', [TestController::class, 'numberone']);
Route::get('/numbertwo', [TestController::class, 'numbertwo']);
Route::get('/numberthree', [TestController::class, 'numberthree']);
Route::get('/numberfour', [TestController::class, 'numberfour']);