<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Model;
use App\Models\StatusTracker;

use MoonShine\Fields\Date;
use MoonShine\Fields\Enum;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Resources\MoonShineUserResource;

/**
 * @extends ModelResource<StatusTracker>
 */
class StatusTrackerResource extends ModelResource
{
    protected string $model = StatusTracker::class;

    protected string $title = 'StatusTrackers';


    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                BelongsTo::make('task'),
                Enum::make('status')->attach(TaskStatus::class),
                BelongsTo::make('user', resource: new MoonShineUserResource()),
                Date::make('date_time')->withTime()
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
