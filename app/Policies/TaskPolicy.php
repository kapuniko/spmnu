<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Task;
use MoonShine\Models\MoonshineUser;

class TaskPolicy
{
    use HandlesAuthorization;

    public function viewAny(MoonshineUser $user)
    {
        return true;
    }

    public function view(MoonshineUser $user, Task $item)
    {
        return true;
    }

    public function create(MoonshineUser $user)
    {
        return true;
    }

    public function update(MoonshineUser $user, Task $item)
    {
        return $user->id === $item->creator;
    }

    public function delete(MoonshineUser $user, Task $item)
    {
        return $user->id === $item->creator;
    }

    public function restore(MoonshineUser $user, Task $item)
    {
        return true;
    }

    public function forceDelete(MoonshineUser $user, Task $item)
    {
        return true;
    }

    public function massDelete(MoonshineUser $user)
    {
        return false;
    }
}
