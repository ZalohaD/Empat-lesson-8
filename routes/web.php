<?php

use App\Http\Controllers\BeatsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeatsController::class, 'home'])->name('home');
Route::get('/beats', [BeatsController::class, 'index'])->name('beats');
Route::get('/beats/account', [BeatsController::class, 'account'])->name('account');
Route::get('/beats/create', [BeatsController::class, 'create'])->name('create');
Route::post('/beats', [BeatsController::class, 'store'])->name('beats.store');
Route::get('/beats/{id}', [BeatsController::class, 'getById'])->name('beatById');