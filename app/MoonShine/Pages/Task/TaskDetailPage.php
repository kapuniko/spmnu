<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Task;

use App\Enums\TaskStatus;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Date;
use MoonShine\Fields\Enum;
use MoonShine\Fields\ID;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\DetailPage;
use MoonShine\Resources\MoonShineUserResource;

class TaskDetailPage extends DetailPage
{
    public function fields(): array
    {
        return [
            Grid::make([
                Column::make([
                    ID::make(),
                    Text::make('name')->required(),
                    TinyMce::make('description'),
                ])->columnSpan(8),
                Column::make([
                    BelongsTo::make('creator', 'user', resource: new MoonShineUserResource())
                        ->withImage('avatar'),
                    Date::make('date_created')->format('d M Y — H:i'),
                    BelongsTo::make('performer', 'performerUser', resource: new MoonShineUserResource())
                        ->withImage('avatar'),
                    Enum::make('status')->attach(TaskStatus::class)
                        ->sortable()
                        ->translatable('moonshine::task')
                        ->updateOnPreview(),
                    Date::make('deadline')->format('d M Y — H:i')
                ])->columnSpan(4)
            ]),
        ];
    }

    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
