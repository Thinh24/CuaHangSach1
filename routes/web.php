<?php

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


Route::get('/', [\App\Http\Controllers\web\WebController::class,'viewHome']);

Route::get('/home',[\App\Http\Controllers\web\WebController::class,'viewHome']);

Route::get('/login',[\App\Http\Controllers\web\WebController::class,'viewLogin']);
Route::post('/login',[\App\Http\Controllers\web\WebController::class,'login']);

Route::post('/logout',[\App\Http\Controllers\web\WebController::class,'logout']);


Route::get('admin/home',[\App\Http\Controllers\admin\AdminController::class,'viewHome']);
