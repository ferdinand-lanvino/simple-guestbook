<?php

use App\Http\Controllers\GuestController;
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

Route::group(['middleware' => 'auth'], function () {
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [GuestController::class, 'index'])->name('guest');
    Route::get('/form', [GuestController::class, 'form'])->name('guest.form');
    Route::post('/store', [GuestController::class, 'store'])->name('guest.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
