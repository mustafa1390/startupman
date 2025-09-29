<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\User\ConfigController;

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


Route::middleware('auth:sanctum')->group( function () {

    Route::get('/user/codeverify', [ProfileController::class, 'user_codeverify']);
    Route::post('/user/checked_codeverify', [ProfileController::class, 'checked_codeverify']);
    Route::post('/user/create_codeverify', [ProfileController::class, 'create_codeverify']);
    Route::post('/user/checked_codeverify_email', [ProfileController::class, 'checked_codeverify_email']);
    Route::post('/user/checked_active_codmelli', [ProfileController::class, 'checked_active_codmelli']);

    Route::get('/config_run', [ConfigController::class, 'config_run']);

});




