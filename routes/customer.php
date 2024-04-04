<?php

use App\Http\Controllers\Customer\Auth\ForgetPasswordController;
use App\Http\Controllers\Customer\Auth\LoginController;
use App\Http\Controllers\Customer\Auth\OTPController;
use App\Http\Controllers\Customer\Auth\RegisterController;
use App\Http\Controllers\Customer\Carts\CartsController;
use App\Http\Controllers\Customer\IndexController;
use App\Http\Controllers\Customer\Order\OrderController;
use App\Http\Controllers\Customer\Profile\ProfileController;
use App\Http\Controllers\Customer\Shop\ProductsController;
use App\Http\Controllers\ErrorController;
use Illuminate\Support\Facades\Route;
Route::prefix('/')->group(function (){
    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::get('login', [LoginController::class, 'index'])->middleware('auth.page')->name('login');
    Route::get('register', [RegisterController::class, 'index'])->middleware('auth.page')->name('register');
    Route::get('otp', [OTPController::class, 'index'])->name('otp');
    Route::get('success-message', [LoginController::class , 'success'])->name('success-message');
    Route::get('logout',  [LoginController::class, 'logout'])->name('logout');
    Route::get('forget-password', [ForgetPasswordController::class, 'index'])->middleware('auth.page')->name('forget-password');
    Route::get('reset-password/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->middleware('reset.password.page')->name('reset.password.link');
    Route::get('/shop', [ProductsController::class, 'showAll'])->name('product.showAll');
    Route::get('/shop/{id}', [ProductsController::class, 'show'])->name('product.show');
    Route::get('/shop/{id}/details', [ProductsController::class, 'showproduct'])->name('product.show');
    Route::get('404', [ErrorController::class, 'page404'])->name('404');

    Route::prefix('cart')->group(function () {
        Route::get('/', [CartsController::class, 'index'])->name('cart');
        Route::get('/add-to-cart/{id}', [CartsController::class, 'AddToCart'])->name('cart-add');
        Route::get('/update-cart', [CartsController::class, 'UpdateCart'])->name('cart-update');
        Route::get('/delete-cart', [CartsController::class, 'DeleteCart'])->name('cart-delete');
    });
    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('order');
    });
 

    Route::prefix('profile')->group(function () {
        Route::get('/{id}', [ProfileController::class, 'index'])->name('profile.show');
        Route::get('/{id}/orders/{orderId}', [ProfileController::class, 'showOrderDetails'])->name('orders.showDetail');
    });
});