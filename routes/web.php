<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CreatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('marcas');
})->name('home');

Route::view('/criadores', 'criadores')->name('criadores');
Route::view('/marcas', 'marcas')->name('marcas');
Route::view('/thank-you', 'thank-you')->name('thank-you');

Route::post('/criadores', [CreatorController::class, 'store'])->name('criadores.store');
Route::post('/marcas', [BrandController::class, 'store'])->name('marcas.store');