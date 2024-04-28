<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\ContragentPersonResource;
use App\MoonShine\Resources\ContragentResource;
use App\MoonShine\Resources\ContragentTypeResource;
use App\MoonShine\Resources\StatusTrackerResource;
use App\MoonShine\Resources\TaskResource;
use App\MoonShine\Resources\TestResource;
use App\MoonShine\Resources\WorkObjectResource;
use MoonShine\Menu\MenuDivider;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuItem::make('WorkObject', new WorkObjectResource())
                ->icon('heroicons.outline.building-office-2')
                ->translatable('moonshine::workObject'),
            MenuItem::make('Task', new TaskResource())
                ->icon('heroicons.outline.table-cells')
                ->badge(fn() => (new TaskResource())->countWorkingItems()->count())
                ->translatable('moonshine::task'),
            MenuItem::make('Contragent', new ContragentResource())
                ->icon('heroicons.outline.identification')
                ->translatable('moonshine::contragent'),
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
                MenuDivider::make(),
                MenuItem::make('ContragentType', new ContragentTypeResource())
                    ->icon('heroicons.identification'),
                MenuItem::make('ContragentPerson', new ContragentPersonResource())
                    ->icon('heroicons.users'),
                MenuDivider::make(),
                MenuItem::make('StatusTracker', new StatusTrackerResource() )
                    ->icon('heroicons.table-cells'),
                MenuDivider::make(),
                MenuItem::make('Test', new TestResource())
                    ->icon('heroicons.sparkles')
            ])->canSee(fn() => auth()->user()->moonshine_user_role_id === 1),

            // MenuItem::make('Documentation', 'https://moonshine-laravel.com')
            //    ->badge(fn() => 'Check'),
        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
