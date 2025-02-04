<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\ReactAPIController;

Route::get('/', [AdminController::class,'showLogin'])->name('admin.login.show');

Route::get('/products', [ProductController::class,'show'])->name('products')->middleware(AuthMiddleware::class);
Route::get('/products/add', [ProductController::class,'addProduct'])->name('products.add')->middleware(AuthMiddleware::class);
Route::post('/products/add/save', [ProductController::class,'saveProductInfo'])->name('products.add.save')->middleware(AuthMiddleware::class);

Route::get('/products/edit/{id}', [ProductController::class, 'editProduct'])->name("products.edit")->middleware(AuthMiddleware::class);
Route::post('/products/edit/{id}', [ProductController::class, 'updateProductInfo'])->name("products.edit")->middleware(AuthMiddleware::class);
Route::get('products/delete/{id}', [ProductController::class, 'deleteProduct'])->name('products.delete')->middleware(AuthMiddleware::class);

Route::get('/login',[AdminController::class,'showLogin'])->name('admin.login.show');
Route::post('/login',[AdminController::class,'login'])->name('admin.login');
Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');





Route::get('/api',[ReactAPIController::class,'send']);
Route::post('/api',[ReactAPIController::class,'store']);
Route::get('/csrf-token', function () {
    return csrf_token();
}); 


