<?php

namespace App\Modules\Ordering;

use Illuminate\Support\ServiceProvider;
use App\Modules\ModuleServiceProvider;

final class OrderingServiceProvider extends ModuleServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // 
    }

    /**
     * Bootstrap services.
     */
    public function moduleAlias(): string
    {
        return 'ordering';
    }
}

