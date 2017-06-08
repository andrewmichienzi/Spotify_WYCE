<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Spotify\Spotify;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
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
