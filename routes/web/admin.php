<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BusinesGroupController;
use App\Http\Controllers\Admin\PermissionRoleController;
use App\Http\Controllers\Admin\SectionManageController;
use App\Http\Controllers\Notification\NotificationListController;

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


Route::prefix('admin')
->name('admin.')->group(function () {
    Route::get('/create_admin', [AdminController::class, 'create'])->name('create');
    Route::put('/create', [AdminController::class, 'store'])->name('store');
    Route::get('/index_admin', [AdminController::class, 'index_admin'])->name('index');
    Route::get('/{admin}/edit_admin/{tab_active?}', [AdminController::class, 'edit'])->name('edit');
    Route::put('/{admin}', [AdminController::class, 'update'])->name('update');
    Route::put('/{admin}/secret_admin', [AdminController::class, 'secret'])->name('secret');
    Route::delete('/{id}', [AdminController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status/{tab_active?}', [AdminController::class, 'status'])->name('status');

});


Route::prefix('busines_groups')
->name('busines_groups.')->group(function () {
    Route::get('/create_busines_groups', [BusinesGroupController::class, 'create'])->name('create');
    Route::post('/store', [BusinesGroupController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [BusinesGroupController::class, 'edit'])->name('edit');
    Route::get('/index', [BusinesGroupController::class, 'index'])->name('index');

});

Route::prefix('section')
->name('section.')->group(function () {
    // Route::get('/create_section', [SectionManageController::class, 'create'])->name('create');
    // Route::post('/store', [SectionManageController::class, 'store'])->name('store');
    // Route::get('/{id}/edit', [SectionManageController::class, 'edit'])->name('edit');
    Route::get('/index', [SectionManageController::class, 'index'])->name('index');

});

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




Route::prefix('notification')->name('notification.')->group(function () {


    Route::prefix('list')
    ->name('list.')->group(function () {
        Route::get('/index', [NotificationListController::class, 'index'])->name('index');
        Route::get('/{id}/type', [NotificationListController::class, 'type'])->name('type');
        Route::get('/{id}/type/edit', [NotificationListController::class, 'edit'])->name('edit');
        Route::put('/{id}/type/update', [NotificationListController::class, 'update'])->name('update');
        Route::put('/{id}/status', [NotificationListController::class, 'status'])->name('status');

     });


    Route::prefix('email')
    ->name('email.')->group(function () {
        Route::get('/index', [NotificationListController::class, 'email_index'])->name('index');
        Route::put('/index', [NotificationListController::class, 'email_index_update'])->name('email_index_update');
    });


});

