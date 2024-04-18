<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\WorkObject;
use MoonShine\Models\MoonshineUser;

class WorkObjectPolicy
{
    use HandlesAuthorization;

    public function viewAny(MoonshineUser $user)
    {
        return true;
    }

    public function view(MoonshineUser $user, WorkObject $item)
    {

        //return $user->moonshine_user_role_id === 1 ||$user->id === $item->creator;
        return $user->moonshine_user_role_id === 2 || $user->moonshine_user_role_id === 1 || $user->id === $item->creator || $user->id === $item->performer || $item->members_id()->where('moonshine_user_id', $user->id)->exists() ;
    }

    public function create(MoonshineUser $user)
    {
        return true;
    }

    public function update(MoonshineUser $user, WorkObject $item)
    {
        return $user->moonshine_user_role_id === 2 || $user->moonshine_user_role_id === 1 || $user->id === $item->creator || $user->id === $item->performer || $item->members_id()->where('moonshine_user_id', $user->id)->exists() ;
    }

    public function delete(MoonshineUser $user, WorkObject $item)
    {
        return $user->id === $item->creator;
    }

    public function restore(MoonshineUser $user, WorkObject $item)
    {
        return $user->moonshine_user_role_id === 1;
    }

    public function forceDelete(MoonshineUser $user, WorkObject $item)
    {
        return $user->moonshine_user_role_id === 1;
    }

    public function massDelete(MoonshineUser $user)
    {
        return false;
    }
}
