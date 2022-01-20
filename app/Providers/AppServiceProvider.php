<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Integration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('categories')) {
            $categories = Category::orderBy('name', 'asc')->get();
            view()->share('categories', $categories);
        }
        if (Schema::hasTable('integrations')) {
            $integrations = Integration::orderBy('name', 'asc')->get();
            view()->share('integrations', $integrations);
            $featuredIntegrations = Integration::orderBy('name', 'asc')->where('is_feature', 1)->get();
            view()->share('featuredIntegrations', $featuredIntegrations);
        }
    }
}
