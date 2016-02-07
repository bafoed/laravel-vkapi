<?php

namespace bafoed\VKAPI;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class VKAPIServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('VKAPI', function() {
            return new VKAPIClass(config('VKAPI.access_token'), config('VKAPI.version'), config('VKAPI.api_url'));
        });

        $this->publishes([
            __DIR__ . '/../config/VKAPI.php' => config_path('VKAPI.php')
        ]);
    }
}