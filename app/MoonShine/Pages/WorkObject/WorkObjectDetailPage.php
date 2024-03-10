<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\WorkObject;

use App\MoonShine\Resources\TaskResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\DetailPage;

class WorkObjectDetailPage extends DetailPage
{
    public function fields(): array
    {
        return [
            Text::make('name')->translatable('moonshine::workObject'),
            TinyMce::make('description')->translatable('moonshine::workObject'),
            HasMany::make('tasks', resource: new TaskResource())->creatable()
                ->translatable('moonshine::workObject')
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
