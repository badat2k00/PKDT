<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController ;
use App\Http\Controllers\AjaxController ;
use App\Http\Controllers\ProductCommentController;
use App\Http\Controllers\CartController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();
// Router giỏ hàng
Route::resource('carts', CartController::class);
// Router sản phẩm
Route::resource('products',ProductController::class);
// routes/web.php

Route::post('products/{id}/comments', [ProductCommentController::class, 'store'])->name('product.comments.store');

// Route::get('productAjax', [AjaxController::class, 'getProducts']);
Route::get('productAjax', [AjaxController::class, 'getProducts']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
