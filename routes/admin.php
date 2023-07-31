<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\Admin\MainPagesController::class, 'index'])->name('dashboard');

Route::resource('portfolio', \App\Http\Controllers\Admin\PortfolioController::class);
Route::resource('links', \App\Http\Controllers\Admin\LinkController::class);

Route::resource('uploads', \App\Http\Controllers\UploadController::class)->except('store');
