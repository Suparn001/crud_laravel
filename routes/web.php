<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/create',[productController::class,'create'])->name('product.create');
Route::post('/product',[productController::class,'store'])->name('product.store');



