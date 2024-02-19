<?php

namespace Creode\LaravelNovaMeetTheTeam\Nova;

use Laravel\Nova\Resource;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\BelongsTo;
use Creode\NovaPublishable\Published;
use Laravel\Nova\Http\Requests\NovaRequest;
use Creode\NovaPublishable\Nova\PublishAction;
use Creode\NovaPublishable\Nova\UnpublishAction;
use Creode\LaravelNovaMeetTheTeam\Nova\Team as TeamResource;
use Laravel\Nova\Fields\Number;

class TeamMember extends Resource
{
    use HasSortableRows;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\User>
     */
    public static $model = \Creode\LaravelNovaMeetTheTeam\Entities\TeamMember::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'Name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name',
    ];

    public static $group = 'OurPeople';

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Published::make('Published', 'published_at'),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Job Title'),

            Image::make('Image', 'image')
                ->disk(config('nova-meet-the-team.image_disk', 'public'))
                ->path('meet-the-team'),

            BelongsTo::make('Team', 'team', TeamResource::class)
                ->showCreateRelationButton(),

            Number::make('Weight')
                ->help(__('The order in which the team member is displayed. Lower numbers appear first.'))
                ->sortable()
                ->rules('nullable', 'integer', 'gte:0'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            (new PublishAction)
                ->confirmText('Are you sure you want to publish these items?')
                ->confirmButtonText('Publish')
                ->cancelButtonText("Don't Publish"),

            (new UnpublishAction)
                ->confirmText('Are you sure you want to unpublish these items?')
                ->confirmButtonText('Unpublish')
                ->cancelButtonText("Don't Unpublish")
        ];
    }
}
