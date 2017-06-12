<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Spotify\Spotify;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton(Spotify::class, function(){
        return new Spotify(config('services.spotify.client_id'), config('services.spotify.secret'));
      });
    }
}
