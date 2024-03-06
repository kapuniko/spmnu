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
            ID::make(),
            Text::make('name'),
            TinyMce::make('description'),
            HasMany::make('tasks', resource: new TaskResource())->creatable()
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
