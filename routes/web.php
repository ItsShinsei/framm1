<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\GuruController;

Route::get('/nova', function () {
    return view('nova');
});

route::get('/', [homecontroller::class, 'index'])->name('home');

route::get('/guru', [GuruController::class, 'index'])->name('dataguru');

