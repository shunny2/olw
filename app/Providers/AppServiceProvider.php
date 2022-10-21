<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
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
        // The macro defines the base URL of the application
        Http::macro('punkapi', function() {
                // return Http::acceptjson()
                //     ->withToken('your-token', 'type-token (default is Bearer)')
                //     ->baseUrl(config('punkapi.url'))
                //     ->retry(5, 100);
            return Http::acceptJson()
                ->baseUrl(config('punkapi.url'));
        });
    }
}
