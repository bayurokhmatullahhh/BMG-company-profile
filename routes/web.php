<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');
