<?php

namespace Creode\LaravelNovaMeetTheTeam\Entities;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = 'team_members';

    protected $fillable = [];

    public function team()
    {
        return $this->belongsTo(config('nova-meet-the-team.team_model', Team::class), 'team_id');
    }
}
