<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Task;

use App\Enums\TaskStatus;
use App\MoonShine\Resources\WorkObjectResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\LineBreak;
use MoonShine\Fields\Enum;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\Date;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Models\MoonshineUser;
use MoonShine\Pages\Crud\FormPage;
use MoonShine\Resources\MoonShineUserResource;

class TaskFormPage extends FormPage
{
    public function fields(): array
    {
        return [
            Grid::make([
                Column::make([
                    Block::make([
                        Text::make('name')->required(),
                        TinyMce::make('description'),
                    ])
                ])->columnSpan(8),
                Column::make([
                    Block::make([
                        Hidden::make($this->whoIsPage())->fill( auth('moonshine')->id()),
                        Date::make('date_created')->withTime()->default($this->AktauTime())->required(),
                        BelongsTo::make('performer', 'performerUser', resource: new MoonShineUserResource())
                            ->withImage('avatar')
                            ->default(MoonshineUser::find(auth('moonshine')->id())),
                        BelongsTo::make('workObject', 'workObject', 'name', resource: new WorkObjectResource())
                            ->nullable()
                    ]),
                    LineBreak::make(),
                    Block::make([
                        Enum::make('status')->attach(TaskStatus::class),
                        Date::make('deadline')->withTime()->format('d M Y — H:i')
                    ])
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

    public function AktauTime()
    {
        $currentDateTime = date("d.m.Y H:i");
        $adjustedDateTime = date("d.m.Y H:i", strtotime($currentDateTime) + 5 * 3600);
        return $adjustedDateTime;
    }

    public function whoIsPage()
    {
        if ($this->getResource()->getItemID()) {
            $wip = 'updater';
        } else {
            $wip = 'creator';
        }

        return $wip;
    }
}
