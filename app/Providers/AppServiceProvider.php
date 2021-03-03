<?php

namespace App\Providers;

use App\Repositories\GameRepository;
use App\Repositories\GameRepositoryInterface;
use App\Repositories\GameSearchRepository;
use App\Repositories\GameSearchRepositoryInterface;
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
        $this->app->bind(
            GameRepositoryInterface::class, GameRepository::class
        );
        $this->app->bind(
            GameSearchRepositoryInterface::class, GameSearchRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
