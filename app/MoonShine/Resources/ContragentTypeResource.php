<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ContragentType;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

/**
 * @extends ModelResource<ContragentType>
 */
class ContragentTypeResource extends ModelResource
{
    protected string $model = ContragentType::class;

    protected string $title = 'ContragentTypes';

    public string $column = 'name';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('name'),
                Text::make('fullname'),
                Text::make('description')
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
