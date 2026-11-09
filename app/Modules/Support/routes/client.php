<?php

use App\Modules\Support\Http\Controllers\TicketController;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::client(function (): void {
    Route::get('/support', [TicketController::class, 'clientIndex'])->name('support.index');
    Route::post('/support', [TicketController::class, 'clientStore'])->name('support.store');
});
