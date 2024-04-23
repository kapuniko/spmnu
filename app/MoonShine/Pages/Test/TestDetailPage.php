<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Test;

use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Pages\Crud\DetailPage;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Field;
use Throwable;

class TestDetailPage extends DetailPage
{
    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make(),
            Text::make('name'),
            Json::make('chat')->fields([
                Image::make('Avatar'),
                Text::make('Name'),
                Text::make('Date'),
                Textarea::make('Text'),
            ]),
            Text::make('updated_to')
        ];
    }

    /**
     * @return list<MoonShineComponent>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<MoonShineComponent>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<MoonShineComponent>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
