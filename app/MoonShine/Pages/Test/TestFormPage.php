<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Test;

use App\MoonShine\Pages\HasAktauTime;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Models\MoonshineUser;
use MoonShine\Pages\Crud\FormPage;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Field;
use Throwable;

class TestFormPage extends FormPage
{
    use HasAktauTime;
    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make(),
            Text::make('name'),
            Json::make('chat')->fields([
                Text::make('Avatar')->default($this->getMoonshineUserInfo(auth('moonshine')->id())['avatar']),
                Text::make('Name')->default($this->getMoonshineUserInfo(auth('moonshine')->id())['name']),
                Text::make('Date')->default($this->AktauTime()),
                Textarea::make('Text'),
            ]),
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

    public function getMoonshineUserInfo($id): array
    {
        // Находим пользователя по переданному ID
        $user = MoonshineUser::find($id);

        return $user->toArray();
    }
}
