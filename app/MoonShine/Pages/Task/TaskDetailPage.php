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
            ID::make(),
            Text::make('name')->translatable('moonshine::task'),
            Date::make('date_created')->format('d M Y — H:i')
                ->translatable('moonshine::task'),
            Date::make('deadline')->format('d M Y — H:i')
                ->translatable('moonshine::task'),
            BelongsTo::make('Creator', 'user', resource: new MoonShineUserResource())
                ->translatable('moonshine::task'),
            BelongsTo::make('Performer', 'performerUser', resource: new MoonShineUserResource())
                ->translatable('moonshine::task'),
            Enum::make('status')->attach(TaskStatus::class)
                ->translatable('moonshine::task'),

            TinyMce::make('description')->translatable('moonshine::task'),
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
