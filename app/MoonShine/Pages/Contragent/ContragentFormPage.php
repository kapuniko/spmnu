<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Contragent;

use App\MoonShine\Resources\ContragentTypeResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\LineBreak;
use MoonShine\Fields\Email;
use MoonShine\Fields\ID;
use MoonShine\Fields\Phone;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\FormPage;

class ContragentFormPage extends FormPage
{
    public function fields(): array
    {
        return [
            Block::make([
                Grid::make([
                    Column::make([
                        BelongsTo::make('contragentType')
                        ->translatable('moonshine::contragent')
                    ])->columnSpan(3),
                    Column::make([
                        Text::make('name')->translatable('moonshine::contragent')
                    ])->columnSpan(9)
                ])
            ]),
            LineBreak::make(),
            Block::make('сontacts',[
                Grid::make([
                    Column::make([
                        Phone::make('phone')->translatable('moonshine::contragent')
                    ])->columnSpan(6),
                    Column::make([
                        Email::make('email')->translatable('moonshine::contragent')
                    ])->columnSpan(6),
                ]),
                LineBreak::make(),
                Text::make('address')->translatable('moonshine::contragent'),
            ])->translatable('moonshine::contragent'),
            LineBreak::make(),
            Block::make('requisites',[
                Grid::make([
                    Column::make([ Text::make('iin')->translatable('moonshine::contragent') ])
                        ->columnSpan(6),
                    Column::make([ Text::make('rnn')->translatable('moonshine::contragent') ])
                        ->columnSpan(6),
                ]),
                LineBreak::make(),
                Grid::make([
                    Column::make([ Text::make('bin')->translatable('moonshine::contragent') ])
                        ->columnSpan(6),
                    Column::make([ Text::make('gos_reg')->translatable('moonshine::contragent') ])
                        ->columnSpan(6),
                ]),
                LineBreak::make(),
                Textarea::make('bank_detail')->translatable('moonshine::contragent'),
            ])->translatable('moonshine::contragent'),
            LineBreak::make(),
            TinyMce::make('description')->translatable('moonshine::contragent')
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
