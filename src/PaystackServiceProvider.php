<?php

namespace Jayboss\Paystack;

use Illuminate\Support\ServiceProvider;

class PaystackServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/paystack.php' => config_path('paystack.php')
        ]);
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'paystack');
    }
    public function register()
    {
        // $this->app->bind('laravel-paystack', function () {
        //     return new Paystack;
        // });
    }
    // public function provides()
    // {
    //     return ['laravel-paystack'];
    // }
}