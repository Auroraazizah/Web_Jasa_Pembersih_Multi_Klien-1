<?php

use App\Modules\Ordering\Http\Controllers\CheckoutController;
use App\Modules\Ordering\Http\Controllers\OrderController;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::customer(function (): void {
    Route::middleware('auth')->group(function (): void {
        Route::get('/orders/create/{service}', [CheckoutController::class, 'create'])->name('orders.create');
        Route::post('/orders/checkout', [CheckoutController::class, 'store'])->name('orders.checkout');
        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    });
});
