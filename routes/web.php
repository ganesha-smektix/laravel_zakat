<?php

use App\Http\Controllers\Zakat;
use Illuminate\Support\Facades\Route;

Route::get('/', [Zakat::class, 'index'])->name('index');
Route::get('/home', [Zakat::class, 'home'])->name('home');
Route::get('/home/data-zakat', [Zakat::class, 'data'])->name('zakat');
Route::post('/home/submit', [Zakat::class, 'submit'])->name('submit');
Route::get('/home/data-zakat/{id}', [Zakat::class, 'datazakat'])->name('datazakat');
Route::get('/home/data-zakat/export/{id}', [Zakat::class, 'export'])->name('export');
