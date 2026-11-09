<?php

use App\Modules\Support\Http\Controllers\TicketController;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::customer(function (): void {
    Route::middleware('auth')->group(function (): void {
        Route::get('/support', [TicketController::class, 'customerIndex'])->name('support.index');
        Route::post('/support', [TicketController::class, 'customerStore'])->name('support.store');
    });
});
