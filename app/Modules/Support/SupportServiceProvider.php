<?php

namespace App\Modules\Support;

use Illuminate\Support\ServiceProvider;
use App\Modules\ModuleServiceProvider;

final class SupportServiceProvider extends ModuleServiceProvider
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
        return 'support';
    }
}
