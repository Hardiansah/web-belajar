<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return redirect('/kategori');
});

Route::resource('kategori', KategoriController::class);

