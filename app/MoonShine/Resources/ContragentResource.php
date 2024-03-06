<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contragent;
use App\MoonShine\Pages\Contragent\ContragentIndexPage;
use App\MoonShine\Pages\Contragent\ContragentFormPage;
use App\MoonShine\Pages\Contragent\ContragentDetailPage;

use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Contragent>
 */
class ContragentResource extends ModelResource
{
    protected string $model = Contragent::class;

    protected string $title = 'Contragents';

    public string $column = 'name';

    protected bool $withPolicy = true;

    public function pages(): array
    {
        return [
            ContragentIndexPage::make($this->title()),
            ContragentFormPage::make(
                $this->getItemID()
                    ? __('moonshine::ui.edit')
                    : __('moonshine::ui.add')
            ),
            ContragentDetailPage::make(__('moonshine::ui.show')),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
