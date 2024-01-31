# Laravel Nova Meet the Team
Module for Laravel Nova to allow a user to add different team members to a website.

## Installation
You can install this package via composer using this command:

```bash
composer require creode/laravel-nova-meet-the-team
```

The package will automatically register itself.

### Meet the Team Page
This module also has the capability of rendering a page of all teams by visiting "/meet-the-team". To enable this, you can add this service provider to the providers section of your config/app.php file:

```php
'providers' => [
    ...
    Creode\LaravelNovaMeetTheTeam\Providers\MeetTheTeamServiceProvider::class,
    ...
],
```

## Usage

### Publishing Migrations
You can publish the migrations this module exposes with:
```bash
php artisan vendor:publish --tag="nova-meet-the-team-migrations"
```

### Publishing Config
You can publish the config this module exposes with:
```bash
php artisan vendor:publish --tag="nova-meet-the-team-config"
```

### Configuring Models
You can configure the models this module uses by publishing the config and editing the config file. This allows for the capability to use your own models for the team members and teams.

The suggested way to interact with these models is to use the repository classes that are provided by this module. These can be accessed by using the following classes:

```php
use Creode\LaravelNovaMeetTheTeam\Repositories\TeamRepository;
use Creode\LaravelNovaMeetTheTeam\Repositories\TeamMemberRepository;
```

These repositories as based on the [Laravel Repository](https://github.com/creode-modules/laravel-repository) package.
