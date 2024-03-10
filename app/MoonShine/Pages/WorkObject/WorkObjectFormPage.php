<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\WorkObject;

use App\Models\Task;
use App\MoonShine\Resources\ContragentResource;
use App\MoonShine\Resources\TaskResource;
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
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\HasMany;
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
                        Text::make('name')->required()->translatable('moonshine::workObject'),
                        TinyMce::make('description')->translatable('moonshine::workObject'),
                    ])
                ])->columnSpan(8),
                Column::make([
                    Block::make([
                        Hidden::make('creator')->fill( auth('moonshine')->id()),
                        Date::make('date_created')->withTime()
                            ->default($this->AktauTime())->required()
                            ->translatable('moonshine::workObject'),
                        BelongsTo::make('contragent', resource: new ContragentResource())
                            ->nullable()
                            ->translatable('moonshine::workObject'),
                        Text::make('address')->translatable('moonshine::workObject')
                    ]),
                    LineBreak::make(),
                    Block::make([
                        Text::make('status')->translatable('moonshine::workObject'),
                        Date::make('deadline')->withTime()
                            ->format('d M Y — H:i')
                            ->translatable('moonshine::workObject')
                    ])
                ])->columnSpan(4)
            ])
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
}
