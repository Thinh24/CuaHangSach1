<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\PublishersController;
use App\Http\Controllers\admin\SuppliersController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\WarehouseController;
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


Route::get('/', [WebController::class, 'viewHome']);

Route::get('/home', [WebController::class, 'viewHome']);
// Đăng ký
Route::get('/register', [WebController::class, 'viewRegister']);
Route::post('/register', [WebController::class, 'createRegister']);
// Đăng nhập
Route::get('/login', [WebController::class, 'viewLogin']);
Route::post('/login', [WebController::class, 'login']);
// Đăng xuất
Route::post('/logout', [WebController::class, 'logout']);

Route::get('/logout', ['as' => 'admin.logout', 'uses' => 'AdminController@logout']);

Route::get('/logout', [WebController::class, 'logout']);


Route::get('admin/home', [AdminController::class, 'viewHome']);

// Xem Product Detail
Route::get('/home/{id}', [WebController::class, 'viewProductDetail']);
//Them vao gio hang
Route::get('/home/{id}/add-to-cart', [\App\Http\Controllers\admin\BillController::class, 'addToCart'])->name('addToCart');
// Xem gio hang
Route::get('/cart', [\App\Http\Controllers\admin\BillController::class, 'viewCart']);
//Cap nhat gio hang
Route::get('/update-cart', [\App\Http\Controllers\admin\BillController::class, 'updateCart'])->name('updateCart');
//Xoa Gio hang
Route::get('/delete-cart', [\App\Http\Controllers\admin\BillController::class, 'deleteCart'])->name('deleteCart');

//Mua hàng
Route::post('/cart/mua', [\App\Http\Controllers\admin\BillController::class, 'createBill']);

// Products
// Tạo
Route::get('/admin/products/create', [ProductController::class, 'viewCreateProduct']);
Route::post('/admin/products/create', [ProductController::class, 'createProduct']);
// Xem
Route::get('/admin/products', [ProductController::class, 'viewAllProducts']);
Route::get('/admin/products/{id}', [ProductController::class, 'viewProductById']);
// Sửa
// admin sửa
Route::get('/admin/products/{id}/edit', [ProductController::class, 'editProductById']);
//custom sửa
Route::put('/admin/products/{id}/edit', [ProductController::class, 'updateProductById']);
// Xóa
Route::delete('/admin/products/{id}', [ProductController::class, 'deleteProductById']);

// Warehouse
//Xem
Route::get('/admin/warehouses', [WarehouseController::class, 'viewWarehouse']);
Route::get('/admin/warehouses/{id}', [WarehouseController::class, 'viewWarehouseById']);

// Nxb
// Tạo
Route::get('/admin/publishers/create', [PublishersController::class, 'viewCreateNhaXuatBan']);
Route::post('/admin/publishers/create', [PublishersController::class, 'createNhaXuatBan']);
// Xem
Route::get('/admin/publishers', [PublishersController::class, 'viewAllNhaXuatBan']);
// Sửa
// admin sửa
Route::get('/admin/publishers/{id}/edit', [PublishersController::class, 'editNhaXuatBanById']);
// custom sửa
Route::put('/admin/publishers/{id}/edit', [PublishersController::class, 'updateNhaXuatBanById']);
// Xóa
Route::delete('/admin/publishers/{id}', [PublishersController::class, 'deleteNhaXuatBanById']);

// Nha Cung Cap
// Tạo
Route::get('/admin/supplier/create', [SuppliersController::class, 'viewCreateNhaCungCap']);
Route::post('/admin/supplier/create', [SuppliersController::class, 'createNhaCungCap']);
// Xem
Route::get('/admin/supplier', [SuppliersController::class, 'viewAllNhaCungCap']);
// Sửa
// admin sửa
Route::get('/admin/supplier/{id}/edit', [SuppliersController::class, 'editNhaCungCapById']);
// custom sửa
Route::put('/admin/supplier/{id}/edit', [SuppliersController::class, 'updateNhaCungCapById']);
// Xóa
Route::delete('/admin/supplier/{id}', [SuppliersController::class, 'deleteNhaCungCapById']);

//xem user
Route::get('/admin/users', [UserController::class, 'viewAllUser']);
//Xem user theo id
Route::get('/admin/users/{id}', [UserController::class, 'viewUserById']);
// Sửa
Route::put('/admin/users/{id}/edit', [UserController::class, 'editUserById']);
// Xóa
Route::delete('/admin/users/{id}', [UserController::class, 'deleteUserById']);
