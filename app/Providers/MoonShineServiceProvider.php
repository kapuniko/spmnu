<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Task;
use App\MoonShine\Resources\TaskResource;
use App\MoonShine\Resources\WorkObjectResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

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
                ->icon('heroicons.building-office-2'),
            MenuItem::make('Task', new TaskResource())
                ->icon('heroicons.table-cells')
                ->badge(fn() => (new TaskResource())->query()->count())
                ->translatable('moonshine::task'),
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ) ,
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
