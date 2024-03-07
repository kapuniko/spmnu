<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\StatusTracker;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

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
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
