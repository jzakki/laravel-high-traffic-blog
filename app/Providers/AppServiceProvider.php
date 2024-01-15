<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Domain\ContentManagement\Repositories\PostRepositoryInterface::class,
            \App\Infrastructure\Repositories\EloquentPostRepository::class
        );

        $this->app->bind(
            \App\Domain\ContentManagement\Repositories\CategoryRepositoryInterface::class,
            \App\Infrastructure\Repositories\EloquentCategoryRepository::class
        );

        $this->app->bind(
            \App\Domain\ContentManagement\Repositories\TagRepositoryInterface::class,
            \App\Infrastructure\Repositories\EloquentTagRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
