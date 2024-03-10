<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ContragentPerson;

use Illuminate\Support\Facades\DB;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

/**
 * @extends ModelResource<ContragentPerson>
 */
class ContragentPersonResource extends ModelResource
{
    protected string $model = ContragentPerson::class;

    protected string $title = 'ContragentPersons';

    public function fields(): array
    {
        return [
            Block::make([
                BelongsTo::make('contragent')->nullable()->translatable('moonshine::contragent')->hideOnIndex(),
                Text::make('post')->translatable('moonshine::contragent'),
                Text::make('firstname')->translatable('moonshine::contragent')->hideOnIndex(),
                Text::make('secondname')->translatable('moonshine::contragent')->hideOnIndex(),
                Text::make('surname')->translatable('moonshine::contragent')->hideOnIndex(),
                Text::make('initials')->translatable('moonshine::contragent')->hideOnForm()->sortable(),
                Text::make('phone')->translatable('moonshine::contragent'),
                Text::make('email')->translatable('moonshine::contragent'),
                Text::make('description')->translatable('moonshine::contragent'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    protected function afterUpdated(Model $item): Model
    {

        $firstname = $item->firstname;
        $secondname = $item->secondname;
        $surname = $item->surname;

        // Получаем первую букву из $secondname и $surname
        $secondnameInitial = mb_substr($secondname, 0, 1, 'UTF-8');
        $surnameInitial = mb_substr($surname, 0, 1, 'UTF-8');

        // Формируем строку с инициалами
        $initials = $firstname . ' ' . $secondnameInitial . '. ' . $surnameInitial . '.';

        DB::table('contragent_persons')
            ->where('id', $item->id)
            ->update(['initials' => $initials]);

        return $item;
    }

    protected function afterCreated(Model $item): Model
    {

        $firstname = $item->firstname;
        $secondname = $item->secondname;
        $surname = $item->surname;

        // Получаем первую букву из $secondname и $surname
        $secondnameInitial = mb_substr($secondname, 0, 1, 'UTF-8');
        $surnameInitial = mb_substr($surname, 0, 1, 'UTF-8');

        // Формируем строку с инициалами
        $initials = $firstname . ' ' . $secondnameInitial . '. ' . $surnameInitial . '.';

        DB::table('contragent_persons')
            ->where('id', $item->id)
            ->update(['initials' => $initials]);

        return $item;
    }
}
