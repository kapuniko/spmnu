<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\WorkObject;
use App\MoonShine\Pages\WorkObject\WorkObjectIndexPage;
use App\MoonShine\Pages\WorkObject\WorkObjectFormPage;
use App\MoonShine\Pages\WorkObject\WorkObjectDetailPage;

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

    public function rules(Model $item): array
    {
        return [];
    }

    public function query(): Builder
    {
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


