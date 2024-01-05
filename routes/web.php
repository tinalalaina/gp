<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product3Controller;
Route::get('/product3', [Product3Controller::class, 'index'])->name('product3.index');
Route::get('/product3/create', [Product3Controller::class, 'create'])->name('product3.create');
Route::post('/product3', [Product3Controller::class, 'store'])->name('product3.store');
Route::get('/product3/{product3}/edit', [Product3Controller::class, 'edit'])->name('product3.edit');
Route::put('/product3/{product3}/update', [Product3Controller::class, 'update'])->name('product3.update');
Route::delete('/product3/{product3}/destroy', [Product3Controller::class, 'destroy'])->name('product3.destroy');
