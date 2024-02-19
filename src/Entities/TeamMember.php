<?php

namespace Creode\LaravelNovaMeetTheTeam\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use PawelMysior\Publishable\Publishable;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;

class TeamMember extends Model
{
	use Publishable, SortableTrait;

    protected $table = 'team_members';

    protected $fillable = [];

    /** Set Sortable Options */
    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
      ];

    /**
     * Functions that run when the model is booting.
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($model) {
            Storage::disk(config('nova-meet-the-team.image_disk', 'public'))
                ->delete($model->image);
        });
    }

    /**
     * Render the image
     *
     * @param string $value
     * @return string
     */
    public function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn(): string =>
                Storage::disk(config('nova-meet-the-team.image_disk', 'public'))
                    ->url($this->image),
        );
    }

    /**
     * Gets the team member's team.
     */
    public function team()
    {
        return $this->belongsTo(config('nova-meet-the-team.team_model', Team::class), 'team_id');
    }
}
