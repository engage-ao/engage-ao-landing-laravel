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
Route::view('/thank-you', 'thank-you')->name('thank-you');
Route::view('/message-received', 'message-received')->name('message-received');

Route::middleware(['throttle:post'])->group(function () {
    Route::post('/criadores', [CreatorController::class, 'store'])->name('criadores.store');
    Route::post('/marcas', [BrandController::class, 'store'])->name('marcas.store');
    Route::post('/contactos', [ContactController::class, 'store'])->name('contactos.store');
});