<?php

namespace Creode\LaravelNovaMeetTheTeam\Providers;

use Illuminate\Support\ServiceProvider;

class MeetTheTeamRouteProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}
