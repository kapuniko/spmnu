<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\MoonShine\Pages\Task\TaskIndexPage;
use App\MoonShine\Pages\Task\TaskFormPage;
use App\MoonShine\Pages\Task\TaskDetailPage;
use MoonShine\Fields\DateRange;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Task>
 */
class TaskResource extends ModelResource
{
    protected string $model = Task::class;

    protected string $title = 'Tasks';

    protected bool $withPolicy = true;

    protected bool $saveFilterState = true;

    public function title(): string
    {
        return __('moonshine::task.Task');
    }

    public function pages(): array
    {
        return [
            TaskIndexPage::make($this->title()),
            TaskFormPage::make(
                $this->getItemID()
                    ? __('moonshine::ui.edit')
                    : __('moonshine::ui.add')
            ),
            TaskDetailPage::make(__('moonshine::ui.show')),
        ];
    }

    public function filters(): array
    {
        return[
            Text::make('status'),
            DateRange::make('Дата создания', 'date_created')
        ];
    }

    public function search(): array
    {
        return ['id', 'name'];
    }

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function query(): Builder
    {
        $userId = auth()->id();

        return parent::query()
            ->where(function ($query) use ($userId) {
                $query->where('creator', $userId)
                    ->orWhere('performer', $userId);
            });
    }
    public function rules(Model $item): array
    {
        return [];
    }
}
