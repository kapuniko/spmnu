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
                    Column::make([ BelongsTo::make('contragentType') ])->columnSpan(3),
                    Column::make([ Text::make('name') ])->columnSpan(9)
                ])
            ]),
            LineBreak::make(),
            Block::make('сontacts',[
                Grid::make([
                    Column::make([ Phone::make('phone') ])->columnSpan(6),
                    Column::make([ Email::make('email') ])->columnSpan(6),
                ]),
                LineBreak::make(),
                Text::make('address'),
            ]),
            LineBreak::make(),
            Block::make('requisites',[
                Grid::make([
                    Column::make([ Text::make('iin') ])->columnSpan(6),
                    Column::make([ Text::make('rnn') ])->columnSpan(6),
                ]),
                Grid::make([
                    Column::make([ Text::make('bin') ])->columnSpan(6),
                    Column::make([ Text::make('gos_reg') ])->columnSpan(6),
                ]),
                LineBreak::make(),
                Textarea::make('bank_detail'),
            ]),
            LineBreak::make(),
            TinyMce::make('description')
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
