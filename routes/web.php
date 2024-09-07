<?php
use App\Http\Controllers\ResepController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('reseps', ResepController::class);
