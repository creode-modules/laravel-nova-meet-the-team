<?php

namespace Creode\LaravelNovaMeetTheTeam\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasTranslations;
    protected $fillable = [];

    public $translatable = ['title'];

    public function members()
    {
        return $this->hasMany(\Creode\LaravelNovaMeetTheTeam\Entities\TeamMember::class);
    }
}
