<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('marcas');
})->name('home');

Route::get('/criadores', function () {
    return view('criadores');
})->name('criadores');

Route::get('/marcas', function () {
    return view('marcas');
})->name('marcas');

Route::get('/contactos', function () {
    return view('contactos');
})->name('contactos');