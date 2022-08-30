<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ProductController::class,'index'])->name('index');


Route::post('/',[ProductController::class,'create'])->name('create');

Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');

Route::put('/edit/{id}',[ProductController::class,'update'])->name('update');

Route::get('/delete/{id}',[ProductController::class,'destroy'])->name('destroy');
