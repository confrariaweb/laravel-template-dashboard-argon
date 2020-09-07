<?php

namespace ConfrariaWeb\TemplateDashboardArgon\Providers;

use Illuminate\Support\ServiceProvider;

class TemplateDashboardArgonServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadTranslationsFrom(__DIR__ . '/../Translations', 'templateDashboardArgon');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'templateDashboardArgon');
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/template-dashboard-argon'),
        ], 'public');
    }

    public function register()
    {
        
    }
}
