<?php

declare(strict_types=1);

namespace VendorName\Skeleton;

use Illuminate\Support\ServiceProvider;

final class SkeletonServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/:package_slug.php',
            ':package_slug'
        );
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/:package_slug.php' => config_path(':package_slug.php'),
            ], ':package_slug-config');

            // $this->publishes([
            //     __DIR__.'/../database/migrations' => database_path('migrations'),
            // ], ':package_slug-migrations');

            // $this->publishes([
            //     __DIR__.'/../resources/views' => resource_path('views/vendor/:package_slug'),
            // ], ':package_slug-views');

            // $this->publishes([
            //     __DIR__.'/../resources/lang' => $this->app->langPath('vendor/:package_slug'),
            // ], ':package_slug-lang');

            // $this->commands([
            //     // YourCommand::class,
            // ]);
        }

        // $this->loadViewsFrom(__DIR__.'/../resources/views', ':package_slug');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', ':package_slug');
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
