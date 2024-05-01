<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Contragent;

use App\MoonShine\Resources\ContragentPersonResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\LineBreak;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Fields\Email;
use MoonShine\Fields\Phone;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\FormPage;

class ContragentFormPage extends FormPage
{
    public function fields(): array
    {
        return [
            Tabs::make([
                Tab::make('contacts',[
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
                    Block::make('contacts',[
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
                ])->translatable('moonshine::contragent'),
                Tab::make('requisites', [
                    Block::make('requisites',[
                        Flex::make([
                            Text::make('iin')->translatable('moonshine::contragent')
                                ->showWhen('contragent_type_id', 'in', ['1','2']),
                            Text::make('rnn')->translatable('moonshine::contragent'),
                            Text::make('bin')->translatable('moonshine::contragent')
                        ]),
                        LineBreak::make(),
                        Grid::make([
                            Column::make([
                                Text::make('gos_reg')->translatable('moonshine::contragent'),
                            ])->columnSpan(6),
                            Column::make([
                                Textarea::make('bank_detail')->translatable('moonshine::contragent'),
                            ])->columnSpan(6),
                        ])
                    ])->translatable('moonshine::contragent'),
                ])->translatable('moonshine::contragent'),
                Tab::make('description', [
                    TinyMce::make('description')->translatable('moonshine::contragent')
                ])->translatable('moonshine::contragent')
            ]),
            HasMany::make('person','person', resource: new ContragentPersonResource())
                ->creatable()
                ->translatable('moonshine::contragent'),
            Preview::make('Сотрудники', '', fn() => $this->warningContragentTab())
                ->badge('yellow')->hideOnUpdate(),

        ];
    }

    public function warningContragentTab(): string
    {
        return 'Добавление сотрудников станет доступно после сохранения.';
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
