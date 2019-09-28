<?php

namespace Baicaiit\Hasher;

use Illuminate\Support\ServiceProvider;

class MD5HasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/hasher.php' => config_path('hasher.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/hasher.php', 'hasher');

        $this->app->singleton('md5hash', function () {
            return new MD5Hasher();
        });
    }
}
