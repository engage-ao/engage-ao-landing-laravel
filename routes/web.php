<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('marcas');
})->name('home');

Route::view('/criadores', 'criadores')->name('criadores');
Route::view('/marcas', 'marcas')->name('marcas');
Route::view('/contactos', 'contactos')->name('contactos');

Route::post('/criadores', [CreatorController::class, 'store'])->name('criadores');
Route::post('/marcas', [BrandController::class, 'store'])->name('marcas');