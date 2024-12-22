<?php

namespace App\Providers;

use App\Events\NewUser;
use App\Listeners\CustomEmailVerificationListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        Event::listen(
//            NewUser::class,
//            CustomEmailVerificationListener::class
//        );
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip())->response(function (Request $request, array $headers){
                return response()->json([
                    'message' => "Too many requests"
                ],429, $headers);
            });
        });
        Schema::defaultStringLength(191);
    }
}
