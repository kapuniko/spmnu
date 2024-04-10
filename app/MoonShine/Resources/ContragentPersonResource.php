<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ContragentPerson;

use Illuminate\Support\Facades\DB;
use MoonShine\Buttons\DeleteButton;
use MoonShine\Buttons\DetailButton;
use MoonShine\Buttons\EditButton;
use MoonShine\Buttons\MassDeleteButton;
use MoonShine\Components\ActionGroup;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\LineBreak;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;

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
                LineBreak::make(),
                Grid::make([
                    Column::make([
                        Text::make('firstname')->translatable('moonshine::contragent')->hideOnIndex(),
                    ])->columnSpan(4),
                    Column::make([
                        Text::make('secondname')->translatable('moonshine::contragent')->hideOnIndex(),
                    ])->columnSpan(4),
                    Column::make([
                        Text::make('surname')->translatable('moonshine::contragent')->hideOnIndex(),
                    ])->columnSpan(4)
                ]),
                Text::make('initials')->translatable('moonshine::contragent')->hideOnForm()->sortable(),
                LineBreak::make(),
                Grid::make([
                    Column::make([
                        Text::make('phone')->translatable('moonshine::contragent'),
                    ])->columnSpan(6),
                    Column::make([
                        Text::make('email')->translatable('moonshine::contragent'),
                    ])->columnSpan(6),
                ]),
                LineBreak::make(),
                TinyMce::make('description')->translatable('moonshine::contragent'),
            ])
        ];
    }

    public function getIndexItemButtons(): array
    {
        return [
            ...$this->getIndexButtons(),
            DetailButton::for($this)->showInDropdown()->customAttributes(['class' => 'btn', 'style' => 'display:flex']),
            EditButton::for($this)->showInDropdown()->primary()->customAttributes(['class' => 'btn', 'style' => 'display:flex']),
            DeleteButton::for($this)->showInDropdown(),
            MassDeleteButton::for($this)->showInDropdown(),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    protected function afterUpdated(Model $item): Model
    {
        // Проверяем, есть ли значение, и используем его, или устанавливаем пустую строку
        $firstname = $item->firstname ?? '';
        $secondname = $item->secondname ?? '';
        $surname = $item->surname ?? '';

        //ну потомушто заебал он меня блять, я нихуя не понял схуя туда NULL идёт, хоть обосрись
        function blyat($suka): string
        {
            if(!is_null($suka) && !empty($suka) && isset($suka) && strlen($suka) > 0){
                return mb_substr($suka, 0, 1) . '.';
            } else { return ''; }
        }

        // Получаем первую букву из $secondname и $surname, если они не null и не пустые
        $secondnameInitial = '';
        if (!empty($secondname)) {
            $secondnameInitial = blyat($secondname);
        }

        $surnameInitial = '';
        if (!empty($surname)) {
            $surnameInitial = blyat($surname);
        }

        // Формируем строку с инициалами
        $initials = '';

        // Если $firstname не пуст, формируем строку с именем и инициалами
        if (!empty($firstname)) {
            $initials = $firstname . ' ' . $secondnameInitial . ' ' . $surnameInitial;
        }
        // Если $firstname пуст, используем только $secondname и $surname
        else {
            $initials = $secondname . ' ' . $surname;
        }

        DB::table('contragent_persons')
            ->where('id', $item->id)
            ->update(['initials' => $initials]);

        return $item;
    }


    protected function afterCreated(Model $item): Model
    {
// Проверяем, есть ли значение, и используем его, или устанавливаем пустую строку
        $firstname = $item->firstname ?? '';
        $secondname = $item->secondname ?? '';
        $surname = $item->surname ?? '';

        //ну потомушто заебал он меня блять, я нихуя не понял схуя туда NULL идёт, хоть обосрись
        function blyat($suka): string
        {
            if(!is_null($suka) && !empty($suka) && isset($suka) && strlen($suka) > 0){
                return mb_substr($suka, 0, 1) . '.';
            } else { return ''; }
        }

        // Получаем первую букву из $secondname и $surname, если они не null и не пустые
        $secondnameInitial = '';
        if (!empty($secondname)) {
            $secondnameInitial = blyat($secondname);
        }

        $surnameInitial = '';
        if (!empty($surname)) {
            $surnameInitial = blyat($surname);
        }

        // Формируем строку с инициалами
        $initials = '';

        // Если $firstname не пуст, формируем строку с именем и инициалами
        if (!empty($firstname)) {
            $initials = $firstname . ' ' . $secondnameInitial . ' ' . $surnameInitial;
        }
        // Если $firstname пуст, используем только $secondname и $surname
        else {
            $initials = $secondname . ' ' . $surname;
        }

        DB::table('contragent_persons')
            ->where('id', $item->id)
            ->update(['initials' => $initials]);

        return $item;
    }
}
