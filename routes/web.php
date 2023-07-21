<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
Route::get('dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
// category 
Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'index'])->name('search_category');
Route::match(['get', 'post'], 'category/add', [CategoryController::class, 'create'])->name('add_category');
Route::match(['get', 'post'], 'category/edit/{id}', [CategoryController::class, 'edit'])->name('edit_category');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('delete_category');

//product 
Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'index'])->name('search_product');
Route::match(['get', 'post'], 'product/add', [ProductController::class, 'create'])->name('add_product');
Route::match(['get', 'post'], 'product/edit/{id}', [ProductController::class, 'edit'])->name('edit_product');
Route::get('product/delete/{id}', [ProductController::class, 'destroy'])->name('delete_product');


