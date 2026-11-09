<?php

use App\Modules\Support\Http\Controllers\TicketController;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::admin(function (): void {
    Route::get('/tickets', [TicketController::class, 'adminIndex'])->name('tickets.index');
    Route::post('/tickets/{ticket}/reply', [TicketController::class, 'adminReply'])->name('tickets.reply');
});
