<?php

use App\Http\Controllers\Admin\Categories\CategoriesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Employees\EmployeesController;
use App\Http\Controllers\Admin\Orders\OrdersController;
use App\Http\Controllers\Admin\Permission\PermissionController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Products\ProductsController;
use App\Http\Controllers\Admin\Roles\RolesController;
use Illuminate\Support\Facades\Route;
Route::prefix('admin')->group(function (){
    Route::get('/', [AdminController::class, 'index'])->middleware('admin.page')->name('admin');

    Route::prefix('/categories')->group(function (){
        Route::get('/', [CategoriesController::class, 'index'])->middleware('can:categories-list')->name('admin-categories');
        Route::get('/add', [CategoriesController::class, 'add'])->middleware('can:categories-add')->name('admin-categories-add');
        Route::get('/edit/{id}/{parent_id}',[CategoriesController::class, 'edit'])->middleware('can:categories-edit')->name('admin-categories-edit');
        Route::get('/delete/{id}',[CategoriesController::class, 'delete'])->middleware('can:categories-delete')->name('admin-categories-delete'); 
    });
    //Product
    Route::prefix('/products')->group(function (){
        Route::get('/', [ProductsController::class, 'index'])->middleware('can:products-list')->name('admin-products');
        Route::get('/add',[ProductsController::class, 'add'])->middleware('can:products-add')->name('admin-products-add');
        Route::get('/edit/{id}',[ProductsController::class, 'edit'])->middleware('can:products-edit')->name('admin-products-edit');
        Route::get('/delete/{id}',[ProductsController::class, 'delete'])->middleware('can:products-list')->name('admin-products-delete');  
        Route::get('/change-status/{id}',[ProductsController::class, 'changeStatus'])->middleware('can:categories-delete')->name('admin-products-change-status');  
    });
    //Role
    Route::prefix('/roles')->group(function () {
        Route::get('/', [RolesController::class, 'index'])->middleware('can:roles-list')->name('admin-roles');
        Route::get('/add', [RolesController::class, 'add'])->middleware('can:roles-add')->name('admin-roles-add');
        Route::get('/edit/{id}', [RolesController::class, 'edit'])->middleware('can:roles-edit')->name('admin-roles-edit');
        Route::get('/delete/{id}', [RolesController::class, 'delete'])->middleware('can:roles-delete')->name('admin-roles-delete');
    });
    //Employee
    Route::prefix('/employees')->group(function (){
        Route::get('/', [EmployeesController::class, 'index'])->middleware('can:employees-list')->name('admin-employees');
        Route::get('/add', [EmployeesController::class, 'add'])->middleware('can:employees-add')->name('admin-employees-add');
        Route::get('/edit/{id}', [EmployeesController::class, 'edit'])->middleware('can:employees-edit')->name('admin-employees-edit');
        Route::get('/delete/{id}',[EmployeesController::class, 'delete'])->middleware('can:employees-delete')->name('admin-employees-delete');
    });

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('admin-profile');
    });
    //Orders
    Route::prefix('/orders')->group(function () {
        Route::get('/{action}', [OrdersController::class, 'index'])->middleware('can:orders-list')->name('admin-orders');
        Route::get('/view/{action}/{id}', [OrdersController::class, 'edit'])->middleware('can:orders-edit')->name('admin-orders-edit');
        Route::get('/update/{action}/{id}/{status}', [OrdersController::class, 'update'])->middleware('can:orders-edit')->name('admin-orders-update');
        Route::get('/print/{id}', [OrdersController::class, 'print'])->middleware('can:orders-edit')->name('admin-orders-print');
    });
    //permission
    Route::prefix('/permission')->group(function (){
        Route::get('/', [PermissionController::class, 'index'])->middleware('can:permission-add')->name('admin-permission');      
    });
});
