<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Contragent;

use App\MoonShine\Resources\ContragentPersonResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\HasMany;
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
            BelongsTo::make('contragentType')->translatable('moonshine::contragent'),
            Text::make('name')->translatable('moonshine::contragent'),
            Text::make('phone')->translatable('moonshine::contragent'),
            Text::make('email')->translatable('moonshine::contragent'),
            Text::make('address')->translatable('moonshine::contragent'),
            Text::make('iin')->translatable('moonshine::contragent'),
            Text::make('rnn')->translatable('moonshine::contragent'),
            Text::make('bin')->translatable('moonshine::contragent'),
            Text::make('gos_reg')->translatable('moonshine::contragent'),
            Textarea::make('bank_detail')->translatable('moonshine::contragent'),
            TinyMce::make('description')->translatable('moonshine::contragent'),
            HasMany::make('person','person', resource: new ContragentPersonResource())
                ->creatable()
                ->translatable('moonshine::contragent')
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
