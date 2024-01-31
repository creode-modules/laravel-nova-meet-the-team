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
            ->hasConfigFile()
            ->hasMigrations(
                [
                    '2023_08_14_150130_create_teams_table',
                    '2023_08_14_150329_create_team_members_table',
                    '2024_01_31_145745_make_team_member_fields_nullable',
                ]
            )
            ->runsMigrations();
    }
}
