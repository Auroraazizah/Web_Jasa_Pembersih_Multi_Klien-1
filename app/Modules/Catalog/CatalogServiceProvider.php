<?php

namespace App\Modules\Catalog;

use Illuminate\Support\ServiceProvider;
use App\Modules\ModuleServiceProvider;

final class CatalogServiceProvider extends ModuleServiceProvider
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
        return 'catalog';
    }
}
