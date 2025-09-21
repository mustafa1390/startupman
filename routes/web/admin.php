<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PermissionRoleController;

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


Route::prefix('user')
->name('user.')->group(function () {
    Route::get('/createuser', [UserController::class, 'create'])->name('create');
    Route::put('/create', [UserController::class, 'store'])->name('store');
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/{user}/edit/{tab_active?}', [UserController::class, 'edit'])->name('edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('update');
    Route::put('/{user}/secret', [UserController::class, 'secret'])->name('secret');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status/{tab_active?}', [UserController::class, 'status'])->name('status');
    Route::put('/{id}/status_api/api', [UserController::class, 'status_api'])->name('status.api');
    Route::put('/{id}/status_bank_account/bank_account', [UserController::class, 'status_bank_account'])->name('status.bank_account');
    Route::get('/{id}/login', [UserController::class, 'login'])->name('login');

});



            Route::prefix('permission')->name('permission.')->group(function () {

                Route::get('/create_permission', [PermissionRoleController::class, 'create'])->name('create');
                Route::get('/index_permission', [PermissionRoleController::class, 'index'])->name('index');
                Route::post('/', [PermissionRoleController::class, 'storepermission'])->name('store');
                Route::get('/{id}/edit_permission', [PermissionRoleController::class, 'editpermission'])->name('edit');
                Route::put('/{id}', [PermissionRoleController::class, 'updatepermission'])->name('update');
                Route::get('/{id}/appointment', [PermissionRoleController::class, 'appointment'])->name('appointment');
                Route::put('/{id}/appointment', [PermissionRoleController::class, 'appointment_put'])->name('appointment.put');
                Route::delete('/{id}/delete', [PermissionRoleController::class, 'destroy'])->name('destroy');

                Route::get('/{id}/duplicate', [PermissionRoleController::class, 'duplicate'])->name('duplicate');


            //     Route::put('/{id}/status', [PermissionRoleController::class, 'status'])->name('status');

                // Route::get('/{id}', [PermissionRoleController::class, 'show'])->name('show');

            });
