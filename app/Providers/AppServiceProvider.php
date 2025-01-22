<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Admin\Post;
use App\Models\Admin\PostCategory;
use App\Observers\PostCategoryObserver;
use App\Observers\PostObserver;
use App\View\Components\AdminLayout;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('path.public', function () {
            return base_path('public_html');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // Blade::component('admin-layout', AdminLayout::class);

        Post::observe(PostObserver::class);
        PostCategory::observe(PostCategoryObserver::class);
    }
}
