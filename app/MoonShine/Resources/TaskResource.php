<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\TaskStatus;
use App\MoonShine\Pages\HasAktauTime;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\MoonShine\Pages\Task\TaskIndexPage;
use App\MoonShine\Pages\Task\TaskFormPage;
use App\MoonShine\Pages\Task\TaskDetailPage;
use Illuminate\Support\Facades\DB;
use Illuminate\View\ComponentAttributeBag;
use MoonShine\Buttons\DeleteButton;
use MoonShine\Buttons\DetailButton;
use MoonShine\Buttons\EditButton;
use MoonShine\Buttons\MassDeleteButton;
use MoonShine\Enums\ClickAction;
use MoonShine\Fields\DateRange;
use MoonShine\Fields\Enum;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Notifications\MoonShineNotification;
use MoonShine\Resources\ModelResource;
use Closure;

/**
 * @extends ModelResource<Task>
 */
class TaskResource extends ModelResource
{
    use HasAktauTime;

    protected string $model = Task::class;

    protected string $title = 'Tasks';

    public string $column = 'name';

    protected bool $withPolicy = true;

    protected bool $saveFilterState = true;

    protected ?ClickAction $clickAction = ClickAction::DETAIL;

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

    public function filters(): array
    {
        return[
            Enum::make('status')->attach(TaskStatus::class)->multiple(),
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


    public function rules(Model $item): array
    {
        return [];
    }

    protected function afterUpdated(Model $item): Model
    {
        $taskId = $this->getItemID(); // Ваш ID задачи
        $taskName = $item->name;
        $creatorId = $item->creator; // создатель задачи
        $status = $item->status; // Новый статус
        $userId = auth()->id(); // ID пользователя
        $dateTime = $this->AktauTimeToBase(); // Текущее время

        DB::table('status_tracker')->insert([
            'task_id' => $taskId,
            'status' => $status,
            'user_id' => $userId,
            'date_time' => $dateTime,
            // Добавьте другие поля, если необходимо
        ]);

        if($status == 'done'){
            $textMessage = 'Задача: ' . $taskName . ' — выполнена';

            MoonShineNotification::send(
                message: $textMessage,
                // Опционально button
                button: ['link' => 'https://crm.spmnu.kz/crm/resource/task-resource/task-detail-page?resourceItem='.$taskId, 'label' => 'Посмотеть задачу'],
                // Опционально id администраторов (по умолчанию всем)
                ids: [$creatorId],
                // Опционально цвет иконки (purple, pink, blue, green, yellow, red, gray)
                color: 'green'
            );
        };

        return $item;
    }

    protected function afterCreated(Model $item): Model
    {
        $taskId = $item->id; // Ваш ID задачи
        $taskName = $item->name;
        $creatorId = $item->creator; // создатель задачи
        $performerId = $item->performer;

		if($creatorId != $performerId){
            $textMessage = 'У вас новая задача: ' . $taskName;

            MoonShineNotification::send(
                message: $textMessage,
                // Опционально button
                button: ['link' => 'https://crm.spmnu.kz/crm/resource/task-resource/task-detail-page?resourceItem='.$taskId, 'label' => 'Посмотеть'],
                // Опционально id администраторов (по умолчанию всем)
                ids: [$performerId],
                // Опционально цвет иконки (purple, pink, blue, green, yellow, red, gray)
                color: 'purple'
            );
        }

        return $item;
    }

    public function trAttributes(): Closure
    {
        return function (Model $item, int $row, ComponentAttributeBag $attr): ComponentAttributeBag
        {
            if ($item->status === 'done' || $item->status === 'canceled' ) {
                $attr->setAttributes([
                    'class' => 'bgc-gray'
                ]);
            }

            return $attr;
        };
    }
}
