<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
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
        Response::macro('success', function ($data = null, $message = null, $code = 200) {
            return response()->json([
                "success" => true,
                "data" => $data,
                "status" => $code,
                "message" => $message,
            ], $code);
        });

        Response::macro('error', function ($message = null, $code = 400, $data = null) {
            return response()->json([
                "success" => false,
                "data" => $data,
                "status" => $code,
                "message" => $message,
            ], $code);
        });
    }
}
