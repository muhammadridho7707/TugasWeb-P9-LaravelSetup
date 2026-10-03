<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/hello/{nama}', function ($nama) {
    return "<h1>Halo, {$nama}! Selamat datang di Laravel Setup.</h1>";
});