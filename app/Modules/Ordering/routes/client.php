<?php

use App\Modules\Ordering\Http\Controllers\OrderController;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::client(function (): void {
    Route::get('/orders', [OrderController::class, 'clientIndex'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'clientShow'])->name('orders.show');
    Route::patch('/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.update-status');
});
