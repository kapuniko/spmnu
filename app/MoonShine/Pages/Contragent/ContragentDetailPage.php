<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Contragent;

use MoonShine\Fields\ID;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Crud\DetailPage;

class ContragentDetailPage extends DetailPage
{
    public function fields(): array
    {
        return [
            ID::make(),
            BelongsTo::make('contragentType'),
            Text::make('name'),
            Text::make('phone'),
            Text::make('email'),
            Text::make('address'),
            Text::make('iin'),
            Text::make('rnn'),
            Text::make('bin'),
            Text::make('gos_reg'),
            Textarea::make('bank_detail'),
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
