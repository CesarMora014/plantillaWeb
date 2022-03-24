<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Src\Modules\Users\Interfaces\IUsersService;
use Src\Modules\Users\Services\UsersService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IUsersService::class,UsersService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
