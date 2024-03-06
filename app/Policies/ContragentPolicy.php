<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Contragent;
use MoonShine\Models\MoonshineUser;

class ContragentPolicy
{
    use HandlesAuthorization;

    public function viewAny(MoonshineUser $user)
    {
        return true;
    }

    public function view(MoonshineUser $user, Contragent $item)
    {
        return true;
    }

    public function create(MoonshineUser $user)
    {
        return true;
    }

    public function update(MoonshineUser $user, Contragent $item)
    {
        return true;
    }

    public function delete(MoonshineUser $user, Contragent $item)
    {
        return true;
    }

    public function restore(MoonshineUser $user, Contragent $item)
    {
        return true;
    }

    public function forceDelete(MoonshineUser $user, Contragent $item)
    {
        return true;
    }

    public function massDelete(MoonshineUser $user)
    {
        return false;
    }
}
