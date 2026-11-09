<?php

namespace App\Modules\Auth;

use Illuminate\Support\ServiceProvider;
use App\Modules\ModuleServiceProvider;

final class AuthServiceProvider extends ModuleServiceProvider
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
        return 'auth';
    }
}
