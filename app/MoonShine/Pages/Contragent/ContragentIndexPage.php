<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Contragent;

use MoonShine\Fields\Email;
use MoonShine\Fields\ID;
use MoonShine\Fields\Phone;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\IndexPage;

class ContragentIndexPage extends IndexPage
{
    public function fields(): array
    {
        return [
            ID::make(),
            BelongsTo::make('contragentType')->translatable('moonshine::contragent'),
            Text::make('name')->translatable('moonshine::contragent'),
            Phone::make('phone')->translatable('moonshine::contragent'),
            Email::make('email')->translatable('moonshine::contragent'),
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
