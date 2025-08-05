<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

Route::get('/nova', function () {
    return view('nova');
});

route::get('/', [homecontroller::class, 'index'])->name('home');