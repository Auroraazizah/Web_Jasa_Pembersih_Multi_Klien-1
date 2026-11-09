<?php

use App\Modules\Reporting\Http\Controllers\ReportController;
use App\Support\Routing\PortalRoutes;
use Illuminate\Support\Facades\Route;

PortalRoutes::admin(function (): void {
    Route::get('/reports/platform', [ReportController::class, 'adminOverview'])->name('reports.platform');
    Route::get('/audit-logs', [ReportController::class, 'auditLogs'])->name('audit-logs.index');
});
