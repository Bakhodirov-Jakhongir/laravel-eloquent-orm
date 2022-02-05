<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Article;
use App\Observers\ArticleObserver;
use App\Observers\UserObserver;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        Article::observe(ArticleObserver::class);
        User::observe(UserObserver::class);
    }
}
