<?php

namespace Creode\LaravelNovaMeetTheTeam;

use Laravel\Nova\Nova;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelNovaMeetTheTeamServiceProvider extends PackageServiceProvider
{

    public function boot(): void
    {
        parent::boot();

        $this->registerResources();
    }

    protected function registerResources(): void
    {
        Nova::resources([
            \Creode\LaravelNovaMeetTheTeam\Nova\TeamMember::class,
            \Creode\LaravelNovaMeetTheTeam\Nova\Team::class,
        ]);
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-nova-meet-the-team')
            ->hasViews()
            ->hasRoutes('web')
            ->hasMigrations(
                [
                    '2023_08_14_150130_create_teams_table',
                    '2023_08_14_150329_create_team_members_table',
                ]
            )
            ->runsMigrations();
    }
}
