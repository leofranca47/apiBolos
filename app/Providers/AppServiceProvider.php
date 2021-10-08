<?php

namespace App\Providers;

use App\Repositories\Contracts\CakeRepositoryInterface;
use App\Repositories\Contracts\InterestedListRepositoryInterface;
use App\Repositories\Eloquent\CakeRepository;
use App\Repositories\Eloquent\InterestedListRepository;
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
        $this->app->bind(CakeRepositoryInterface::class, CakeRepository::class);
        $this->app->bind(InterestedListRepositoryInterface::class, InterestedListRepository::class);
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
