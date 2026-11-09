<?php

use App\Modules\Payments\Http\Controllers\PaymentController;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::client(function (): void {
    Route::get('/payments', [PaymentController::class, 'clientIndex'])->name('payments.index');
    Route::post('/payments/{payment}/verify', [PaymentController::class, 'verify'])->name('payments.verify');
});
