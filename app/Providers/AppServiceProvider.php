<?php

namespace App\Providers;

use App\Repositories\Auth\AuthRepository;
use App\Repositories\Auth\AuthRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthRepositoryInterface::class , AuthRepository::class);
        $this->app->bind(UserRepositoryInterface::class , UserRepository::class);
        $this->app->bind(ProductRepositoryInterface::class , ProductRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class , CategoryRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole('sysadmin') ? true : null;
        });

        $env = (int)env('SESSION_LIFETIME' , 15);
        Passport::personalAccessTokensExpireIn(now()->addDays($env));
    }
}
