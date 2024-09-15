<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            // API routes
            // Route::middleware('api')
            //     ->prefix('api')
            //     ->group(base_path('routes/api/products.php'));

            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api/categories.php'));

            // Route::middleware('api')
            //     ->prefix('api')
            //     ->group(base_path('routes/api/tags.php'));

            // Route::middleware('api')
            //     ->prefix('api')
            //     ->group(base_path('routes/api/authors.php'));

            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api/contacts.php'));

            // Route::middleware('api')
            //     ->prefix('api')
            //     ->group(base_path('routes/api/news.php'));
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api/faqs.php'));
            // Route::middleware('api')
            //     ->prefix('api')
            //     ->group(base_path('routes/api/product_tags.php'));  

            // CRUD routes for web
            // Route::middleware('web')
            //     ->group(base_path('routes/web/products.php'));

            Route::middleware('web')
                ->group(base_path('routes/web/categories.php'));

            Route::middleware('web')
                ->group(base_path('routes/web/tags.php'));

            // Route::middleware('web')
            //     ->group(base_path('routes/web/authors.php'));

            Route::middleware('web')
                ->group(base_path('routes/web/contacts.php'));

            // Route::middleware('web')
            //     ->group(base_path('routes/web/news.php'));

            // Route::middleware('web')
            //     ->group(base_path('routes/web/product_tags.php'));  

            Route::middleware('web')
                ->group(base_path('routes/web/home.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->group(base_path('routes/web/auth.php'));
            Route::middleware('web')
                ->group(base_path('routes/web/faq.php'));
        });
    }
}
