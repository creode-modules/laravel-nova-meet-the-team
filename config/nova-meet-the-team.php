<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Team Model
    |--------------------------------------------------------------------------
    |
    | The model to be used when interacting with a team.
    |
    */

    'team_model' => \Creode\LaravelNovaMeetTheTeam\Entities\Team::class,

    /*
    |--------------------------------------------------------------------------
    | Team Member Model
    |--------------------------------------------------------------------------
    |
    | The model to be used when interacting with a team member.
    |
    */

    'team_member_model' => \Creode\LaravelNovaMeetTheTeam\Entities\TeamMember::class,

    /*
    |--------------------------------------------------------------------------
    | Team Member Resource
    |--------------------------------------------------------------------------
    |
    | The Nova resource to be used when interacting with a team member.
    |
    */
    'team_member_resource' => \Creode\LaravelNovaMeetTheTeam\Nova\TeamMember::class,

    /*
    |--------------------------------------------------------------------------
    | Team Resource
    |--------------------------------------------------------------------------
    |
    | The Nova resource to be used when interacting with a team.
    |
    */
    'team_resource' => \Creode\LaravelNovaMeetTheTeam\Nova\Team::class,

    /*
    |--------------------------------------------------------------------------
    | Image Disk
    |--------------------------------------------------------------------------
    |
    | The disk on which to store team images on.
    */
    'image_disk' => 'public',

    /*
    |--------------------------------------------------------------------------
    | Traffic Cop
    |--------------------------------------------------------------------------
    |
    | Indicates whether Nova should check for modifications between viewing
    | and updating a resource.
    |
    */
    'traffic_cop' => true,
];
