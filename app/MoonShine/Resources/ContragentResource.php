<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contragent;
use App\MoonShine\Pages\Contragent\ContragentIndexPage;
use App\MoonShine\Pages\Contragent\ContragentFormPage;
use App\MoonShine\Pages\Contragent\ContragentDetailPage;

use MoonShine\Buttons\DeleteButton;
use MoonShine\Buttons\DetailButton;
use MoonShine\Buttons\EditButton;
use MoonShine\Buttons\MassDeleteButton;
use MoonShine\Enums\ClickAction;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Contragent>
 */
class ContragentResource extends ModelResource
{
    protected string $model = Contragent::class;

    protected string $title = 'Contragents';

    public string $column = 'name';

    protected ?ClickAction $clickAction = ClickAction::DETAIL;
    protected bool $withPolicy = true;

    public function title(): string
    {
        return __('moonshine::contragent.Contragent');
    }
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
}
