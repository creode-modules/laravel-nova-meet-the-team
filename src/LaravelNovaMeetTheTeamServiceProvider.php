<?php

namespace Creode\LaravelNovaMeetTheTeam;

use Creode\LaravelNovaMeetTheTeam\Nova\Team;
use Creode\LaravelNovaMeetTheTeam\Nova\TeamMember;
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
        Team::$trafficCop = config('laravel-nova-meet-the-team.traffic_cop');
        TeamMember::$trafficCop = config('laravel-nova-meet-the-team.traffic_cop');

        Nova::resources([
            TeamMember::class,
            Team::class,
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
                    '2024_02_01_123306_add_published_field_to_team_members',
                    '2024_02_01_124805_add_published_at_field_to_teams',
                    '2024_02_16_165501_add_weight_field',
                ]
            )
            ->runsMigrations();
    }
}
