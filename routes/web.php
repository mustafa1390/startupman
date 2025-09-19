<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\AdminAuthController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/{any}', [IndexController::class, 'index'])->where('any', '.*')->where('any', '^(?!admin).*')->name('vuepanel');
// Route::get('/demo', [IndexController::class, 'demo'])->name('demo');




Route::namespace('Auth')->prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');
    });
