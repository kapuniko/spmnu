<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\WorkObject;

use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\IndexPage;
use MoonShine\Resources\MoonShineUserResource;

class WorkObjectIndexPage extends IndexPage
{
    public function fields(): array
    {
        return [
            Text::make('name')->translatable('moonshine::workObject'),
            Image::make('Creator', 'user.avatar')->translatable('moonshine::workObject'),
            Image::make('Perf', 'performer_id.avatar')->translatable('moonshine::workObject'),
            BelongsToMany::make('Members', 'members_id', resource: new MoonShineUserResource())
                ->translatable('moonshine::workObject')
                ->inLine(separator: ' ', badge: true)
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
