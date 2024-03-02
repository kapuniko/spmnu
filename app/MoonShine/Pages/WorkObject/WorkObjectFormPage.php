<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\WorkObject;

use App\Models\Task;
use MoonShine\Components\TableBuilder;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Heading;
use MoonShine\Decorations\LineBreak;
use MoonShine\Fields\Date;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\FormPage;
use MoonShine\TypeCasts\ModelCast;

class WorkObjectFormPage extends FormPage
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
                        Hidden::make('creator')->fill( auth('moonshine')->id()),
                        Date::make('date_created')->withTime()->default($this->AktauTime())->required(),
                        Text::make('client'),
                        Text::make('address')
                    ]),
                    LineBreak::make(),
                    Block::make([
                        Text::make('status'),
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
            ...parent::mainLayer(),
            LineBreak::make(),
            Divider::make('Задачи по объекту')
                ->centered(),
            Block::make([
                TableBuilder::make(items: Task::where('work_object_id', $this->getResource()->getItemID())->get())
                    ->fields([
                        Date::make('date_created')->format('d M H:i')
                            ->sortable()
                            ->translatable('moonshine::task'),
                        Text::make('name')->translatable('moonshine::task'),
                        Image::make('Creator', 'user.avatar'),
                        Image::make('Performer', 'performerUser.avatar'),
                        Date::make('deadline')
                            ->format('d M H:i')
                            ->sortable()
                            ->translatable('moonshine::task'),
                        Preview::make('status')->badge('yellow')
                            ->sortable()
                            ->translatable('moonshine::task'),
                        ])
                    ->cast(ModelCast::make(Task::class))
                    ->withNotFound()
            ])
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
}
