<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Task;

use App\Enums\TaskStatus;
use MoonShine\Components\Badge;
use MoonShine\Fields\Date;
use MoonShine\Fields\Enum;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\StackFields;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\IndexPage;

class TaskIndexPage extends IndexPage
{

    public function fields(): array
    {
        return [
            Date::make('date_created')->format('d M H:i')->sortable()
                ->translatable('moonshine::task')
                ->badge(),
            StackFields::make('name')->fields([
                Text::make('name'),
                Text::make('tags',
                    'tags',
                    fn($item) => $item->tags ? $this->showTags($item->tags) : ''),
            ])->translatable('moonshine::task'),
            Image::make('Creator', 'user.avatar')->translatable('moonshine::task'),
            Image::make('Perf', 'performerUser.avatar')->translatable('moonshine::task'),
            Date::make('deadline')->format('d M H:i')->sortable()
                ->translatable('moonshine::task')
                ->badge(fn($deadline, Field $field) => $this->deadlineColor($deadline, $field) ),
            Enum::make('status')->attach(TaskStatus::class)
                ->sortable()
                ->translatable('moonshine::task')

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

    public function deadlineColor($deadline, $field): String
    {
        $color = 'gray';
        $status = $field->getData()->status;

        if ($deadline < now()){
            $color = 'red';
        } else {
            $color = 'blue';
        }

        if(empty($deadline)){$color = 'white';}

        if ($status == 'done' || $status == 'canceled'){
            $color = 'gray';
        }

        return $color;
    }

    public function showTags($tagsStr): string
    {

        $tagsArr = explode(",", $tagsStr);

        $tagsResult = '';

        foreach ($tagsArr as $tag) {
            $tagsResult .= '<span class="badge badge-purple">' . $tag . '</span> ';
        }

        return $tagsResult;
    }

}
