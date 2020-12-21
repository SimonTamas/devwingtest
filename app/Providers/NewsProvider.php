<?php

namespace App\Providers;

use App\Http\Controllers\NewsController;
use App\Models\News;
use App\Http\Resources\NewsAnchor as NewsResource;
use App\Services\NewsService;
use Database\Factories\NewsFactory;
use Database\Seeders\NewsSeeder;
use Illuminate\Support\ServiceProvider;

class NewsProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(News::class, function() {
            return (new News);
        });

        $this->app->singleton(NewsFactory::class, function() {
            return (new NewsFactory)
                ->setModel(app(News::class));
        });

        $this->app->singleton(NewsSeeder::class, function() {
            return (new NewsSeeder)
                ->setNewsService(app(NewsService::class));
        });

        $this->app->singleton(NewsController::class, function() {
            return (new NewsController)
                ->setModelResourceClass(NewsResource::class)
                ->setModelService(app(NewsService::class));
        });

        $this->app->singleton(NewsService::class, function() {
            return (new NewsService)
                ->setModel(app(News::class));
        });
    }

    public function boot()
    {
        //
    }
}
