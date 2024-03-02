<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

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

    public function pages(): array
    {
        return [
            WorkObjectIndexPage::make($this->title()),
            WorkObjectFormPage::make(
                $this->getItemID()
                    ? __('moonshine::ui.edit')
                    : __('moonshine::ui.add')
            ),
            WorkObjectDetailPage::make(__('moonshine::ui.show')),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
