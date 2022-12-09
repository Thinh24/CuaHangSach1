<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\web\WebController;
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


Route::get('/', [WebController::class,'viewHome']);

Route::get('/home',[WebController::class,'viewHome']);
// Đăng ký
Route::get('/register',[WebController::class,'viewRegister']);
Route::post('/register',[WebController::class,'createRegister']);
// Đăng nhập
Route::get('/login',[WebController::class,'viewLogin']);
Route::post('/login',[WebController::class,'login']);
// Đăng xuất
Route::post('/logout',[WebController::class,'logout']);


Route::get('admin/home',[AdminController::class,'viewHome']);





// Products
// Tạo
Route::get('/admin/products/create', [ProductController::class,'viewCreateProduct']);
Route::post('/admin/products/create', [ProductController::class,'createProduct']);
// Xem
Route::get('/admin/products',[ProductController::class,'viewAllProducts']);
Route::get('/admin/products/{id}',[ProductController::class,'viewProductById']);
// Sửa
Route::put('/admin/products/{id}',[ProductController::class,'updateProductById']);
// Xóa
Route::delete('/admin/products/{id}',[ProductController::class,'deleteProductById']);




Route::get('/admin/users',[\App\Http\Controllers\admin\UserController::class,'viewAllUser']);
Route::get('/admin/users/{id}',[\App\Http\Controllers\admin\UserController::class,'viewUserById']);
// Sửa
Route::put('/admin/users/{id}',[\App\Http\Controllers\admin\UserController::class,'editUserById']);
// Xóa
Route::delete('/admin/users/{id}',[\App\Http\Controllers\admin\UserController::class,'deleteUserById']);
