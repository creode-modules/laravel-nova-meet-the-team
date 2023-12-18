<?php

namespace Creode\LaravelNovaMeetTheTeam\Entities;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [];

    public function team()
    {
        return $this->belongsTo(\Creode\LaravelNovaMeetTheTeam\Entities\Team::class);
    }
}
