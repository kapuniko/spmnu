<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\WorkObject;

use App\MoonShine\Resources\ContragentResource;
use App\MoonShine\Resources\TaskResource;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\DetailPage;
use MoonShine\Resources\MoonShineUserResource;

class WorkObjectDetailPage extends DetailPage
{
    public function fields(): array
    {
        return [
            BelongsTo::make('Creator', 'user', resource: new MoonShineUserResource())
                ->withImage('avatar')->translatable('moonshine::workObject'),
            BelongsTo::make('Performer', 'performer_id', resource: new MoonShineUserResource())
                ->withImage('avatar')->translatable('moonshine::workObject'),
            BelongsTo::make('contragent', resource: new ContragentResource())
                ->translatable('moonshine::workObject'),
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
