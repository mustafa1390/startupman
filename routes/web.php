<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\AdminAuthController;



// Route::get('/{any}', [IndexController::class, 'index'])->where('any', '.*')->where('any', '^(?!admin).*')->name('vuepanel');

Route::get('/client/{lang}/{any}', [IndexController::class, 'index'])->where('any', '.*')->name('vuepanel')->middleware([ 'userguest']);





Route::namespace('Auth')->prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');
    });

Route::get('/panel_login/{lang}/{remember_token}', [IndexController::class, 'panel_login'])->name('panel_login');
Route::get('/panel/user/{lang}/{any}', [IndexController::class, 'panel_user'])->where('any', '.*')->name('panel.user')->middleware([ 'userauth']);
