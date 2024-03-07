<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\TaskStatus;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\MoonShine\Pages\Task\TaskIndexPage;
use App\MoonShine\Pages\Task\TaskFormPage;
use App\MoonShine\Pages\Task\TaskDetailPage;
use MoonShine\Fields\DateRange;
use MoonShine\Fields\Enum;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Task>
 */
class TaskResource extends ModelResource
{
    protected string $model = Task::class;

    protected string $title = 'Tasks';

    public string $column = 'name';

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
            Enum::make('status')->attach(TaskStatus::class),
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

    // счетчик количества задач в меню
    public function countWorkingItems(): Builder
    {
        return $this->query()
            ->whereIn('status', ['new', 'at work']);
    }

    public function queryTags(): array
    {
        return [
            QueryTag::make(
                'is new', // Tag Title
                fn(Builder $query) => $query->where('status', '=', 'new')
            ),
            QueryTag::make(
                'is at work', // Tag Title
                fn(Builder $query) => $query->where('status', '=', 'at work')
            ),
            QueryTag::make(
                'is postponed', // Tag Title
                fn(Builder $query) => $query->where('status', '=', 'postponed')
            ),
            QueryTag::make(
                'is done', // Tag Title
                fn(Builder $query) => $query->where('status', '=', 'done')
            ),
            QueryTag::make(
                'is canceled', // Tag Title
                fn(Builder $query) => $query->where('status', '=', 'canceled')
            ),
        ];
    }
    public function rules(Model $item): array
    {
        return [];
    }
}
