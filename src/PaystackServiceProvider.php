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
    }
    public function register()
    {
        
    }
    
}