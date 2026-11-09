<?php

use App\Modules\Catalog\Http\Controllers\ServiceController;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::customer(function (): void {
    Route::get('/services', [ServiceController::class, 'publicIndex'])->name('services.index');
    Route::get('/services/{service}', [ServiceController::class, 'publicShow'])->name('services.show');
});
