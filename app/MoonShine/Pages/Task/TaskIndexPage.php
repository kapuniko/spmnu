<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Task;

use MoonShine\Fields\Date;
use MoonShine\Fields\Image;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\IndexPage;

class TaskIndexPage extends IndexPage
{

    public function fields(): array
    {
        return [
            Date::make('date_created')->format('d M H:i')->sortable()->translatable('moonshine::task'),
            Text::make('name')->translatable('moonshine::task'),
            Image::make('Creator', 'user.avatar'),
            Image::make('Performer', 'performerUser.avatar'),
            Preview::make('status')->badge('yellow')->sortable()->translatable('moonshine::task'),
            Date::make('deadline')->format('d M H:i')->sortable()->translatable('moonshine::task')
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
