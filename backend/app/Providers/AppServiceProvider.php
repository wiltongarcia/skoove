<?php

namespace App\Providers;

use App\Domains\Payments\Contracts\PaymentsRepository as PaymentsRepositoryContract;
use App\Domains\Payments\Contracts\RequestParser as RequestParserContract;
use App\Domains\Payments\Repositories\PaymentsRepository;
use App\Domains\Payments\Services\RequestParser;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentsRepositoryContract::class, PaymentsRepository::class);
        $this->app->singleton(RequestParserContract::class, RequestParser::class);
    }
}
