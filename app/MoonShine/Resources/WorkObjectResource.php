<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\WorkObject;
use App\MoonShine\Pages\WorkObject\WorkObjectIndexPage;
use App\MoonShine\Pages\WorkObject\WorkObjectFormPage;
use App\MoonShine\Pages\WorkObject\WorkObjectDetailPage;

use MoonShine\Buttons\DeleteButton;
use MoonShine\Buttons\DetailButton;
use MoonShine\Buttons\EditButton;
use MoonShine\Buttons\MassDeleteButton;
use MoonShine\Enums\ClickAction;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<WorkObject>
 */
class WorkObjectResource extends ModelResource
{
    protected string $model = WorkObject::class;

    protected string $title = 'WorkObjects';

    public string $column = 'name';

    protected bool $withPolicy = true;

    public function title(): string
    {
        return __('moonshine::workObject.WorkObject');
    }

    protected ?ClickAction $clickAction = ClickAction::DETAIL;

    public function pages(): array
    {
        return [
            WorkObjectIndexPage::make($this->title()),
            WorkObjectFormPage::make(
                $this->getItemID()
                    ? __('moonshine::ui.edit')
                    : __('moonshine::ui.add')
            ),
            WorkObjectDetailPage::make(isset($this->getItem()->name) ? $this->getItem()->name : __('moonshine::ui.show')),
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

    public function query(): Builder
    {

        if(auth()->user()->moonshine_user_role_id === 2){
            return parent::query();
        } else {
            $userId = auth()->id();

            return parent::query()
                ->where(function ($query) use ($userId) {
                    $query->where('creator', $userId)
                        ->orWhere('performer', $userId);
                })
                ->orWhereHas('members_id', function ($query) use ($userId) {
                    $query->where('moonshine_user_id', $userId);
                });
        }

    }

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

}


