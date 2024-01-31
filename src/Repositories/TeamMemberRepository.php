<?php

namespace Creode\LaravelNovaMeetTheTeam\Repositories;

use Creode\LaravelRepository\BaseRepository;

class TeamMemberRepository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function getModel(): string
    {
        return config('nova-meet-the-team.team_member_model');
    }
}
