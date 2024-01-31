<?php

namespace Creode\LaravelNovaMeetTheTeam\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasTranslations;

    protected $table = 'teams';

    protected $fillable = [];

    public $translatable = ['title'];

    public function members()
    {
        return $this->hasMany(config('nova-meet-the-team.team_member_model', TeamMember::class), 'team_id');
    }
}
