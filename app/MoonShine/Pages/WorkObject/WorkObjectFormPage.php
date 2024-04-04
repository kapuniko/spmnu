<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\WorkObject;

use App\MoonShine\Pages\HasAktauTime;
use App\MoonShine\Resources\ContragentResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\LineBreak;
use MoonShine\Fields\Date;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Models\MoonshineUser;
use MoonShine\Pages\Crud\FormPage;
use MoonShine\Resources\MoonShineUserResource;

class WorkObjectFormPage extends FormPage
{
    use HasAktauTime;
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
                        BelongsTo::make('Performer', 'performer_id', resource: new MoonShineUserResource())
                            ->withImage('avatar')
                            ->default(MoonshineUser::find(auth('moonshine')->id()))
                            ->translatable('moonshine::workObject'),
                        BelongsToMany::make('Members', 'members_id', resource: new MoonShineUserResource())
                            ->nullable()
                            ->translatable('moonshine::workObject')
                            ->selectMode(),
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

}
