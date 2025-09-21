<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Auth\AdminAuthController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/{any}', [IndexController::class, 'index'])->where('any', '.*')->name('vuepanel');
// Route::get('/demo', [IndexController::class, 'demo'])->name('demo');


Route::post('/items/{id}/status', [ItemController::class, 'updateStatus']);


Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::get('test_pro', 'test_pro');
    Route::post('auth/change_password', 'change_password');
    Route::post('auth/codeverify', 'auth_codeverify');
    Route::post('auth/token', 'auth_token');
    Route::post('auth/checked_codeverify', 'checked_codeverify');

});


