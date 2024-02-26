<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\MoonShine\Pages\Task\TaskIndexPage;
use App\MoonShine\Pages\Task\TaskFormPage;
use App\MoonShine\Pages\Task\TaskDetailPage;

use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Task>
 */
class TaskResource extends ModelResource
{
    protected string $model = Task::class;

    protected string $title = 'Tasks';

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

    public function rules(Model $item): array
    {
        return [];
    }
}
