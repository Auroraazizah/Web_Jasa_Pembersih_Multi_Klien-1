<?php

use App\Modules\Payments\Http\Controllers\PaymentController;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::customer(function (): void {
    Route::middleware('auth')->group(function (): void {
        Route::get('/payments/{order}', [PaymentController::class, 'show'])->name('payments.show');
        Route::post('/payments/{order}/upload', [PaymentController::class, 'uploadProof'])->name('payments.upload');
    });
});
